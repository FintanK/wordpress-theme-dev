<?php get_header(); ?>
<hr class ="sixteen columns"/>
<h2><?php printf(__('Search results for: %s', 'responsive' ), '<span>' . get_search_query() . '</span>'); ?></h2>
<hr class ="sixteen columns"/>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();  //Loops through the posts ?>

        <article class ="sixteen columns post">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt('Read More...'); ?><a href ="<?php the_permalink(); ?>" class ="read-more">Read More</a></p>
        </article>

        <hr class ="sixteen columns"/>
    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>
      
