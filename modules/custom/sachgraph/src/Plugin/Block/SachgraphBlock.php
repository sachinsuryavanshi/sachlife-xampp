<?php

namespace Drupal\sachgraph\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Sachgraph: sidebar section.
 *
 * @Block(
 *   id = "sachgraph_sidebar",
 *   admin_label = @Translation("Sachgraph: Side bar section")
 * )
 */
class SachgraphBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
      $content = array();
      $build = [];
      $build['#cache']['max-age'] = 0;
      $build['sideBar'] = [
        '#theme' => 'sidebar',
        '#content' => $content,
      ];
      return $build;
    }

}
