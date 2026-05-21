<form class="js-contactForm row" method="POST" action="{{ route('api.contact.store') }}" data-url="{{ route('api.contact.store') }}" onsubmit="return false;">
    @csrf
    <input type="hidden" id="recaptcha-token" name="g-recaptcha-response">

    <div class="col col-12 col-md-12">
        <label for="fullName" class="form-label">Full Name *</label>
        <div class="vs-input-icon-group">
            <input type="text" class="form-control border border-secondary" name="fullName"
                placeholder="Enter Your Full Name*">
        </div>
    </div>
    <div class="col col-12 col-md-12">
        <label for="email" class="form-label">Email address
            *</label>
        <div class="vs-input-icon-group">
            <input type="email" class="form-control border border-secondary" placeholder="Enter Your Email Address*"
                name="email">
        </div>
    </div>
    <div class="col col-12 col-md-12">
        <label for="phoneNumber" class="form-label">Phone number</label>
        <div class="vs-input-icon-group ">
            <div class="vs-country-select">
                <select class="js-selectCountryDialCode form-control border border-secondary" name="countryCode">
                </select>
                <input type="text" class="form-control border border-secondary" name="phoneNumber"
                    placeholder="Enter Your Phone Number">
            </div>
        </div>
    </div>

    <div class="col col-12 col-md-12">
        <label for="budget" class="form-label">Budget</label>
        <select class="form-select" id="budget" name="budget">
            <option value="" selected>Choose Budget</option>
            <option value="$100 - $1000">$100 - $1000</option>
            <option value="$2000 - $5000">$2000 - $5000</option>
            <option value="$5000 - $15000">$5000 - $15000</option>
            <option value="$15000 - $30000">$15000 - $30000</option>
            <option value="$30000 or More">$30000 or More</option>
        </select>
    </div>

    <div class="col col-12">
        <label for="inputAddress" class="form-label">Brief about the project
            *</label>
        <textarea rows="4" class="form-control border border-secondary"
            placeholder="Please brief your requirements in detail. The more we know about your project  idea, the better we can guide and assist you.*"
            name="message"></textarea>
    </div>


    <div class="col col-12">
        @if ($errors->has('g-recaptcha-response'))
            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
        @endif
    </div>

    <div class="col col-12">
        <div class="text-center vs-form-btn">
            <button type="submit" class="btn btn-primary g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey') }}"
                data-callback='onSubmit' data-action='contact_form'>Submit</button>
        </div>
    </div>
</form>

@once
@push('scripts')
    <script>
        // mousedown fires before reCaptcha intercepts the click event
        $(document).on('mousedown', '.js-contactForm .g-recaptcha', function() {
            window._activeContactForm = $(this).closest('.js-contactForm');
        });

        function onSubmit(token) {
            const $form = window._activeContactForm || $('.js-contactForm').first();
            $form.find('[name="g-recaptcha-response"]').val(token);

            const url = $form.data("url");
            const formData = $form.serializeArray();

            const formObject = formData.reduce((acc, field) => {
                acc[field.name] = field.value;
                return acc;
            }, {});


            // Log the form data
            ajaxResponseRequest(url, formObject, "POST").then((result) => {
                if (result.success) {
                    $form.trigger('reset');
                    $('#requestProposalModalSM').modal('hide');
                    alertify.alert("Success", result.message, function() {
                        alertify.success(result.message);
                    }).set({
                        'closableByDimmer': false
                    });;

                    setTimeout(() => {
                        alertify.closeAll()
                    }, 10000);
                }
            }).catch((error) => {

                const response = error.responseJSON;
                if (response) {
                    alertify.alert("Error " + (response.statusCode ? response.statusCode :
                            ""), response
                        .message,
                        function() {}).set({
                        'closableByDimmer': false
                    });;
                }

            });;

        }
    </script>
@endpush
@endonce
