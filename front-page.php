<?php get_header(); ?>

<body>
    <!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="">
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

    <!--  explanation-->
    <section class="section1">
        <p>育児休業の取得や、働き方改革、リモートワークの普及等により、男性が育児に参画する機会が増えています。しかし、育児を初めて行う男性にとって、最初は戸惑うことが多いでしょう。このサイトは、男性の育児について、先輩パパ・ママのリアルな声を掲載しています。先輩たちの体験談を参考に、日々ステップアップしていきましょう。
        </p>
    </section>


    <!-- card -->
    <section class="section2">
        <div class="d-flex container justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/8.jpg" alt="" bd-placeholder-img card-img-top width="100%" height="180">
                <div class="card-body">
                    <h5 class="card-title">Good Case</h5>
                    <p class="card-text">パパ育の「良い事例」を掲載しています。ぜひ実践してみましょう！</p>
                    <a href="good" class="btn btn-primary">見てみよう</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/7.jpg" alt="" bd-placeholder-img card-img-top width="100%" height="180">
                <div class="card-body">
                    <h5 class="card-title">Bad Case</h5>
                    <p class="card-text">パパが犯した「失敗事例」を掲載しています。あなたは同じ過ちを防げるか？</p>
                    <a href="#" class="btn btn-primary">見てみよう</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/9.jpg" alt="" bd-placeholder-img card-img-top width="100%" height="180">
                <div class="card-body">
                    <h5 class="card-title">Post</h5>
                    <p class="card-text">あなたの経験も、きっと誰かの役に立つはず。ぜひ、投稿してみましょう！</p>
                    <a href="forums/forum/投稿/" class="btn btn-primary">書いてみよう</a>
                </div>
            </div>
        </div>
    </section>
</body>


<?php get_footer(); ?>