jQuery(document).ready(function($) {

    var $modal = $('#js-modal');
    var $modalImg = $('#modal-img');
    var $modalTitle = $('#modal-title');
    var $modalTech = $('#modal-tech');
    var $modalPeriod = $('#modal-period');
    var $modalDesc = $('#modal-desc');

    $('.js-modal-open').on('click', function() {
        var imgUrl  = $(this).data('img');
        var title   = $(this).data('title');
        var tech    = $(this).data('tech');
        var period  = $(this).data('period');
        var content = $(this).data('content');

        $modalImg.attr('src', imgUrl).attr('alt', title);
        $modalTitle.text(title);
        $modalTech.text(tech);
        $modalPeriod.text(period);
        $modalDesc.text(content);

        $modal.fadeIn('fast');
        
        $('body').css('overflow', 'hidden');
    });

    function closeModal() {
        $modal.fadeOut('fast');
        $('body').css('overflow', '');
    }

    $('#js-modal-close').on('click', function() {
        closeModal();
    });

    $modal.on('click', function(e) {
        if ($(e.target).closest('.modal-window').length === 0) {
            closeModal();
        }
    });

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 200) {
            $('#js-scroll-top').addClass('is-active');
        } else {
            $('#js-scroll-top').removeClass('is-active');
        }
    });

    $('#js-scroll-top').on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 500, 'swing'); 
        return false;
    });

});