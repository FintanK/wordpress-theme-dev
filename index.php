<?php get_header(); ?>

<hr class ="sixteen columns"/>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();  //Loops through the posts ?>
        <article class ="sixteen columns post" itemscope itemtype="http://schema.org/Article">
           <a href ="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h2 itemprop="name"><?php the_title(); ?></h2></a>
            <p class="postmetadata">Posted in <?php the_category(', ') ?> <strong>|</strong> <time itemprop="dateCreated"><?php the_date(); ?></time> <strong>|</strong>
                <?php edit_post_link('Edit', '', '<strong>|</strong>'); ?> <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments»'); ?></p>
            <p><?php the_excerpt('Read More...'); ?></p>
        </article>
        <hr class ="sixteen columns"/>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
?>
      
