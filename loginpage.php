<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
  </div>
  <div class="col-md-6">
    
   
    <a style="margin-right: 180px"   href="#">login</a>
       <a style="margin-right:180px" href="<?php echo base_url(''); ">signup</a>
    
  </div>
    </div>
  </div>
</nav>
  
<div class="container">
  <div class="container">
<div class="row">
  <div class="col-md-6">
    <form action="" method="post" id="signup_form" >
       <div class="form-group"><lable>phone number</lable>
        <input type="text" id="m" name="mobilenumber" class="form-control "  onblur="valid()">
        <span id="merror"></span></div>
     
        <div class="form-group"><lable>password</lable>
        <input type="password" id="p" name="password" class="form-control" onblur="passw()">
        <span id="perror"></span></div>
        
       
        <button type="button" class="btn btn-primary" onclick="final()" >login</button>



   
  </div>
  
</div>
  </div>
  <script>
    // document.getElementById('signup').disabled=true;

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
      //var us=document.getElementById('u').value;
      //ar ucheck=/^[A-Za-z.]{5,}$/;
      var ps=document.getElementById('p').value;
      var pcheck=/^[0-9]{6,}[!#$%^&]$/;
      //var el=document.getElementById('e').value;
      //ar echeck=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
      var mb=document.getElementById('m').value;
      var mcheck=/^[789][0-9]{9}$/;

     // if(ucheck.test(us))
      //{
        //document.getElementById('uerror').innerHTML=" ";
      //}
      //else{
        //document.getElementById('uerror').innerHTML="user name is not correct ";
        
      //}

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

      //if(echeck.test(el))
      //{
       // document.getElementById('eerror').innerHTML=" ";
      //}
      //else{
       // document.getElementById('eerror').innerHTML="email  is not correct ";
     // }


      if(ucheck.test(us) && pcheck.test(ps) && echeck.test(el) && mcheck.test(mb))
      {
        document.getElementById('signup_form').submit();
      }
      else
      {
        return false;
      }
      
      
      


    }
    
  </script>
</div>
  
</body>
</html>
