<div class="popup" id="main-popup">
    <div class="popup_body">
    <div onclick="document.location='#close';return false;" class="popup_close">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.6569 11.6571C11.5318 11.7821 11.3623 11.8523 11.1855 11.8523C11.0086 11.8523 10.8391 11.7821 10.714 11.6571L6 6.94304L1.28595 11.6571C1.16093 11.7821 0.99136 11.8523 0.81455 11.8523C0.63774 11.8523 0.46817 11.7821 0.343146 11.6571C0.218121 11.5321 0.147884 11.3625 0.147883 11.1857C0.147883 11.0089 0.218121 10.8393 0.343146 10.7143L5.05719 6.00023L0.343146 1.28619C0.218121 1.16116 0.147884 0.991593 0.147883 0.814783C0.147883 0.637972 0.218121 0.468402 0.343146 0.343378C0.46817 0.218353 0.637739 0.148116 0.81455 0.148116C0.991361 0.148116 1.16093 0.218353 1.28595 0.343378L6 5.05742L10.714 0.343378C10.8391 0.218353 11.0086 0.148116 11.1854 0.148116C11.3623 0.148116 11.5318 0.218353 11.6569 0.343378C11.7819 0.468402 11.8521 0.637972 11.8521 0.814783C11.8521 0.991593 11.7819 1.16116 11.6569 1.28619L6.94281 6.00023L11.6569 10.7143C11.7819 10.8393 11.8521 11.0089 11.8521 11.1857C11.8521 11.3625 11.7819 11.5321 11.6569 11.6571Z" fill="#221F20"/>
    </svg>
</div>
    <div class="pop_up__wrapper">
   <img class="popup_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/img/pop-up.png" />
        <div class="popup_tab">
            <div class="popup_tab__title">
                <?php if (have_rows('demo_repitor', 'option')) : ?>
                    <?php while (have_rows('demo_repitor', 'option')) : the_row(); ?>
                        <div class="popup_tab__btn"><?php the_sub_field('demo_name', 'option') ?></div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="popup_tab__item">
                <?php if (have_rows('demo_repitor', 'option')) : ?>
                    <?php while (have_rows('demo_repitor', 'option')) : the_row(); ?>
                    <div class="popup_item">
                        <p class="demo_title"><?php the_sub_field('demo_title', 'option') ?></p>
                        <p class="demo_description"><?php the_sub_field('demo_description', 'option') ?></p>
                        <img class="popup_img__item lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php the_sub_field('demo_img', 'option') ?>" alt="demo case" />
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
<script>
function tab(tab_btn, tab_posts) {
  if (tab_btn[0] !== undefined) {
    tab_btn[0].classList.add("_active");
    tab_posts[0].classList.add("_active");
    for (let i = 0; i < tab_btn.length; i++) {
      tab_btn[i].addEventListener("click", function () {
        tab_btn[i].classList.remove("_active");
        tab_posts[i].classList.remove("_active");
        for (let a = 0; a < tab_btn.length; a++) {
          tab_btn[a].classList.remove("_active");
          tab_posts[a].classList.remove("_active");
        }
        tab_btn[i].classList.add("_active");
        tab_posts[i].classList.add("_active");
      });
    }
  }
}
let popup_btn = document.getElementsByClassName("popup_tab__btn");
let popup_posts = document.getElementsByClassName("popup_item");
console.log(popup_btn);
tab(popup_btn, popup_posts); // corrected this line

</script>
<style>
    .popup_img__item{
        width: 100%;
        height: 100%;
        aspect-ratio:  auto;
        max-height: 185px;
    }
    .popup_img__item{
        margin: 10px 0;
    }
.popup_img {
    width: max-content;
    height: max-content;
    aspect-ratio: auto;
}
    .popup_tab__btn._active,
    .popup_tab__btn:hover{
        color: #bf1522;
        transition: color linear 0.3s;
    }
    .popup_tab__btn {
        position: relative;
        transition: color linear 0.3s;
        cursor: pointer;
    }
    .popup_tab__btn:hover:after,
    .popup_tab__btn._active:after{
        width: 100%;
    transition: 0.3s ease;
    }
    .popup_tab__btn:after{
        content: "";
    position: absolute;
    left: 0;
    width: 0;
    bottom: -2px;
    height: 1px;
    background: #bf1522;
    transition: 0.3s ease;
    }

    .popup_close:hover svg path{
        fill: #E93544;
        transition: linear 0.3s;
    }
    .popup_close{
        position: absolute;
        right: 30px;
        top: 20px;
        transition: linear 0.3s;
        cursor: pointer;
    }
    .popup_tab__title{
        padding-bottom: 10px;
    }
    .popup_tab__btn{
        font-family: "Poppins", Sans-serif;
    font-size: 12px;
    font-weight: 600;
    color: #7A7A7A;

    }
    .popup_tab__title{
        display: flex;
        flex-direction: row;
        gap: 15px;
    }
    .pop_up__wrapper .tab_link{
        color: #E93544;
        font-family: "Poppins", Sans-serif;
    font-size: 16px;
    font-weight: 400;
    }
    .pop_up__wrapper .demo_title{
        color: #000;
    font-family: "Poppins", Sans-serif;
    font-size: 18px;
    font-weight: 600;
    padding: 0 0 10px 0;
    margin: 0;
    }
    .pop_up__wrapper .demo_description{
        font-family: "Poppins", Sans-serif;
    font-size: 12px;
    font-weight: 400;
    color: #515151;
    padding: 0 0 10px 0;
    margin: 0;
    }
    .pop_up__wrapper{
        display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    }
    .popup_body{
        background: #fff;
        background: #fff;
    padding: 20px 60px;
    border-radius: 18px;
    max-width: 700px;
    position: relative;
    min-height: 410px;
    }
    .popup {
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.8);
  z-index: 20;
  align-items: center;
  justify-content: center;
  display: none;
  opacity: 0;
  visibility: hidden;
  padding: 15px;
  z-index: 999;
}
.popup:target {
  visibility: visible;
  opacity: 1;
  display: flex;
}
.popup_item._active{
    display: block;
}
.popup_item{
    display: none;
    min-height: 350px;
}
@media screen and (max-width: 992px){
    .popup_tab__btn,
    .popup_close{
        cursor: initial;
    }
}
@media screen and (max-width: 770px){
    .popup_img{
        display: none;
        
    }
    
    .popup_img__item{
        max-height: 580px;
        aspect-ratio: 400 / 214;
    }
    .popup_body{
        padding: 40px;
    }
    .popup_close {
        right: 20px;
    }
}
@media screen and (max-width: 576px){
    .pop_up__wrapper .tab_link svg{
        display: none;
    }
    .pop_up__wrapper .tab_link{
        width: 100%;
        background: #BF1522;
        display: block;
        color: #fff;
        padding: 10px 0;
        border-radius: 8px;
        text-align: center;
    }
    
}
@media screen and (max-width: 440px){
    .popup_img__item{
        margin: 10px 0 15px;
    }
    .popup_body{
        padding: 40px 20px;
    }
    .popup_close{
        right: 15px;
    }
    .pop_up__wrapper .tab_link{
        font-size: 14px;
    }
}
@media screen and (max-width: 370px){
    .pop_up__wrapper .tab_link{
        font-size: 12px;
    }
}
</style>