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
                        <?php
                        $neko_args = array(
                            'post_type' => 'hairstyles',
                            'posts_per_page' => 4,
                        );
                        $neko_hairstyles_query = new wp_Query( $neko_args );
                        if ( $neko_hairstyles_query->have_posts() ) :
                            ?>
                            <?php
                            while ( $neko_hairstyles_query->have_posts() ) :
                                $neko_hairstyles_query->the_post();
                                ?>
                            <div class="col-6 col-md-3">
                                <div id="post-<?php the_ID(); ?>" <?php post_class( 'module-Style_Item' ); ?>>
                                    <a href="<?php the_permalink(); ?>" class="module-Style_Item_Link" title="<?php the_title(); ?>">
                                        <figure class="module-Style_Item_Img">
                                            <?php if ( has_post_thumbnail() ) : ?>
                                                <?php the_post_thumbnail( 'page_eyecatch' ); ?>
                                            <?php else : ?>
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy-image_lg.png" alt="" width="400" height="400" load="lazy">
                                            <?php endif; ?>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        <?php endif; ?>
                    </div>
                    <p class="home-Style_More">
                        <a href="<?php echo esc_url( home_url( 'hairstyles' ) ); ?>" class="home-Style_More_Link">もっと見る</a>
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
