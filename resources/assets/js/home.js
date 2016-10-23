(function($){
    $(document).ready(function(){
        $('.block').addClass("transparent-hidden").viewportChecker({
            classToAdd: 'transparent-visible animated fadeIn', // Class to add to the elements when they are visible
            offset: 100
        });

        $('.appear-in-left').addClass("transparent-hidden").viewportChecker({
            classToAdd: 'transparent-visible animated bounceInLeft', // Class to add to the elements when they are visible
            offset: 100
        });
        $('.appear-in-right').addClass("transparent-hidden").viewportChecker({
            classToAdd: 'transparent-visible animated bounceInRight', // Class to add to the elements when they are visible
            offset: 100
        });

        $('.appear-flip-in-y').addClass("transparent-hidden").viewportChecker({
            classToAdd: 'transparent-visible animated flipInY', // Class to add to the elements when they are visible
            offset: 100
        });

        $('.appear-pulse').addClass("transparent-hidden").viewportChecker({
            classToAdd: 'transparent-visible animated pulse', // Class to add to the elements when they are visible
            offset: 100
        });

        $('.appear-zoom-in').addClass("transparent-hidden").viewportChecker({
            classToAdd: 'transparent-visible animated zoomIn', // Class to add to the elements when they are visible
            offset: 100
        });



        $('.sm-scroll').smoothScroll({
            speed: 'auto'
        });

        $('input[name="phone"]').inputmask({"mask": "(999) 999-9999"});

        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });

        $('form[name="orders"]')
            .parsley({
                successClass: "has-success",
                errorClass: "has-error",
                classHandler: function(el) {
                    return el.$element.closest(".form-group");
                },
                errorsWrapper: "<span class='help-block'></span>",
                errorTemplate: "<span></span>"
            })
            .on('form:submit', function() {
                $.post('orders', {
                    'name': $('form[name="orders"] input[name="name"]').val(),
                    'phone': $('form[name="orders"] input[name="phone"]').val(),
                    'address': $('form[name="orders"] input[name="address"]').val(),
                    'products_list' : $('form[name="orders"] textarea[name="products_list"]').val(),
                }, function(){
                    swal('Дякуємо за Ваше замовлення!', 'Найближчим часом наші менеджери опрацюють замовлення, та зв’яжуться з вами для підтвердження.', 'success');
                });
                return false;
            });
    });
})(jQuery);