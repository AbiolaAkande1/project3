<?php
get_header();

$post_id = get_the_ID();
?>


<!-- THIS IS THE BACKGROUND IMAGE SECTION -->
<section class="main-blog-section" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
    <div class="site-wrapper">
        <div class="blog-title-wrapper">
            <div class="main-blog-title">
                <h3><?php echo get_the_title();?></h3>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- THIS IS THE BLOG CONTENT SECTION -->
<section class="blog-content-section">
    <div class="blog-content-wrapper">
        <div class="site-wrapper">
            <div class="blog-content-top">
                <span>
                    <img src="<?php echo get_template_directory_uri();?>/asset/icons/rightarrow.png" alt="">
                    <form>
                        <input type="button" value="Back" onclick="history.back()">
                    </form>
                </span>
                <p> 
                    <?php 
                 $item = get_the_category();
                 echo $item[0]->name;
                 ?> 
                </P>
            </div>

            <span>
                <p><?php echo the_content(); ?> </p>
               
            </span>  
        </div>
    </div>
</section>


<!-- THIS IS THE FOOTER BANNER SECTION -->
<section class="contact-section">
    <div class="contact-section-holder">
        <div class="site-wrapper">
            <div class="contact-section-content"> 
                <h3>send us a message.</h3>
                <p>Whatever stage you’re at, we’re happy to chat.</p>
                <span>
                    <button>GET IN TOUCH     
                        <img src="<?php echo get_template_directory_uri();?>/asset/icons/leftarrow.png" alt="">
                    </button>
                </span>

             </div>


        </div>

    </div>




</section>
     






               





<?php 
get_footer();