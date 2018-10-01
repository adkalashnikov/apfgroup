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
    <video class="bg-vid" poster="<?php echo get_template_directory_uri();?>/images/vbg1.jpg" autoplay="" loop="" muted="">
        <source src="<?php echo get_template_directory_uri();?>/video/bg1.mp4" type="video/mp4">
    </video>

    <div class="container flex-col">
        <div class="section-header">
            <div class="logo"></div>
            <div class="right">
                <a href="tel:+380504400727">
                    <svg class="icon icon-icon-call"><use xlink:href="#icon-icon-call"></use></svg>
                    +38 (050) 440-07-27
                </a>
                <span>
                    Осуществляем поставки печного <br>
                    топлива по всей территории Украины
                </span>
            </div>
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
    <video class="bg-vid" poster="<?php echo get_template_directory_uri();?>/images/vbg2.jpg" autoplay="" loop="" muted="">
        <source src="<?php echo get_template_directory_uri();?>/video/bg2.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
            <div class="right">
                <a href="tel:+380504400727">
                    <svg class="icon icon-icon-call"><use xlink:href="#icon-icon-call"></use></svg>
                    +38 (050) 440-07-27
                </a>
                <span>
                    Осуществляем поставки печного <br>
                    топлива по всей территории Украины
                </span>
            </div>
        </div>

        <div class="title-wrapper">
            <div class="title1">
		        <?php if( get_field('s2-t1') ) {
			        the_field('s2-t1');
		        } ?>
            </div>
            <div class="title2">
		        <?php if( get_field('s2-t2') ) {
			        the_field('s2-t2');
		        } ?>
            </div>
        </div>
    </div>

    <div class="fuel-cards">
        <div class="card">
            <div class="title">
				<?php if( get_field('s2-item1-title') ) {
					the_field('s2-item1-title');
				} ?>
            </div>
            <div class="price">
                <div>от</div>
				<?php if( get_field('s2-item1-price') ) { ?>
                    <span><?php the_field('s2-item1-price'); ?></span>
				<?php } ?>
                <div class="price-currency">грн/литр</div>
            </div>
            <div class="more" data-toggle="modal" data-target="#modalFuel">
                Подробнее <svg class="icon icon-arr-right"><use xlink:href="#icon-arr-right"></use></svg>
            </div>
        </div>
        <div class="card">
            <div class="title">
				<?php if( get_field('s2-item2-title') ) {
					the_field('s2-item2-title');
				} ?>
            </div>
            <div class="price">
                <div>от</div>
				<?php if( get_field('s2-item2-price') ) { ?>
                    <span><?php the_field('s2-item2-price'); ?></span>
				<?php } ?>
                <div class="price-currency">грн/кг</div>
            </div>
            <div class="more" data-toggle="modal" data-target="#modalFuelKm">
                Подробнее <svg class="icon icon-arr-right"><use xlink:href="#icon-arr-right"></use></svg>
            </div>
        </div>
        <div class="card">
            <div class="title">
				<?php if( get_field('s2-item3-title') ) {
					the_field('s2-item3-title');
				} ?>
            </div>
            <div class="price">
                <div>от</div>
				<?php if( get_field('s2-item3-price') ) { ?>
                    <span><?php the_field('s2-item3-price'); ?></span>
				<?php } ?>
                <div class="price-currency">грн/кг</div>
            </div>
            <div class="more" data-toggle="modal" data-target="#modalFuelKmo">
                Подробнее <svg class="icon icon-arr-right"><use xlink:href="#icon-arr-right"></use></svg>
            </div>
        </div>
        <div class="card">
            <div class="title">
				<?php if( get_field('s2-item4-title') ) {
					the_field('s2-item4-title');
				} ?>
            </div>
            <div class="price">
                <div>от</div>
				<?php if( get_field('s2-item4-price') ) { ?>
                    <span><?php the_field('s2-item4-price'); ?></span>
				<?php } ?>
                <div class="price-currency">грн/кг</div>
            </div>
            <div class="more" data-toggle="modal" data-target="#modalFuelHim">
                Подробнее <svg class="icon icon-arr-right"><use xlink:href="#icon-arr-right"></use></svg>
            </div>
        </div>
        <div class="card">
            <div class="title">
				<?php if( get_field('s2-item5-title') ) {
					the_field('s2-item5-title');
				} ?>
            </div>
            <div class="price">
                <div>от</div>
				<?php if( get_field('s2-item5-price') ) { ?>
                    <span><?php the_field('s2-item5-price'); ?></span>
				<?php } ?>
                <div class="price-currency">грн/кг</div>
            </div>
            <div class="more" data-toggle="modal" data-target="#modalFuelNefteuglehim">
                Подробнее <svg class="icon icon-arr-right"><use xlink:href="#icon-arr-right"></use></svg>
            </div>
        </div>
    </div>
</section>

