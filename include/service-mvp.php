<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="mvp_block <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <div class="mvp_wrapper">
            <h2>
                Introducing Minimum Viable Products
            </h2>
            <p>
                It’s difficult to estimate the potential relevance of apps for users. Find this out not just from figures but from actual performance using MVP software development services.
            </p>
            <p>
                The minimum viable product is the most basic version of the solution you might be thinking of launching. The purpose of such projects is to:
            </p>
            <ul class="mvp_list">
                <li>
                <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mvp-icon/cloud.png' class="mvp_block__icon lozad"></div>
                    <p>
                        gather insights<br /> and data
                    </p>
                </li>
                <li>
                <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mvp-icon/rev.png' class="mvp_block__icon lozad"></div>
                    <p>
                        estimate how well new features <br />are getting adopted by users
                    </p>
                </li>
                <li>
                <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mvp-icon/fed.png' class="mvp_block__icon lozad"></div>
                    <p>
                        gather feedback from <br />both clients and employees
                    </p>
                </li>
                <li>
                <div style="background-image: url(data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==) ;" data-background-image='<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mvp-icon/lamp.png' class="mvp_block__icon lozad"></div>
                    <p>
                        validate a <br />business idea.
                    </p>
                </li>
            </ul>
        </div>
        <div class="mvp_prev__subtitle">
            All this you can receive from MVP solutions developed with Archysoft!
        </div>
    </div>
</section>
<style>
    .mvp_prev__subtitle{
        font-weight: 700;
font-size: calc(26px + 6*((100vw - 320px) /(1920 - 320)));
color: #000;
letter-spacing: -0.01em;
font-family: "Poppins", Sans-serif;
text-align: center;
margin: 60px 0 0 0;
    }
    .mvp_wrapper{
        border-radius: 20px;
        padding: 40px;
        background-color: #FFF1F3;
    }
    .mvp_list li{
        width: calc((100% / 4) - 40px / 4);
        display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    text-align: center;
    }
    .mvp_list{
        margin: 40px 0 0 0;
        padding: 0;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        list-style: none;
    }
    .mvp_block__icon{
        min-width: 50px;
    min-height: 50px;
    width: 50px;
    height: 50px;
    background-size: cover;
    background-position: center center;
    }
    .mvp_wrapper h2{
        font-weight: 600;
        font-size: calc(26px + 6*((100vw - 320px) /(1920 - 320)));
letter-spacing: -0.01em;
color: #000;
margin: 0 0 30px 0;
font-family: "Poppins", Sans-serif;
    }
   .mvp_wrapper p {
        font-weight: 400;
font-size: 16px;
font-family: "Poppins", Sans-serif;
color: #6B6669;
line-height: 150%;
margin: 20px 0;
    }
    .mvp_wrapper ul li p{
        margin: 0;
    }
    @media screen and (max-width: 1200px){
        .mvp_wrapper{
            padding: 40px 20px;
        }
        .mvp_prev__subtitle{
            text-align: start;
            margin: 40px 0 0 0;
        }
    }
    @media screen and (max-width: 992px){
        .mvp_prev__subtitle{
            text-align: center;
        }
        .mvp_list {
            flex-wrap: wrap;
            gap: 40px 0;
        }
        .mvp_list li{
            width: calc((100% / 2) - 20px / 2);
        }
        .mvp_list{
            margin: 30px 0 0 0;
        }
    }
    @media screen and (max-width: 600px){
        .mvp_wrapper ul li p br{
            display: none;
        }
        
    }
    @media screen and (max-width: 576px){
        .mvp_list li{
            flex-direction: row;
            width: 100%;
            text-align: start;
        }
        .mvp_list{
            gap: 20px;
        }
        .mvp_list li{
            gap: 10px;
        }
        .mvp_wrapper h2{
            margin-bottom: 30px;
        }
    }
    @media screen and (max-width: 370px){
        .mvp_prev__subtitle{
            font-size: 22px;
            margin: 30px 0 0 0;
        }
        .mvp_block__icon{
            min-width: 30px;
    min-height: 30px;
    width: 30px;
    height: 30px;
        }
        .mvp_wrapper p{
            font-size: 14px;
            margin: 10px 0;
        }
        .mvp_wrapper{
            padding: 30px 10px;
        }
        .mvp_wrapper h2{
            font-size: 22px;
        }
        .mvp_list{
            margin: 20px 0 0 0;
        }
        .mvp_wrapper h2{
            margin-bottom: 20px;
        }
    }
</style>