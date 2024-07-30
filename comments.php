<?php
wp_list_comments(
	array(
		'walker'      => new comment_walker(),
		'short_ping'  => true,
		'style'       => 'div',
	)
);
