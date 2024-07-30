<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="posts <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
    <?php if (get_sub_field("block_aske_title")) : ?>
            <h2 class="services_title">
                <?php the_sub_field("block_aske_title"); ?>
            </h2>
        <?php endif; ?>
        <?php
$posts = get_sub_field('posts_item');
if ($posts): ?>
  <div class="posts_container">
    <?php foreach ($posts as $post): 
        $permalink = get_permalink($post->ID);
        $title = get_the_title($post->ID);
        $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');
        $tags = get_the_tags($post->ID); // Отримати мітки поста 
        $categories = get_the_category($post->ID); ?>
        <div class="posts_item">
            <img onclick="window.open('<?php the_permalink(); ?>', '_self');return true;" class="post_img lozad" data-srcset="<?php echo esc_url($thumbnail_url); ?>" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?> " srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
            <div class="posts_item__wrapper">
                <div class="posts_tag__wrapper">
                 <?php if ($categories): ?>
                     <div class="post-categories">
                         <?php foreach ($categories as $category): ?>
                             <span><?php echo $category->name; ?></span>
                         <?php endforeach; ?>
                     </div>
                 <?php endif; ?>
                 <?php if ($tags): ?>
                     <div class="post-tags">
                         <?php foreach ($tags as $tag): ?>
                             <span>#<?php echo $tag->name; ?></span>
                         <?php endforeach; ?>
                     </div>
                 <?php endif; ?>
                </div>
                <h3 onclick="window.open('<?php the_permalink(); ?>', '_self');return true;">
                    <?php echo esc_html($title); ?>
                </h3>
            </div>
            <a class="post_to" href="<?php echo esc_url($permalink); ?>">
                Read
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.992759 9.50797C1.09239 9.6076 1.22751 9.66357 1.36841 9.66357C1.50931 9.66357 1.64443 9.6076 1.74406 9.50797L9.10164 2.15039L9.10118 7.62972C9.10117 7.69952 9.11492 7.76864 9.14164 7.83313C9.16835 7.89762 9.2075 7.95622 9.25686 8.00558C9.30622 8.05494 9.36482 8.09409 9.42931 8.1208C9.4938 8.14752 9.56292 8.16127 9.63272 8.16127C9.70252 8.16127 9.77164 8.14752 9.83613 8.1208C9.90062 8.09409 9.95922 8.05494 10.0086 8.00558C10.0579 7.95622 10.0971 7.89762 10.1238 7.83313C10.1505 7.76864 10.1643 7.69952 10.1643 7.62972L10.1643 0.868012C10.1643 0.798197 10.1506 0.72906 10.1239 0.664552C10.0972 0.600045 10.058 0.541432 10.0087 0.492066C9.9593 0.442699 9.90069 0.403547 9.83618 0.376848C9.77167 0.35015 9.70253 0.336427 9.63272 0.336466L2.87101 0.336465C2.73004 0.336465 2.59484 0.392467 2.49515 0.492152C2.39547 0.591836 2.33947 0.727037 2.33947 0.868011C2.33947 1.00899 2.39547 1.14419 2.49515 1.24387C2.59484 1.34355 2.73004 1.39956 2.87101 1.39956L8.35034 1.39909L0.992759 8.75667C0.89313 8.8563 0.837159 8.99142 0.837159 9.13232C0.837159 9.27322 0.89313 9.40834 0.992759 9.50797Z" fill="#BF1522" />
                </svg>
            </a>
        </div>
    <?php endforeach; ?>
  </div>
  <?php    wp_reset_postdata() ?>
<?php endif; ?>
    </div>
</section>
   
            