                     <div class="col-6 col-md-3">
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'module-Style_Item' ); ?>>
                            <a href="<?php the_permalink(); ?>" class="module-Style_Item_Link">
                                <figure class="module-Style_Item_Img">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'page_eyecatch' ); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy-image_lg.png" alt="" width="400" height="400" load="lazy">
                                    <?php endif; ?>
                                </figure>
                                <h2 class="module-Style_Item_Title">
                                    <?php the_title(); ?>
                                </h2>
                                <?php the_excerpt(); ?>
                            </a>
                        </article>
                    </div>