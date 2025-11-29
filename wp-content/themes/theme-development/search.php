<?php get_header(); ?>




<h1>this search result</h1>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
             <?php the_post(); ?>
             <h2>
                <a href="<?php the_permalink(); ?>">  <?php the_title(); ?> </a>
               
            </h2>
             <h2><?php the_content(); ?></h2>
             <?php the_category() ?>
             <?php the_date() ?>
             <?php the_author() ?>
             <?php the_tags() ?>
             <!-- <h4><?php the_excerpt(); ?></h4> -->


        <?php endwhile; ?>


    <?php else: ?>
        <?php echo "no posts found" ?>

    <?php endif ?>




</main>


<?php get_sidebar(); ?>


<?php get_footer(); ?>