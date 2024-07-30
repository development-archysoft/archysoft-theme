<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="chess <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <?php if (get_sub_field("block_aske_title")) : ?>
            <h2 class="services_title">
                <?php the_sub_field("block_aske_title"); ?>
            </h2>
        <?php endif; ?>
        <?php if (get_sub_field("achievement_block_tabs_content")) : ?>
            <p class="services_sub_content">
                <?php the_sub_field("achievement_block_tabs_content"); ?>
            </p>
        <?php endif; ?>
        <?php if (have_rows('chess_repitor')) : ?>
                <ol class="chess_wrapper">
                    <?php while (have_rows('chess_repitor')) : the_row(); ?>
                        <li class="chess_item">
                            <div class="chess_item__wrapper">
                                <div class="chess_icon__wrapper">
                                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("chess_repitor_icon"); ?>' class="chess_icon lozad"></div>
                                    <span class="chess_title">
                                        <?php the_sub_field("chess_repitor_title"); ?>
                                    </span>
                                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M13 1L7 7L1 1" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="chess_item__content">
                                    <?php the_sub_field("chess_repitor_content"); ?>
                                </div>
                            </div>
                            <?php $img = get_sub_field('chess_repitor_img'); ?>
                            <img class="chess_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        </li>
                    <?php endwhile; ?>
                </ol>
        <?php endif; ?>
    </div>
</section>
<style>
   
</style>