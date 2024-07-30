<?php
/* Template Name: Case */
get_header(); ?>
<style>
    <?php include 'assets/style/wiget.css'; ?>
    <?php include 'assets/style/archive.css'; ?>

</style>
<div class="archive_post archive_case">
    <div class="container">
        <div class="archive_post__wrapper">
        <div class="serach_wrapper mobile">
                    <?php get_search_form(); ?>
                </div>
            <h1><?php the_title(); ?></h1>
            <img class="banner_posts__img" decoding="async" src="<?php echo the_post_thumbnail_url('full') ?>" srcset="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
        </div>
        <div class="archive_post__container">
            <div class="post_left post_left_case">
            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $wpb_all_query = new WP_Query(array('post_type' => 'case', 'paged' => $paged,  'post_status' => 'publish', 'posts_per_page' => 6, 'order' => 'DESC', 'orderby' => 'date')); ?>
            <?php if ($wpb_all_query->have_posts()) : ?>
                <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                    <div class="archive_post__item archive_post__case" onclick="window.open('<?php the_permalink(); ?>', '_self');return true;">
                        <img  class="archive_item_img lozad" src="<?php echo the_post_thumbnail_url() ?>" data-srcset='<?php echo the_post_thumbnail_url() ?>' srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                        <div class="archive_post__bl">
                        <div class="archive_post__bl_wrap">
                        <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="author">
                            <ul class="tag_tem">
                        <?php
                            $tag_terms = wp_get_post_terms(get_the_ID(), 'case_tag');          
                            foreach ($tag_terms as $tag_term) {
                                ?>
                                <li class="tag_btn"><a aria-label="tag" href="<?php echo get_term_link($tag_term->term_id, 'case_tag'); ?>"><?php echo $tag_term->name; ?></a></li>
                                <?php
                            } ?>
                            </ul>
                        <div class="author_prev">
                            <p class="date">
                                <?php echo get_the_date('F j, Y'); ?>
                            </p>
                        </div>
                    </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>
        <div class="post_right">
    <!-- Search -->
    <div class="serach_wrapper pc">
    <?php get_search_form(); ?>
    </div>
    <!-- Subscribe Wrapper -->
    <div class="subscribe_wrapper">
        <div class="posts_slide__prev">Newsletter</div>
<!--        <form enctype="multipart/form-data" method="POST" class="leave_feedback_form">-->
<!--        <input type="hidden" name="form_id" value="leave_subscribe_form">-->
<!--            <label><input name="name" type="text" required="" placeholder="Name"></label>-->
<!--            <label><input name="email" type="email" required="" placeholder="Email" pattern="\S+@[a-z]+.[a-z]+"></label>-->
<!--            <input class="leave_feedback_submit btn" type="submit" value="Subscribe">-->
<!--        </form>-->
        <?php echo do_shortcode('[hubspot type="form" portal="25327294" id="0fc91a91-a018-4a99-bfc4-087659380b4f"]') ?>

        <div class="comment_send_ok">
            Thank you for subscribing.
        </div>
    </div>
 <!-- Categories Wrapper -->
 <div class="cat_wrapper">
                <p class="posts_slide__prev">
                Categories
                    </p>
                <div class="cat_container">
                <?php
$categories = get_categories(array(
    'taxonomy' => 'case_category',
    'hide_empty' => true, 
    'orderby' => 'name',  
));

if ($categories) {
    foreach ($categories as $category) {
        $child_categories = get_categories(array(
            'taxonomy' => 'case_category',
            'hide_empty' => true,
            'orderby' => 'name',
            'parent' => $category->term_id,
        ));

        if ($child_categories) {
            echo '<div class="cats_posts__wrapper">';
            echo '<a href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a>'; 

            foreach ($child_categories as $child_category) {
                echo '<a href="' . get_category_link($child_category->term_id) . '">' . esc_html($child_category->name) . '</a>';
            }
            echo '</div>'; 
        }
    }
}
$categories_non = get_categories(array(
    'taxonomy' => 'case_category',
    'hide_empty' => true,
    'orderby' => 'name',
    'parent' => 0,
));

