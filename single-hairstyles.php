        <?php get_header(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                    <?php if ( have_posts() ) : ?>
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="content-Header">
                                <h1 class="content-Title">
                                    <span class="content-SubTitle">ヘアスタイルカタログ</span>
                                    <?php the_title(); ?>
                                </h1>
                                <div class="content-Meta">
                                    <?php the_terms( get_the_ID(), 'hairstyletype' ); ?>
                                </div>
                            </header>
                            <div class="content-Body">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <figure class="hairStyle-Img">
                                    <?php the_post_thumbnail( 'page_eyecatch' ); ?>
                                </figure>
                                <?php endif; ?>
                                <div class="hairStyle-Description">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <footer class="content-Footer">
                                <nav class="content-Nav" aria-label="前後の記事">
                                    <div class="content-Nav_Prev">
                                        <?php previous_post_link( '&lt; %link' ); ?>
                                    </div>
                                    <div class="content-Nav_Next">
                                        <?php next_post_link( '%link &gt;' ); ?>
                                    </div>
                                </nav>
                            </footer>
                        </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </main>
                </div>
                <?php get_sidebar( 'hairstyles' ); ?>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
    <script src="./assets/js/theme-common.js"></script>
</body>

</html>
