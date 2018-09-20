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
    <div class="container flex-col">
        <div class="section-header">
            <div class="logo"></div>
        </div>

        <div>
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

        <div class="advantages">
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon1"><use xlink:href="#icon-icon1"></use></svg></div>
                <div class="text">Печное топливо от производителя</div>
            </div>
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon2"><use xlink:href="#icon-icon2"></use></svg></div>
                <div class="text">Только качественне нефтепродукты</div>
            </div>
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon3"><use xlink:href="#icon-icon3"></use></svg></div>
                <div class="text">Оптимально <br> доступные цены</div>
            </div>
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon4"><use xlink:href="#icon-icon4"></use></svg></div>
                <div class="text">Контроль качества <br> на всех этапах </div>
            </div>
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon5"><use xlink:href="#icon-icon5"></use></svg></div>
                <div class="text">Оперативная <br> доставка топлива</div>
            </div>
        </div>
    </div>
</section>

<section class="section section2">
    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
        </div>

        <div class="title1">
	        <?php if( get_field('s1-t1') ) {
		        the_field('s1-t1');
	        } ?>
        </div>
        <div class="title2">
	        <?php if( get_field('s1-t1') ) {
		        the_field('s1-t1');
	        } ?>
        </div>
    </div>
</section>

<section class="section section3">
    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
        </div>

        <div class="title1">
            <?php if( get_field('s1-t1') ) {
                the_field('s1-t1');
            } ?>
        </div>
        <div class="title2">
            <?php if( get_field('s1-t1') ) {
                the_field('s1-t1');
            } ?>
        </div>
    </div>
</section>

<section class="section section4">
    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
        </div>

        <div class="title1">
            <?php if( get_field('s1-t1') ) {
                the_field('s1-t1');
            } ?>
        </div>
        <div class="title2">
            <?php if( get_field('s1-t1') ) {
                the_field('s1-t1');
            } ?>
        </div>
    </div>
</section>


<section class="section">
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-arr-right"><use xlink:href="#icon-arr-right"></use></svg><span class="name"> icon-arr-right</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon1"><use xlink:href="#icon-icon1"></use></svg><span class="name"> icon-icon1</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon2"><use xlink:href="#icon-icon2"></use></svg><span class="name"> icon-icon2</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon3"><use xlink:href="#icon-icon3"></use></svg><span class="name"> icon-icon3</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon4"><use xlink:href="#icon-icon4"></use></svg><span class="name"> icon-icon4</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon5"><use xlink:href="#icon-icon5"></use></svg><span class="name"> icon-icon5</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon-call"><use xlink:href="#icon-icon-call"></use></svg><span class="name"> icon-icon-call</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon-call2"><use xlink:href="#icon-icon-call2"></use></svg><span class="name"> icon-icon-call2</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon-close"><use xlink:href="#icon-icon-close"></use></svg><span class="name"> icon-icon-close</span>
        </div>
    </div>
    <div class="glyph fs1">
        <div class="clearfix pbs">
            <svg class="icon icon-icon-mail"><use xlink:href="#icon-icon-mail"></use></svg><span class="name"> icon-icon-mail</span>
        </div>
    </div>
</section>

<?php
get_footer();
