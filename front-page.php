        <?php get_header(); ?>
        <main class="main">
            <div class="container-fluid">
                <div class="home-Hero">
                    <div class="home-Hero_Inner">
                        <p class="home-Hero_Txt">
                            にゃんすけ店長がお迎えする<br>ゆったり癒しの美容室
                            <span>20XX.XX DEMO OPEN</span>
                        </p>
                    </div>
                </div>
                <section class="home-News">
                    <h2 class="home-News_Title">お知らせ<span>News &amp; Topics</span></h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <?php
                            $neko_args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                            );
                            $neko_news_query = new WP_Query( $neko_args );
                            if ( $neko_news_query->have_posts() ) :
                                ?>
                                <?php
                                while ( $neko_news_query->have_posts() ) :
                                    $neko_news_query->the_post();
                                    ?>
                                    <?php get_template_part( 'template-parts/loop', 'post' ); ?>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="home-News_More">
                        <a href="#" class="home-News_More_Link">もっと見る</a>
                    </p>
                </section>
                <section class="home-Style">
                    <h2 class="home-Style_Title">ヘアスタイル<span>Hairstyles</span></h2>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="module-Style_Item">
                                <a href="#" class="module-Style_Item_Link" title="メンズパーマ">
                                    <figure class="module-Style_Item_Img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hairstyle4.png" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="module-Style_Item">
                                <a href="#" class="module-Style_Item_Link" title="前髪ありキュートボブ">
                                    <figure class="module-Style_Item_Img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hairstyle3.png" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="module-Style_Item">
                                <a href="#" class="module-Style_Item_Link" title="メンズカット">
                                    <figure class="module-Style_Item_Img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hairstyle2.png" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="module-Style_Item">
                                <a href="#" class="module-Style_Item_Link" title="大人ミディアム">
                                    <figure class="module-Style_Item_Img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hairstyle1.png" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="home-Style_More">
                        <a href="#" class="home-Style_More_Link">もっと見る</a>
                    </p>
                </section>
                <section class="home-ShopInfo">
                    <h2 class="home-ShopInfo_Title">店舗案内<span>Shop Information</span></h2>
                    <dl class="home-ShopInfo_Detail">
                        <div class="home-ShopInfo_Add">
                            <dt>住所</dt>
                            <dd>〒000-0000 □□県〇〇市△△区☆☆町000</dd>
                        </div>
                        <div class="home-ShopInfo_Tel">
                            <dt>Tel</dt>
                            <dd>000-000-0000</dd>
                        </div>
                        <div class="home-ShopInfo_Open">
                            <dt>営業時間</dt>
                            <dd>平日 10:00〜19:00 / 土・日 9:00〜19:00</dd>
                        </div>
                        <div class="home-ShopInfo_Close">
                            <dt>休業日</dt>
                            <dd>毎週月曜・第2 &amp; 第4火曜日</dd>
                        </div>
                    </dl>
                    <p class="home-ShopInfo_Reservation">
                        <a href="#" class="home-ShopInfo_Reservation_Link">オンライン予約</a>
                    </p>
                </section>
            </div>
        </main>
        <?php get_footer(); ?>        
