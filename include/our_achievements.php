<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="our_achievements <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container <?php the_sub_field('achievement_block_tabs_row'); ?>">
    <?php if (get_sub_field("block_aske_title")) : ?>
            <h2 class="services_title">
                <?php the_sub_field("block_aske_title"); ?>
            </h2>
        <?php endif; ?>
        <div class="our_achievement_wrapper">
        <div class="swiper achivmentl">
            <div class="swiper-wrapper">
        <?php if (have_rows('tabs_repitor')) : ?>
                    <?php while (have_rows('tabs_repitor')) : the_row(); ?>
                    <?php $row =  get_sub_field("tabs_repitor_block_width"); ?>
                    <div class="swiper-slide <?php if($row === "full"): echo "full"; endif; ?>">
                        <div class="achievement_item__wrapper">
                            <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("tabs_repitor_icon"); ?>' class="achievement_icon lozad"></div>
                            <span class="achievement_item__title">
                                <?php the_sub_field("tabs_repitor_title"); ?>
                            </span>
                        </div>
                        <div class="achievement_item__content">
                            <?php the_sub_field("tabs_repitor_content"); ?>
                        </div>
                        </div>
                    <?php endwhile; ?>
        <?php endif; ?>
        </div>
  </div>
        </div>
        <div class="achivmentl-pagination"></div>
    </div>
</section>
<style>
    .achivmentl-pagination{
        display: none;
    }
    .our_achievements h2{
        margin-bottom: 45px;
    }
    .achivmentl .swiper-slide{
        width: calc(100% / 3 - 40px / 3);
        background: #fff;
    padding: 30px;
    border: 1px solid #e0e0e0;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    transition: 0.4s ease;
    height: auto;
    justify-content: flex-start;
    align-items: flex-start;
    }
    .achivmentl .swiper-wrapper{
        flex-direction: row;
        flex-wrap: wrap;

    align-items: stretch;
    gap: 20px !important;
    }
    .container.two   .achivmentl .swiper-slide{
        width: calc(100% / 2 - 40px / 2);
    }
    .container.two .achivmentl .swiper-slide.full{
        width:100%;
    }
    @media screen and (max-width: 992px){
        .achivmentl .swiper-slide{
            width: calc(100% / 2 - 40px / 3);
            transition: 0.4s ease ;
        }
    }
    @media screen and (max-width: 650px){
        .achivmentl-pagination .swiper-pagination-bullet{
            transition: 0.4s ease ;
        }
        .achivmentl-pagination .swiper-pagination-bullet-active{
            background: #bf1522;
            transition: 0.4s ease ;
        }
        .achivmentl-pagination{
        display: block;
        width: max-content;
    margin: 0 auto;
    padding-top: 30px;
    }
    .swiper-horizontal > .swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction{
        width: max-content;
    }
        .achivmentl .swiper-slide-active{
            transition: 0.4s ease ;
            border: 1px solid #bf1522;
        }
        .achivmentl .swiper-slide{
            width: 100%;
            max-width: 300px;
        }
        .achivmentl .swiper-wrapper{
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: initial;
    align-items: initial;
    gap: initial !important;
    
    }
    .achivmentl .achievement_item__content ul,.achivmentl .achievement_item__content p{
        max-height: 100%;
    }
    .container.two .achivmentl .swiper-slide{
        width: 100%;
    }
    }
    @media screen and (max-width: 370px){
 
    }
</style>