            <?php get_header();?> <!-- Connect header-->     
                <div class="content">
                        <?php if (have_posts()):while(have_posts()): the_post() ;?>
                        <div class="post-main">
                            <h1><a href="<?php the_permalink();?>"><? the_title() ;?></a></h1>
                             <div class="post">
                               <?php the_content() ;?> 
                             </div><!--end post-->
                        </div><!--end post-name-->
                     <?php endwhile;?> 
                     <?php   endif ;?>   
                       
                     <div class="nav">
                     </div>
                                      
                </div><!--end content-->
      <?php get_sidebar();?><!-- Connect sidebar-->   
      <?php get_footer();?><!-- Connect footer-->  