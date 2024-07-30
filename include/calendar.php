<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="calendar <?php the_sub_field("retreat_from_the_block"); ?>">
    <svg width="1012" height="959" viewBox="0 0 1012 959" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_f_563_3832)">
        <path d="M579.508 398.646C694.551 486.816 760.122 594.42 725.966 638.986C691.81 683.551 570.861 648.203 455.819 560.033C340.776 471.864 275.204 364.26 309.36 319.694C343.516 275.128 464.465 310.476 579.508 398.646Z" fill="#E93544" />
      </g>
      <defs>
        <filter id="filter0_f_563_3832" x="0.316406" y="0.42041" width="1034.69" height="957.838" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
          <feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_563_3832" />
        </filter>
      </defs>
    </svg>
    <div class="container">
    <div class="calendar_wrapper">
            <?php if (get_sub_field("block_aske_title")) : ?>
                    <h2 class="calendar_title">
                        <?php the_sub_field("block_aske_title"); ?>
                    </h2>
            <?php endif; ?>
            <?php if (get_sub_field("calendar_description")) : ?>
                    <p class="calendar_subtitle">
                        <?php the_sub_field("calendar_description"); ?>
                    </p>
            <?php endif; ?>
            <?php $img = get_sub_field('calendar_img'); ?>
            <img class="calendly_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        </div>
        <div class="calendly-inline-widget " data-url="https://calendly.com/archy-sales/30min?month=2022-01&hide_event_type_details=1&hide_gdpr_banner=1" style="position: relative;" data-processed="true"><div class="calendly-spinner"><div class="calendly-bounce1"></div><div class="calendly-bounce2"></div><div class="calendly-bounce3"></div></div><iframe src="https://calendly.com/archy-sales/30min?embed_domain=www.archysoft.com&amp;embed_type=Inline&amp;primary_color=bf1522" width="100%" height="100%" frameborder="0" title="Select a Date &amp; Time - Calendly" loading="lazy"></iframe></div>
          <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    </div>
</section>
