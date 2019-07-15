<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
<div class="row">
	<div class="col-md-6">
		<form action="storing.php" method="post" id="signup_form" >
			<div class="form-group"><lable>username</lable>
				<input type="text" id="u" name="username" class="form-control" onblur="use()">
				<span id="uerror"></span></div>
				<div class="form-group"><lable>password</lable>
				<input type="password" id="p" name="password" class="form-control" onblur="passw()">
				<span id="perror"></span></div>
				<div class="form-group"><lable>Email</lable>
				<input type="text" id="e" name="Email" class="form-control"  onblur="emi()">
				<span id="eerror"></span></div>
				<div class="form-group"><lable>phone number</lable>
				<input type="text" id="m" name="mobilenumber" class="form-control "  onblur="valid()">
				<span id="merror"></span></div>
				<button type="button" class="btn btn-primary" onclick="final()" >signup</button>



		</form>

	</div>
	<div class="col-md-6">
		<form action="loginvalidation.php" method="post" id="login_form">
			<div class="form-group"><lable>username</lable>
				<input type="text" id="lu" name="username" class="form-control" >
				<span id="luerror"></span></div>
				<div class="form-group"><lable>password</lable>
				<input type="password" id="lp" name="password" class="form-control" >
				<span id="luerror"></span></div>
				<button type="button" class="btn btn-primary" onclick="logfinal()">login</button>



		</form>
		
	</div>
	
</div>
	</div>
	<script>
		// document.getElementById('signup').disabled=true;

		function use()
		{
			var us=document.getElementById('u').value;
			var ucheck=/^[A-Za-z.]{5,}$/;
			if(ucheck.test(us))
			{
				document.getElementById('uerror').innerHTML=" ";
			}
			else{
				document.getElementById('uerror').innerHTML="user name is not correct ";
				
			}

		}
		function passw()
		{
				var ps=document.getElementById('p').value;
				var pcheck=/^[0-9]{6,}[!#$%^&]$/;
				if(pcheck.test(ps))
			{
				document.getElementById('perror').innerHTML=" ";
			}
			else{
				document.getElementById('perror').innerHTML="password is not correct ";
				

			}

		}
		function emi()
		{
			var el=document.getElementById('e').value;
			var echeck=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
			if(echeck.test(el))
			{
				document.getElementById('eerror').innerHTML=" ";
			}
			else{
				document.getElementById('eerror').innerHTML="email  is not correct ";
				

			}
		}

		
		
		function valid()
		{
			
		
			
			var mb=document.getElementById('m').value;
			
			
			
			var mcheck=/^[789][0-9]{9}$/;
			
			
			



if(mcheck.test(mb))
			{
				document.getElementById('merror').innerHTML=" ";

			}
			else{
				document.getElementById('merror').innerHTML="mobile number name is not correct ";
				

			}


		}
		function final()
		{
			var us=document.getElementById('u').value;
			var ucheck=/^[A-Za-z.]{5,}$/;
			var ps=document.getElementById('p').value;
			var pcheck=/^[0-9]{6,}[!#$%^&]$/;
			var el=document.getElementById('e').value;
			var echeck=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
			var mb=document.getElementById('m').value;
			var mcheck=/^[789][0-9]{9}$/;

			if(ucheck.test(us))
			{
				document.getElementById('uerror').innerHTML=" ";
			}
			else{
				document.getElementById('uerror').innerHTML="user name is not correct ";
				
			}

			if(pcheck.test(ps))
			{
				document.getElementById('perror').innerHTML=" ";
			}
			else{
				document.getElementById('perror').innerHTML="password is not correct ";
			}

			if(mcheck.test(mb))
			{
				document.getElementById('merror').innerHTML=" ";
			}
			else{
				document.getElementById('merror').innerHTML="mobile number name is not correct ";
			}

			if(echeck.test(el))
			{
				document.getElementById('eerror').innerHTML=" ";
			}
			else{
				document.getElementById('eerror').innerHTML="email  is not correct ";
			}


			if(ucheck.test(us) && pcheck.test(ps) && echeck.test(el) && mcheck.test(mb))
			{
				document.getElementById('signup_form').submit();
			}
			else
			{
				return false;
			}
			
			
			


		}
		function logfinal()
		{
			var lus=document.getElementById('lu').value;
			var lucheck=/^[A-Za-z.]{5,}$/;
			var lps=document.getElementById('lp').value;
			var lpcheck=/^[0-9]{6,}[!#$%^&]$/;

			if(lucheck.test(lus))
			{
				document.getElementById('luerror').innerHTML=" ";
			}
			else{
				document.getElementById('luerror').innerHTML="user name is not correct ";
				
			}

			if(lpcheck.test(lps))
			{
				document.getElementById('lperror').innerHTML=" ";
			}
			else{
				document.getElementById('lperror').innerHTML="password is not correct ";
			}
			if(lucheck.test(lus) && lpcheck.test(lps))
			{
				document.getElementById('login_form').submit();
			}
			else
			{
				return false;
			}
			


		}
	</script>
</body>
</html>
