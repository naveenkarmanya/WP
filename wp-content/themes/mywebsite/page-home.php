<?php get_header(); ?>
<div class="row">
    <div class="col-xs-12 col-sm-8">


        <div class="thumbnail-img">
            <?php the_post_thumbnail('thumbnail'); ?>

        </div>

        <?php
        //$newpost = new WP_Query('page id=131');
        if (have_posts()) :

            while (have_posts()) :
                the_post();
                ?>
                <?php get_template_part('content', get_post_format()); ?>
                <hr>
                <?php
            endwhile;

        else :

        endif;
        ?>

    </div>


    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

    <div class="col-xs-12">
        <?php
        $loopBlogs = new WP_Query(array('category_name'=>'business'));
        if ($loopBlogs->have_posts()):

            while ($loopBlogs->have_posts()):
                $loopBlogs->the_post();
                ?>
                <?php get_template_part('content', get_post_format()); ?>
                
                <?php
            endwhile;
        else:

        endif;
        
        ?>

    </div>
     <div class="col-xs-12">
        <?php
        $loopBlogs = new WP_Query(array('category_name'=>'design'));
        if ($loopBlogs->have_posts()):

            while ($loopBlogs->have_posts()):
                $loopBlogs->the_post();
                ?>
                <?php get_template_part('content', get_post_format()); ?>
                
                <?php
            endwhile;
        else:

        endif;
        
        ?>

    </div>
      <div class="col-xs-12">
        <?php
        $loopBlogs = new WP_Query(array('category_name'=>'Uncategorized'));
        if ($loopBlogs->have_posts()):

            while ($loopBlogs->have_posts()):
                $loopBlogs->the_post();
                ?>
                <?php get_template_part('content', get_post_format()); ?>
                
                <?php
            endwhile;
        else:

        endif;
        
        ?>

    </div>
</div>
<?php get_footer(); ?>