<?php

namespace Drupal\sachlife_social_icon\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Sachlife.com: Social Media Icon section.
 *
 * @Block(
 *   id = "sachlife_social_icon",
 *   admin_label = @Translation("Social Media information for sachlife.com")
 * )
 */
class SocialIconBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        $content = '';


        $content .='<div class="social-icons">';
        $content .='<ul>';
        $content .='<li><a target="_blank" href="https://www.facebook.com" title="Follow us on Facebook"><i class="fa fa-facebook"></i></a></li>';
        $content .='<li><a target="_blank" href="https://twitter.com/" title="Follow us on Twitter"><i class="fa fa-twitter"></i></a></li>';
        $content .='<li><a target="_blank" href="https://www.pinterest.com" title="Follow us on Pinterest"><i class="fa fa-pinterest"></i></a></li>';
        $content .='<li><a target="_blank" href="https://www.instagram.com" title="Follow us on Instagram"><i class="fa fa-instagram"></i></a></li>';
        $content .='<li><a target="_blank" href="mailto:your@email.com" title="Contact Us"><i class="fa fa-envelope"></i></a></li>';
        $content .='</ul>';
        $content .='</div>';
        return array(
            '#type' => 'markup',
            '#markup' => $content,
        );
    }

}