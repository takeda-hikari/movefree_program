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


});
