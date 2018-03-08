<?php
/* Template Name: Press */
get_header();
?>

<?php 
    $post_id = get_the_ID();
    $cat = get_the_category($post_id);
    query_posts("cat={$cat[0]->cat_ID}");
    if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
    get_template_part( 'content', get_post_format() );
  
    endwhile; endif;
    wp_reset_query();  ?>

<div class="container">
    <div class="pressArticles">
        <?php 
        global $htPressPosts; 
        while ( $htPressPosts->have_posts() ) :
            $pressPost = $htPressPosts->the_post();
            $pressCF = get_post_custom($pressPost);
            if(has_category("press-article")) :
        ?>
        <div class="pressArticle">
            <div class="logo">
                <img src="<?= replaceStrFromCloudinary($pressCF["logoNormal"][0]); ?>" alt="<">
            </div>
            <div class="articleTitle">
                <p><?= the_title(); ?></p>
            </div>
            <div class="excerpt">
                <p><?= the_content();?></p>
            </div>
            <div class="link">
                <a href="<?= $pressCF["articleLink"][0];?>" target="_blank">Lire la suite</a>
            </div>
        </div>
        
        <?php
        endif;
        endwhile;
        ?>
        
    </div>
</div>


<?php
get_template_part('template-parts/footer/footer', 'contact');

get_footer();

?>