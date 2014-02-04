$(document).ready(function(){
	$('#fname').on('blur',function(){
		var fname = $(this).val();
		if (fname.length > 0 ){
			$('#mayor1').html('ok');
		}else{
			$('#mayor1').html('wrong');
		}
	});

	$('#lname').on('blur',function(){
		var lname = $(this).val();
		if(lname.length > 0){
			$('#mayor2').html('ok');

		}else{
			$('#mayor2').html('wrong');
		}
	});

	$('#email').on('blur',function(){
		var email = $(this).val();
		if(email.length > 0){
			$('#mayor3').html('ok');

		}else{
			$('#mayor3').html('wrong');
		}
	});
	$('#password').on('blur',function(){
		var password = $(this).val();
		if(password.length > 0){
			$('#mayor4').html('ok');

		}else{
			$('#mayor4').html('wrong');
		}

	});
	$('#confirmpassword').on('blur',function(){
		var confirmpassword = $(this).val();
		var password = $('#password').val();
		if(confirmpassword == password){
			$('#mayor5').html('ok');

		}else{
			$('#mayor5').html('wrong');
		}
	});

	$('#input').on('click',function(){
		var fname = $('#fname').val();
		var lname = $('#lname').val();
		var email = $('#email').val();
		var password = $('#password').val();
		var confirmpassword = $('#confirmpassword').val();

		if(fname.length > 0 && lname.length > 0 && email.length > 0 && password.length > 0 && confirmpassword == password){
			return true;
		}else{
			alert("IKAY MALAS");
			return false;
		}
	});
});