<?php get_header(); ?>

<!-- nav for homepage only -->
<nav class="nav--fade">
	<ul>
		<li><a href="#luna">Luna <span class="hidden--medium">the Aussie</span></a></li>
		<li><a href="#ash">Ash <span class="hidden--medium">the Corgi</span></a></li>
		<li><a href="#dailydog">Daily Dog</a></li>
	</ul>
	<a class="button" href="mailto:hello@jendowns.com">Say Hi! <i class="icon-paperplane"></i></a>
</nav>

<!-- header for homepage only -->
<header>
	<div class="container">
		<div class="flex-grid">
			<h1 class="center-vertically">Luna<br>&amp; Ash</h1>
			<div class="wrapper--img">
				<!-- When an image is simply decorative (like the sparkle emoji used below), you can leave a blank alt attribute. Source: http://a11yproject.com/posts/alt-text/ -->
				<img class="hidden--medium img--sparkle" src="<?php echo get_template_directory_uri(); ?>/images/sparkle.png" width="90" height="90" alt="">
				<img class="hidden--medium img--sparkle" src="<?php echo get_template_directory_uri(); ?>/images/sparkle.png" width="40" height="40" alt="">
				<img class="hidden--medium img--sparkle" src="<?php echo get_template_directory_uri(); ?>/images/sparkle.png" width="50" height="50" alt="">
				<img class="hidden--medium img--sparkle" src="<?php echo get_template_directory_uri(); ?>/images/sparkle.png" width="70" height="70" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/cover.jpg" alt="Luna and Ash sitting next to each other.">
			</div>
		</div>
	</div>
</header>

