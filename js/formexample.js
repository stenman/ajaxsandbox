$(document).ready(function() {

	var request;

	$('#form_reg').submit(function(event) {

		// abort any pending request
		if (request) {
			request.abort();
		}

		var $form = $(this);

	    // select and cache fields
	    var $inputs = $form.find("input, select, button, textarea");

	    // serialize the data in the form
	    var serializedData = $form.serialize();

	    // disable inputs for the duration of the ajax request (NOTE: has to be done after serialization!)
	    $inputs.prop("disabled", true);

	    // remove any previous messages from the page
	    $('.form-group').removeClass('has-error');
	    $('.help-block').remove();
	    $('.alert-success').remove();

	    //This is another way of getting the data
		/* var formData = {
	    	'name' 				: $('input[name=name]').val(),
	    	'email' 			: $('input[name=email]').val(),
	    	'shoeSize' 	: $('input[name=shoeSize]').val()
	    };*/

		// using .ajax instead of .post in order to get more configuration options
		// additionally - setting a variable instead of chaining the callback methods, to make the code more readable
		request = $.ajax({
			type 		: 'POST', // method of the html request
			url 		: 'inc/formexampleprocess.php', // the url which we will post/get to
			data 		: serializedData, // the actual data
			dataType 	: 'json', // type of data we expect to be returned
			encode 		: true
		});

		// using the done promise callback instead of the deprecated ".success" method
		request.done(function(data, response, textStatus, jqXHR) {

			console.log(data); 

			// handle errors and validation messages
			if (!data.success) {
				
				if (data.errors.name) {
					$('#name-group').addClass('has-error'); // add error class to show error message (red text)
					$('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message
				}

				if (data.errors.email) {
					$('#email-group').addClass('has-error'); // add error class to show error message (red text)
					$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message
				}

				if (data.errors.shoeSize) {
					$('#shoesize-group').addClass('has-error'); // add error class to show error message (red text)
					$('#shoesize-group').append('<div class="help-block">' + data.errors.shoeSize + '</div>'); // add the actual error message
				}

			} else {

				// show success message
				$('form').append('<div class="alert alert-success">' + data.message + '</div>');

				// this would be a good place to redirect...
				// window.location = '/thank-you-for-subscribing.php';
			}
		});

		// using the fail promise callback instead of the deprecated ".error" method
		request.fail(function(jqXHR, textStatus, errorThrown) {
			// show error messages to the console
			// NOTE: remove this before production?
			console.error("The following error occured: "+textStatus, errorThrown);
		});

		request.always(function () {
			// reenable the inputs
			$inputs.prop("disabled", false);
		});

		// prevent default posting of form
		event.preventDefault();
	});

});