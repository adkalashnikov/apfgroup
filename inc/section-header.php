<div class="section-header">
    <div class="logo"></div>
    <div class="right">
        <div class="phones">
            <svg class="icon icon-icon-call">
                <use xlink:href="#icon-icon-call"></use>
            </svg>
            <?php if( get_field( 'phone1' ) ) { ?>
                <a href="tel:<?php the_field( 'phone1' ); ?>">
                    <?php the_field( 'phone1' ); ?>
                </a>
            <?php } ?>

            <?php if ( get_field( 'phone2' ) ) { ?>
                <a href="tel:<?php the_field( 'phone2' ); ?>" class="phone2">
                    <?php the_field( 'phone2' ); ?>
                </a>
            <?php } ?>
        </div>
        <span>
            Осуществляем поставки печного <br>
            топлива по всей территории Украины
        </span>
    </div>
</div>
