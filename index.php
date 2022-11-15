<?php get_header(); ?>
    <main class="container">
        <?php
            if(have_posts()){
                $count = 0;
                while(have_posts()){
                    the_post(); 
                    if ($count == 0) {
                        echo "<div class='mb-4 d-flex align-items-stretch'>";
                    }
                    ?>

  
    <div class="col-md-4 border rounded individual-post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_post_thumbnail('thumbnail'); ?>
      <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
    </div>

                        
                        
                          
                    <?php
                        $count++;
                        if ($count == 3) {
                            echo "</div>";
                            $count = 0;
                        }
                    }
                }
            ?>
 </div>
</div>      
 </main>
<?php get_footer(); ?>