<?php

namespace Drupal\sachlife_content\Controller;

use Drupal\Core\Controller\ControllerBase;

use Drupal\Core\Url;
use Drupal\file\Entity\File;


/**
 * Class SachlifeHomePageController
 *
 * @package Drupal\sachlife_content\Controller
 */
class SachlifeHomePageController extends ControllerBase {

  /**
   * @return array
   */


  public function home() {
    $contentData = [];
    $query = \Drupal::database()->select('node_field_data', 'nfd');
    $query->fields('nfd', ['nid', 'title']);
    $query->addField('nd', 'body_value');
    $query->addField('hpi', 'field_home_page_image_target_id');
    $query->addField('hpl', 'field_home_page_link_value');
    $query->addField('hpt', 'field_home_page_link_text_value');
    $query->join('node__body', 'nd', 'nfd.nid = nd.entity_id');
    $query->join('node__field_home_page_image', 'hpi', 'nfd.nid = hpi.entity_id');
    $query->join('node__field_home_page_link', 'hpl', 'nfd.nid = hpl.entity_id');
    $query->join('node__field_home_page_link_text', 'hpt', 'nfd.nid = hpt.entity_id');
    $query->range(0, 1);
    $query->condition('nfd.type', 'home_page', 'IN');
    $content = $query->execute()->fetchAllAssoc('nid');
    $contentData['title'] = $content[1]->title;
    $contentData['description'] = $content[1]->body_value;
    $contentData['backgroundImage'] = File::load($content[1]->field_home_page_image_target_id)
      ->getFileUri();
    $contentData['url'] = $content[1]->field_home_page_link_value;
    $contentData['urlText'] = $content[1]->field_home_page_link_text_value;

    /**
     *
     */
    $build = [];
    $build['homepage'] = [
      '#theme' => 'homepage',
      '#content' => $contentData,
    ];
    return $build;
  }
}