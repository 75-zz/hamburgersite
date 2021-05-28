<?php /*
Template Name:eat_in
*/
?>
<?php get_header("archive"); ?>
<div class="l-hero-archive">
    <h1 class="p-hero-archive__title">Menu:<span>チーズバーガー</span></h1>
</div>
<section class="p-content-archive">
    <h2>小見出しが入ります</h2>
    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>


    <?php query_posts('cat=2'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
            <?php endwhile; ?>
<?php else: ?>
    <?php endif; ?>

    <article class="c-cards">
        <img src="<?php bloginfo('template_directory'); ?>/img/archive-fig-img.png" alt="ハンバーガー">
        <div class="c-cards__textarea">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button>詳しく見る</button>
        </div>
    </article>
    <article class="c-cards">
        <img src="img/archive-fig-img.png" alt="ハンバーガー">
        <div class="c-cards__textarea">
            <h3>ダブルチーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button>詳しく見る</button>
        </div>
    </article>
    <article class="c-cards">
        <img src="img/archive-fig-img.png" alt="ハンバーガー">
        <div class="c-cards__textarea">
            <h3>スペシャルチーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button>詳しく見る</button>
        </div>
    </article>
</section>
<section class="c-pagination">
    <p>page 1/10</p>
    <ul>
        <li class="active">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
    </ul>
</section>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>