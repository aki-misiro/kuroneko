        <?php get_header(); ?>
        <div class="container-fluid content">
            <main class="main">
                <header class="content-Header">
                    <h1 class="content-Title">
                        <span class="content-SubTitle">ヘアスタイルカタログ</span>
                        <?php single_term_title(); ?>
                    </h1>
                </header>
                <div class="row">
                    <?php if ( have_posts() ) : ?>
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            <?php get_template_part( 'template-parts/loop', 'hairstyles' ); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php get_template_part( 'template-parts/parts', 'pagination' ); ?>
            </main>
        </div>
        <?php get_footer(); ?>