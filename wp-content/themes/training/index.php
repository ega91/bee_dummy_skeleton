<?php get_header(); ?>

    <div>
        <?php while ( have_posts() ) : the_post(); ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <div>
                <?php the_content(); ?>
            </div>
            <div>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        <?php endwhile; ?>
    </div>

<?php get_footer(); ?>