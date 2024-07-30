<?php
/* Template Name: About us */
get_header(); ?>
<style>
    <?php include 'assets/style/about-us.css'; ?>
</style>
<section class="about">
    <div class="container">
        <div class="about_title__container">
            <h1 class="about_title">
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
        </div>
        <div class="authors_about">
            <?php if (have_rows('authors')) : ?>
                <?php while (have_rows('authors')) : the_row(); ?>
                    <div class="author">
                        <?php $img = get_sub_field("authors_img"); ?>
                        <img class="author_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        <p class="author_name">
                            <?php the_sub_field("authors_name"); ?>
                        </p>
                        <p class="author_position">
                            <?php the_sub_field("authors_position"); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="chess">
    <div class="container">
        <div class="chess_wrapper">
        <?php if (have_rows('chess_repiter')) : ?>
            <?php while (have_rows('chess_repiter')) : the_row(); ?>
                <div class="chess_item">
                    <?php $img = get_sub_field('chess_repiter_img'); ?>
                    <img class="chess_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                    <div class="chess_item__wrapper">
                        <div class="chess_item__title">
                            <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("chess_repiter_icon"); ?>' class="chess_icon lozad"></div>
                            <h2>
                                <?php the_sub_field("chess_repiter_title"); ?>
                            </h2>
                        </div>
                        <div class="chess_item__content">
                            <?php the_sub_field("chess_repiter_content"); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>  
        <?php endif; ?>
        </div>
    </div>
</section>
<section class="service_map">
    <div class="container">
        <h2 class="service_title">
            <?php the_field("service_title"); ?>
        </h2>
        <div class="service_map__wrapper">
        <?php if (have_rows('service_map_repiter')) : ?>
            <?php while (have_rows('service_map_repiter')) : the_row(); ?>
                <div class="service_map__item">
                    <div class="service_map__wrap">
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("service_map_repiter_img"); ?>' class="service_icon lozad"></div>
                        <div class="service_map__content">
                            <?php the_sub_field("service_map_repiter_content"); ?>
                        </div>
                    </div>
                    <a class="service_btn" aria-label="service" href="<?php the_sub_field("service_map_repiter_link"); ?>"><?php the_sub_field("service_map_repiter_name"); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none"><path d="M4.07582 1.22704L11.5004 1.22704M11.5004 1.22704L11.5004 8.65166M11.5004 1.22704L1.9545 10.773" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                </div>
            <?php endwhile; ?>  
        <?php endif; ?>
        </div>
    </div>
</section>
<section class="rewards">
    <div class="container">
        <h2 class="service_title">
                <?php the_field("rewards_title"); ?>
        </h2>
        <div class="rewards_wrapper">
        <?php if (have_rows('rewards_repiter')) : ?>
            <?php while (have_rows('rewards_repiter')) : the_row(); ?>
            <div class="rewards_item">
                <?php $imgr = get_sub_field('rewards_repiter_img'); ?>
                <img class="rewards_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $imgr['url']; ?>" alt="<?php echo $imgr['alt']; ?>">
                <p class="rewards_number">
                    <?php the_sub_field("rewards_rep_title"); ?>
                </p>
                <p class="rewards_content">
                    <?php the_sub_field("rewards_repiter_description"); ?>
                </p>
            </div>
            <?php endwhile; ?>  
        <?php endif; ?>
        </div>
    </div>
</section>
<section class="expiriance">
    <div class="container">
        <h2 class="service_title">
                <?php the_field("experience_title"); ?>
        </h2>
        <div class="expiriance_wrapper">
            <?php the_field("experience_content"); ?>
        </div>
        <?php $imgrs = get_field('experience_img'); ?>
        <img class="expiriance_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $imgrs['url']; ?>" alt="<?php echo $imgrs['alt']; ?>">
    </div>
