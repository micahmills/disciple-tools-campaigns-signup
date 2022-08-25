<?php get_header(); ?>

<div class="container wrapper">
    <h1 class="section-title"><?php the_title() ?></h1>
    <div class="content two-col">
        <div>
            <div class="content__text">

                <?php the_content() ?>

            </div>
        </div>
        <div class="center">
            <button class="button-primary">
                Create a campaign site
            </button>
        </div>
    </div>
</div>

<?php get_footer(); ?>