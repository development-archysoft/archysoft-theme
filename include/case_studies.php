<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="our_clients case_studies <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <?php if (get_sub_field("block_aske_title")) : ?>
            <h2 class="services_title">
                <?php the_sub_field("block_aske_title"); ?>
            </h2>
        <?php endif; ?>
        <div class="swiper studies_cs">
            <div class="swiper-wrapper">
                <?php if (have_rows('case_studies_slide')) : ?>
                    <?php while (have_rows('case_studies_slide')) : the_row(); ?>
                    <?php $img = get_sub_field('case_studies_slide_img'); ?>
                        <div id="<?php the_sub_field("case_studies_slide_atribute"); ?>" class="swiper-slide">
                            <div class="slide_contain__clients">
                            <div class="slide_wrapp__clients">
                          
                                <p class="clients_title">
                                    <?php the_sub_field("case_studies_slide_atribute_top"); ?>
                                </p>
                                <div class="clients_content">
                                    <?php the_sub_field("case_studies_slide_content"); ?>
                                </div>
                                <div class="btn_wr__cl">
                                    <?php if(get_sub_field('case_btn_first_link')): ?>
                                        <a aria-label="Archysoft case link" class="btn btn_cs_dark" href="<?php the_sub_field('case_btn_first_link'); ?>"><?php the_sub_field('case_btn_first_name'); ?></a>
                                    <?php endif; ?>
                                    <?php if(get_sub_field('case_btn_second_link')): ?>
                                        <a class="btn btn_cs_lt" href="<?php the_sub_field('case_btn_second_link'); ?>"><?php the_sub_field('case_btn_second_name'); ?></a>
                                    <?php endif; ?>
                                </div>
                                <div class="slide_wrapp__sub_item">
                                    <?php if(!empty($img)): ?>
                                    <img class="auth_wrapp_img lozad img_mob" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                                    <?php endif; ?>
                                    <p class="slide_wrapp__sub_tag">
                                        <?php the_sub_field("case_studies_slide_atribute_bot"); ?>
                                    </p>
                                </div>
                                </div>
                                <?php if(!empty($img)): ?>
                                <div class="auth_wrapp">
                                    <img class="auth_wrapp_img lozad img_pc" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                                </div>
                                <?php endif; ?>
                                </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="controll__wrapper">
        <div class="prev-studies">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="24.5" transform="matrix(-1 0 0 1 50 0)" stroke="black"/>
                <path d="M32.6255 25.4997C32.6255 25.6572 32.5629 25.8082 32.4516 25.9196C32.3402 26.0309 32.1892 26.0935 32.0317 26.0935H20.4024L24.733 30.4234C24.7882 30.4786 24.832 30.5441 24.8618 30.6161C24.8917 30.6882 24.907 30.7655 24.907 30.8435C24.907 30.9215 24.8917 30.9987 24.8618 31.0708C24.832 31.1429 24.7882 31.2084 24.733 31.2636C24.6779 31.3187 24.6124 31.3625 24.5403 31.3923C24.4682 31.4222 24.391 31.4376 24.313 31.4376C24.235 31.4376 24.1577 31.4222 24.0856 31.3923C24.0135 31.3625 23.9481 31.3187 23.8929 31.2636L18.5491 25.9198C18.4939 25.8647 18.4501 25.7992 18.4203 25.7271C18.3904 25.655 18.375 25.5777 18.375 25.4997C18.375 25.4217 18.3904 25.3444 18.4203 25.2724C18.4501 25.2003 18.4939 25.1348 18.5491 25.0796L23.8929 19.7359C24.0043 19.6245 24.1554 19.5619 24.313 19.5619C24.4705 19.5619 24.6216 19.6245 24.733 19.7359C24.8445 19.8473 24.907 19.9984 24.907 20.156C24.907 20.3135 24.8445 20.4646 24.733 20.576L20.4024 24.906H32.0317C32.1892 24.906 32.3402 24.9685 32.4516 25.0799C32.5629 25.1912 32.6255 25.3422 32.6255 25.4997Z" fill="black"/>
            </svg>
        </div>
        <div class="pag-studies"></div>
        <div class=" next-studies">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="24.5" transform="matrix(-1 0 0 1 50 0)" stroke="black"/>
                <path d="M32.6255 25.4997C32.6255 25.6572 32.5629 25.8082 32.4516 25.9196C32.3402 26.0309 32.1892 26.0935 32.0317 26.0935H20.4024L24.733 30.4234C24.7882 30.4786 24.832 30.5441 24.8618 30.6161C24.8917 30.6882 24.907 30.7655 24.907 30.8435C24.907 30.9215 24.8917 30.9987 24.8618 31.0708C24.832 31.1429 24.7882 31.2084 24.733 31.2636C24.6779 31.3187 24.6124 31.3625 24.5403 31.3923C24.4682 31.4222 24.391 31.4376 24.313 31.4376C24.235 31.4376 24.1577 31.4222 24.0856 31.3923C24.0135 31.3625 23.9481 31.3187 23.8929 31.2636L18.5491 25.9198C18.4939 25.8647 18.4501 25.7992 18.4203 25.7271C18.3904 25.655 18.375 25.5777 18.375 25.4997C18.375 25.4217 18.3904 25.3444 18.4203 25.2724C18.4501 25.2003 18.4939 25.1348 18.5491 25.0796L23.8929 19.7359C24.0043 19.6245 24.1554 19.5619 24.313 19.5619C24.4705 19.5619 24.6216 19.6245 24.733 19.7359C24.8445 19.8473 24.907 19.9984 24.907 20.156C24.907 20.3135 24.8445 20.4646 24.733 20.576L20.4024 24.906H32.0317C32.1892 24.906 32.3402 24.9685 32.4516 25.0799C32.5629 25.1912 32.6255 25.3422 32.6255 25.4997Z" fill="black"/>
            </svg>
        </div>
    </div>
</section>
