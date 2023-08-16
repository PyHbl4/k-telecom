<?php get_header(); ?>

<main class="site-main">
    <section class="main-block" id="main-block">
        <div class="wrapper">
            <div class="main-block__bg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/main_pic.png" alt="ноутбук">
            </div>
            <div class="main-block__info">
                <h1 class="page-title">Экономия нервов и денег — интернет К-Телеком</h1>
                <ul class="main-block__list">
                    <li>5 тарифов для многоквартирных и 4 для частных домов</li>
                    <li>безлимит подключенных устройств</li>
                    <li>комфортная поддержка 24/7</li>
                </ul>
                <a href="#" class="button">Подробнее</a>
            </div>
        </div>
    </section>
    <?php $args = array(
        'post_type' => 'tarif',
        'posts_per_page' => -1
    );
    $tarif_posts = new WP_Query($args);
    if ($tarif_posts->have_posts()) : ?>
        <section class="tariff-plans" id="tariffs">
            <div class="wrapper">
                <h2 class="section-title">Тарифные планы</h2>
                <div class="tariff-slider owl-carousel owl-theme" id="tariff-slider">
                    <?php while ($tarif_posts->have_posts()) :
                        $tarif_posts->the_post(); ?>
                        <div class="tariff-slider__item">
                            <h3 class="tariff__title"><?php echo $post->post_title; ?></h3>
                            <p class="tariff__speed-title">Скорость интернета</p>
                            <p class="tariff__speed-count"><?php echo get_field('internet_speed', $post); ?></p>
                            <p class="tariff__description"><?php echo get_field('tarif_description', $post); ?></p>
                            <div class="tariff__check-tv">
                                <input class="check-tv__input" type="checkbox" name="check_tv" id="check_tv_<?php echo get_the_ID($post); ?>">
                                <label for="check_tv_<?php echo get_the_ID($post); ?>" class="check__label">
                                    <div class="checkbox__image"></div>
                                    <p class="checkbox__text-high">ТВ + 100 ₽</p>
                                    <p class="checkbox__text-low">(пакет “Базовый”)</p>
                                </label>
                            </div>
                            <div class="tariff__price">
                                <p class="price__count"><?php echo get_field('tarif_price', $post).' ₽'; ?></p>
                                <p class="price__for">в месяц</p>
                            </div>
                            <p class="tariff__disclaimer">*итоговая цена зависит от варианта оплаты и пакета ТВ при
                                необходимости</p>
                            <button class="button" data-unselected="Выбрать тариф" data-selected="Тариф выбран">Выбрать тариф</button>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <section class="static-callme" id="connect">
        <h2 class="static-callme__title">Подключиться просто!</h2>
        <?php echo do_shortcode('[contact-form-7 id="ca7d9b1" title="contact_form"]'); ?>
    </section>
</main>

<?php get_footer(); ?>