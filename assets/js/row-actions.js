(function($) {
    'use strict';
    $(document).ready(function() {
        var $rowActionsTrigger = $('.row-actions' );


        $rowActionsTrigger.on('click', '.show-actions-trigger a', function(e) {
            e.preventDefault();
            console.log($(this));
            var $rowActions = $(this).closest('.row-actions');
            $rowActions.removeClass('visible');
            $rowActions.children(':gt(0)').toggleClass('hide-row-actions');
        });
    });

})(jQuery);