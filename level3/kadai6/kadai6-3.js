// main.js
jQuery(document).ready(function($) {

    // 演習1: クリックイベント
    $('#alert-button').on('click', function() {
        alert('ボタンがクリックされました！');
    });
    // 演習2: ホバーエフェクト
    $('.box').on('mouseenter', function() {
        $(this).css('background-color', 'lightcoral');
    }).on('mouseleave', function() {
        $(this).css('background-color', 'lightblue');
    });
    // 演習3: アコーディオンUI
    $('.accordion-title').on('click', function() {
        // クリックされたタイトルの次の要素をスライドで表示/非表示
        $(this).next('.accordion-content').slideToggle();
    });



});
