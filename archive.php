<?php get_header("archive"); ?>
<div class="l-hero-archive">
    <h1 class="p-hero-archive__title">Menu:<span>チーズバーガー</span></h1>
</div>
<section class="p-content-archive">
    <h2>小見出しが入ります</h2>
    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="c-cards">
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="blog-item__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                        <?php endif; ?>
                    <div class="c-cards__textarea">
                        <h3><?php the_title(); ?></h3>
                        <h4><?php the_excerpt(); ?></h4>
                        <p><?php the_content('',FALSE,''); ?></p>
                        <button><a href="<?php the_permalink(); ?>">詳しく見る</a> </button>
                    </div>
                </article>
    <?php endwhile;
    endif; ?>

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