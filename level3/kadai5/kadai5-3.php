<?php get_header(); ?>

<main>
    <div class="container">
        <h1>最新の投稿一覧</h1>
        
        <?php if ( have_posts() ) : ?>
            <ul>
                <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <p>投稿が見つかりませんでした。</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>