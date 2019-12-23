<div class="col-sm-12 col-md-12 col-lg-12">
    <div class="portfolio-img mb-50">
        <?php
        $portolfio_images = get_post_meta(get_the_ID(), '_meta_portolfio_options', true);
        if (isset($portolfio_images['portfolio_gallery']) && $portolfio_images['portfolio_gallery'] !== ''):
            $gallery = $portolfio_images['portfolio_gallery'];
            if (!empty($gallery)):
                $ids = explode(',', $gallery);
                foreach ($ids as $id) {
                    $attachment = wp_get_attachment_image_src($id, 'full');
                    echo '<img src="' . $attachment['0'] . '" alt="' . get_the_title($id) . '"/>';
                }
            endif;
        else:
            kolaso_post_thumbnail('full');
        endif;
        ?>
    </div><!-- .portfolio-img end -->
</div><!-- .col-lg-8 end -->
<div class="col-sm-12 col-md-12 col-lg-12">
    <?php the_title('<div class="portfolio-title"><h3>', '</h3></div>');?>
</div><!-- .col-lg-12 end -->
<div class="col-sm-12 col-md-7 col-lg-8">
<div class="portfolio-content">
    <?php the_content();?>
</div>

</div><!-- .col-lg-8 end -->
<div class="col-sm-12 col-md-5 col-lg-4">
    <?php
    get_portfolio_meta();
    get_portfolio_share();
    ?>
</div><!-- .col-lg-4 end -->
