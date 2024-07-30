<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/style.css?ver=3" />
    <?php
$postid = get_the_ID();
$curyear = date('Y');

if ($postid) {
    $metatitle = get_post_meta($postid, '_yoast_wpseo_title', true);
    if (!$metatitle) {
        $metatitle = get_bloginfo('name');
    }
    $metadesc = get_post_meta($postid, '_yoast_wpseo_metadesc', true);
    if (!$metadesc) {
        $metadesc = get_bloginfo('description');
    }

    $og_type;
    if (is_front_page()) $og_type = 'website';
    else if (is_single()) $og_type = 'article';
    else $og_type = 'object';
?>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:type" content="<?php echo  $og_type; ?>" />
    <meta property="og:url" content="<?php echo home_url(); echo $_SERVER["REQUEST_URI"]; ?>" />
    <?php if (has_post_thumbnail()) : ?>
        <meta property="og:image" content="<?php the_post_thumbnail_url('medium'); ?>" />
    <?php else : ?>
        <meta property="og:image" content="" />
    <?php endif; ?>
    <?php if (is_single()) : ?>
        <meta property="og:description" content="<?php echo $metadesc; ?>" />
        <meta property="og:title" content="<?php echo $metatitle; ?>" />
    <?php elseif (is_front_page()) : ?>
        <meta property="og:description" content="<?php bloginfo('description'); ?>" />
        <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <?php elseif (is_page()) : ?>
        <meta property="og:description" content="<?php echo $metadesc; ?>" />
        <meta property="og:title" content="<?php echo $metatitle; ?>" />
    <?php endif;
}
?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NGRBRWJ');</script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "mxzjc80645");
    </script>
</head>
<body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGRBRWJ"
                        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
