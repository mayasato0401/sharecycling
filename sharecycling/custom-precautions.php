<?php
/*
Template Name: 注意テンプレート
Template Post Type: post
*/
?>
        <section id="precautions">
            <div>
                <p class="title"><?php the_tiile(); ?></p>
            </div>

            <?php if(have_posts()):?>
                <?php while(have_posts()): the_post(); ?>

            <?php hte_content(); ?>

                <?php endwhile; ?>
            <?php endif; ?>
        </section>
                
