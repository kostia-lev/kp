<?php
/**
 * @file
 * Default theme implementation to wrap featured_content blocks.
 *
 * Available variables:
 * - $block_classes: A string containing the CSS classes for the DIV tag.
 * - $block_classes_array: An array containing each of the CSS classes.
 * - $settings: An array of the block's settings. Includes type and block data.
 * -- some example data:
 * -- $block_settings['header']
 * -- $block_settings['footer']
 * -- $block_settings['links']
 * -- $block_settings['full_nodes']
 * -- $block_settings['more-link']
 * -- $block_settings['rss-link']
 * -- $block_settings['style']
 *
 * @see template_preprocess_featured_content_block()
 * @see theme_featured_content_block()
 */
?>

<!--#slideshow-->
<div id="slideshow">

  <!--slides-->
  <div class="slides">
    <?php if(false): ?>
      <!--slider-item-->
      <div class="slider-item">
        <div class="slider-item-image"><img src="<?php print base_path() . drupal_get_path('theme', 'corkedscrewer') ;?>/images/local/slider-img1.png"/></div>
        <div class="slider-item-title">Corked Screwer</div>
        <div class="slider-item-body">Unique resource for wine lovers</div>
      </div>
      <!--EOF:slider-item-->

      <!--slider-item-->
      <div class="slider-item">
        <div class="slider-item-image"><img src="<?php print base_path() . drupal_get_path('theme', 'corkedscrewer') ;?>/images/local/slider-img1.png"/></div>
        <div class="slider-item-title light">Wine Lovers </div>
        <div class="slider-item-body">Monaco restaurants</div>
      </div>
      <!--EOF:slider-item-->

      <!--slider-item-->
      <div class="slider-item">
        <div class="slider-item-image"><img src="<?php print base_path() . drupal_get_path('theme', 'corkedscrewer') ;?>/images/local/slider-img1.png"/></div>
        <div class="slider-item-title light">Best Blog</div>
        <div class="slider-item-body">Best wine ideas</div>
      </div>
      <!--EOF:slider-item-->

      <!--slider-item-->
      <div class="slider-item">
        <div class="slider-item-image"><img src="<?php print base_path() . drupal_get_path('theme', 'corkedscrewer') ;?>/images/local/slider-img1.png"/></div>
        <div class="slider-item-title">Wine Lovers </div>
        <div class="slider-item-body">Monaco restaurants</div>
      </div>
      <!--EOF:slider-item-->
    <?php endif;?>
    <!--slider-item-->

  <?php if (! empty($block_settings['full_nodes'])): ?>
      <?php $node_views = $block_settings['full_nodes']; ?>
      <?php foreach ($node_views as $node_view): ?>
      <!--slider-item-->
      <div class="slider-item">
        <!--div class="slider-item-image">
          <img src="<?php print base_path() . drupal_get_path('theme', 'corkedscrewer') ;?>/images/local/slider-img1.png"/>
        </div-->
        <!--div class="slider-item-title">Corked Screwer</div-->
        <!--div class="slider-item-body"><br/></div-->
        <?php print $node_view; ?>
      </div>
      <!--EOF:slider-item-->
      <?php endforeach; ?>
<?php endif; ?>

<!--EOF:slider-item-->
</div>
<!--EOF:slides-->

<!--slide-control-->
<div class="slide-control">
  <div id="prev" href="#"><span class="websymbols"><</span></div>
  <div id="next" href="#"><span class="websymbols">></span></div>
</div>
<!--EOF:slide-control-->

<!--#slide-nav-->
<ul id="slide-nav">
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
  <li><a href="#"></a></li>
</ul>
<!--EOF:#slide-nav-->

</div>
<!--EOF:#slideshow-->