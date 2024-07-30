<?php get_header(); ?>
<style>
    <?php include 'assets/style/single.css'; ?>
    <?php include 'assets/style/wiget.css'; ?>
</style>
    <div class="single_ps">
        <div class="container">
            <div class="post_left">
                <section class="single_banner">
                <div class="serach_wrapper mobile">
                    <?php get_search_form(); ?>
                </div>
                <img class="banner_posts__img" decoding="async" src="<?php echo the_post_thumbnail_url('full') ?>" srcset="<?php echo the_post_thumbnail_url('medium'); ?> 1920w , <?php echo the_post_thumbnail_url('thumbnail'); ?> 1199w" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                <ul class="banner_posts_breadcrumbs">
                <?php
                    $category_ids = wp_get_post_categories(get_the_ID());
                    $tag_ids = wp_get_post_tags(get_the_ID());

                    foreach ($category_ids as $category_id) {
                        ?>
                        <li class="cat_btn"><?php echo get_cat_name($category_id); ?></li>
                        <?php
                    }
                    foreach ($tag_ids as $tag_id) {
                        $tag = get_tag($tag_id);
                        ?>
                        <li class="tag_btn"><a aria-label="tag" href="<?php echo get_tag_link($tag_id); ?>"><?php echo $tag->name; ?></a></li>
                        <?php
                    }
                ?>
                </ul>  
                <h1>
                    <?php the_title(); ?>
                </h1>
                <div class="share_block">
                    <div class="author">
                        <img alt="Author Vlad Chernii" class="author_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/img/vladislav_author.png" />
                        <div class="author_prev">
                            <p class="author_name">
                                Vlad Chernii
                            </p>
                            <p class="date">
                                <?php echo get_the_date('F j, Y'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="share">
                        <p>
                        Share:
                        </p>
                        <div class="share_container">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2779_3577)">
                                <path d="M26.3057 0C27.9584 0 29.3716 0.586806 30.5452 1.76042C31.7189 2.93403 32.3057 4.34722 32.3057 6V26C32.3057 27.6528 31.7189 29.066 30.5452 30.2396C29.3716 31.4132 27.9584 32 26.3057 32H22.389V19.6042H26.5348L27.1598 14.7708H22.389V11.6875C22.389 10.9097 22.5522 10.3264 22.8786 9.9375C23.205 9.54861 23.8404 9.35417 24.7848 9.35417L27.3265 9.33333V5.02083C26.4515 4.89583 25.2154 4.83333 23.6182 4.83333C21.7293 4.83333 20.2189 5.38889 19.0869 6.5C17.955 7.61111 17.389 9.18056 17.389 11.2083V14.7708H13.2223V19.6042H17.389V32H6.30566C4.65289 32 3.23969 31.4132 2.06608 30.2396C0.89247 29.066 0.305664 27.6528 0.305664 26V6C0.305664 4.34722 0.89247 2.93403 2.06608 1.76042C3.23969 0.586806 4.65289 0 6.30566 0H26.3057Z" fill="#898888"/>
                                </g>
                            </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.9723 10.0417C26.1946 10.3889 25.3543 10.625 24.4515 10.75C25.3959 10.1944 26.0418 9.38194 26.389 8.3125C25.4862 8.84028 24.5557 9.19444 23.5973 9.375C22.7501 8.45833 21.6876 8 20.4098 8C19.2015 8 18.1702 8.42708 17.3161 9.28125C16.4619 10.1354 16.0348 11.1667 16.0348 12.375C16.0348 12.7778 16.0696 13.1111 16.139 13.375C14.3473 13.2778 12.6668 12.8264 11.0973 12.0208C9.52789 11.2153 8.19455 10.1389 7.09733 8.79167C6.69455 9.48611 6.49316 10.2222 6.49316 11C6.49316 12.5833 7.12511 13.7986 8.389 14.6458C7.73622 14.6319 7.04178 14.4514 6.30566 14.1042V14.1458C6.30566 15.1875 6.65289 16.1146 7.34733 16.9271C8.04178 17.7396 8.89594 18.2431 9.90983 18.4375C9.50705 18.5486 9.15289 18.6042 8.84733 18.6042C8.66678 18.6042 8.39594 18.5764 8.03483 18.5208C8.3265 19.3958 8.84386 20.1181 9.58691 20.6875C10.33 21.2569 11.1737 21.5486 12.1182 21.5625C10.5071 22.8125 8.69455 23.4375 6.68066 23.4375C6.31955 23.4375 5.97233 23.4167 5.639 23.375C7.69455 24.6806 9.93066 25.3333 12.3473 25.3333C13.9029 25.3333 15.3612 25.0868 16.7223 24.5938C18.0834 24.1007 19.2501 23.441 20.2223 22.6146C21.1946 21.7882 22.0314 20.8368 22.7327 19.7604C23.4341 18.684 23.955 17.559 24.2952 16.3854C24.6355 15.2118 24.8057 14.0417 24.8057 12.875C24.8057 12.625 24.7987 12.4375 24.7848 12.3125C25.6598 11.6875 26.389 10.9306 26.9723 10.0417ZM32.3057 6V26C32.3057 27.6528 31.7189 29.066 30.5452 30.2396C29.3716 31.4132 27.9584 32 26.3057 32H6.30566C4.65289 32 3.23969 31.4132 2.06608 30.2396C0.89247 29.066 0.305664 27.6528 0.305664 26V6C0.305664 4.34722 0.89247 2.93403 2.06608 1.76042C3.23969 0.586806 4.65289 0 6.30566 0H26.3057C27.9584 0 29.3716 0.586806 30.5452 1.76042C31.7189 2.93403 32.3057 4.34722 32.3057 6Z" fill="#898888"/>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer">
                            <svg width="20" height="20" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2779_3581)">
                                <path d="M5.24316 26.7917H10.0557V12.3333H5.24316V26.7917ZM10.3682 7.875C10.3543 7.15278 10.1043 6.55556 9.61816 6.08333C9.13205 5.61111 8.48622 5.375 7.68066 5.375C6.87511 5.375 6.21886 5.61111 5.71191 6.08333C5.20497 6.55556 4.9515 7.15278 4.9515 7.875C4.9515 8.58333 5.19803 9.17708 5.69108 9.65625C6.18414 10.1354 6.8265 10.375 7.61816 10.375H7.639C8.45844 10.375 9.11816 10.1354 9.61816 9.65625C10.1182 9.17708 10.3682 8.58333 10.3682 7.875ZM22.5557 26.7917H27.3682V18.5C27.3682 16.3611 26.8612 14.7431 25.8473 13.6458C24.8334 12.5486 23.4932 12 21.8265 12C19.9376 12 18.4862 12.8125 17.4723 14.4375H17.514V12.3333H12.7015C12.7432 13.25 12.7432 18.0694 12.7015 26.7917H17.514V18.7083C17.514 18.1806 17.5626 17.7917 17.6598 17.5417C17.8682 17.0556 18.1807 16.6424 18.5973 16.3021C19.014 15.9618 19.5279 15.7917 20.139 15.7917C21.7501 15.7917 22.5557 16.8819 22.5557 19.0625V26.7917ZM32.3057 6V26C32.3057 27.6528 31.7189 29.066 30.5452 30.2396C29.3716 31.4132 27.9584 32 26.3057 32H6.30566C4.65289 32 3.23969 31.4132 2.06608 30.2396C0.89247 29.066 0.305664 27.6528 0.305664 26V6C0.305664 4.34722 0.89247 2.93403 2.06608 1.76042C3.23969 0.586806 4.65289 0 6.30566 0H26.3057C27.9584 0 29.3716 0.586806 30.5452 1.76042C31.7189 2.93403 32.3057 4.34722 32.3057 6Z" fill="#898888"/>
                                </g>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                 <?php if (have_rows('content_posts')) : ?>
                     <?php while (have_rows('content_posts')) : the_row(); ?>
                         <?php if (get_row_layout() == 'ancord') : ?>
                             <?php get_template_part('include/ancord'); ?>
                         <?php elseif (get_row_layout() == 'content') : ?>
                             <?php get_template_part('include/content'); ?>
                             <?php elseif (get_row_layout() == 'img') : ?>
                             <?php get_template_part('include/img'); ?>
                             <?php elseif (get_row_layout() == 'table') : ?>
                             <?php get_template_part('include/table'); ?>
                         <?php endif; ?>
                     <?php endwhile; ?>
                 <?php endif; ?>
            </section>
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
    'hide_empty' => true, 
    'orderby' => 'name',  
));

