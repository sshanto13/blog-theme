 <?php get_header();?>


 <section class="blog-sidebar">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
          <div class="blog-content">
		  
		  
			   <?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
			  
            <div class="sidebar-blog-content">
              <div class="row">
                <div class="col-xs-12">
                   <img src="<?php $blog_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-image' ); echo $blog_image[0]; ?>" class="img-responsive">
                </div>
                <div class="col-xs-2 col-sm-3 col-md-2">
                  <div class="blog-date">
                    <p> <span><?php the_date('j' ); ?></span>  <?php the_time('F y' ); ?></p>
                  </div>
                </div>
                <div class="wow zoomIn col-xs-12 col-sm-9 col-md-10">
                  <h1><a href="#"><?php the_title(); ?></a></h1>
                  <div class="icon-holder">
                    <a href="#"><span><i class="flaticon-man494"></i> <?php the_author(); ?> </span></a>
                    <a href="#"><span><i class="flaticon-eye128"></i> views</span></a>
                    <a href="#"><span><i class="flaticon-comments16"></i>comments</span></a>
                  </div>
                  <p class="contents">
                    <?php the_excerpt(); ?>
                  </p>
                  <a href="<?php the_permalink();?>"><button class="btn">read more</button></a>
                </div>
              </div><!-- row -->
            </div><!-- sidebar-blog-content -->
			
			<?php endwhile; ?>
           
					 <?php else : ?>
						<div class="post">
							<h3><?php _e('404 Error&#58; Not Found', 'brightpage'); ?></h3>
						</div>
			<?php endif; ?>
			
          </div><!-- blog-content -->

      

         



          <div class="blog-content pagination-content">
            <div class="container-fluid">
              <div class="row">
                <div class="wow zoomIn col-xs-12 col-sm-10 col-sm-offset-2 ">
                  <nav>
                    <ul class="pagination  pagination-lg">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&larr; </span><small>previous</small>
                        </a>
                      </li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <small>next</small><span aria-hidden="true"> &rarr;</span>
                        </a>
                      </li>
                    </ul><!-- pagination -->
                  </nav>

                </div>
              </div><!-- row -->
            </div><!-- container-fluid -->
          </div><!-- /.pagination-content -->
        </div>

   <?php get_sidebar();?>
      </div><!-- row -->
    </div><!-- container -->
  </section>
  
  
  <?php get_footer(); ?>