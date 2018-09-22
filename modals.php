<?php
/**
 * Created by PhpStorm.
 * User: den
 * Date: 22.09.2018
 * Time: 11:31
 */?>

<div class="modal fade modal-contact" id="modalContact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <svg class="icon icon-close-form" data-dismiss="modal" aria-label="Close"><use xlink:href="#icon-close-form"></use></svg>
        <div class="modal-content">
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="5" title="форма связи"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalWriteMe" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <?php //echo do_shortcode('[contact-form-7 id="808" title="форма контакты"]'); ?>
            </div>
        </div>
    </div>
</div>