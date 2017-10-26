<?php

namespace Drupal\sachlife_album\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\file\Entity\File;
use Drupal\field\Entity\FieldConfig;

/**
 * Provides a 'Sachlife Content: Portfolio Header Image Section.
 *
 * @Block(
 *   id = "albumHeaderImage",
 *   admin_label = @Translation("Album Header Image")
 * )
 */
class HeaderImageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $field_info = FieldConfig::loadByName('node', 'photo_album', 'field_photographs');
    $image_uuid = $field_info->getSetting('default_image')['uuid'];
    $image = \Drupal::service('entity.repository')->loadEntityByUuid('file', $image_uuid);
    $imageId = $image->getFileUri();

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