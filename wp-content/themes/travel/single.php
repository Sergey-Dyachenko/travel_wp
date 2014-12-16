            <?php get_header();?> <!-- Connect header-->     
                <div class="content">
                        <?php if (have_posts()):while(have_posts()): the_post() ;?>
                        <div class="post-main">
                            <h1><a href="<?php the_permalink();?>"><? the_title() ;?></a> <span><?php the_date_xml();?></span></h1>
                             <div class="post">
                               <?php the_content() ;?>
                               <?php comments_template();?> <hr />
                            </div><!--end post-->
                        </div><!--end post-name-->
                     <?php endwhile;?>   
                     
                     <div class="nav">
                        
                        <?php previous_post_link('%link &nbsp; &nbsp; '); ?> <!--statja navigation-->
                        <?php next_post_link('%link'); ?><!--statja navigation-->
                     </div>
                     <?php   endif ;?>                     
                </div><!--end content-->
      <?php get_sidebar();?><!-- Connect sidebar-->   
      <?php get_footer();?><!-- Connect footer-->  