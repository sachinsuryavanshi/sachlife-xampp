<?php

namespace Drupal\sachlife_portfolio\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\file\Entity\File;
use Drupal\field\Entity\FieldConfig;

/**
 * Provides a 'Sachlife Content: Portfolio Header Image Section.
 *
 * @Block(
 *   id = "portfolioHeaderImage",
 *   admin_label = @Translation("Portfolio Header Image")
 * )
 */
class HeaderImageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $parameters = \Drupal::routeMatch()->getParameters();
    $pid = $parameters->get('nid');
    if ($pid) {
      $query = \Drupal::database()
        ->select('node__field_photographs', 'nfp');
      $query->fields('nfp', ['field_photographs_target_id']);
      $query->condition('entity_id', $pid);
      $query->range(0, 1);
      $imageId = File::load($query->execute()->fetchField())->getFileUri();
    }
    else {
      $field_info = FieldConfig::loadByName('node', 'photographs', 'field_photographs');
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