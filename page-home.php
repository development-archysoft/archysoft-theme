<?php 
/**
 * Serviсes page.
 * 
 * Template Name: Home
 * 
 * @package Archysoft
 */
?>
<?php get_header(); ?>
<style>
    <?php include 'assets/style/swiper.css'; ?>
    <?php include 'assets/style/home.css'; ?>
    <?php include 'assets/style/services.css'; ?>
    <?php $style = array();
    if (have_rows('content')) :
        while (have_rows('content')) : the_row();
            if (get_row_layout() == 'certificates'  && !in_array("certificates", $style)) :
                include 'assets/style/certificates.css';
                array_push($style, "certificates");
            endif;
        endwhile;
    endif;
    ?>
</style>
<section class="hero home_hero" id="hero">
<div class="container">
    <div class="hero_wrapper">
        <div class="hero_wraps">
            <h1>
                <?php the_title(); ?>
            </h1>
            <div class="hero_content_wrapper">
                <?php the_content(); ?>
            </div>
            <div class="home_btn__wrapper">
                <button onclick="window.open('https://calendly.com/archy-sales/30min', '_blank');return true;" class="hero_btn">
                    Book a call
                </button>
                <button onclick="window.open('#main-popup', '_self');return true;" class="hero_btn__popup">
                    See our demo
                </button>
            </div>
            <?php if (have_rows('sertifications')) : ?>
                    <div class="sertificate_wrapper pc">
                        <div class="sertificate_container">
                            <?php while (have_rows('sertifications')) : the_row(); ?>
                                <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("sertificat"); ?>' class="sertificat_img__hero lozad"></div>
                            <?php endwhile; ?>
                        </div>
                    </div>
            <?php endif; ?>
        </div>
        <img class="banner" decoding="async" src="<?php echo the_post_thumbnail_url('large') ?>" srcset=" <?php echo the_post_thumbnail_url('thumbnail'); ?> 1199w" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
    </div>
    <?php if (have_rows('ancord_item')) : ?> 
           
            <div class="ancord_wrapper">
            <svg class="prev-anc" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 13L1 7L7 1" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="ancord">
       

                <?php while (have_rows('ancord_item')) : the_row(); ?>
                    <a href="<?php the_sub_field('ancord_to')?>"><?php the_sub_field('ancord_name')?></a>
                <?php endwhile; ?>
           
            </div>
            <svg class="next-anc" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        <?php endif; ?>
    </div>
</div>

</section>
<div class="services">
    <?php if (have_rows('content')) : ?>
        <?php while (have_rows('content')) : the_row(); ?>
            <?php if (get_row_layout() == 'block_aske') : ?>
                <?php get_template_part('include/block_aske'); ?>
            <?php elseif (get_row_layout() == 'posts') : ?>
                <?php get_template_part('include/posts'); ?>
            <?php elseif (get_row_layout() == 'calendar') : ?>
                <?php get_template_part('include/calendar'); ?>
            <?php elseif (get_row_layout() == 'achievement_block_tabs') : ?>
                <?php get_template_part('include/achievement_block_tabs'); ?>
            <?php elseif (get_row_layout() == 'technology_stack') : ?>
                <?php get_template_part('include/technology_stack'); ?>
            <?php elseif (get_row_layout() == 'book_a_call') : ?>
                <?php get_template_part('include/book_a_call'); ?>
            <?php elseif (get_row_layout() == 'augmentation') : ?>
                <?php get_template_part('include/augmentation'); ?>
            <?php elseif (get_row_layout() == 'certificates') : ?>
                <?php get_template_part('include/certificates'); ?>
            <?php elseif (get_row_layout() == 'block_staff_augmentation') : ?>
                <?php get_template_part('include/block_staff_augmentation'); ?>
            <?php elseif (get_row_layout() == 'block_how') : ?>
                <?php get_template_part('include/block_how'); ?>
                <?php elseif (get_row_layout() == 'block_what_our_clients_say') : ?>
                <?php get_template_part('include/our_clients'); ?>
                <?php elseif (get_row_layout() == 'our_achievements') : ?>
                <?php get_template_part('include/our_achievements'); ?>
                <?php elseif (get_row_layout() == 'case_studies') : ?>
                <?php get_template_part('include/case_studies'); ?>
                <?php elseif (get_row_layout() == 'block_staff_augmentation_home') : ?>
                <?php get_template_part('include/block_staff_augmentation_home'); ?>
                <?php elseif (get_row_layout() == 'video') : ?>
                <?php get_template_part('include/video'); ?>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>