// ===============================================================================
// by pandit programmer : 01/12/2024
// ===============================================================================
if (alertify) {
    alertify.set('notifier', 'position', 'top-right');
    alertify.set('notifier', 'delay', 10);
}

// api request 
window.ajaxRequest = function (url = "/api/v1/", formData, method = "GET", redirectUrl = false) {

    const requestMethod = method.toUpperCase();

    $('button[type="submit"]').prop('disabled', true);
    $.ajax({
        url: url,
        type: requestMethod,
        data: JSON.stringify(formData),
        contentType: 'application/json',
        processData: false,
        success: function (response) {
            console.log("response", response);

            if (response && response.success) {
                alertify.success(response.message);
            }
            $("form").trigger("reset");

            // Select all hidden input fields
            $('input[type="hidden"]').each(function () {
                var inputName = $(this).attr('name');
                localStorage.removeItem(inputName);
            });
            if (redirectUrl) {
                location.href = redirectUrl;
            }
        },
        error: function (error) {
            console.log("ajax error: ", error);

            const response = error.responseJSON;
            if (response)
                alertify.error(response.statusCode ? response.statusCode : "" + " " + response.message);
        }
    });

    $('button[type="submit"]').prop('disabled', false);
};

// api request 
window.ajaxResponseRequest = function (url = "/api/v1/", formData, method = "GET") {

    const requestMethod = method.toUpperCase();
    return $.ajax({
        url: url,
        type: requestMethod,
        data: JSON.stringify(formData),
        contentType: 'application/json',
        processData: false,
        success: function (response) {
            if (response) {
                return response;
            }
            $("form").trigger("reset");
        },
        error: function (error) {
            return error
        }
    });
};


window.ajaxFileUpload = function (url, fileInputElement, hiddenInputField, allowMultiple = false) {

    // Select all hidden input fields
    $('input[type="hidden"]').each(function () {

        var inputName = $(this).attr('name');
        let imgSrc = localStorage.getItem(inputName);

        if (imgSrc) {
            $(this).val("/" + imgSrc);
            $(`#${inputName}img`).attr("src", "/" + imgSrc);
        }
    });


    // Create a new instance of FilePond for the given file input element
    const pond = FilePond.create(document.querySelector(fileInputElement));

    // Set FilePond instance-specific options
    pond.setOptions({
        allowMultiple: allowMultiple,
        server: {
            process: {
                url: url, // Set the dynamic URL here
                method: 'POST',
                headers: {
                    // Optional headers if needed
                },
                onload: (response) => {
                    const responseData = JSON.parse(response);
                    alertify.success(responseData.message);
                    console.log(responseData);


                    let uploadedUrl;
                    if (hiddenInputField) {
                        if (responseData.data.path.startsWith("public\\")) {
                            uploadedUrl = responseData.data.path.replace("public\\", "");
                        } else {
                            uploadedUrl = responseData.data.path.replace("public/", "");
                        }
                        if (hiddenInputField) {
                            // set the upload file path with their name attribute 
                            localStorage.setItem(hiddenInputField, uploadedUrl);
                            console.log("hiddenInputField", hiddenInputField);
                            $(`#${hiddenInputField}`).val(uploadedUrl);
                            $(`#${hiddenInputField}img`).attr("src", "/" + uploadedUrl);
                        }
                    }
                    return response;
                },
                onerror: (response) => {
                    console.error("Error occurred during file upload:", response);
                    return response;
                },
            },
            revert: url, // You can customize the revert URL as well if needed
            restore: null,
            load: null,
        },
    });

    // Handle file process completion event
    pond.on('processfile', (error, file) => {
        if (error) {
            console.error('File processing failed:', error);
            const response = JSON.parse(error.body);
            if (error.type === "error") {
                alertify.error(response.statusCode + ": " + response.message);
            }
            return;
        }
    });
}



// share 
$(".shareBtn").click(function () {
    let title = $(this).data("title");
    let content = $(this).data("content");
    let url = $(this).data("url");
    if (navigator.share) {
        navigator.share({
            title: title,
            text: content,
            url: url
        }).then(() => { }).catch((error) => {
            console.error('Error sharing content:', error);
        });
    } else {
        alert('Web Share API not supported.');
    }
});



// clipboard 
$(".copyLinkBtn").click(function () {
    let textToCopy = $(this).attr("data-url");
    navigator.clipboard.writeText(textToCopy)
        .then(() => {
            alertify.success('Link copied to the clipboard');
        })
        .catch(err => {
            console.error('Unable to copy text', err);
        });
});

