<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="how_we__work <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <div class="how_img__wrapper">
            <?php if (get_sub_field("block_aske_title")) : ?>
                    <h2 class="services_title">
                        <?php the_sub_field("block_aske_title"); ?>
                    </h2>
            <?php endif; ?>
            <?php $img = get_sub_field('block_how_img'); ?>
            <img class="how_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        </div>
        <div class="how_img__content">
            <p class="how_description">
                <?php the_sub_field("block_how_content"); ?>
            </p>
            <?php if (have_rows('block_how_repitor')) : ?>
                <ul class="how_list">
                    <?php while (have_rows('block_how_repitor')) : the_row(); ?>
                    <?php $desc = get_sub_field('block_how_repitor_description') ?>
                    <li class="how_list__item <?php if(empty($desc)) : echo "non"; endif; ?>">
                        <div class="how_container_item">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("block_how_repitor_img"); ?>' class="augmentation_icon lozad"></div>
                        <div class="how_wrapp_conten ">
                            <span class="how_list__title">
                                <?php  the_sub_field("block_how_repitor_item"); ?>
                            </span>
                        </div>
                        </div>
                        <?php if(!empty($desc)) : ?>
                                <p class="how_list__desc"><?php echo $desc; ?></p>
                            <?php endif; ?>
                      
                    </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>