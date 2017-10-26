<?php

namespace Drupal\sachlife_content\Controller;

use Drupal\Core\Controller\ControllerBase;


/**
 * Class SachlifeAboutUsPageController
 *
 * @package Drupal\sachlife_content\Controller
 */
class SachlifeAboutMePageController extends ControllerBase {

  /**
   * @return array
   */

  public function aboutme() {
    $query = \Drupal::database()->select('node_field_data', 'nfd');
    $query->fields('nfd', ['nid', 'title']);
    $query->addField('nb', 'body_value');
    $query->addField('nfi', 'field_interest_value');
    $query->addField('ami', 'field_about_me_header_image_target_id');
    $query->addField('amp', 'field_about_me_user_profile_target_id');
    $query->join('node__body', 'nb', 'nfd.nid = nb.entity_id');
    $query->join('node__field_interest', 'nfi', 'nfd.nid = nfi.entity_id');
    $query->join('node__field_about_me_header_image', 'ami', 'nfd.nid = ami.entity_id');
    $query->join('node__field_about_me_user_profile', 'amp', 'nfd.nid = amp.entity_id');
    $query->condition('type', 'about_me');
    $contentData = $query->execute()->fetchAllAssoc('nid');

    foreach ($contentData as $key => $value) {
      $content[$key]['title'] = $value->title;
      $content[$key]['description'] = $value->body_value;
      $content[$key]['interest'] = $value->field_interest_value;
      $content[$key]['header_img'] = $this->getUri($value->field_about_me_header_image_target_id);
      $content[$key]['profile_img'] = $this->getUri($value->field_about_me_user_profile_target_id);
      $querySocial = \Drupal::database()
        ->select('node__field_about_me_social_links', 'fsl');
      $querySocial->fields('fsl', ['field_about_me_social_links_target_id']);
      $querySocial->addField('fsc', 'field_social_link_class_value');
      $querySocial->addField('fst', 'field_social_url_title_value');
      $querySocial->addField('pfs', 'field_social_url_uri');
      $querySocial->join('paragraph__field_social_url_title', 'fst', 'fsl.field_about_me_social_links_target_id = fst.entity_id');
      $querySocial->join('paragraph__field_social_link_class', 'fsc', 'fsl.field_about_me_social_links_target_id = fsc.entity_id');
      $querySocial->join('paragraph__field_social_url', 'pfs', 'fsl.field_about_me_social_links_target_id = pfs.entity_id');
      $querySocial->condition('fsl.entity_id', $key);
      $contentSocial = $querySocial->execute()
        ->fetchAllAssoc('field_about_me_social_links_target_id');
      foreach ($contentSocial as $keySocial => $valueSocial) {
        $content[$key]['social'][$keySocial]['title'] = $valueSocial->field_social_url_title_value;
        $content[$key]['social'][$keySocial]['linkClass'] = $valueSocial->field_social_link_class_value;
        $content[$key]['social'][$keySocial]['link'] = $valueSocial->field_social_url_uri;
      }

    }
    /**
     *
     */
    $build = [];
    $build['aboutme'] = [
      '#theme' => 'aboutme',
      '#content' => $content,
    ];
    return $build;
  }

  private function getUri($ID) {
    $query = \Drupal::database()->select('file_managed', 'fm');
    $query->addField('fm', 'uri');
    $query->condition('fm.fid', $ID);
    $query->range(0, 1);
    return $imagePath = $query->execute()->fetchField();
  }
}