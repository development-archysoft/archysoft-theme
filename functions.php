<?php
 function format_phone_number($phone) {

    // Видалення дужок, пробілів і дефісів з номера телефону
    $clean_phone = preg_replace('/[^\d]+/', '', $phone); 

    return $clean_phone;
}
add_theme_support( 'title-tag' );
add_action('init', 'register_post_type_case');
function register_post_type_case()
{
	$labels = array(
		'name' => ' Cases',
		'singular_name' => 'Case',
		'add_new' => 'Add case',
		'add_new_item' => 'Add new case',
		'edit_item' => 'Edit case',
		'new_item' => 'New case',
		'all_items' => 'All cases',
		'view_item' => 'Watch case',
		'search_items' => 'Loock case',
		'not_found' =>  'Case didnt find',
		'not_found_in_trash' => 'No case',
		'menu_name' => 'Cases'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'has_archive' => true,
		'menu_position' => 6,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments'), // Додано підтримку коментарів
		'taxonomies' => array('case_category', 'case_tag') // Створюємо власні таксономії
	);
	register_post_type('case', $args);
	
	// Реєстрація таксономій
	register_taxonomy('case_category', 'case', array(
	    'label' => 'Categories',
	    'hierarchical' => true,
	    'public' => true,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'rewrite' => array('slug' => 'case-category'),
	));

	register_taxonomy('case_tag', 'case', array(
	    'label' => 'Tags',
	    'hierarchical' => false,
	    'public' => true,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'rewrite' => array('slug' => 'case-tag'),
	));
}


add_action('init', 'register_post_type_vacancies');
function register_post_type_vacancies()
{
	$labels = array(
		'name' => ' Vacancies',
		'singular_name' => 'Vacancies',
		'add_new' => 'Add vacancies',
		'add_new_item' => 'Add new vacancies',
		'edit_item' => 'Edit vacancies',
		'new_item' => 'New vacancies',
		'all_items' => 'All vacancies',
		'view_item' => 'Watch vacancies',
		'search_items' => 'Loock vacancies',
		'not_found' =>  'Vacancies didnt find',
		'not_found_in_trash' => 'No vacancies',
		'menu_name' => 'Vacancies'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'has_archive' => true,
		'menu_position' => 7,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments'),
	);
	register_post_type('vacancies', $args);
	
}



 function my_theme_setup() {
     add_theme_support( 'excerpt' );
 }
 add_action( 'after_setup_theme', 'my_theme_setup' );
 

 add_theme_support('post-thumbnails');
 
 
 
 // Видалення wp стилів //
 
 function disable_emojis()
 {
     remove_action('wp_head', 'print_emoji_detection_script', 7);
     remove_action('admin_print_scripts', 'print_emoji_detection_script');
     remove_action('wp_print_styles', 'print_emoji_styles');
     remove_action('admin_print_styles', 'print_emoji_styles');
     remove_filter('the_content_feed', 'wp_staticize_emoji');
     remove_filter('comment_text_rss', 'wp_staticize_emoji');
     remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
     add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
     add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
 }
 add_action('init', 'disable_emojis');
 
 /**
  * Filter function used to remove the tinymce emoji plugin.
  * 
  * @param array $plugins 
  * @return array Difference betwen the two arrays
  */
 function disable_emojis_tinymce($plugins)
 {
     if (is_array($plugins)) {
         return array_diff($plugins, array('wpemoji'));
     } else {
         return array();
     }
 }
 
 /**
  * Remove emoji CDN hostname from DNS prefetching hints.
  *
  * @param array $urls URLs to print for resource hints.
  * @param string $relation_type The relation type the URLs are printed for.
  * @return array Difference betwen the two arrays.
  */
 function disable_emojis_remove_dns_prefetch($urls, $relation_type)
 {
     if ('dns-prefetch' == $relation_type) {
         /** This filter is documented in wp-includes/formatting.php */
         $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
 
         $urls = array_diff($urls, array($emoji_svg_url));
     }
 
     return $urls;
 }
 
 add_action('wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20);
 function mywptheme_child_deregister_styles()
 {
     wp_dequeue_style('classic-theme-styles');
 }
 
 //Remove Gutenberg Block Library CSS from loading on the frontend
 function smartwp_remove_wp_block_library_css()
 {
     wp_dequeue_style('wp-block-library');
     wp_dequeue_style('wp-block-library-theme');
 }
 add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);
 // Видалення wp стилів //
 function my_deregister_scripts()
 {
     wp_deregister_script('wp-embed');
 }
 add_action('wp_footer', 'my_deregister_scripts');
 
 add_filter('big_image_size_threshold', '__return_false');
 function true_supported_image_sizes($sizes)
 {
     return array('thumbnail', 'medium', 'large');
 }
 add_filter('intermediate_image_sizes', 'true_supported_image_sizes');
 

