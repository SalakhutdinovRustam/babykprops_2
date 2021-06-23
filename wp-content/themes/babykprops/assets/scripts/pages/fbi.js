$(document).ready(function () {
	if ($('.fbi-page').length > 0) {
//

$('#offices').select2();
$('#offices').change(function () {
	$.ajax({
    url: themeVars.ajaxurl,
    method: 'GET',
    data: 'action=get_fbi_wanted_list&field_office=' + $(this).val(),
    beforeSend: () => {
      $('.error-message').hide();
    },
    success: (response) => {
      $('.fbi-results').empty();
			$('.fbi-results').append(response.items);

			if (response.items.length > 0) {
				$('.fbi-results').append(response.items);
				
			} else {
				$('.error-message').show();
			}
    },
  });
	})
		
}
}) 
