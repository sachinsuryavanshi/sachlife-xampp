<?php

namespace Drupal\sachlife_portfolio\Controller;

use \Drupal\Core\Controller\ControllerBase;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\taxonomy\Entity\Term;
use Drupal\user\Entity\User;

/**
 * Class SachlifePaintingPageController
 *
 * @package Drupal\sachlife_portfolio\Controller
 */
class SachlifePortfolioPageController extends ControllerBase {

  public function portfolioList() {
    $query = \Drupal::database()->select('node_field_data', 'nfd');
    $query->fields('nfd', ['nid', 'title', 'created', 'uid']);
    $query->condition('type', 'photographs');
    $content = $query->execute()->fetchAllAssoc('nid');

    $contentData = [];
    foreach ($content as $key => $value) {
      $contentData[$key]['author'] = $this->getUserInfo($value->uid);
      $contentData[$key]['title'] = $value->title;
      $contentData[$key]['created'] = $value->created;
      $contentData[$key]['coverPhoto'] = $this->getCoverPhotograph($key);
      $contentData[$key]['imageCount'] = $this->getImageCount($key);
      $contentData[$key]['category'] = $this->getCategory($key);
    }

    $categoryList = $this->getCategoryList();

    //echo '<pre>';print_r($contentData);exit;
    $build = [];
    $build['portfolio'] = [
      '#theme' => 'portfoliothreegrid',
      '#content' => $contentData,
      '#categoryList' => $categoryList,
    ];
    return $build;
  }

  /**
   * @param $uid
   *
   * @return mixed
   */
  private function getUserInfo($uid) {
    $account = User::load($uid);
    $author = $account->get('field_first_name')->value . ' ' . $account->get('field_last_name')->value;
    return $author;
  }

  /**
   * @param $entityID
   *
   * @return mixed
   */
  private function getCoverPhotograph($entityID) {
    $query = \Drupal::database()->select('node__field_photographs', 'nfb');
    $query->fields('nfb', ['field_photographs_target_id']);
    $query->condition('entity_id', $entityID);
    $query->range(0, 1);
    $imageID = $query->execute()->fetchField();
    $imageSrc = File::load($imageID)->getFileUri();
    return $imageSrc;
  }

  /**
   * @param $entityID
   *
   * @return mixed
   */
  private function getImageCount($entityID) {
    $query = \Drupal::database()->select('node__field_photographs', 'nfp');
    $query->addExpression('COUNT(*)');
    $query->condition('entity_id', $entityID);
    $count = $query->execute()->fetchField();
    return $count;
  }

  /**
   * @param $nid
   *
   * @return string
   */
  private function getCategory($nid) {
    $categoryTerm = '';
    $termArray = [];
    $query = \Drupal::database()->select('node__field_category_section', 'nfc');
    $query->leftJoin('taxonomy_term_field_data', 'ttf', 'ttf.tid = nfc.field_category_section_target_id');
    $query->fields('nfc', ['field_category_section_target_id']);
    $query->addField('ttf', 'name');
    $query->condition('nfc.entity_id', $nid);
    $termContent = $query->execute()
      ->fetchAllAssoc('field_category_section_target_id');
    if (is_array($termContent) || is_object($termContent)) {
      foreach ($termContent as $keyTerm => $valueTerm) {
        $termArray[] = str_replace(' ', '-', $valueTerm->name);
      }
      $categoryTerm = implode(' ', $termArray);
    }
    return $categoryTerm;
  }

  /**
   * @return array
   */
  private function getCategoryList() {
    $termArray = [];
    $query = \Drupal::database()->select('taxonomy_term_field_data', 'ttf');
    $query->fields('ttf', ['tid', 'name']);
    $query->condition('vid', 'category');
    $termContent = $query->execute()->fetchAllAssoc('tid');
    if (is_array($termContent) || is_object($termContent)) {
      foreach ($termContent as $key => $value) {
        $termArray[$key] = $value->name;
      }
    }
    return $termArray;
  }

  /**
   * @param $nid
   * Portfolio Methods return Array object $content
   * portfolioPage Template render HTML for Portfolio page
   * $nid is node id for Portfolio
   * @return array
   */
  public function portfolio($nid) {
    $contentNode = Node::load($nid);
    $content['title'] = $contentNode->getTitle();
    $content['author'] = $this->getUserInfo($contentNode->get('uid')
      ->getValue()[0]['target_id']);
    $content['authorAvatar'] = $this->getUserAvatar($contentNode->get('uid')
      ->getValue()[0]['target_id']);
    $content['description'] = $contentNode->body->value;
    $content['category'] = $this->getCategoryName($contentNode->get('field_category_section')
      ->getValue());
    $content['photographs'] = $this->getPhotographs($contentNode->get('field_photographs')
      ->getValue());
    $content['photographsTags'] = $this->getCategoryName($contentNode->get('field_photography_tags')
      ->getValue());
    $content['nodePrevNavigation'] = $this->nodePrevNavigation($nid);
    $content['nodeNextNavigation'] = $this->nodeNextNavigation($nid);

    //echo '<pre>';
    //print_r($content);
    //exit;

    $build = [];
    $build['portfolioPage'] = [
      '#theme' => 'portfolioPage',
      '#content' => $content,
    ];
    return $build;
  }

  /**
   * @param $uid
   *
   * @return mixed
   */
  private function getUserAvatar($uid) {
    $account = User::load($uid);
    $avatar = $account->get('user_picture')->target_id;
    return File::load($avatar)->getFileUri();
  }

  /**
   * @param $getValue
   *
   * @return array
   */
  private function getCategoryName($getValue) {
    $taxonomyData = [];
    if (is_object($getValue) or is_array($getValue)) {
      foreach ($getValue as $key) {
        $taxonomyData[] = Term::load($key['target_id'])->getName();
      }
    }
    return $taxonomyData;
  }

  /**
   * @param $getValue
   *
   * @return array
   */
  private function getPhotographs($getValue) {
    $photographs = [];
    if (is_array($getValue) || is_object($getValue)) {
      foreach ($getValue as $key => $value) {
        $photographs[$key]['title'] = $value['title'];
        $photographs[$key]['alt'] = $value['alt'];
        $photographs[$key]['target_id'] = File::load($value['target_id'])
          ->getFileUri();
      }
    }
    return $photographs;
  }

  /**
   * @param $bid
   *
   * @return mixed
   */
  private function nodePrevNavigation($nid) {
    $query1 = \Drupal::database()->select('node_field_data', 'nfd');
    $query1->fields('nfd', ['nid', 'title']);
    $query1->condition('type', 'photographs');
    $query1->condition('nid', $nid, '<');
    $query1->orderBy('nid', 'DESC');
    $query1->range(0, 1);
    $query = $query1->execute()->fetchAll();
    return $query;
  }

  /**
   * @param $bid
   *
   * @return mixed
   */
  private function nodeNextNavigation($nid) {
    $query1 = \Drupal::database()->select('node_field_data', 'nfd');
    $query1->fields('nfd', ['nid', 'title']);
    $query1->condition('type', 'photographs');
    $query1->condition('nid', $nid, '>');
    $query1->orderBy('nid', 'ASC');
    $query1->range(0, 1);
    $query = $query1->execute()->fetchAll();
    return $query;
  }


}
