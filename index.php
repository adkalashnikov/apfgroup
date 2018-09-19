<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package APF_group
 */

get_header();
?>

<section class="section section1">
    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
        </div>

        <h1>
	        <?php if( get_field('s1-t1') ) {
		        the_field('s1-t1');
	        } ?>
        </h1>
        <p>
	        <?php if( get_field('s1-t2') ) {
		        the_field('s1-t2');
	        } ?>
        </p>
    </div>
</section>

<?php
get_footer();
