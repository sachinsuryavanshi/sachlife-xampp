<?php

namespace Drupal\sachlife_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use \Drupal\Core\Routing;

/**
 * Provides a 'Sachlife Content: Blog Recent Posts Section.
 *
 * @Block(
 *   id = "blogRecentPosts",
 *   admin_label = @Translation("Blog Recent Posts")
 * )
 */
class RecentPostsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $parameters = \Drupal::routeMatch()->getParameters();
    $bid = $parameters->get('nid');

    $query = \Drupal::database()->select('node_field_data', 'nfd');
    $query->join('user__field_first_name', 'uff', 'nfd.uid = uff.entity_id');
    $query->join('user__field_last_name', 'ufl', 'nfd.uid = ufl.entity_id');
    $query->fields('nfd', ['nid', 'title', 'created', 'uid']);
    $query->addField('uff', 'field_first_name_value', 'firstName');
    $query->addField('ufl', 'field_last_name_value', 'lastName');
    if ($bid) {
      $query->condition('nid', $bid, '<>');
    }
    $query->condition('type', 'blogs');
    $query->range(0, 5);
    $content = $query->execute()->fetchAllAssoc('nid');

    $build = [];
    $build['#cache']['max-age'] = 0;
    $build['recentposts'] = [
      '#theme' => 'recentposts',
      '#content' => $content,
    ];
    return $build;
  }

}