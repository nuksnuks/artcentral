<?php get_header(); ?>

<section class="indhold">

<div class="news-container">
  <h1><?php single_cat_title();?></h1>
  <?php get_template_part('includes/section', 'nyheder');?>
  <?php previous_posts_link();?><?php next_posts_link();?>
</div>
</section>

<?php get_footer(); ?>
