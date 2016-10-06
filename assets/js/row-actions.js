(function($) {
    'use strict';
    $(document).ready(function() {
        var $rowActionsTrigger = $('.row-actions .show-actions-trigger a');

        $rowActionsTrigger.on('click', function(e) {
            e.preventDefault();
            var $rowActions = $(this).closest('.row-actions');
            $rowActions.removeClass('visible');
            $rowActions.children(':gt(0)').toggleClass('hide-row-actions');
        });
    });

})(jQuery);