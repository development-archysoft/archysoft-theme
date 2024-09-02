<footer>
    <div class="container">
        <div class="footer_left">
            <img class="logo_white pc lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-white.svg" alt="Low-Code/No-Code Development Services">
            <div class="footer_menu__wrapper">
                <ul class="foote_menu">
                    <li>
                        <p class="footer_menu__title">
                            Company
                        </p>
                    </li>
                    <li>
                    <ul class="footer_sub_menu">
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/about-us">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="/case-study">
                            Cases
                        </a>
                    </li>
                    <li>
                        <a href="/blog">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="/vacancies">
                            Vacancies
                        </a>
                    </li>
                    </ul>
                    </li>
                </ul>
                <ul class="foote_menu second_foote_menu">
                    <li>
                        <p class="footer_menu__title">
                        Services
                        </p>
                    </li>
                    <li>
                    <ul class="footer_sub_menu">
                    <li>
                        <a href="/services-main">
                            Service map
                        </a>
                    </li>
                    <li>
                        <a href="/services-main/creating-custom-web/">
                            Custom Web development
                        </a>
                    </li>
                    <li>
                        <a href="/services-main/mvp-development">
                            NoCode | MVP Development​
                        </a>
                    </li>
                    <li>
                        <a href="/services-main/it-staff-augmentation-services">
                            Team Augmentation​
                        </a>
                    </li>
                    <li>
                        <a href="/services-main/it-staff-augmentation-services">
                            Hello Code
                        </a>
                    </li>
                    </ul>
                    </li>
                </ul>
                <ul class="foote_menu not_wp">
                    <li>
                        <p class="footer_menu__title">
                            Contact
                        </p>
                    </li>
                    <?php 
                    $phone = get_field('phone', 'option');
                    $email = get_field('email', 'option');
                    $adress = get_field('adress', 'option');
                    $telegram = get_field('telegram', 'option');
                    $link = get_field('linkedin', 'option');
                    if(!empty($phone)): ?>
                    <li>
                        <a href="tel:<?php echo format_phone_number($phone) ?>">
                            <?php echo $phone; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($email)): ?>
                    <li>
                        <a href="mailto:<?php echo $email; ?>">
                        <?php echo $email; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($adress)): ?>
                    <li>
                      <p>
                        <?php echo $adress; ?>
                      </p>
                    </li>
                    <?php endif; ?>
                    <li class="social_ftr">
                    <?php if(!empty($telegram)): ?>
                        <a href="<?php echo $telegram; ?>" aria-label="telegram"  target="_blank">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.65 0.105204L0.933877 6.62189C-0.275178 7.08512 -0.268184 7.7285 0.71205 8.0154L5.2605 9.36887L15.7843 3.03519C16.2819 2.74638 16.7365 2.90175 16.3628 3.21819L7.83648 10.5584H7.83448L7.83648 10.5594L7.52273 15.0315C7.98237 15.0315 8.18521 14.8304 8.44301 14.5931L10.6523 12.5438L15.2477 15.7817C16.095 16.2268 16.7036 15.998 16.9144 15.0334L19.931 1.47202C20.2398 0.291068 19.4584 -0.243649 18.65 0.105204Z" fill="#818386"/>
                        </svg>
                        </a>
                        <?php endif; ?>
                        <?php if(!empty($link)): ?>
                            <a aria-label="linkedin" href="<?php echo $link; ?>" target="_blank">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.09091C0 1.48484 0.202708 0.984836 0.608108 0.590909C1.01351 0.196964 1.54055 0 2.18919 0C2.82626 0 3.34169 0.193927 3.73552 0.581818C4.14092 0.981818 4.34363 1.50302 4.34363 2.14545C4.34363 2.72727 4.14672 3.21211 3.7529 3.6C3.3475 4 2.81467 4.2 2.15444 4.2H2.13707C1.49999 4.2 0.984562 4 0.590734 3.6C0.196905 3.2 0 2.69696 0 2.09091ZM0.225869 18V5.85455H4.08301V18H0.225869ZM6.22008 18H10.0772V11.2182C10.0772 10.7939 10.1236 10.4667 10.2162 10.2364C10.3784 9.82424 10.6245 9.47575 10.9546 9.19091C11.2847 8.90605 11.6988 8.76364 12.1969 8.76364C13.4942 8.76364 14.1429 9.67878 14.1429 11.5091V18H18V11.0364C18 9.24242 17.5946 7.88182 16.7838 6.95455C15.973 6.02727 14.9016 5.56364 13.5695 5.56364C12.0753 5.56364 10.9112 6.23636 10.0772 7.58182V7.61818H10.0598L10.0772 7.58182V5.85455H6.22008C6.24324 6.24242 6.25483 7.44847 6.25483 9.47273C6.25483 11.497 6.24324 14.3394 6.22008 18Z" fill="#818386" />
                            </svg>
                            </a>
                        <?php endif; ?>
                    </li>
                
                </ul>
            </div>
