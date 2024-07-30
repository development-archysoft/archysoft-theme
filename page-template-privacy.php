
<?php get_header(); ?>
<?php 
/**
 * 
 * Template Name: Privacy
 * 
 * @package Archysoft
 */
?>
<div class="privacy">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>
<style>
    .privacy ul {
        display: flex;
    flex-direction: column;
    gap: 15px;
    }
    .privacy ul li::after{
        content: "";
    position: absolute;
    left: 5px;
    top: 9px;
    background: #7a7a7a;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    }
    .privacy ul li{
        position: relative;
    color: #7a7a7a;
    font-size: 16px;
    line-height: 150%;
    font-weight: 500;
    display: flex;
    flex-direction: column;
    gap: 5px;
    padding-left: 20px;
    }
    .privacy h2{
        font-size: calc(22px + 16*((100vw - 320px) /(1920 - 320)));
    line-height: 150%;
    color: #211f20;
    font-weight: 600;
    margin: 20px 0 30px;
    }
    .privacy h3{
        font-size: calc(18px + 8*((100vw - 320px) /(1920 - 320)));
    line-height: 150%;
    color: #211f20;
    font-weight: 500;
    margin: 15px 0 20px;
    }
    .privacy h1{
        font-size: calc(24px + 22*((100vw - 320px) /(1920 - 320)));
    line-height: 150%;
    color: #211f20;
    font-weight: 600;
    margin-bottom: 40px;
    }
    .privacy a{
        color: #BFC1C5;
    font-size: 16px;
    line-height: 130%;
    font-weight: 500;
    }
    .privacy p{
        color: #7a7a7a;
    font-size: 16px;
    line-height: 150%;
    font-weight: 400;
    margin: 15px 0;
    }
    .privacy{
        width: 100%;
    padding: 50px 0 100px 0;
    margin-top: 87px;
    }
    @media screen and (max-width: 576px){
        .privacy h1{
            margin-bottom: 20px;
        }
        .privacy p{
            margin: 10px 0;
        }
        .privacy h2{
            margin: 10px 0 20px;
        }
        .privacy h3{
            margin: 10px 0 15px;
        }
        .privacy ul{
            gap: 10px;
        }
        .privacy{
    padding: 50px 0 50px 0;

    }
    }
    @media screen and (max-width: 375px){
        .privacy h1{
         font-size: 22px;
        }

        .privacy h2{
            font-size: 20px;
        }
        .privacy h3{
            font-size: 18px;
        }
    }
</style>
<?php get_footer(); ?>