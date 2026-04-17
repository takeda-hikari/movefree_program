// kadai4-3.js
jQuery(document).ready(function($) {
    alert('kadai4-3.jsが読み込まれました！');

    // 例: すべてのリンクにホバーエフェクトを追加
    $('a').hover(
        function() { $(this).css('opacity', '0.7'); },
        function() { $(this).css('opacity', '1'); }
    );
});
