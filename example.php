<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<title>form validation</title>
	
</head>
<body>
	<div class="container">
	<form name="myform" action="storing.php" method="post">
		<div class="from-group" >
			<label>user name:</label>
			<input type="text" name="Username" id="Username" class="form-control">
			<span id="usererror" class="text-danger"></span></div>
		
		<div class="from-group" >
			<label>password:</label>
			<input type="password" name="password" id="password" class="form-control">
			<span id="pass_error" class="text-danger"></span>
		</div>
		<div class="from-group" >
			<label>confirm password:</label>
			<input type="password" name="confirm_password" id="confirm_password" class="form-control">
			<span id="cpass_error" class="text-danger"></span>
		
		</div>
		<div class="from-group" >
			<label>Email</label>
			<input type="email" name="Email" id="Email" class="form-control">
			<span id="email_error" class="text-danger"></span>
		
		</div>
<div class="from-group" >
			<label>mobile number</label>
			<input type="text" name="mobilenumber" id="mobilenumber" class="form-control">
			<span id="num_error" class="text-danger"></span>
		</div>
			<br>
			
			<div class="from-group" >
			<button type="submit" class="btn btn-primary">submit</button>
		</div>
		<p1 id="f1"></p1>
	<br>
	<P2 id="f2"></P2>
	<br>
	<p3 id="f3"></p3>
	<p4 id="f4"></p4>
		
	</form></div>
	
	<script>
		function formf(){
		var username=document.getElementById("Username").value;
		var password=document.getElementById('password').value;
		var cpassword=document.getElementById('confirm_password').value;
		var email=document.getElementById('Email').value;
		var number = document.getElementById('mobilenumber').value;
		var usercheck=/^[A-Za-z. ]{3,30}$/ ;
		var pass_check=/^[A-Za-z.!@#$%^&*0-9]{8,}$/
		var em=/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		var pn=/^[0-9]{10}$/
		if(usercheck.test(username))
		{
			document.getElementById('usererror').innerHTML=" ";

		}
		else{
			document.getElementById('usererror').innerHTML="USERname is invalid";
			return false;
		}
		if(pass_check.test(password)){
			document.getElementById('pass_error').innerHTML="";
		}
		else{
			document.getElementById('pass_error').innerHTML="passwod error";
			return false;
		}
		if(cpassword.match(password)){
			document.getElementById('cpass_error').innerHTML=" ";
		}
		else{
			document.getElementById('cpass_error').innerHTML="password is not matching";
			return false;
		}

		if(em.test(email)){
	document.getElementById('email_error').innerHTML=" ";
}
else{
	document.getElementById('email_error').innerHTML="email id is not correct";
	return false;
}
if(pn.test(number))
{
	document.getElementById('num_error').innerHTML=" ";

}
else{
	document.getElementById('num_error').innerHTML="mobile number is not correct";
	return false;
}


}



	</script>
	</body>
	</html>

