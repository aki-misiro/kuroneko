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
                            </header>
                            <div class="content-Body">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="content-EyeCatch">
                                    <?php the_post_thumbnail( 'page_eyecatch' ); ?>
                                </div>
                                <?php endif; ?>
                                <?php the_content(); ?>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </main>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php get_footer(); ?>