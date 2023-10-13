<div class="row">

    <?php 
    // mostly not in use 
    /* ?>
    <div class="col-md-12 col-xs-12 text-center">
        <div class="form-group">
            <a href="<?php echo $compare; ?>" id="compare-total" class="btn btn-link no-custom"><?php echo $text_compare; ?></a>
        </div>
    </div>
    <?php */ ?>

    <div class="flex flex-wrap filters-wrap pd-l15 pd-r15">

        <div class="col-sm-6 col-xs-6 text-center hidden-lg hidden-md hidden-sm filter-by"> 
            <button id="filter_group_tigger_open" class="btn btn-primary" onclick="$('#filter-groups').addClass('open');"><?= $button_filter; ?></button> 
        </div> 

        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 sort-by">
            <div class="form-group input-group-b4">
               <!-- <div class="input-group-prepend w100px hidden-xs"> 
                    <label class="input-group-text" for="input-sort"><?php echo $text_sort; ?></label>
                </div> -->
                <select id="input-sort" class="form-control no-custom" onchange="select_handler();">
                <?php foreach ($sorts as $sorts) { ?>
                    <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
                        <option value="<?php echo $sorts['value']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $sorts['value']; ?>"><?php echo $sorts['text']; ?></option>
                    <?php } ?>
                <?php } ?>
                </select>
            </div>
        </div>

        <!-- <div class="col-md-5 col-sm-6 col-xs-4">
            <div class="form-group input-group-b4">
                <div class="input-group-prepend w100px hidden-xs"> 
                    <label class="input-group-text" for="input-limit"><?php echo $text_limit; ?></label>
                </div>
                <select id="input-limit" class="form-control no-custom" onchange="select_handler();">
                <?php foreach ($limits as $limits) { ?>
                    <?php if ($limits['value'] == $limit) { ?>
                        <option value="<?php echo $limits['value']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
                    <?php } else { ?>
                        <option value="<?php echo $limits['value']; ?>"><?php echo $limits['text']; ?></option>
                    <?php } ?>
                <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-2 col-sm-2 col-xs-4 text-right hidden-sm hidden-xs">
            <div class="layout-toggle">
                <i class="fa fa-bars fa-2em pointer js-row"></i>
                <i class="fa fa-th-large fa-2em pointer js-grid active"></i> 
            </div>
        </div> -->

    </div>
</div>

<script type="text/javascript">
    function adjustFitlerPos() {
        $('.filters-wrap').css('top', $('.fixed-header').outerHeight(true));
    }
    function resetFitlerPos() {
        $('.filters-wrap').css('top', 'auto');
    }
    function adjustBannerPos() {
        $('#pg-banner-wrap').css('margin-top', $('.filters-wrap').outerHeight(true));
    }
    function resetBannerPos() {
        $('#pg-banner-wrap').css('margin-top', 0);
    }

    // Note: there is one calling of this function in applyFilter() - extension/module/category filters there
    function handleFilterPos() {
        const width  = window.innerWidth || document.documentElement.clientWidth || 
        document.body.clientWidth;

        if(width <= 767) {
            adjustFitlerPos();
            adjustBannerPos();
        }
        else {
            resetFitlerPos();
            resetBannerPos();
        }

        //console.log('handle filter pos');
    }

    $(window).on('load resize', function(){
        handleFilterPos();
    });

    /* layout toggle */
    $(".js-row").click(function() {
        $(".product-view").addClass('rows');
        $('.js-row').addClass('active');
        $('.js-grid').removeClass('active');
    });

    $(".js-grid").click(function() {
        $(".product-view").removeClass('rows');
        $('.js-grid').addClass('active');
        $('.js-row').removeClass('active');
    });

    $( window ).resize(function() {
        let isMobile = window.matchMedia("only screen and (max-width: 991px)").matches;

        if (isMobile) {
            //Conditional script here
            $(".js-grid").trigger('click');
        }
    });
    /* layout toggle */

</script>