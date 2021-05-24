<?php get_header(); ?>
<div class="l-hero">
    <h2 class="p-hero__title">ダミーサイト</h2>
</div>
<section class="p-branch-contents">

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <article class="c-cards">
                <?php the_post_thumbnail(); ?>
                <div class="c-cards__textarea">
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <ul class="post__meta">
                            <li class="post__meta__item">
                                <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                            </li>
                            <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category(', '); ?></i></li>
                            <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags(''); ?></i></li>
                        </ul>

                        <button><?php the_content('詳しく見る'); ?></button>
                    </div>
                </div>
            </article>
        <?php endwhile;
    else :
        ?><p>表示する記事がありません</p><?php
                            endif;
                                ?>

    <div class="p-branch-wrapper">
        <article class="c-branch__card p-takeout">
            <h3>Take Out</h3>

            <div class="c-branch__textarea">
                <dl>
                    <dt>小見出しが入ります</dt>
                    <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </dd>
                </dl>
                <dl>
                    <dt>小見出しが入ります</dt>
                    <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </dd>
                </dl>
            </div>
        </article>
        <article class="c-branch__card p-eatin">
            <h3>Eat In</h3>
            <div class="c-branch__textarea">
                <dl>
                    <dt>小見出しが入ります</dt>
                    <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </dd>
                </dl>
                <dl>
                    <dt>小見出しが入ります</dt>
                    <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </dd>
                </dl>
            </div>
        </article>
    </div>
</section>
<section class="p-map">
    <article class="p-map-direction">
        <h3>見出しが入ります</h3>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
    </article>
    <img src="img/map.png" alt="周辺MAP">
</section>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>