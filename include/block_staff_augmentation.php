<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="staff_augmentation <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <?php if (get_sub_field("block_aske_title")) : ?>
                <h2 class="services_title">
                    <?php the_sub_field("block_aske_title"); ?>
                </h2>
        <?php endif; ?>
        <div class="staff_augmentation__wrapper">
            <div class="staff_augmentation__content">
                <?php the_sub_field("block_staff_augmentation_content"); ?>
            </div>
            <div class="staff_augmentation__container">
                <?php if (get_sub_field("block_staff_augmentation_title")) : ?>
                        <?php the_sub_field("block_staff_augmentation_title"); ?>
                <?php endif; ?>
                <?php if (have_rows('block_staff_augmentation_repitor')) : ?>
                    <ul class="staff_augmentation__tab">   
                        <?php while (have_rows('block_staff_augmentation_repitor')) : the_row(); ?>
                        <li class="staff_augmentation__item">
                        <div class="augmentation_title__wrapper">
                            <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("block_staff_augmentation_repitor_img"); ?>' class="augmentation_icon lozad"></div>
                            <span class="augmentation_title">
                                <?php the_sub_field("block_staff_augmentation_repitor_title"); ?>
                            </span>
                        </div>
                            <div class="augmentation_item__st">
                                <?php the_sub_field("block_staff_augmentation_repitor_content"); ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <button onclick="window.open('https://calendly.com/archy-sales/30min', '_blank');return true;" class="hero_btn">
                Book a call
                </button>
            </div>
        </div>
    </div>
</section>
<style>
.staff_augmentation__item .augmentation_item__st {
    overflow: hidden;
    transition: height 1s ease;
    height: auto; 
    max-height: 500px; 
}

.staff_augmentation__item:not(.active) .augmentation_item__st {
    height: auto; 
    transition: height 1s ease; 
    max-height: 500px; 
}

.staff_augmentation__item:not(.active) .augmentation_item__st {
    height: 0; 
}


.augmentation_item__st  ul li{
    padding-left: 15px;
    position: relative;
}
.augmentation_item__st  ul li::after{
    content: "";
    position: absolute;
    left: 0;
    top: 10px;
    width: 5px;
    height: 5px;
    border-radius: 100%;
    background: #6b6669;
}
.augmentation_item__st p:first-of-type{
    margin: 0;
}
.augmentation_item__st  ul li,
.augmentation_item__st  ul,
.augmentation_item__st p{
    list-style: none;
    font-family: "Poppins", Sans-serif;
    color: #6b6669;
    margin: 10px 0;
    font-weight: 400;
    font-size: 16px;
    line-height: 150%;
}
.staff_augmentation__container p{
    margin: 10px 0;
    font-weight: 400;
    font-size: 16px;
    line-height: 150%;
    font-family: "Poppins", Sans-serif;
    color: #6b6669;
}
@media screen and (max-width: 768px){
    .staff_augmentation__content h3{
        margin-bottom: 30px;
    }
}
@media screen and (max-width: 370px)
{
    .staff_augmentation__wrapper{
        gap: 20px;
    }
    .staff_augmentation__content p, .staff_augmentation__content li,
    .augmentation_item__st  ul li,
.augmentation_item__st  ul,
.augmentation_item__st p,
    .staff_augmentation__container p{
        font-size: 14px;
    }
}
</style>
