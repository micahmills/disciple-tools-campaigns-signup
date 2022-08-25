<?php get_header(); ?>

    <h1 class="section-title"><?php the_title() ?></h1>
    <div class="content two-col">
        <div class="content__text">

            <?php the_content() ?>

        </div>
        <div class="center">
            <button class="button-primary">
                Create a campaign site
            </button>
        </div>
    </div>

<?php get_footer(); ?>
