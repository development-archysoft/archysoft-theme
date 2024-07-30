<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="achievement <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container <?php the_sub_field('achievement_block_tabs_row'); ?>">
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
        <?php if (have_rows('tabs_repitor')) : ?>
                <ul class="achievement_wrapper">
                    <?php while (have_rows('tabs_repitor')) : the_row(); ?>
                    <?php $row = get_sub_field("tabs_repitor_block_width"); ?>
                    <li class="achievement_item <?php if((get_sub_field("tabs_repitor_block_width_r_l"))): echo "animate"; endif; ?> <?php if($row === "full"): echo "full"; endif; ?>">
                        <div class="achievement_item__wrapper">
                            <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("tabs_repitor_icon"); ?>' class="achievement_icon lozad"></div>
                            <span class="achievement_item__title">
                                <?php the_sub_field("tabs_repitor_title"); ?>
                            </span>
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 1L7 7L1 1" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="achievement_item__content">
                            <?php the_sub_field("tabs_repitor_content"); ?>
                        </div>
                        <?php if(get_sub_field('tabs_repitor_block_width_r_l')) : ?>
                            <div class="ach_sub_pc_content">
                                <?php the_sub_field('tabs_repitor_block_width_r_l'); ?>
                            </div>
                        <?php endif; ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
        <?php endif; ?>
    </div>
</section>
<style>
    .services_sub_content{
        font-family: "Poppins", Sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #6b6669;
    line-height: 150%;
    margin: 0;
    max-width: 90%;
    }
    @media screen and (max-width: 992px){
        .services_sub_content{
            font-size: 16px;
            width: 100%;
        }
    }
</style>