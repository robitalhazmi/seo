$(document).ready(function() {
	$('#login_form').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
		    type: 'post',
		    url: 'login',
		    data: $('#login_form').serialize(),
		    success: function (data, status) {
					if (data.success === true) {
						location.href = '/seo/';
					}
					else {
						$('#status_login')[0].className = 'status_login';
						$('#status_login')[0].innerHTML = data.message;
					}
					}
		    });
	});
});
