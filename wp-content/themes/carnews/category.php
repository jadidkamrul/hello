<?php get_header(); ?>

    <!--Main Slider-->
    <?php get_template_part('slider') ?>
    <!-- Slider End -->


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                   
                    <div class="row">
                       
                            <!-- <h3 class="headbar">Your Keyword
                                <span><?php _e(''); echo '&quot;'.$s.'&quot;'; ?>  </span>
                                Results are below
                                  
                              
                            </h3>
 -->                                         
                        <?php if (have_posts() ): while (have_posts() ): the_post(); ?>
                        

                       
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href="">

                                            <?php 
                                                the_post_thumbnail('myFituresImage',array('class' => 'my-post-thumb'));
                                             ?>

                                        </a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                                <li><i class="fa fa-calendar"></i> <?php the_time("g:i a"); ?> </li>
                                                <li><i class="fa fa-comment"></i> <?php comments_popup_link('No Comments >>', '1 Comment', '% Comments >>'); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                                        <div class="text-des">
                                          <?php the_excerpt(); ?>
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> <?php the_time('d/m/y'); ?></a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <?php endwhile; else:  ?>
                        <p> <?php esc_html_e('No Post match your criteria'); ?></p>
                    <?php endif; ?>

                        <div class="col-md-12">
                            
                            <?php the_posts_pagination(); ?>

                        </div>
                    </div>
                </div>
               <?php get_template_part('sidebar'); ?>
            </div>
        </div>
    </div>
    <!-- /news table  -->
   <?php get_footer(); ?>