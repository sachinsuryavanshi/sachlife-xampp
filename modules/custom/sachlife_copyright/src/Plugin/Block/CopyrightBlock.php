<?php

namespace Drupal\sachlife_copyright\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Sachlife.com: Copyright section.
 *
 * @Block(
 *   id = "sachlife_copyright",
 *   admin_label = @Translation("Copyrights information for sachlife.com")
 * )
 */
class CopyrightBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
      $content = '';
      $content .='<div class="copyright">';
      $content .='&copy; sachlife.com / All rights reserved';
      $content .='</div>';
      return array(
        '#type' => 'markup',
        '#markup' => $content,
      );
    }

}
