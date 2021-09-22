<div class="mb80 hidden-sm hidden-xs"></div>
<div class="mb60 hidden-lg hidden-md"></div>
<article class="thumb-article ">
    <div class="row"> 
        <div class="col-md-12 col-md-offset-1 col-md-push-11">
            <a class="thumb-article__image-holder" href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url() ?>" class="thumb-article__image" alt="article thumbnail"> 
            </a> 
        </div>  
        <div class="col-md-11 col-md-pull-13">
            <p class="thumb-article__date"><?php the_time('F jS, y'); ?></p>
            <h3 class="thumb-article__title"> 
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="thumb-article__excerpt"><?php the_excerpt(); ?> </p>
           <a href="<?php the_permalink(); ?>">
            <p class="thumb-article__excerpt"> Read More </p> </a>
        </div>
    </div> 
</article> 
<!-- End of Thumb Article --> 
<div class="mb80 hidden-sm hidden-xs"></div>
<div class="mb60 hidden-lg hidden-md"></div>