<!--            <div class="footer_item__bottom">-->
<!--                <div class="footer_sub">-->
<!--                    <p>Subscribe </br>our newsletter</p>-->
<!--                    <a aria-label="subscribe" class="btn_def elementor-button elementor-button-link elementor-size-sm" href="#subscribe-popup">Subscribe</a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <div class="footer_right">
            <div class="mobile_footer_prev">
                <img class="logo_white lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-white.svg" alt="Low-Code/No-Code Development Services">
                <div class="social_footer mob">
                <?php if(!empty($telegram)): ?>
                        <a aria-label="telegram" href="<?php echo $telegram; ?>" target="_blank">
                        <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.65 0.105204L0.933877 6.62189C-0.275178 7.08512 -0.268184 7.7285 0.71205 8.0154L5.2605 9.36887L15.7843 3.03519C16.2819 2.74638 16.7365 2.90175 16.3628 3.21819L7.83648 10.5584H7.83448L7.83648 10.5594L7.52273 15.0315C7.98237 15.0315 8.18521 14.8304 8.44301 14.5931L10.6523 12.5438L15.2477 15.7817C16.095 16.2268 16.7036 15.998 16.9144 15.0334L19.931 1.47202C20.2398 0.291068 19.4584 -0.243649 18.65 0.105204Z" fill="#818386"/>
                        </svg>
                        </a>
                        <?php endif; ?>
                        <?php if(!empty($link)): ?>
                            <a aria-label="linkedin" href="<?php echo $link; ?>" target="_blank">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 2.09091C0 1.48484 0.202708 0.984836 0.608108 0.590909C1.01351 0.196964 1.54055 0 2.18919 0C2.82626 0 3.34169 0.193927 3.73552 0.581818C4.14092 0.981818 4.34363 1.50302 4.34363 2.14545C4.34363 2.72727 4.14672 3.21211 3.7529 3.6C3.3475 4 2.81467 4.2 2.15444 4.2H2.13707C1.49999 4.2 0.984562 4 0.590734 3.6C0.196905 3.2 0 2.69696 0 2.09091ZM0.225869 18V5.85455H4.08301V18H0.225869ZM6.22008 18H10.0772V11.2182C10.0772 10.7939 10.1236 10.4667 10.2162 10.2364C10.3784 9.82424 10.6245 9.47575 10.9546 9.19091C11.2847 8.90605 11.6988 8.76364 12.1969 8.76364C13.4942 8.76364 14.1429 9.67878 14.1429 11.5091V18H18V11.0364C18 9.24242 17.5946 7.88182 16.7838 6.95455C15.973 6.02727 14.9016 5.56364 13.5695 5.56364C12.0753 5.56364 10.9112 6.23636 10.0772 7.58182V7.61818H10.0598L10.0772 7.58182V5.85455H6.22008C6.24324 6.24242 6.25483 7.44847 6.25483 9.47273C6.25483 11.497 6.24324 14.3394 6.22008 18Z" fill="#818386" />
                            </svg>
                            </a>
                        <?php endif; ?>
                </div>
            </div>
            <div class="footer_form_wrapper">
                <p class="footer_form_title">
                    Leave a request to contact us
                </p>
