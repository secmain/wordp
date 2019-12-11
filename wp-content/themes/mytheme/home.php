
<?php get_header(); ?>

<main class="mycontainer">
	<div class="myposthead">
		<h1>最新情報</h1>
		<p>PERCENT</p>
	</div>

<div class="mypostlist">
<?php
	if (have_posts()): while (have_posts()): the_post();
?>
	
<a href="<?php the_permalink(); ?>">
<article <?php post_class(); ?>>

<?php if(has_post_thumbnail()): ?>
	<figure>
		<?php the_post_thumbnail(); ?>
	</figure>
<?php endif; ?>

<h2><?php the_title(); ?></h2>

</article>
</a>

<?php endwhile; endif; ?>
</div>

<?php the_posts_pagination(); ?>

</main>

<?php get_footer(); ?>
