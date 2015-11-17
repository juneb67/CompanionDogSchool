$(function(){
    //CONTACT FORM AJAX SUBMIT
    $('#contactForm').submit(function(){
        
		$.ajax({
			url:'mailer.php',
			type : 'POST',
			dataType: 'json',
			data: $(this).serialize(),
			success: function(data) {
				
				console.log(data);
				
				if ( data.error === true ) {
				
					$('#error').css('display','block');
					var error = document.getElementById('error');
					error.innerHTML = data.msg;
				
					setTimeout(function(){
						window.scrollTo(0, 1);
					}, 100);

				}else {
					
					$('#note').show();
					$('#error').hide();
					$("#fields").hide();
				}
			}
		})
        return false;
    })


})