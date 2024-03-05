<div class="col medium-6 small-12 large-4 post-item" data-animate="fadeInRight" data-animated="true"> 
    <div class="col-inner"> 
        <div class="box box-normal box-text-bottom box-blog-post has-hover"> 
            <div class="box-image"> 
                <div class="image-zoom image-cover" style="padding-top:75%;"> 
                    <a href="<?php the_permalink() ;?>" class="plain" aria-label="<?php the_title(); ?>"> 
                    <?php the_post_thumbnail(); ?>	
                    </a> 
                </div> 
            </div> 
            <div class="box-text text-left"> 
                <div class="box-text-inner blog-post-inner"> 
                    <div class="archive_primary">
                        <?php echo get_the_category_list( __( ' ' ,'flatsome' ) );?>
                    </div>
                    <h5 class="post-title"> 
                        <a href="<?php the_permalink() ;?>" class="plain"><?php the_title(); ?></a> 
                    </h5> 
                    <div class="post_date"><?php echo get_the_date();?></div>
                    <div class="exceprt"><?php echo get_the_excerpt();?></div>
                    <a href="<?php the_permalink() ;?>" class="btn">Xem Thêm</a>
                </div> 
            </div> 
        </div> 
    </div>
</div>
