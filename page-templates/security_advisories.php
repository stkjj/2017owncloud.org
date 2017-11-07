<?php
/**
 * Template Name: Security Advisories
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<!-- Get the news -->
<?php get_template_part('template-parts/security_advisories'); ?>
