<section class="myprofile"></section>
<h2>PROFILE</h2>
<figure>
	<img src="<?php echo esc_url(get_theme_file_uri('profile.jpg')); ?>" alt="">
</figure>
<strong>
	<?php the_author_meta('display_name'); ?>
</strong>
<p>
	<?php the_author_meta('discription'); ?>
</p>

<?php if (is_active_sidebar('sidebar-1')): ?>
<?php dynamic_sidebar('sidebar-1'); ?>
<?php endif; ?>