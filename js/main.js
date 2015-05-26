"use strict";

$(document).ready(function() {

	(function($, window, undefined) {

		$('input[type=range]').each(function() {

			var $el = $(this);
			var val = $el.val();

			var $valueWrapper = $('<span />').addClass('rangeval-wrapper');
			var $value = $('<span />').addClass('rangeval').appendTo($valueWrapper);

			$el.after($valueWrapper);

			$el.on('change input range:update', function() {
				var val = $(this).val();
				$value.text('$' + val);
			});

			$el.trigger('range:update');

		});

	})(jQuery, window);

});