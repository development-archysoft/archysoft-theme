<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="video <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <?php if (get_sub_field("block_aske_title")) : ?>
                <h2 class="services_title">
                    <?php the_sub_field("block_aske_title"); ?>
                </h2>
        <?php endif; ?>
        <div class="video_container">
        <?php if (have_rows('video_repiter')) : ?>
            <?php while (have_rows('video_repiter')) : the_row(); ?>
                <div class="video_wrapper">
                    <iframe class="lozad" width="100%" height="100%" data-src="<?php the_sub_field("video_link"); ?>" title="YouTube video player" loading="lazy" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<style>
    .hidden {
    display: none;
}

    .video_container_img {
        position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;

    }
    .video_wrapper::after:hover{
        transition: 0.3s ease ;
    transform: scale(1.1);    }
    .video_wrapper{
        position: relative;
    }
    .video .container{
        display: flex;
        flex-direction: column;
        gap: 45px;
    }
    .video_wrapper iframe {
    width: 100%;
    max-width: 900px;
    aspect-ratio: 3.6 / 2;
}
.video_container{
    display: flex;
    justify-content: center;
    align-items: center;
}
.video_wrapper{
    width: 100%;
    max-width: 900px;
}
@media screen and (max-width: 992px){
    .video .container{
        gap: 30px;
    }
}
</style>