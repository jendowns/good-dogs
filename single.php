<?php get_header(); ?>

<nav class="fade">
	<ul>
		<li><a href="http://jen.li/csd"><i class="icon-chevron-left"></i> Back to Home</a></li>
	</ul>
	<a class="button" href="mailto:hello@jendowns.com">Say Hi! <i class="icon-paperplane"></i></a>
</nav>

<header>
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<h3><?php echo get_the_date("F j, Y"); ?></h3>
	</div>
</header>

<section id="luna">
	<div class="container">
		<?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>