</section>
<section class="article">
    <div class="container">
        <h2 class="service_title">
                <?php the_field("experience_title"); ?>
        </h2>
        <div class="article_wrapper">
        <?php $posts = get_field('articles');
        if ($posts) : ?>
                <?php
                foreach ($posts as $post) :
                    $permalink = get_permalink($post->ID);
                    $title = get_the_title($post->ID);
                    $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');
                    $post_date = get_the_date('F j, Y', $post->ID); ?>
                    <div class="posts_item" onclick="window.open('<?php the_permalink(); ?>', '_self');return true;">
                        <div class="posts_item_wrap">
                        <div class="img_scale__wrapper">
                            <img class="posts_img lozad" data-srcset="<?php echo esc_url($thumbnail_url); ?>" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                        </div>
                        <div class="posts_items__wrapper">
                            <p><?php echo esc_html($title); ?></p>
                        </div>
                        </div>
                        <div class="date_wrapper">
                            <span class="post_date">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.00008 15.6667C10.7682 15.6667 12.4639 14.9643 13.7141 13.714C14.9644 12.4638 15.6667 10.7681 15.6667 9C15.6667 7.23189 14.9644 5.5362 13.7141 4.28596C12.4639 3.03571 10.7682 2.33333 9.00008 2.33333C7.23197 2.33333 5.53628 3.03571 4.28604 4.28596C3.03579 5.5362 2.33341 7.23189 2.33341 9C2.33341 10.7681 3.03579 12.4638 4.28604 13.714C5.53628 14.9643 7.23197 15.6667 9.00008 15.6667ZM9.00008 0.666668C10.0944 0.666668 11.1781 0.882216 12.1891 1.30101C13.2002 1.71979 14.1188 2.33362 14.8926 3.10744C15.6665 3.88127 16.2803 4.79993 16.6991 5.81097C17.1179 6.82202 17.3334 7.90565 17.3334 9C17.3334 11.2101 16.4554 13.3298 14.8926 14.8926C13.3298 16.4554 11.2102 17.3333 9.00008 17.3333C4.39175 17.3333 0.666748 13.5833 0.666748 9C0.666748 6.78986 1.54472 4.67025 3.10752 3.10744C4.67033 1.54464 6.78994 0.666668 9.00008 0.666668ZM9.41675 4.83333V9.20833L13.1667 11.4333L12.5417 12.4583L8.16675 9.83333V4.83333H9.41675Z" fill="#7A7A7A"/>
                                </svg>
                            <?php echo $post_date; ?></span>
                            <p class="link">Full article
                            <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6988 8.4C11.6066 8.48583 11.5328 8.58933 11.4815 8.70433C11.4303 8.81933 11.4027 8.94347 11.4005 9.06935C11.3983 9.19522 11.4214 9.32026 11.4686 9.437C11.5157 9.55373 11.5859 9.65977 11.675 9.7488C11.764 9.83782 11.87 9.908 11.9868 9.95515C12.1035 10.0023 12.2285 10.0255 12.3544 10.0232C12.4803 10.021 12.6044 9.99347 12.7194 9.94223C12.8344 9.89099 12.9379 9.81711 13.0237 9.725L17.0862 5.6625L17.75 5L17.0875 4.3375L13.025 0.274999C12.8483 0.10414 12.6115 0.00953271 12.3657 0.0115521C12.1199 0.0135714 11.8847 0.112057 11.7108 0.285795C11.5369 0.459534 11.4382 0.694626 11.4359 0.940435C11.4337 1.18624 11.5281 1.4231 11.6988 1.6L14.1612 4.0625H1.1875C0.93886 4.0625 0.700403 4.16127 0.524587 4.33709C0.348772 4.5129 0.25 4.75136 0.25 5C0.25 5.24864 0.348772 5.4871 0.524587 5.66291C0.700403 5.83873 0.93886 5.9375 1.1875 5.9375H14.1612L11.6988 8.4Z" fill="#BF1422"/>
                            </svg>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
        <a class="service_btn" aria-label="service" href="<?php the_field("articles_btn_link"); ?>"><?php the_field("articles_btn_name"); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none"><path d="M4.07582 1.22704L11.5004 1.22704M11.5004 1.22704L11.5004 8.65166M11.5004 1.22704L1.9545 10.773" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </a>
    </div>
</section>
<?php get_footer(); ?>