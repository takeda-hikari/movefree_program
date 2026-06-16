<?php get_header(); ?>
    <main>
        <section id="home" class="home-section">
            <div class="home-inner">
                <h1 class="home-title">Welcome to My Portfolio</h1>
                <p class="home-subtitle">Simple, Clear, and Data-Driven Design.</p>
            </div>
        </section>

        <section id="about" class="about-section">
            <h2 class="section-title">About Me</h2>
            <div class="profile-card">
                <div class="profile-text">
                    <h3>武田ひかり / Takeda Hikari</h3>
                    <p class="bio">
                        初めまして。大学で文化情報学を専攻し、データサイエンスや統計学を中心に学んでいます。
                        また、情報をわかりやすく伝えるためのWeb制作（HTML/CSS/JS）も勉強しています。
                        シンプルで見やすいデザインと、データの視覚化を意識して作成しています。
                    </p>
                </div>
            </div>
        </section>

        <section id="skills" class="skills-section">
            <h2 class="section-title">Skills</h2>
            <div class="skills-container">
                <div class="skill-item">
                    <span class="skill-name">HTML / CSS</span>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-value" style="width: 80%;"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">Data Science / R / Statistics</span>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-value" style="width: 75%;"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">WordPress</span>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-value" style="width: 50%;"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="works" class="works-section">
            <div class="container">
                <h2 class="section-title">Works</h2>
                <div class="works-grid">

                    <?php
                    $args = [
                        'post_type'      => 'works',
                        'posts_per_page' => 6, 
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ];
                    $works_query = new WP_Query($args);

                    if ($works_query->have_posts()) :
                        while ($works_query->have_posts()) : $works_query->the_post();
                            
                            $tech_stack = get_post_meta(get_the_ID(), 'tech_stack', true) ?: '未設定';
                            $period     = get_post_meta(get_the_ID(), 'period', true) ?: '未設定';
                    ?>
                            <article class="js-modal-open works-item" 
                                     data-title="<?php echo esc_attr(get_the_title()); ?>" 
                                     data-content="<?php echo esc_attr(get_the_content()); ?>"
                                     data-tech="<?php echo esc_attr($tech_stack); ?>"
                                     data-period="<?php echo esc_attr($period); ?>"
                                     data-img="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>">
                                
                                <div class="works-thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <div class="no-image">No Image</div>
                                    <?php endif; ?>
                                </div>
                                <h3 class="works-item-title"><?php echo esc_html(get_the_title()); ?></h3>
                            </article>
                    <?php
                        endwhile;
                        wp_reset_postdata(); 
                    else :
                        echo '<p style="text-align: center; width: 100%;">現在、制作実績はありません。</p>';
                    endif;
                    ?>

                </div>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <h2 class="section-title">Contact</h2>
            <p class="contact-lead"><a href="<?php echo esc_url('mailto:hikari@example.com'); ?>">メールはこちらから</a>、または以下のフォームよりご連絡ください。</p>
            
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="19a500a" title="無題"]'); ?>
            </div>
        </section>
    </main>

    <div id="js-modal" class="modal-overlay">
        <div class="modal-window">
            <button id="js-modal-close" class="modal-close-btn">&times;</button>
            <div class="modal-body">
                <div class="modal-img-wrapper">
                    <img id="modal-img" src="" alt="">
                </div>
                <div class="modal-info">
                    <h3 id="modal-title"></h3>
                    <p class="modal-meta"><strong>使用技術：</strong><span id="modal-tech"></span></p>
                    <p class="modal-meta"><strong>制作期間：</strong><span id="modal-period"></span></p>
                    <div id="modal-desc" class="modal-description"></div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>