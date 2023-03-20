<?php
/**
 * 
 * Template name: Home Page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package second_theme
 */

get_header();

$post_id = get_the_ID();
?>

    <div class="site-wrapper">
        <div class="home-title">
            <h3><?php echo get_field('homepage_title' , $post_id);?></h3>
            <div class="title-sidebar">
                <p><?php echo get_field('filter_post' , $post_id);?></p>
                <span>
                    <h5><?php echo get_field('all_categories' , $post_id);?></h5>
                    <img src="wp-content/themes/second_theme/asset/icons/downarrow.png" alt="">
                </span>
            </div>

        </div>
     </div>

    <section class="blog-cards-section">
        <div class="site-wrapper">
            <div class="blog-cards-wrapper">
                <div class="blog-style-wrapper">
                <?php $args = [
                  'post_type' => 'post',
                  'post_per_page' => 5,
                 ];
                    $output = new \WP_Query($args);

                    $post = the_post();
                    
                    if($output->have_posts()){
                        $count = 0;
                        while ( $output->have_posts() ) {
                          $output->the_post();
                          $post_id = get_the_ID();
                          $the_post = get_post($post_id);
                          $post_content = strip_tags($the_post->post_content);
                          $count ++;
                         ?>
                            <div class="wrapp">
                                <div class="wrapp-image">
                                    <img src="<?php  echo get_the_post_thumbnail_url();?>" alt="">
                                </div>

                                <div class="wrapp-content"> 
                                    <h3><?php echo get_the_title(); ?></h3>
                                    <p> 
                                        <?php if($count === 1){
                                            echo truncate($post_content, 148);
                                        } else { 
                                            echo truncate($post_content, 90); 
                                        } ?>
                                    </p>
                                    <span>
                                        <h4><a href="#">Buisness</a></h4>
                                        <p><a href="<?php echo get_permalink();?>"> Read More</a>
                                            <img src="wp-content/themes/second_theme/asset/icons/leftarrow.png" alt="">
                                        </p>
                                    </span>
                                </div>
                            </div>
                        <?php }
                    } ?>

                   



                    </div>

            </div>

        </div>
    </section>



<?php 
get_footer();