if ($categories_non) {
    foreach ($categories_non as $category) {
        $child_categories = get_categories(array(
            'taxonomy' => 'case_category',
            'hide_empty' => true,
            'orderby' => 'name',
            'parent' => $category->term_id,
        ));
        if (empty($child_categories)) {
            echo '<a href="' . get_category_link($category->term_id) . '">' . esc_html($category->name) . '</a>';
        }
    }
}
?>

                </div>
                </div>

    <!-- Tags Wrapper -->
    <div class="tag_wrapper">
        <p class="posts_slide__prev">Tags</p>
        <?php
$tags = get_terms(array(
    'taxonomy' => 'case_tag',
    'hide_empty' => false, // Показувати теги, які не мають призначених статей
));

if ($tags) {
    echo '<ul>';
    foreach ($tags as $tag) {
        echo '<li><a href="' . get_term_link($tag) . '">' . $tag->name . '</a></li>';
    }
    echo '</ul>';
}
?>

    </div>

    <!-- Posts Wrapper -->
    <div class="posts_slide">
        <?php
        $posts = get_field('posts_v');
        if ($posts) :
        ?>
            <div class="posts_container">
                <p class="posts_slide__prev">Best articles</p>
                <?php
                foreach ($posts as $post) :
                    $permalink = get_permalink($post->ID);
                    $title = get_the_title($post->ID);
                    $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');
                    $post_date = get_the_date('F j, Y', $post->ID);
                ?>
                    <div class="posts_item" onclick="window.open('<?php the_permalink(); ?>', '_self');return true;">
                        <div class="img_scale__wrapper">
                            <img class="posts_img lozad" data-srcset="<?php echo esc_url($thumbnail_url); ?>" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                        </div>
                        <div class="posts_items__wrapper">
                            <p><?php echo esc_html($title); ?><br></p>
                        </div>
                        <span class="post_date"><?php echo $post_date; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
        </div>
        </div>
        <!-- <div class="posts_pagination">
            <?php
            // $big = 999999999;
            // echo paginate_links(array(
            //     'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            //     'current'   => max(1, get_query_var('paged')),
            //     'prev_text'    => __('&#8249;'),
            //     'next_text'    => __('&#8250;'),
            //     'total'     => $wpb_all_query->max_num_pages,
            // ));
            // wp_reset_query();
            ?>
        </div> -->
    </div>
</div>
<!--<script>-->
<!--    let leave_feedback_submit = document.querySelector('.leave_feedback_submit');-->
<!--    let leave_feedback_form = document.querySelector('.leave_feedback_form');-->
<!--    let leave_feedback_input = document.querySelectorAll('.leave_feedback_form *:not(label)');-->
<!--    let comment_send_ok = document.querySelector('.comment_send_ok');-->
<!--    leave_feedback_submit.addEventListener('click', function(e) {-->
<!--        let error = false;-->
<!--        for (let i = 0; i < leave_feedback_input.length; i++) {-->
<!--            if (leave_feedback_input[i].value.length == 0) {-->
<!--                error = true;-->
<!--            }-->
<!--        }-->
<!--        if (!error) {-->
<!--            e.preventDefault();-->
<!--            let data = new FormData(leave_feedback_form);-->
<!--            fetch('/wp-content/themes/archysoft/send.php', {-->
<!--                    method: "POST",-->
<!--                    body: data-->
<!--                })-->
<!--                .then(data => {-->
<!--                    if (data.ok == true) {-->
<!--                        leave_feedback_form.reset();-->
<!--                        comment_send_ok.classList.add('comment_send_ok_active');-->
<!--                        setTimeout(() => {-->
<!--                            comment_send_ok.classList.remove('comment_send_ok_active');-->
<!--                        }, "4000")-->
<!--                    }-->
<!--                })-->
<!--        }-->
<!--    })-->
<!--</script>-->
<?php get_footer(); ?>