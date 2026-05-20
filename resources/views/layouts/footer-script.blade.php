<!-- Default theme -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

<script src="{{ asset('web-assets/js/country_dial_info.json') }}"></script>
<script src="{{asset('common/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{ asset('web-assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('web-assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('web-assets/js/select2.min.js') }}"></script>
<script src="{{ asset('web-assets/js/slick.min.js') }}"></script>
<script src="{{ asset('web-assets/js/smoothscroll.min.js') }}"></script>
<script src="{{ asset('web-assets/js/sweetalert.min.js') }}"></script>
<script src="{{asset('common/js/main.js')}}"></script>
<script src="{{ asset('web-assets/js/custom.js') }}"></script>

<script src="https://www.google.com/recaptcha/api.js"></script>


<script>
    alertify.set('notifier', 'position', 'top-right');
    alertify.set('notifier', 'delay', 10);

    @if (session('success'))
        alertify.alert("Success", "{{ session('success') }}", function() {
            alertify.success("{{ session('success') }}");
        }).set({'closableByDimmer': false}); ;
    @endif
    @if (session('error'))
        alertify.alert("Error", "{{ session('error') }}", function() {
            alertify.error("{{ session('error') }}");
        }).set({'closableByDimmer': false}); ;
    @endif
    @if (session('warning'))
        alertify.alert("Warning", "{{ session('warning') }}", function() {
            alertify.warning("{{ session('warning') }}");
        }).set({'closableByDimmer': false}); ;
    @endif

    @if (session()->has('message'))
        setTimeout(() => {
            alertify.closeAll()
        }, 10000);
    @endif
</script>

<script>
    window.ondragstart = function(e) {
        return false;
    }

    country_data.sort((a, b) => {
        return a.dial_code - b.dial_code;
    });



    $.each(country_data, (index, country) => {

        $('#countries').append($(
            `<option value="${country.dial_code}" data-code="${country.dial_code}" data-flag="${country.code}"><span>${country.dial_code}</span>&nbsp;&nbsp;${country.name}</option>`
        ));

        $('#countries2').append($(
            `<option value="${country.dial_code}" data-code="${country.dial_code}" data-flag="${country.code}"><span>${country.dial_code}</span>&nbsp;&nbsp;${country.name}</option>`
        ));

        $('#modalcountries').append($(
            `<option value="${country.dial_code}" data-code="${country.dial_code}" data-flag="${country.code}"><span>${country.dial_code}</span>&nbsp;&nbsp;${country.name}</option>`
        ));

        $('.js-selectCountryDialCode').append($(
            `<option value="${country.dial_code}" data-code="${country.dial_code}" data-flag="${country.code}"><span>${country.dial_code}</span>&nbsp;&nbsp;${country.name}</option>`
        ));
    })



    jQuery.validator.addMethod("noSpace", function(value, element) {
        return value == '' || value.trim().length != 0;
    }, "Don't leave it empty");

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "please enter valid name");

    jQuery.validator.addMethod("DigitsOnly", function(value, element) {
        return this.optional(element) || /^[0-9]+$/i.test(value);
    }, "please enter valid number");

    jQuery.validator.addMethod("letterSpace", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "please enter valid name");

    jQuery.validator.addMethod("isEmail", function(value, element) {
        return this.optional(element) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
    }, "please enter a valid email address");
</script>

@stack('scripts')