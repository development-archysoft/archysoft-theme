<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="augmentation <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <?php if (get_sub_field("block_aske_title")) : ?>
                <h2 class="services_title">
                    <?php the_sub_field("block_aske_title"); ?>
                </h2>
        <?php endif; ?>
        <div class="augmentation_wrapper">
            <?php if (get_sub_field("augmentation_title")) : ?>
                <div class="augmentation_tit">
                    <?php the_sub_field("augmentation_title"); ?>
                </div>
            <?php endif; ?>
            <div class="augmentation_wrap">
                <?php if (have_rows('augmentation_item')) : ?>
                    <ul class="augmentation_wrapper__item">
                        <?php while (have_rows('augmentation_item')) : the_row(); ?>
                            <li class="augmentation_item">
                                <div class="augmentation_title__wrapper">
                                    <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php the_sub_field("augmentation_item_img"); ?>' class="augmentation_icon lozad"></div>
                                    <span class="augmentation_title">
                                        <?php the_sub_field("augmentation_item_title"); ?>
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 1L7 7L1 1" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                                <p class="augmentation_item__content">
                                    <?php the_sub_field("augmentation_item_content"); ?>
                                </p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                        <?php if (have_rows('augmentation_item')) : ?>
                        <?php while (have_rows('augmentation_item')) : the_row(); ?>
                        <div class="augmentation_img__wrapper">
                        <p class="augmentation_img__title">
                            <?php the_sub_field("augmentation_img_title"); ?>
                        </p>
                        <?php $img = get_sub_field('augmentation_img'); ?>
                        <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo $img['url']; ?>' class="augmentation_item_img lozad"></div>
                    </div> 
                    <?php endwhile; ?>
                <?php endif; ?>
                    
                </div>
        </div>
    </div>
</section>

<style>
    .augmentation_item_img{
        width: 377px;
        height: 220px;
        background-size: contain;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .augmentation_item .augmentation_title{
      transition: color linear 0.3s;
      color: #221f20;
    }
    .augmentation_item:hover .augmentation_title,
    .augmentation_item.active .augmentation_title{
      transition: color linear 0.3s;
      color: #221f20;
    }
    .augmentation_item:hover .augmentation_title svg path,
    .augmentation_item.active .augmentation_title svg path{
      transition: color linear 0.3s;
      stroke: #bf1522;
    }
    @media screen and (max-width: 768px){
      .augmentation_item:hover .augmentation_title,
    .augmentation_item.active .augmentation_title{
      transition: color linear 0.3s;
      color: #221f20;
    }
    .augmentation_item:hover .augmentation_title svg path,
    .augmentation_item.active .augmentation_title svg path{
      transition: color linear 0.3s;
      stroke: #000;
    }
    }
</style>

<script>
     function toggles(faqItems, faqImages) {
    if (faqItems.length > 0) {
      // Додати клас "active" до першого елемента
      faqItems[0].classList.add("active");
      faqImages[0].classList.add("active");

      for (let i = 0; i < faqItems.length; i++) {
        faqItems[i].addEventListener("click", function () {
          // Зняти клас "active" з усіх елементів
          for (let j = 0; j < faqItems.length; j++) {
            faqItems[j].classList.remove("active");
            faqImages[j].classList.remove("active");
            // Сховати вміст всіх інших елементів
            let content = faqItems[j].querySelector(
              "p.augmentation_item__content"
            );
            if (content) {
              content.style.maxHeight = null;
            }
          }

          // Додати клас "active" тільки натиснутому елементу
          this.classList.add("active");
          faqImages[i].classList.add("active");

        });

        // Встановлення висоти p для першого елемента, який має клас "active"
        if (faqItems[i].classList.contains("active")) {
          let content = faqItems[i].querySelector(
            "p.augmentation_item__content"
          );
        }
      }
    }
  }

  let faqAugmentationItem =
    document.getElementsByClassName("augmentation_item");
  let faqAugmentationImg = document.getElementsByClassName(
    "augmentation_img__wrapper"
  );

  faqAugmentationItem = Array.from(faqAugmentationItem);
  faqAugmentationImg = Array.from(faqAugmentationImg);

  toggles(faqAugmentationItem, faqAugmentationImg);

</script>