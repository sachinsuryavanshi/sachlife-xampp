<?php

namespace Drupal\sachlife_content\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\taxonomy\Entity\Term;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ArticlePageController
 *
 * @package Drupal\sachlife_content\Controller
 */
class ArticlePageController extends ControllerBase {

  /**
   * @return array
   */
  public function articleList() {
    $query = \Drupal::database()->select('node_field_data', 'nfd');
    $query->innerJoin('node__body', 'nb', 'nfd.nid = nb.entity_id');
    $query->leftJoin('node__field_blog_header_image', 'nbh', 'nfd.nid = nbh.entity_id');
    $query->fields('nfd', ['nid', 'title', 'uid', 'created']);
    $query->addField('nb', 'body_value');
    $query->addField('nbh', 'field_blog_header_image_target_id');
    $query->condition('type', 'blogs');
    $query->orderBy('created', 'DESC');
    $query->range(0, 5);
    $content = $query->execute()->fetchAllAssoc('nid');

    $contentData = [];
    if (is_array($content) || is_object($content)) {
      foreach ($content as $key => $value) {
        $contentData[$key]['author'] = $this->getUserInfo($value->uid);
        $contentData[$key]['title'] = $value->title;
        $contentData[$key]['description'] = $value->body_value;
        $contentData[$key]['created'] = $value->created;
        $contentData[$key]['headerImage'] = File::load($value->field_blog_header_image_target_id)
          ->getFileUri();
      }
    }

    $build = [];
    $build['blogList'] = [
      '#theme' => 'blogList',
      '#content' => $contentData,
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

  private function getUserAvatar($uid) {
    $account = User::load($uid);
    $avatar = $account->get('user_picture')->target_id;
    return File::load($avatar)->getFileUri();
  }

  /**
   * @param $entity_id
   *
   * @return array
   */
  private function getBlogsTaxonomy($entity_id) {
    $query = \Drupal::database()->select('node__field_blog_tags', 'nfb');
    $query->fields('nfb', ['field_blog_tags_target_id']);
    $query->orderBy('delta', 'ASC');
    $query->condition('entity_id', $entity_id);
    $taxonomy = $query->execute()->fetchAllAssoc('field_blog_tags_target_id');
    $taxonomyData = [];
    if (is_object($taxonomy) || is_array($taxonomy)) {
      foreach ($taxonomy as $key => $value) {
        $taxonomyData[$key] = Term::load($value->field_blog_tags_target_id)
          ->getName();
      }
    }
    return $taxonomyData;
  }

  private function getBlogsParagraph($entity_id) {
    $query = \Drupal::database()->select('node__field_blog_sub_section', 'nbs');
    $query->leftJoin('paragraph__field_blog_section_image', 'pfb', 'nbs.field_blog_sub_section_target_id = pfb.entity_id');
    $query->leftJoin('paragraph__field_blog_description', 'pfd', 'nbs.field_blog_sub_section_target_id = pfd.entity_id');
    $query->fields('nbs', ['entity_id', 'field_blog_sub_section_target_id	']);
    $query->addField('pfb', 'field_blog_section_image_target_id');
    $query->addField('pfd', '	field_blog_description_value');
    $query->condition('nbs.entity_id', $entity_id);
    $paragraph = $query->execute()
      ->fetchAllAssoc('field_blog_sub_section_target_id');
    /**
     * Generate Paragraph array
     * Return
     */
    $paragraphData = [];
    if (is_array($paragraph) || is_object($paragraph)) {
      foreach ($paragraph as $key => $value) {
        $paragraphData[$key]['blogImage'] = File::load($value->field_blog_section_image_target_id)
          ->getFileUri();
        $paragraphData[$key]['blogDescription'] = $value->field_blog_description_value;
      }
    }
    return $paragraphData;
  }

  /**
   * @param $bid
   *
   * @return mixed
   */
  private function nodePrevNavigation($bid) {
    $query1 = \Drupal::database()->select('node_field_data', 'nfd');
    $query1->fields('nfd', ['nid', 'title']);
    $query1->condition('type', 'blogs');
    $query1->condition('nid', $bid, '<');
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
  private function nodeNextNavigation($bid) {
    $query1 = \Drupal::database()->select('node_field_data', 'nfd');
    $query1->fields('nfd', ['nid', 'title']);
    $query1->condition('type', 'blogs');
    $query1->condition('nid', $bid, '>');
    $query1->orderBy('nid', 'ASC');
    $query1->range(0, 1);
    $query = $query1->execute()->fetchAll();
    return $query;
  }

  /**
   * @param $nid
   *
   * @return array
   */
  public function article($nid) {
    $query = \Drupal::database()->select('node_field_data', 'nfd');
    $query->innerJoin('node__body', 'nb', 'nfd.nid = nb.entity_id');
    $query->leftJoin('node__field_blog_header_image', 'nbh', 'nfd.nid = nbh.entity_id');
    $query->leftJoin('node__field_blog_sub_section', 'nbs', 'nfd.nid = nbs.entity_id');
    $query->fields('nfd', ['nid', 'title', 'uid', 'created']);
    $query->addField('nb', 'body_value');
    $query->addField('nbh', 'field_blog_header_image_target_id');
    $query->addField('nbs', 'field_blog_sub_section_target_id');
    $query->condition('type', 'blogs');
    $query->condition('nid', $nid);
    $content = $query->execute()->fetchAllAssoc('nid');
    $contentData = [];
    if (is_array($content) || is_object($content)) {
      foreach ($content as $key => $value) {
        $contentData[$key]['author'] = $this->getUserInfo($value->uid);
        $contentData[$key]['avatar'] = $this->getUserAvatar($value->uid);
        $contentData[$key]['title'] = $value->title;
        $contentData[$key]['description'] = $value->body_value;
        $contentData[$key]['headerImage'] = File::load($value->field_blog_header_image_target_id)
          ->getFileUri();
        $contentData[$key]['term'] = $this->getBlogsTaxonomy($key);
        $contentData[$key]['paragraph'] = $this->getBlogsParagraph($key);
        $contentData[$key]['nodePrevNavigation'] = $this->nodePrevNavigation($nid);
        $contentData[$key]['nodeNextNavigation'] = $this->nodeNextNavigation($nid);
      }
    }
    //echo '<pre>'; print_r($contentData);exit;

    $build = [];
    $build['blogPost'] = [
      '#theme' => 'blogPost',
      '#content' => $contentData,
    ];
    return $build;
  }
}