if ($categories) {
    foreach ($categories as $category) {
        $child_categories = get_categories(array(
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
    'hide_empty' => true,
    'orderby' => 'name',
    'parent' => 0,
));

if ($categories_non) {
    foreach ($categories_non as $category) {
        $child_categories = get_categories(array(
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
        $tags = get_tags();
        if ($tags) {
            echo '<ul>';
            foreach ($tags as $tag) {
                echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
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
        <div class="container_comments">
        <div class="blog_comments">
            <div class="blog_comments_title"><?php comments_number('Comments', 'Comments', 'Comments'); ?></div>
                <?php comments_template(); ?>
                <?php comment_form([
                    'title_reply' => __('Add a comments'),
                    'title_reply_to' =>  __('Reply %s'),
                    'cancel_reply_link' => __('Cancel'),
                    'label_submit' => 'Submit',
                    'title_reply_before'  => '<div id="reply-title" class="comment-reply-title">',
                    'title_reply_after' => '</div>',
                    'comment_field' => '
                <div class="comment-form-comment">
                <textarea id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea>
                <label for="comment">' . _x('Comments', 'noun') . '<span>*</span></label>
                </div>',
                    'fields'  => [
                        'cookies' => '',
                        'author' => '<div class="comment-form-author">
                    <input id="author"   name="author" required  type="text" size="30" />
                    <label for="author">Name<span>*</span></label>
                    </div>',
                        'email'  => '<div class="comment-form-email">
                    <input  id="email"     name="email" required type="email" size="30" aria-describedby="email-notes"  pattern="\S+@[a-z]+.[a-z]+"  />
                    <label for="email">Email<span>*</span></label>
                    </div>',
                    ],
                ]); ?>
            </div>
        </div>
    </div>
<!--    <script>-->
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