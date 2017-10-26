<?php

namespace Drupal\sachlife_album\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Sachlife Content: Portfolio Header Text Section.
 *
 * @Block(
 *   id = "albumHeaderText",
 *   admin_label = @Translation("Album Header Text")
 * )
 */
class HeaderTextBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $title = 'Album';
    $build = [];
    $build['#cache']['max-age'] = 0;
    $build['portfolioPost'] = [
      '#type' => 'markup',
      '#markup' => $title,
    ];
    return $build;
  }
}