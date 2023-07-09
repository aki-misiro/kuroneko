        <?php get_header(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                        <header class="content-Header">
                            <h1 class="content-Title">
                                検索結果
                            </h1>
                        </header>
                        <?php if( have_posts() ): ?>
                            <p class="search-ResultNum">「<?php the_search_query(); ?>」の検索結果</p>
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <?php get_template_part( 'template-parts/loop', 'post' ); ?>
                            <?php endwhile; ?>
                            <?php get_template_part( 'template-parts/parts', 'pagination' );
                            ?>
                        <?php else: ?>
                            <p class="search-NoResult">検索単語に一致するものは見つかりませんでした。他のキーワードで再度お試しください。</p>
                            <?php get_search_form(); ?>
                        <?php endif; ?>
                    </main>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php get_footer(); ?>