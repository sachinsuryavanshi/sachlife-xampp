<?php

namespace Drupal\sachlife_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use \Drupal\Core\Routing;
use \Drupal\File\Entity;
use Drupal\file\Entity\File;
use \Drupal\Core\Asset;
use Drupal\field\Entity\FieldConfig;

/**
 * Provides a 'Sachlife Content: Blog Header Image Section.
 *
 * @Block(
 *   id = "blogHeaderImage",
 *   admin_label = @Translation("Blog Header Image")
 * )
 */
class HeaderImageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $parameters = \Drupal::routeMatch()->getParameters();
    $bid = $parameters->get('nid');
    if ($bid) {
      $query = \Drupal::database()
        ->select('node__field_blog_header_image', 'nbh');
      $query->fields('nbh', ['field_blog_header_image_target_id']);
      $query->condition('entity_id', $bid);
      $query->range(0, 1);
      $imageId = File::load($query->execute()->fetchField())->getFileUri();
    }
    else {
      $field_info = FieldConfig::loadByName('node', 'blogs', 'field_blog_header_image');
      $image_uuid = $field_info->getSetting('default_image')['uuid'];
      $image = \Drupal::service('entity.repository')->loadEntityByUuid('file', $image_uuid);
      $imageId = $image->getFileUri();
    }
    $imageSrc = file_create_url($imageId);
    $build = [];
    $build['#cache']['max-age'] = 0;
    $build['headerimage'] = [
      '#theme' => 'headerimage',
      '#content' => $imageSrc,
    ];
    return $build;
  }

}