<?php

namespace Drupal\sachlife_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use \Drupal\Core\Routing;

/**
 * Provides a 'Sachlife Content: Blog Header Text Section.
 *
 * @Block(
 *   id = "blogHeaderText",
 *   admin_label = @Translation("Blog Header Text")
 * )
 */
class HeaderTextBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $parameters = \Drupal::routeMatch()->getParameters();
    $bid = $parameters->get('nid');
    if($bid) {
      $query = \Drupal::database()->select('node_field_data', 'nfd');
      $query->fields('nfd', ['title']);
      $query->condition('nid', $bid);
      $query->range(0, 1);
      $title = $query->execute()->fetchField();
    }else{
      $title = 'articles';
    }

    $build = [];
    $build['#cache']['max-age'] = 0;
    $build['blogPost'] = [
      '#type' => 'markup',
      '#markup' => $title,
    ];
    return $build;
  }

}