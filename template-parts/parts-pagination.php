                        <?php 
                            the_posts_pagination(
                                array(
                                    'prev_text' => '&lt;<span class="sr-only">前</span>',
                                    'next_text' => '<span class="sr-only">次</span>&gt;',
                                )
                            );
                        ?>