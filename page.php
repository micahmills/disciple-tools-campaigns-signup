<?php get_header(); ?>

<div class="container wrapper">
    <div class="content two-col">
        <div>

            <h1 class="section-title"><?php the_title() ?></h1>

            <?php the_content() ?>

        </div>
        <div>
            <button class="button-primary">
                Create a campaign site
            </button>
        </div>
    </div>
</div>

<?php get_footer(); ?>