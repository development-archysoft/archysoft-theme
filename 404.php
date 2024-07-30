<?php get_header(); ?>
<style>
    .error_page{
        width: 100%;
    padding: 100px 0 100px 0;
    margin-top: 87px;
    }
    .error_page .container{
        display: flex;
    flex-direction: column;
    align-items: center;
    gap: 50px;
    }
    h1{
        color: #211F20;
        line-height: 150%;
    font-size: 40px;
    font-weight: 600;
    text-align: center;
    }
    .home_btn:hover{
        background: #e93544;
    transition: 0.3s linear;
    }
    .home_btn{
        font-size: 16px;
    font-weight: 400;
    background-color: #C21B24;
    padding:10px 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    border: none;
    transition: 0.3s linear;
    }
    .error_page_img{
        width: max-content;
        height: max-content;
        aspect-ratio: 323 / 196;
    }
    @media screen and (max-width: 1000px){
        .error_page_img{
        width: 100%;
    }
    .error_page{
        padding: 80px 0;
    }
    .error_page .container{
        gap: 30px;
    }
    .home_btn{
        cursor: initial;
    }
    }
    @media screen and (max-width: 576px){
        h1{
            font-size: 28px;
        }
        .error_page {
    padding: 60px 0;
}
    }
</style>
<section class="error_page">
    <div class="container">
        <h1>
            Uuups..... Sorry this page does not exist
        </h1>
        <button class="home_btn" onclick="window.open('/', '_self');return true;">
            Go to home page
        </button>
        <img alt="Uuups..... Sorry this page does not exist" class="error_page_img" src="<?php bloginfo('template_url'); ?>/assets/img/404.png">
    </div>
</section>
<?php get_footer(); ?>