class comment_walker extends Walker_Comment
{
	var $tree_type = 'comment';
	var $db_fields = array('parent' => 'comment_parent', 'id' => 'comment_ID');

	// constructor – wrapper for the comments list
	function __construct()
	{ ?>
		<div class="comments-list">
		<?php }
	// start_lvl – wrapper for child comments list
	function start_lvl(&$output, $depth = 0, $args = array())
	{
		$GLOBALS['comment_depth'] = $depth + 2; ?>

			<div class="child-comments comments-list">

			<?php }

		// end_lvl – closing wrapper for child comments list
		function end_lvl(&$output, $depth = 0, $args = array())
		{
			$GLOBALS['comment_depth'] = $depth + 2; ?>

			</div>
		<?php }

		// start_el – HTML for comment template
		function start_el(&$output, $comment, $depth = 0, $args = array(), $id = 0)
		{
			$depth++;
			$GLOBALS['comment_depth'] = $depth;
			$GLOBALS['comment'] = $comment;
			$parent_class = (empty($args['has_children']) ? '' : 'parent');

			if ('div' == $args['style']) {
				$tag = 'div';
				$add_below = 'comment';
			} else {
				$tag = 'div';
				$add_below = 'comment';
			} ?>

			<div <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>" itemtype="http://schema.org/Comment" itemprop="comment" itemscope>
				<div class="comments_wrap_body">
					<figure class="gravatar lozad" data-background-image="<?php echo  get_avatar_url($comment, ['size' => '65', 'default' => 'mystery']); ?>"></figure>
					<div class="comments_wrap_content">
						<div class="comment-meta post-meta" role="complementary">
							<div class="comment-author">
								<div class="comment-author-wrap">
									<?php comment_author();
									if ($comment->comment_parent != '0') : ?>
										<div class="comment-author-wrap-parent">
											<?php comment_author($comment->comment_parent); ?>
										</div>
									<?php
									endif;
									?>
								</div>
								<time class="comment-meta-item" datetime="<?php comment_date() ?>" itemprop="datePublished">
									<?php comment_date() ?>
								</time>
							</div>
							<?php if ($comment->comment_approved == '0') : ?>
								<p class="comment-meta-item">Your comment is awaiting moderation.</p>
							<?php endif; ?>
						</div>
						<div class="comment-content post-content">
							<div itemprop="text"><?php comment_text() ?></div>
							<div class="comment_reply_wrap">
								<?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
							</div>
						</div>
					</div>
				</div>
			<?php }
		// end_el – closing HTML for comment template
		function end_el(&$output, $comment, $depth = 0, $args = array())
		{ ?>
			</div>
		<?php }
		// destructor – closing wrapper for the comments list
		function __destruct()
		{ ?>
		</div>
<?php }
	}

	function move_form_comment($fields)
	{
		$comment_field = $fields['comment'];
		unset($fields['comment']);
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter('comment_form_fields', 'move_form_comment');
	add_filter('comments_template_query_args', 'change_comments_template_order');
	function change_comments_template_order($args)
	{
		$args['order'] = 'DESC';
		return $args;
	}