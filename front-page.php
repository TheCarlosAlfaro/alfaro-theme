<?php
/**
 * Template Name: Full Width Front Page
 *
 * This is the template that displays without sidebars
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alfaro
 */

get_header('home'); ?>

</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron jumbotron-fluid brackground-gradient">
        <div class="container text-white text-center">
					<img class="profile-pic img-fluid mb-5 d-block mx-auto" src="http://localhost/alfaro/wp-content/uploads/2017/12/carlos-small-square.jpg" alt="">
          <h1 class="display-3"><?php bloginfo( 'name' ); ?></h1>
          <p><?php bloginfo( 'description' ); ?></p>
          <p><a class="btn btn-custom btn-lg text-white" href="#" role="button">Contact me</a></p>
        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="page" class="site container-fluid">

	<div id="content" class="site-content row">

	<?php
	get_footer();
