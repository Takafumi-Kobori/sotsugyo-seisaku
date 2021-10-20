<?php get_header(); ?>
    <!-- スライド -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                    aria-label="Placeholder: First slide">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#555" dy=".3em">First
                        slide</text>
                </svg>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                    aria-label="Placeholder: Second slide">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#666" /><text x="50%" y="50%" fill="#444" dy=".3em">Second
                        slide</text>
                </svg>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"
                    xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                    aria-label="Placeholder: Third slide">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#555" /><text x="50%" y="50%" fill="#333" dy=".3em">Third
                        slide</text>
                </svg>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="section" id="/">
        <h2 class="headline">トップページ</h2>

        <!-- ループ -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!-- 好事例一覧 -->
        <div class="media col-xs-12 col-md-6 mx-auto mb-5">
            <!-- サムネイル画像取得 -->
            <a href="<?php the_permalink(); ?>">            <?php the_post_thumbnail(); ?></a>
            <div class="media-body ml-3">
                <h5 class="mt-0"><?php the_title(); ?></h5>
                <!-- ブログ抜粋 -->
                <?php the_excerpt(); ?>
            </div>
        </div>

        <?php endwhile; ?><?php else : ?>
        <!-- コンテンツがない時の表示 -->
        <?php endif; ?>


    </section>

    <ul class="socialBtn">
	<li><a class="twitter icon-twitter" href="//twitter.com/intent/tweet?text=<?php echo urlencode(the_title("","",0)); ?>&<?php echo urlencode(get_permalink()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="Twitterでシェアする">Twitter</a></li>
	<li><a class="facebook icon-facebook" href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(the_title("","",0)); ?>" target="_blank" title="facebookでシェアする">Facebook</a></li>
	<li><a class="line icon-line" href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" title="LINEでシェアする">LINE</a></li>
	<li><a class="rss icon-feed" href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/kodomo/kodomo_kosodate/" target="_blank" title="厚生労働省でシェアする">厚生労働省</a></li>
</ul>


    <?php get_footer(); ?>