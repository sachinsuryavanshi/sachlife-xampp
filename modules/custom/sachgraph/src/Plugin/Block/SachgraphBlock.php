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
      return array(
        '#type' => 'markup',
        '#markup' => '<div class="nav-inner">

				<!-- Menu header -->
				<div class="menu-header">SachGraph</div>

				<!-- Begin nav content box -->
				<div class="cd-content-box margin-top-20">
					<form id="cd-search-form">
						<div class="form-group">
						<input type="text" class="form-control" id="cd-search" name="search" placeholder="Search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<!-- End nav content box -->

				<!-- Begin nav links 
				===================== -->
				<ul class="cd-navigation">

					<li><a class="link" href="#">LOREM</a></li>
					<li><a class="link" href="#">LOREM</a></li>
					<li><a class="link" href="#">LOREM</a></li>
					<li><a class="link" href="#">LOREM</a></li>
					<li class="cd-menu-separator"></li>

				</ul>
				<!-- End nav links -->

				<!-- Begin nav content box -->
				<div class="cd-content-box">

					<h2 class="cd-menu-heading">Instagram:</h2>
					
					<ul class="thumb-list col-3 gutter-3">
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-1.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-2.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-3.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-4.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-5.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-6.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-7.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-8.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(themes/custom/sachlife/assets/img/album-list/small/img-9.jpg);"></a></li>
					</ul>
					<!-- End thumbnail list -->

				</div>
				<!-- End nav content box -->
			</div>',
      );
    }

}