<!--             <form enctype="multipart/form-data" method="POST" class="footer_contact_form">-->
<!--    <input type="hidden" name="form_id" value="footer_contact_form"> -->
<!--    <label>-->
<!--        <input name="name" type="text" required="" placeholder="Your name">-->
<!--    </label>-->
<!--    <label>-->
<!--        <input name="email" type="email" required="" placeholder="Your email" pattern="\S+@[a-z]+.[a-z]+">-->
<!--    </label>-->
<!--    <textarea name="message" required="" placeholder="Your question"></textarea>-->
<!--    <input class="footer_contact_submit btn" type="submit" value="Leave a request">-->
<!--</form>-->
<!--                <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>-->
<!--                <script>-->
<!--                    hbspt.forms.create({-->
<!--                        region: "eu1",-->
<!--                        portalId: "25327294",-->
<!--                        formId: "616fea1b-319c-4d8b-ad3f-8e7c25246c06"-->
<!--                    });-->
<!--                </script>-->

                 <?php echo do_shortcode('[hubspot type="form" portal="25327294" id="616fea1b-319c-4d8b-ad3f-8e7c25246c06"]') ?>

                 <div class="footer_send_title">Thank you for your message. It has been sent.</div>
            </div>
        </div>
    </div>
    <?php get_template_part('include/popup_tab'); ?>
    <?php
//        get_template_part('include/popup_subscribe');
    ?>


</footer>
<?php //get_template_part('include/cookie'); ?>
</div>
<script src="<?php bloginfo('template_url'); ?>/assets/js/lozad.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js?ver=9"></script>
<script>
    let allreadyCalled = false;

    function script01() {
        if (!allreadyCalled) {
            allreadyCalled = true;
            var script = document.createElement("SCRIPT"),
                head = document.getElementsByTagName("head")[0];
            script.type = "text/javascript";
            script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js";
            script.async = false;
            head.appendChild(script);
            // (function(w, d, s, l, i) {
            //     w[l] = w[l] || [];
            //     w[l].push({
            //         'gtm.start': new Date().getTime(),
            //         event: 'gtm.js'
            //     });
            //     var f = d.getElementsByTagName(s)[0],
            //         j = d.createElement(s),
            //         dl = l != 'dataLayer' ? '&l=' + l : '';
            //     j.async = true;
            //     j.src =
            //         'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            //     f.parentNode.insertBefore(j, f);
            // })(window, document, 'script', 'dataLayer', 'G-M7DDRVCGKK');
            setTimeout(script02, 1000);
        }
    };
</script>
<script>
    window.addEventListener('scroll', function() {
        script01();
    })
    setTimeout(script01, 3000);
</script>
<script>
    function script02() {
        var script = document.createElement("SCRIPT"),
            head = document.getElementsByTagName("head")[0];
        script.type = "text/javascript";
        script.src = "<?php echo get_template_directory_uri() . '/assets/js/script.js?' . filemtime(get_template_directory() . '/assets/js/script.js'); ?>";
        script.async = false;
        head.appendChild(script);
        var script = document.createElement("SCRIPT"),
            head = document.getElementsByTagName("head")[0];
        script.type = "text/javascript";
        script.src = "<?php bloginfo('template_url'); ?>/assets/js/swiper.js";
        script.async = false;
        head.appendChild(script);
        setTimeout(script03, 500);
    };

    function script03() {
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          lazy: true,
          autoplay: {
            delay: 3000,
          },
          breakpoints: {
            470: {
              slidesPerView: 4,
            },
            670: {
              slidesPerView: 5,
            },
            1200: {
              slidesPerView: 6,
            },
          },
        });
        var swiper = new Swiper(".studies_cs", {
            pagination: {
              el: ".pag-studies",
              type: "fraction",
            },
            navigation: {
              nextEl: ".next-studies",
              prevEl: ".prev-studies",
            },
            autoHeight: true,
            spaceBetween: 50,
        });
        if (window.innerWidth <= 650) {
        var swiper = new Swiper(".achivmentl", {
        effect: "coverflow",
        pagination: {
            el: ".achivmentl-pagination",
        },
        autoplay: {
            delay: 2000,
        },
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: false,
        },
        });
        }
        var swiper = new Swiper(".clients", {
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
  autoHeight: true,
});
    };
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php wp_footer(); ?>
</body>
</html>