/**
 * Created by pompi on 28/06/21.
 */
(function ($) {

    $(document).on('change', '.product-info__sizes input', function() {
        $('.product-info__sizes input:checked').each(function(index, element) {
            var $el = $(element);
            var thisName = $el.attr('name');
            var thisVal  = $el.attr('value');
            $('select[name="'+thisName+'"]').val(thisVal).trigger('change');
        });
    });
    $(document).on('woocommerce_update_variation_values', function() {
        $('.product-info__sizes input').each(function(index, element) {
            var $el = $(element);
            var thisName = $el.attr('name');
            var thisVal  = $el.attr('value');
            $el.removeAttr('disabled');
            if($('select[name="'+thisName+'"] option[value="'+thisVal+'"]').is(':disabled')) {
                $el.prop('disabled', true);
            }
        });
    });

  $('#cartToggler').click(function () {

      $('.cart').addClass("visible");
  })





})(jQuery);