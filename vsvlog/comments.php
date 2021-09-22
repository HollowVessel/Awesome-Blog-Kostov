<h3 class="article__widget-title mb20"> <?php comments_number(); ?> </h3> 
    <?php 
        if( !have_comments() ) {
            get_comment_count();
        }
            else {
                "No Comments";
            }
    ?> 
    <ul class="comments mb40"> 
        <li class="comments__item">
            <div class =""> 
                <!-- Comment -->
                <?php 
                    wp_list_comments(
                        array(
                            'avatar_size' => 120,
                            'style' => 'div'
                        ) 
                    );
                ?>
            </div>  
                <!-- End of Comment --> 
        </li>
    </ul>    

    <!-- <form action="http://swa.localhost/wp-comments-post.php" class="form-comment">  --> 
	   <div class="row">
            <div class="col-md-12"> 
                <?php  
                    if( comments_open() ) {
                        comment_form(
                            array(
                                'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
                                'title_reply_after' => '</h3>',
                                'class_form' => 'form-comment',
                            )
                        );
                    }
                    ?>
             </div>
        </div>    
    <!-- </form> -->