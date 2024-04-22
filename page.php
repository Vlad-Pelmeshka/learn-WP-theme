<?php get_header(); ?>


<div class="container">
    
    <h1><?php the_title(); ?></h1>

    <div class="main">
        <div class="content">
            <?php the_content(); ?>
        </div>
        <div class="sidebar">
            <h2>Read More</h2>
            <?php 
                $post_list = get_posts([
                    'post_type' => 'post'
                ]);

                foreach($post_list as $sidebar_post):
                    $post_img = get_the_post_thumbnail_url($sidebar_post->ID);
                ?>
                    <div class="sidebar-post">
                        <h3>
                            <a href="<?php echo get_permalink($sidebar_post->ID); ?>" >
                                <?php echo get_the_title($sidebar_post->ID); ?>
                            </a>

                        </h3>
                        <img src="<?php echo $post_img; ?>" alt="">

                        <div class="sidebar-post-content">
                            <?php echo get_the_content($sidebar_post->ID); ?>
                        </div>
                    </div>
                <?php endforeach;

            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