<section class="section section3">
    <video class="bg-vid" poster="<?php echo get_template_directory_uri();?>/images/vbg3.jpg" autoplay="" loop="" muted="">
        <source src="<?php echo get_template_directory_uri();?>/video/bg3.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
            <div class="right">
                <a href="tel:+380504400727">
                    <svg class="icon icon-icon-call"><use xlink:href="#icon-icon-call"></use></svg>
                    +38 (050) 440-07-27
                </a>
                <span>
                    Осуществляем поставки печного <br>
                    топлива по всей территории Украины
                </span>
            </div>
        </div>

        <div class="title-wrapper">
            <div class="title1">
		        <?php if( get_field('s3-t1') ) {
			        the_field('s3-t1');
		        } ?>
            </div>
            <div class="title2">
		        <?php if( get_field('s3-t2') ) {
			        the_field('s3-t2');
		        } ?>
            </div>
        </div>

        <div class="advantages">
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon5"><use xlink:href="#icon-icon5"></use></svg></div>
                <div class="title">ДОСТАВКА</div>
                <p>
	                <?php if( get_field('s3-item1') ) {
		                the_field('s3-item1');
	                } ?>
                </p>
            </div>
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon2"><use xlink:href="#icon-icon2"></use></svg></div>
                <div class="title">КАЧЕСТВО</div>
                <p>
		            <?php if( get_field('s3-item2') ) {
			            the_field('s3-item2');
		            } ?>
                </p>
            </div>
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon3"><use xlink:href="#icon-icon3"></use></svg></div>
                <div class="title">СТОИМОСТЬ</div>
                <p>
		            <?php if( get_field('s3-item3') ) {
			            the_field('s3-item3');
		            } ?>
                </p>
            </div>
            <div class="item">
                <div class="icon-wrap"><svg class="icon icon-icon1"><use xlink:href="#icon-icon1"></use></svg></div>
                <div class="title">СОТРУДНИЧЕСТВО</div>
                <p>
		            <?php if( get_field('s3-item4') ) {
			            the_field('s3-item4');
		            } ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section section5">
    <video class="bg-vid" poster="<?php echo get_template_directory_uri();?>/images/vbg4.jpg" autoplay="" loop="" muted="">
        <source src="<?php echo get_template_directory_uri();?>/video/bg4.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
            <div class="right">
                <a href="tel:+380504400727">
                    <svg class="icon icon-icon-call"><use xlink:href="#icon-icon-call"></use></svg>
                    +38 (050) 440-07-27
                </a>
                <span>
                Осуществляем поставки печного <br>
                топлива по всей территории Украины
            </span>
            </div>
        </div>

        <div class="title-wrapper">
            <div class="title1">
                <?php if( get_field('s5-t1') ) {
                    the_field('s5-t1');
                } ?>
            </div>
            <div class="title2">
                <?php if( get_field('s5-t2') ) {
                    the_field('s5-t2');
                } ?>
            </div>
        </div>

        <div class="row">
            <div class="left">
                <?php echo do_shortcode('[contact-form-7 id="5" title="форма связи"]'); ?>
            </div>
            <div class="right">
                <p>
                    <?php if( get_field('s5-t3') ) {
                        the_field('s5-t3');
                    } ?>
                </p>

                <span class="phone">
                    <svg class="icon icon-icon-call"><use xlink:href="#icon-icon-call"></use></svg>
                    (050) 440-07-27, (050) 572-87-97
                </span>

                <span class="addr">
                    <svg class="icon icon-marker"><use xlink:href="#icon-marker"></use></svg>
                    г. Черкассы, ул. Чехова, 115
                </span>

                <a href="mailto:apfgrup@gmail.com" class="email">
                    <svg class="icon icon-mail2"><use xlink:href="#icon-mail2"></use></svg>
                    apfgrup@gmail.com
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section section4">
    <video class="bg-vid" poster="<?php echo get_template_directory_uri();?>/images/vbg5.jpg" autoplay="" loop="" muted="">
        <source src="<?php echo get_template_directory_uri();?>/video/bg5.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="section-header">
            <div class="logo"></div>
            <div class="right">
                <a href="tel:+380504400727">
                    <svg class="icon icon-icon-call"><use xlink:href="#icon-icon-call"></use></svg>
                    +38 (050) 440-07-27
                </a>
                <span>
                    Осуществляем поставки печного <br>
                    топлива по всей территории Украины
                </span>
            </div>
        </div>

        <div class="title-wrapper">
            <div class="title1">
			    <?php if( get_field('s4-t1') ) {
				    the_field('s4-t1');
			    } ?>
            </div>
            <div class="title2">
			    <?php if( get_field('s4-t2') ) {
				    the_field('s4-t2');
			    } ?>
            </div>
        </div>

        <div class="items-wrapper">
            <div class="item">
                <p>
				    <?php if( get_field('s4-item1') ) {
					    the_field('s4-item1');
				    } ?>
                </p>
            </div>
            <div class="item">
	            <?php if( get_field('s4-item2') ) {
		            the_field('s4-item2');
	            } ?>
            </div>
            <div class="item">
	            <?php if( get_field('s4-item3') ) {
		            the_field('s4-item3');
	            } ?>
            </div>
            <div class="item">
	            <?php if( get_field('s4-item4') ) {
		            the_field('s4-item4');
	            } ?>
            </div>

            <div class="item-bottom">
                <p>
		            <?php if( get_field('s4-item5') ) {
			            the_field('s4-item5');
		            } ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
