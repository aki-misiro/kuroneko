        <?php get_header(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                        <article>
                            <header class="content-Header">
                                <h1 class="content-Title">
                                    ページが見つかりません
                                </h1>
                            </header>
                            <div class="content-Body">
                                <p>お探しのページは、移動もしくは削除された可能性があります。<br>
                                    サイト内検索、もしくは<a href="<?php echo esc_url( home_url()); ?>">トップページ</a>よりお探しください。</p>
                                <?php get_search_form(); ?>
                            </div>
                        </article>
                    </main>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php get_footer(); ?>