<section id="luna">
	<div class="container">
		<div class="flex-grid">
			<div class="grid-item--sm center-vertically">
				<img class="img--intro" src="<?php echo get_template_directory_uri(); ?>/images/luna-intro.png" alt="Luna the dog">
			</div>
			<div class="grid-item--lg center-vertically">
				<h2>Luna</h2>
				<h3>a.k.a. "Porkchop"</h3>
				<p>
					Luna is a goofy girl. She loves her family, food, and muddy water (in that order). She's distrusting of strangers, but once she gets to know someone, she's the most loyal and loving pup. 
				</p>
			</div>
		</div>
	</div>
	<div class="flex-grid flex-grid--fluid">
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/luna-2.jpg" alt="Luna running through a creek at a dog park.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					Here, Luna just made friends at the dog park &amp; she's absolutely ecstatic.
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/luna-3.jpg" alt="Luna standing in a creek at a dog park.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					Luna in her element.
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/luna-5.jpg" alt="Luna sitting in front of the camera.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					A close up!
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/luna-1.jpg" alt="Luna looking nervous because she thought she heard a vehicle outside.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					Luna thought she heard the UPS truck drive by. 
				</div>
			</div>
		</div>
		<div class="grid-item--lg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/luna-4.jpg" alt="Luna running through a field at the dog park.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					Luna running through a field of blue blonnet flowers.
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 class="center">Luna is an Australian Shepherd mix</h2>
		<h3 class="center">Here are some things you might not know about Aussie Sheps...</h3>
		<div class="carousel flex-grid">
			<div class="carousel__controls center-vertically hidden--mobile">
				<a class="button--prev button">
					<span class="screen-reader">Previous</span> <i class="icon-chevron-left" aria-hidden="true"></i>
				</a>
			</div>
			<div class="carousel__slides">
				<ul>
			    <li class="carousel__slide center-vertically active">
			    	<div>
				    	<strong>Fact 1 of 3:</strong>
				    	<br>
				    	Australian Shepherds are <strong>not</strong> from Australia! The breed originated on ranches in the Midwestern/Western United States.
				    	<br>
				    	<small><a href="https://en.wikipedia.org/wiki/Australian_Shepherd" target="_blank">Source: Wikipedia</a></small>
				    </div>
			    </li>
			    <li class="carousel__slide center-vertically">
			    	<div>
				    	<strong>Fact 2 of 3:</strong>
				    	<br>
				    	Many Australian Shepherds are naturally born with short "bobbed" tails, so that's where Luna gets hers.
				    </div>
			    </li>
			    <li class="carousel__slide center-vertically">
			    	<div>
				    	<strong>Fact 3 of 3:</strong>
				    	<br>
				    	Luna is a mix, so her black coloration is not typical for an Australian Shepherd. Most Australian Shepherds are black with white bellies, red with white bellies, red merle, or blue merle.
				    </div>
			    </li>
				</ul>
			</div>
			<div class="carousel__controls center-vertically hidden--mobile">
				<a class="button--next button">
					<span class="screen-reader">Next</span> <i class="icon-chevron-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<section id="ash">
	<div class="container">
		<div class="flex-grid">
			<div class="grid-item--sm center-vertically intro-item">
				<img class="img--intro" src="<?php echo get_template_directory_uri(); ?>/images/ash-intro.png" alt="Ash the dog.">
			</div>
			<div class="grid-item--lg center-vertically intro-item">
				<h2>Ash</h2>
				<h3>a.k.a. "Sweet Boy"</h3>
				<p>
					He loves destroying toys and digging holes. But he's also extremely sweet, and he loves snuggling next to his family (even snuggling next to Luna, when she lets him).
				</p>
			</div>
		</div>
	</div>
	<div class="flex-grid flex-grid--fluid">
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ash-1.jpg" alt="Ash sleeping.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					When he was small, Ash liked to sleep at my feet while I worked at my standing desk.
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ash-2.jpg" alt="Youg Ash sitting in the grass with one of his ears flopped over.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					Young Ash and his one floppy ear.
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ash-4.jpg" alt="Ash looking happy next to torn out pieces of stuffing.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					Ash is proud of himself for ripping the stuffing out of a brand new toy.
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ash-3.jpg" alt="Ash relaxing on the couch.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					He loves relaxing with his human family while they play video games.
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ash-5.jpg"  alt="Ash in his doggie bed under my desk.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					Ash in his bed under my desk.
				</div>
			</div>
		</div>
		<div class="grid-item--sm">
			<img src="<?php echo get_template_directory_uri(); ?>/images/ash-6.jpg" alt="Ash smiling in front of the camera.">
			<div class="fluid__overlay">
				<div class="fluid__overlay__inner">
					A puppy smile!
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h2 class="center">Ash is a Pembroke Welsh Corgi</h2>
		<h3 class="center">Here are some things you might not know about Corgis...</h3>
		<div class="carousel flex-grid">
			<div class="carousel__controls center-vertically hidden--mobile">
				<a class="button--prev button">
					<span class="screen-reader">Previous</span> <i class="icon-chevron-left" aria-hidden="true"></i>
				</a>
			</div>
			<div class="carousel__slides">
				<ul>
			    <li class="carousel__slide center-vertically active">
			    	<div>
				    	<strong>Fact 1 of 3:</strong>
				    	<br>
				    	The Pembroke Welsh Corgi is the <strong>official dog of the British Royal Family</strong>. The Queen has raised corgis since she was a little girl, and her first corgi's name was <strong>Dookie</strong>!
				    	<br>
				    	<small><a href="https://en.wikipedia.org/wiki/Queen_Elizabeth's_corgis" target="_blank">Source: Wikipedia</a></small>
			    	</div>
			    </li>
			    <li class="carousel__slide center-vertically">
			    	<div>
				    	<strong>Fact 2 of 3:</strong>
				    	<br>
				    	The word "corgi" is Welsh for "dwarf dog." All corgis are actually dwarf dogs.
				    	<br>
				    	<small><a href="https://en.wikipedia.org/wiki/Welsh_Corgi" target="_blank">Source: Wikipedia</a></small>
			    	</div>
			    </li>
			    <li class="carousel__slide center-vertically">
			    	<div>
				    	<strong>Fact 3 of 3:</strong>
				    	<br>
				    	Corgis have strong herding instincts, and they are known for nipping at people's ankles to keep them with the group. (Thankfully, Ash doesn't do this!)
				    	<br>
				    	<small><a href="https://en.wikipedia.org/wiki/Welsh_Corgi" target="_blank">Source: Wikipedia</a></small>
			    	</div>
			    </li>
				</ul>
			</div>
			<div class="carousel__controls center-vertically hidden--mobile">
				<a class="button--next button">
					<span class="screen-reader">Next</span> <i class="icon-chevron-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<section id="dailydog">
	<div class="container">
		<h2>The Daily Dog</h2>
		<h3>Posts about Luna &amp; Ash <i class="icon-heart" aria-hidden="true"></i></h3>
		<div class="flex-grid">

		<?php

		$dogpost_query = array(
			'posts_per_page' => 6,
			'orderby' => 'post_date'
		);

		$dogposts = get_posts( $dogpost_query );

		if(!empty ($dogposts)) {
			// get posts inside this subcategory
			foreach($dogposts as $dogpost){
				$dogpost_id = $dogpost->ID;
				$dogpost_date = $dogpost->post_date;
				$dogpost_title = $dogpost->post_title;
				$dogpost_link = get_post_permalink($dogpost_id);
				$dogpost_preview = $dogpost->post_excerpt;
				$short_preview = wp_trim_words($dogpost_preview, $num_words = 15, $more = '...' );
				$formatted_date = date('F j, Y', strtotime($dogpost_date));

				echo "<article>";
				echo "<a href='" . $dogpost_link . "'>";
				echo "<h4>" . $dogpost_title . "</h4>";
				echo "</a>";
				echo "<small>" . $formatted_date . "</small>";
				echo "<p>" . $short_preview . "</p>";
				echo "<p>";
				echo "<a href='" . $dogpost_link . "'>";
				echo "Read More";
				echo "</a>";
				echo "</p>";
				echo "</article>";
			}
			wp_reset_query();
		} else {
			echo "<p class='no-posts'>Oops, we don't have any posts for the Daily Dog yet! Please check back later.</p>";
		}

		?>

		</div>
	</div>
</section>

<?php get_footer(); ?>


