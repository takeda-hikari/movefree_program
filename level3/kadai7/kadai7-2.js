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
});