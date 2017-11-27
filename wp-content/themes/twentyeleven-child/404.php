<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
if(is_user_logged_in())
{
 $current_user = wp_get_current_user();

 $user_id = echo $current_user->user_login;
}
else
{
	$user_id = "Not a WordPress user.";
}
 
	
$bad_url = $_SERVER['REQUEST_URI'];
$referring_url = $_SERVER['HTTP_REFERER'];
/* The $referring_url will ONLY show if there is a link. You can't just type in a url and get a referring url */
$body_text = "Broken link is possibly on: " . $referring_url . " What the bad url is: " . $bad_url . "  and accessed by: " . $user_id;
/* Will eventually want to change email to help desk or something, but for now I'm the only one who wants these emails */
mail('emma.schiermeier@mspd.mo.gov', '404 Email', $body_text);


get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e('Web page cannot be found.', 'twentyeleven'); ?></h1>
				</header>

				<div class="entry-content">
					<p>Most likely causes:</p>
					<ul style="list-style-type:square">
						<li>There might be a typing error in the address.</li>
						<li>If you clicked on a link, it may be out of date.</li>
					</ul>
					<p>Click <a href="/">here</a> to return to home page</p> <!-- "/" in the href makes it go home. So no extra stuff at end of url -->


				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
