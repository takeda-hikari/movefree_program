// main.js の ready 関数内に記述
jQuery(document).ready(function($) {

    // ポップアップを開くボタン
    $('.popup-trigger').on('click', function() {
        $('.popup-modal').fadeIn('normal'); // ポップアップを通常速度でフェードイン
    });

    // ポップアップを閉じるボタン
    $('.close-popup').on('click', function() {
        $('.popup-modal').fadeOut('normal'); // ポップアップを通常速度でフェードアウト
    });
    // スライド効果のアコーディオン
    $('.slide-section-title').on('click', function() {
        $(this).next('.slide-section-content').slideToggle('slow'); // 直後のコンテンツをゆっくりスライド切り替え
    });
    // カスタムアニメーション
    $('.custom-animation-box').on('click', function() {
        $(this).animate({
            width: '200px',
            height: '80px',
            opacity: 0.7,
            marginLeft: '50px'
        }, 600, 'swing', function() {
            // アニメーション完了後のコールバック関数
            console.log('カスタムアニメーション完了！');
        });
    });
});