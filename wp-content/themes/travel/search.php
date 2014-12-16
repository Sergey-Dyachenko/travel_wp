            <?php get_header();?> <!-- Connect header-->     
                <div class="content">
                        <?php if (have_posts()):while(have_posts()): the_post() ;?>
                        <div class="post-main">
                            <h1><a href="<?php the_permalink();?>"><? the_title() ;?></a> <span><?php the_date_xml();?></span></h1>
                             <div class="post">
                               <a href="<?php the_permalink();?>"> <?php the_post_thumbnail();?> </a>
                               <?php the_excerpt() ;?>
                             </div><!--end post-->
                        </div><!--end post-name-->
                     <?php endwhile;?>   
                     <div class="nav">
                       <?php wp_pagenavi(); ?>
                     </div>
                     <?php else : ?>
                     <div class="post-main">
                            <h1>По запросу ничего не найдено</h1>
                             <div class="post">
                                <img src="<?php bloginfo('template_url') ;?>/images/404.jpg" alt='404' width="592" height="465" />  
                            </div><!--end post-->
                        </div><!--end post-main-->
             
                     <?php   endif ;?>                     
                </div><!--end content-->
      <?php get_sidebar();?><!-- Connect sidebar-->   
      <?php get_footer();?><!-- Connect footer-->  