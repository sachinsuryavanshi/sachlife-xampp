<?php

namespace Drupal\sachlife_paintings\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Sachlife Content: Portfolio Header Text Section.
 *
 * @Block(
 *   id = "paintingHeaderText",
 *   admin_label = @Translation("Painting Header Text")
 * )
 */
class HeaderTextBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $parameters = \Drupal::routeMatch()->getParameters();
    $pid = $parameters->get('nid');
    if ($pid) {
      $query = \Drupal::database()->select('node_field_data', 'nfd');
      $query->fields('nfd', ['title']);
      $query->condition('nid', $pid);
      $query->range(0, 1);
      $title = $query->execute()->fetchField();
    }
    else {
      $title = 'Paintings';
    }

    $build = [];
    $build['#cache']['max-age'] = 0;
    $build['portfolioPost'] = [
      '#type' => 'markup',
      '#markup' => $title,
    ];
    return $build;
  }
}