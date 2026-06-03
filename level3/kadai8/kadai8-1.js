// main.js の ready 関数内に記述
jQuery(document).ready(function($) {
    // 演習1: CSSプロパティの動的な変更
    $('#change-color-size').on('click', function() {
        $('#dynamic-box').css({
            'background-color': 'purple',
            'width': '200px',
            'height': '80px',
            'color': 'yellow',
            'font-size': '24px'
        });
    });

    $('#reset-style').on('click', function() {
        $('#dynamic-box').css({
            'background-color': 'lightblue',
            'width': '150px',
            'height': '150px',
            'color': 'white',
            'font-size': 'inherit' // 親要素から継承
        });
    });
});