<header>
        <div class="container">
            <a class="logo" href="/" aria-label="logo">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Low-Code/No-Code Development Services">
            </a>
            <nav>
                <ul class="header_menu"> 
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="sub_menu">
                        <p>Our services</p>
                        <div class="childs_menu">
                        <div class="child_menu__wrapper">
                            <div class="child_menu__container">
                        <ul class="child_menu">
                            <li>
                                <span>
                                    Services
                                </span>
                            </li>
                            <li class="child_menu_prev">
                                <a href="/services-main">
                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.1565 0.854184L13.4607 4.39002C13.5748 4.46612 13.6684 4.56922 13.7331 4.69017C13.7978 4.81112 13.8317 4.94617 13.8317 5.08335C13.8317 5.22053 13.7978 5.35558 13.7331 5.47653C13.6684 5.59748 13.5748 5.70058 13.4607 5.77668L8.1565 9.31335C7.81423 9.54159 7.41205 9.66338 7.00066 9.66338C6.58928 9.66338 6.1871 9.54159 5.84483 9.31335L0.540665 5.77668C0.426534 5.70058 0.332954 5.59748 0.268231 5.47653C0.203509 5.35558 0.169645 5.22053 0.169645 5.08335C0.169645 4.94617 0.203509 4.81112 0.268231 4.69017C0.332954 4.56922 0.426534 4.46612 0.540665 4.39002L5.84483 0.854184C6.1871 0.625947 6.58928 0.50415 7.00066 0.50415C7.41205 0.50415 7.81423 0.625947 8.1565 0.854184ZM13.689 8.16002C13.5653 8.35793 13.4015 8.5277 13.2082 8.65835L8.1665 12.0617C7.82216 12.2942 7.41616 12.4184 7.00066 12.4184C6.58517 12.4184 6.17917 12.2942 5.83483 12.0617L0.793165 8.65835C0.491421 8.45479 0.264613 8.15804 0.14739 7.81345C0.0301672 7.46885 0.028976 7.09535 0.143998 6.75002L5.84483 10.55C6.16488 10.7633 6.53772 10.8838 6.92205 10.8982C7.30639 10.9126 7.68721 10.8204 8.02233 10.6317L8.15566 10.55L13.8565 6.75002C13.9344 6.98284 13.9597 7.23001 13.9308 7.47379C13.9018 7.71757 13.8192 7.95192 13.689 8.16002ZM13.689 10.8684C13.5653 11.0663 13.4015 11.236 13.2082 11.3667L8.1665 14.77C7.82216 15.0025 7.41616 15.1268 7.00066 15.1268C6.58517 15.1268 6.17917 15.0025 5.83483 14.77L0.793165 11.3667C0.491421 11.1631 0.264613 10.8664 0.14739 10.5218C0.0301672 10.1772 0.028976 9.80369 0.143998 9.45835L5.84483 13.2584C6.16488 13.4716 6.53772 13.5922 6.92205 13.6066C7.30639 13.621 7.68721 13.5287 8.02233 13.34L8.15566 13.2584L13.8565 9.45835C13.9344 9.69117 13.9597 9.93834 13.9308 10.1821C13.9018 10.4259 13.8192 10.6603 13.689 10.8684Z" fill="#54595F"/>
                                </svg>
                                    Service map
                                </a>
                            </li>
                            <li class="child-thrd">
                            <ul>
                           <li>
                                <a href="/services-main/creating-custom-web/">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.69219 7.13633C4.54063 7.02305 4.38867 6.96641 4.23711 6.96641H3.55586V11.0473H4.2375C4.38906 11.0473 4.54102 10.9906 4.69258 10.8773C4.84414 10.7641 4.91992 10.5941 4.91992 10.3672V7.64648C4.91953 7.41992 4.84336 7.24961 4.69219 7.13633ZM15.7852 0.25H1.71484C0.769531 0.25 0.00234375 1.01523 0 1.96094V16.0391C0.00234375 16.9848 0.769531 17.75 1.71484 17.75H15.7852C16.7309 17.75 17.4977 16.9848 17.5 16.0391V1.96094C17.4977 1.01523 16.7305 0.25 15.7852 0.25ZM6.02344 10.3746C6.02344 11.1094 5.56992 12.2227 4.13437 12.2203H2.32187V5.75703H4.17266C5.55703 5.75703 6.02266 6.86875 6.02305 7.60391L6.02344 10.3746ZM9.95625 6.91133H7.875V8.41211H9.14727V9.56719H7.875V11.0676H9.95664V12.2227H7.52773C7.0918 12.234 6.7293 11.8895 6.71836 11.4535V6.56641C6.70781 6.13086 7.05273 5.76914 7.48828 5.7582H9.95664L9.95625 6.91133ZM14.0047 11.4148C13.4891 12.616 12.5652 12.377 12.1516 11.4148L10.6465 5.75859H11.9187L13.0793 10.2008L14.2344 5.75859H15.507L14.0047 11.4148Z" fill="#54595F"/>
                                </svg>
                                    Web Development					
                                </a>
                            </li>
                            <li>
                                <a href="/services-main/it-staff-augmentation-services">
                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.3327 11.1666V12.8333H0.666016V11.1666C0.666016 11.1666 0.666016 7.8333 6.49935 7.8333C12.3327 7.8333 12.3327 11.1666 12.3327 11.1666ZM9.41602 3.24996C9.41602 2.6731 9.24496 2.10919 8.92447 1.62955C8.60398 1.14991 8.14846 0.77607 7.61551 0.555314C7.08256 0.334558 6.49611 0.276799 5.93034 0.389339C5.36456 0.501879 4.84486 0.779665 4.43695 1.18757C4.02905 1.59547 3.75127 2.11517 3.63873 2.68095C3.52619 3.24673 3.58394 3.83317 3.8047 4.36612C4.02546 4.89907 4.39929 5.3546 4.87894 5.67508C5.35858 5.99557 5.92249 6.16663 6.49935 6.16663C7.2729 6.16663 8.01476 5.85934 8.56174 5.31236C9.10872 4.76538 9.41602 4.02351 9.41602 3.24996ZM12.2827 7.8333C12.795 8.22975 13.2142 8.73366 13.5107 9.30955C13.8073 9.88545 13.9741 10.5193 13.9993 11.1666V12.8333H17.3327V11.1666C17.3327 11.1666 17.3327 8.14163 12.2827 7.8333ZM11.4993 0.333296C10.9258 0.330102 10.3648 0.501592 9.89102 0.824963C10.3972 1.53224 10.6694 2.3802 10.6694 3.24996C10.6694 4.11972 10.3972 4.96768 9.89102 5.67496C10.3648 5.99833 10.9258 6.16982 11.4993 6.16663C12.2729 6.16663 13.0148 5.85934 13.5617 5.31236C14.1087 4.76538 14.416 4.02351 14.416 3.24996C14.416 2.47641 14.1087 1.73455 13.5617 1.18757C13.0148 0.640587 12.2729 0.333296 11.4993 0.333296Z" fill="#54595F"/>
                                </svg>
                                    Team Augmentation					
                                </a>
                            </li>
                            <li>
                                <a href="/services-main/mvp-development">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4987 13.3335H14.1654C13.7051 13.3335 13.332 13.7066 13.332 14.1668V17.5002C13.332 17.9604 13.7051 18.3335 14.1654 18.3335H17.4987C17.9589 18.3335 18.332 17.9604 18.332 17.5002V14.1668C18.332 13.7066 17.9589 13.3335 17.4987 13.3335Z" stroke="#54595F" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.83268 13.3335H2.49935C2.03911 13.3335 1.66602 13.7066 1.66602 14.1668V17.5002C1.66602 17.9604 2.03911 18.3335 2.49935 18.3335H5.83268C6.29292 18.3335 6.66602 17.9604 6.66602 17.5002V14.1668C6.66602 13.7066 6.29292 13.3335 5.83268 13.3335Z" stroke="#54595F" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.6667 1.66675H8.33333C7.8731 1.66675 7.5 2.03984 7.5 2.50008V5.83341C7.5 6.29365 7.8731 6.66675 8.33333 6.66675H11.6667C12.1269 6.66675 12.5 6.29365 12.5 5.83341V2.50008C12.5 2.03984 12.1269 1.66675 11.6667 1.66675Z" stroke="#54595F" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4.16602 13.3334V10.8334C4.16602 10.6124 4.25381 10.4004 4.41009 10.2442C4.56637 10.0879 4.77834 10.0001 4.99935 10.0001H14.9993C15.2204 10.0001 15.4323 10.0879 15.5886 10.2442C15.7449 10.4004 15.8327 10.6124 15.8327 10.8334V13.3334M9.99935 10.0001V6.66675" stroke="#54595F" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>

                                </svg>
                                    NoCode | MVP Development									
                                </a>
                            </li>
                           </ul>
                            </li>
                        </ul>
                        <div class="header_tab">
                            <div class="header_tab__title">
                                <?php if (have_rows('demo_repitor', 'option')) : ?>
                                    <?php while (have_rows('demo_repitor', 'option')) : the_row(); ?>
                                        <div class="tab_btn"><?php the_sub_field('demo_name', 'option') ?></div>
                                    <?php endwhile; ?>
                                 <?php endif; ?>
                             </div>
                             <div class="header_tab__item">
                                <?php if (have_rows('demo_repitor', 'option')) : ?>
                                    <?php while (have_rows('demo_repitor', 'option')) : the_row(); ?>
                                    <div class="tab_item">
                                        <p class="demo_title"><?php the_sub_field('demo_title', 'option') ?></p>
                                        <p class="demo_description"><?php the_sub_field('demo_description', 'option') ?></p>
                                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field('demo_img', 'option') ?>' class="demo_img lozad"></div>
                                        <a class="tab_link" href="<?php the_sub_field('demo_link', 'option') ?>" target="_blank">
                                            View demo
                                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.992759 9.50797C1.09239 9.6076 1.22751 9.66357 1.36841 9.66357C1.50931 9.66357 1.64443 9.6076 1.74406 9.50797L9.10164 2.15039L9.10118 7.62972C9.10117 7.69952 9.11492 7.76864 9.14164 7.83313C9.16835 7.89762 9.2075 7.95622 9.25686 8.00558C9.30622 8.05494 9.36482 8.09409 9.42931 8.1208C9.4938 8.14752 9.56292 8.16127 9.63272 8.16127C9.70252 8.16127 9.77164 8.14752 9.83613 8.1208C9.90062 8.09409 9.95922 8.05494 10.0086 8.00558C10.0579 7.95622 10.0971 7.89762 10.1238 7.83313C10.1505 7.76864 10.1643 7.69952 10.1643 7.62972L10.1643 0.868012C10.1643 0.798197 10.1506 0.72906 10.1239 0.664552C10.0972 0.600045 10.058 0.541432 10.0087 0.492066C9.9593 0.442699 9.90069 0.403547 9.83618 0.376848C9.77167 0.35015 9.70253 0.336427 9.63272 0.336466L2.87101 0.336465C2.73004 0.336465 2.59484 0.392467 2.49515 0.492152C2.39547 0.591836 2.33947 0.727037 2.33947 0.868011C2.33947 1.00899 2.39547 1.14419 2.49515 1.24387C2.59484 1.34355 2.73004 1.39956 2.87101 1.39956L8.35034 1.39909L0.992759 8.75667C0.89313 8.8563 0.837159 8.99142 0.837159 9.13232C0.837159 9.27322 0.89313 9.40834 0.992759 9.50797Z" fill="#E93544"/>
                                            </svg>
                                        </a>
                                        </div>
                                        <?php endwhile; ?>
                                 <?php endif; ?>
                             </div>
                        </div>
                    </div>		
                    </div>
                </div>
                    </li>
                    <li >
                        <a href="/about-us">About us</a>
                    </li>
                    <li>
                        <a href="/case-study">Cases</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/vacancies">Vacancies</a>
                    </li>
                </ul>
                <div class="header_tab mob">
                            <div class="header_tab__title">
                                <?php if (have_rows('demo_repitor', 'option')) : ?>
                                    <?php while (have_rows('demo_repitor', 'option')) : the_row(); ?>
                                        <div class="tab_btn_mob"><?php the_sub_field('demo_name', 'option') ?></div>
                                    <?php endwhile; ?>
                                 <?php endif; ?>
                             </div>
                             <div class="header_tab__item">
                                <?php if (have_rows('demo_repitor', 'option')) : ?>
                                    <?php while (have_rows('demo_repitor', 'option')) : the_row(); ?>
                                    <div class="tab_item_mob">
                                        <p class="demo_title"><?php the_sub_field('demo_title', 'option') ?></p>
                                        <p class="demo_description"><?php the_sub_field('demo_description', 'option') ?></p>
                                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field('demo_img', 'option') ?>' class="demo_img lozad"></div>
                                        <a class="tab_link" href="<?php the_sub_field('demo_link', 'option') ?>" target="_blank">
                                            View demo
                                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.992759 9.50797C1.09239 9.6076 1.22751 9.66357 1.36841 9.66357C1.50931 9.66357 1.64443 9.6076 1.74406 9.50797L9.10164 2.15039L9.10118 7.62972C9.10117 7.69952 9.11492 7.76864 9.14164 7.83313C9.16835 7.89762 9.2075 7.95622 9.25686 8.00558C9.30622 8.05494 9.36482 8.09409 9.42931 8.1208C9.4938 8.14752 9.56292 8.16127 9.63272 8.16127C9.70252 8.16127 9.77164 8.14752 9.83613 8.1208C9.90062 8.09409 9.95922 8.05494 10.0086 8.00558C10.0579 7.95622 10.0971 7.89762 10.1238 7.83313C10.1505 7.76864 10.1643 7.69952 10.1643 7.62972L10.1643 0.868012C10.1643 0.798197 10.1506 0.72906 10.1239 0.664552C10.0972 0.600045 10.058 0.541432 10.0087 0.492066C9.9593 0.442699 9.90069 0.403547 9.83618 0.376848C9.77167 0.35015 9.70253 0.336427 9.63272 0.336466L2.87101 0.336465C2.73004 0.336465 2.59484 0.392467 2.49515 0.492152C2.39547 0.591836 2.33947 0.727037 2.33947 0.868011C2.33947 1.00899 2.39547 1.14419 2.49515 1.24387C2.59484 1.34355 2.73004 1.39956 2.87101 1.39956L8.35034 1.39909L0.992759 8.75667C0.89313 8.8563 0.837159 8.99142 0.837159 9.13232C0.837159 9.27322 0.89313 9.40834 0.992759 9.50797Z" fill="#E93544"/>
                                            </svg>
                                        </a>
                                        </div>
                                        <?php endwhile; ?>
                                 <?php endif; ?>
                             </div>
                        </div>
            </nav>
            <div class="header_contact">
                <ul class="header_second__menu">
                    <li ><a href="/contacts">Contact us</a></li>
                    <li class="header_btn"><a href="https://calendly.com/archy-sales/30min?" target="_blank">Book a call</a></li>
                </ul>
            </div>
            <div id="nav-icon4">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <?php if (have_rows('ancord_item')) : ?>  
        
            <div class="ancord_head">
            <svg class="prev-anc" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 13L1 7L7 1" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="ancord_wrapper">
         
                <?php while (have_rows('ancord_item')) : the_row(); ?>
                    <a href="<?php the_sub_field('ancord_to')?>"><?php the_sub_field('ancord_name')?></a>
                <?php endwhile; ?>
                </div>
                <svg class="next-anc" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L7 7L1 13" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        <?php endif; ?>
</header>