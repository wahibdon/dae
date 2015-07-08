<?php 
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
get_header(); ?>
	<h2><?php echo $term->name; ?> elsewhere on the site</h2>
    <ul class="artistappearances">
    <?php while (have_posts()) : the_post(); ?>       
                <li>
                	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> -  <?php the_time('d M Y'); ?>
                	<div><?php print_r($post)?></div>
                </li>
    <?php endwhile; ?>
    </ul>

<?php get_footer(); ?>
