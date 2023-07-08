        <?php get_header(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                    <?php if( have_posts() ) : ?>
                        <?php
                        while( have_posts() ) :
                            the_post();
                            ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="content-Header">
                                <h1 class="content-Title">
                                    <?php the_title(); ?>
                                </h1>
                                <div class="content-Meta">
                                    <?php the_category( ', ' ); ?>
                                    <?php
                                        $neko_post_year = get_the_date( 'Y' );
                                        $neko_post_month = get_the_date( 'm' );
                                    ?>
                                    <a href="<?php echo get_month_link( $neko_post_year, $neko_post_month ); ?>" class="content-Meta_Date">
                                        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
                                    </a>
                                </div>
                            </header>
                            <div class="content-Body">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="content-EyeCatch">
                                    <?php the_post_thumbnail( 'page_eyecatch' ); ?>
                                </div>
                                <?php endif; ?>
                                <?php the_content(); ?>
                            </div>
                            <footer class="content-Footer">
                                <?php the_tags('<ul class="content-Tags" aria-label="タグ"><li>','</li><li>','</li></ul>'); ?>
                                <nav class="content-Nav" aria-label="前後の記事">
                                    <div class="content-Nav_Prev">
                                        &lt; <a href="#">前のページタイトル</a>
                                    </div>
                                    <div class="content-Nav_Next">
                                        <a href="#">次のページタイトル</a> &gt;
                                    </div>
                                </nav>
                            </footer>
                        </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </main>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php get_footer(); ?>