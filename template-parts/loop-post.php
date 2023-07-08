                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'module-Article_Item' ); ?>>
                            <a href="<?php the_permalink(); ?>" class="module-Article_Item_Link">
                                <div class="module-Article_Item_Img">
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail( 'archive_thumbnail' ); ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy-image.png" alt="" width="200" height="150" load="lazy">
                                <?php endif; ?>
                                </div>
                                <div class="module-Article_Item_Body">
                                    <h2 class="module-Article_Item_Title"><?php the_title(); ?></h2>
                                    <?php the_excerpt(); ?>
                                    <ul class="module-Article_Item_Meta">
                                        <?php
                                            $neko_category_list = get_the_category();
                                            if ( $neko_category_list ) :
                                        ?>
                                        <li class="module-Article_Item_Cat">
                                            <?php echo esc_html( $neko_category_list[0]->name ); ?>
                                        </li>
                                        <?php endif; ?>
                                        <li class="module-Article_Item_Date"><time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time></li>
                                    </ul>
                                </div>
                            </a>
                        </article>