<?php get_header(); ?>

        <hr class ="sixteen columns"/>     

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post();  //Loops through the posts ?>

                <article id = "content" class = "sixteen columns post" itemscope itemtype="http://schema.org/Article">
                    <h2 itemprop="name"><?php
                        the_title();
                        ?></h2>
                    <time itemprop="dateCreated"><?php the_date(); ?></time>
                    <p itemprop="text"><?php the_content('Read More...'); ?></p>
                    <p>Posted in <?php the_category(', '); ?></p>
                    <p><?php post_comments_feed_link('Subscribe to all comments'); ?></p>

                    <?php the_tags('Tags:', ', ', ''); ?> 
                    
                    <hr class ="sixteen columns"/> 
                    
                    <?php comments_template( '', true ); ?>
                    
                <?php endwhile; ?>
                    
                

            <?php else: ?>

                <h2>Not Found</h2>
                <p>The article you have requested does not exist <a href = "index.php">Back to site</a></p>

            <?php endif; ?>

        </article>


<?php get_footer(); ?>