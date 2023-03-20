<?php

$page_id = get_the_ID();


?>

<!-- THIS IS THE CONTACT PAGE TITLE -->
<div class="contact-page-heading">
    <div class="site-wrapper">
        <div class="contact-page-title">
            <h3><?php echo get_field('contact_page_heading' , $page_id);?></h3>
            <p><?php echo get_field('contact_page_subheading' , $page_id);?></p>

        </div>
    </div>
</div> 
 
 
<!-- THIS IS THE CONTACT FORM SECTION -->
<section class="office-enquiries-section">
    <div class="site-wrapper">
        <div class="office-enquiries-holder">
            <h3><?php echo get_field('enquiries_title' , $page_id);?></h3>
            <?php echo do_shortcode('[contact-form-7 id="113" title="Office Contact Form"]');?>

            <div class="section-image">
             <img src="<?php echo get_template_directory_uri();?>/asset/icons/vector.png" alt="">
            </div>
        </div>
    </div>
</section>


<!-- THIS IS THE OFFICE ADDRESS AND MAP SECTION -->
<section class="office-address-section">
    <div class="site-wrapper">
        <div class="office-address-holder">
            <div class="office-address-text">
                <h3><?php echo get_field('office_address_title' , $page_id);?></h3>
                <h5><?php echo get_field('office_address_text' , $page_id);?></h5>
                <p><?php echo get_field('office_email_address' , $page_id);?></p>
            </div>

            <div class="office-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.5316900477746!2d-1.9140322839201078!3d52.48761447980819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bcec2e56687d%3A0xa9fb2224253010b3!2sThe%20Big%20Peg!5e0!3m2!1sen!2sng!4v1677943683946!5m2!1sen!2sng" width="100%" height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                 </iframe>

            </div>
        </div>
    </div>
     
</section>