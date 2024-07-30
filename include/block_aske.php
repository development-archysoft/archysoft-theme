<section <?php if((get_sub_field("ancord_to"))): ?> id="<?php the_sub_field("ancord_to"); ?>"<?php endif; ?> class="question <?php the_sub_field("retreat_from_the_block"); ?>">
    <div class="container">
        <?php if (get_sub_field("block_aske_title")) : ?>
            <h2 class="services_title">
                <?php the_sub_field("block_aske_title"); ?>
            </h2>
        <?php endif; ?>
        <div class="question_block">
            <?php if (have_rows('case_asked_answer')) : ?>
                <?php while (have_rows('case_asked_answer')) : the_row(); ?>
                    <div class="question_block_item">
                        <h3 class="question_block_asked">
                            <?php the_sub_field("case_asked_title"); ?>
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 1L7 7L1 1" stroke="#818386" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </h3>
                        <p class="question_block_answer">
                            <?php the_sub_field("case_asked_answer"); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>
