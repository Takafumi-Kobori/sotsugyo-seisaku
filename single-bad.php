<!-- page2 -->
<?php get_header(); ?>
<section class="section" id="bad">
<h2 class="headline">失敗事例</h2>
<?php
$args = array(
  'post_type' => 'bad',// 投稿タイプを指定
  'orderby' => 'rand',// ランダムで表示（ここ！）
  'posts_per_page' => 3,// 表示する記事数
);
$post_query = new WP_Query( $args );
if ( $post_query->have_posts() ) : 
  while ( $post_query->have_posts() ) : $post_query->the_post(); 
?>

<div class="media col-xm-12 col-md-6 mx-auto mb-5">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

    <div class="media-body ml-3">
        <h5 class="mt-0"><?php the_title(); ?></h5>
        <?php if(function_exists('wp_ulike')) wp_ulike('get'); ?>
        <?php the_excerpt() ?>
    </div>
</div>



<?php endwhile; ?>
<?php else: ?>
<p>記事は見つかりませんでした</p>
<?php endif; ?>
</section>

<?php wp_reset_postdata(); ?>
<div class="next"><?php previous_post_link('« %link »', '前へ'); ?><?php next_post_link('« %link »', '次へ'); ?></div>


<ul class="socialBtn">
	<li><a class="twitter icon-twitter" href="//twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&<?php echo urlencode(get_permalink()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Twitterでシェアする">Twitter</a></li>
	<li><a class="facebook icon-facebook" href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookでシェアする">Facebook</a></li>
	<li><a class="line icon-line" href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="LINEでシェアする">LINE</a></li>
	<li><a class="rss icon-feed" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/kodomo/kodomo_kosodate/" target="_blank" title="厚生労働省でシェアする">厚生労働省</a></li>
</ul>


<?php get_footer(); ?>