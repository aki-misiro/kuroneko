        <?php get_header(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                        <header class="content-Header">
                            <h1 class="content-Title">
                                <?php if( is_month() ): ?>
                                    <?php echo get_the_date( 'Y年n月' ); ?>
                                <?php else: ?>
                                    <?php single_term_title(); ?>
                                <?php endif; ?>
                            </h1>
                        </header>
                        <?php if( have_posts() ) : ?>
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <?php get_template_part( 'template-parts/loop', 'post' ); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php get_template_part( 'template-parts/parts', 'pagination' ); ?>
                    </main>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
    <script src="./assets/js/theme-common.js"></script>
</body>

</html>
