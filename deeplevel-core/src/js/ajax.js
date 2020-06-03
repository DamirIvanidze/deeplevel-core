var ajaxgo = false;


jQuery(document).ready(function($) {
	var adminform_ajax = jQuery('.adminform_ajax');
	var guardInput = adminform_ajax.find('input').not(':input[type=submit]');


	function guardEnable(){
		guardInput.each(function(index, el){ $( this ).prop( 'disabled', true); });
	}


	function guardDisable(){
		guardInput.each(function(index, el){ $( this ).prop( 'disabled', false ); });
	}


	adminform_ajax.on('change', '.go_ajax', function( e ){
		e.preventDefault();

		guardEnable();

		var input = $( this );
		var input_type = input.attr('type');
		var input_name = input.attr( 'name' );
		var spinner = input.parents( '.form-group' ).find('.spinner');
		var status = input.parents( '.form-group' ).find('.status');
		var action =input.parents( 'form' ).find( 'input[name="action"]' ).val();
		var nonce = input.parents( 'form' ).find( 'input[name="nonce"]' ).val();
		var response = input.parents( 'form' ).find( '.response' );


		if( input_type == 'checkbox') {
			var ajax_checkbox_checked = [];
			$(this).parents('.ajax_checkboxes').find('input:checkbox:checked').each(function(){
				ajax_checkbox_checked.push($(this).val());
			});

			var input_val = ajax_checkbox_checked.join(";");
		}
		else var input_val = input.val();


		spinner.addClass('active');


		var fd = new FormData();
		fd.append('action', action);
		fd.append('nonce', nonce);
		fd.append('input_name', input_name);
		fd.append('input_val', input_val);
		

		if (ajaxgo) return false;

		$.ajax({
			type: 'POST',
			url: ajax_var,
			data: fd,
			processData: false,
			contentType: false,
			dataType: 'json',

			beforeSend: function( data ){
				ajaxgo = true;
			},
			success: function( data ){
				spinner.removeClass('active');

				if( data.success ){
					status.fadeIn(700);
					status.delay(1500).fadeOut(700);
					
				}else{

					if( data.data.message ){
						var message = '<p class="alert alert-danger">'+ data.data.message +'</p>';
						response.html( message );
					}
				}
			},

			error: function ( xhr, ajaxOptions, thrownError ){
				console.log( arguments );
			},

			complete: function( data ){
				ajaxgo = false;
				guardDisable();
			}
		});
	});

});
