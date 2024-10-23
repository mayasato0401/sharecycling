<?php
/*
Template Name: Q&Aテンプレート
Template Post Type: post
*/
?>

<!-- <?php get_header(); ?> -->

        <!-- <section id="qa">
            <p class="title"><?php the_title(); ?></p> -->
    
            <details class="q-a">
            <?php
                $args = array(
                'post' => 'post',
                'category_name' => 'qa',
                'posts_per_page' => -1,
                );
                $posts = get_posts($args);
            ?>

            <?php foreach($posts as $post): ?>
            <?php setup_postdata($post); ?>

            <details class="q-a">
                <summary><?php the_title(); ?></summary>
                <p>
                    <?php 
                    $content = wp_trim_words( get_the_content() ,  500, '...');
                    echo $content; 
                    ?>
                </p> 
            </details>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <!-- </section> -->
<!-- 
<?php get_footer(); ?> -->