(function($) {
    'use strict';
    $(document).ready(function() {
        var $rowActionsTrigger = $('.row-actions .show-actions-trigger');

        // $rowActionsTrigger.each(function() {
        //     $(this).html('<a href="#">Show Actions</a>   ');
        // })

        $rowActionsTrigger.on('click', function() {
            var $rowActions = $(this).parent();
            $rowActions.removeClass('visible');
            $rowActions.children(':gt(0)').toggleClass('hide-row-actions');
        });
    });

})(jQuery);