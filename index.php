<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>JavaScript form validation - checking all letters</title>
<link rel='stylesheet' href='form-style.css' type='text/css' />
</head>
<body onload='document.form1.text1.focus()'>
<div class="mail">
<h2>Enter your Name and Submit</h2>
<form name="form1" action="#">
<div><h4>Firstname</h4></div>
<input type='text' name='text1' pattern="/^[A-Za-z]+$/" title="Please input alphabet characters only" required/>
  <div><h4>Laststname</h4></div>
<input type='text' name='text2'pattern="/^[A-Za-z]+$/" title="Please input alphabet characters only" required/>  
    <div>
        <div><h4>Email</h4></div>
        <input type="email" name="email" ></div>
    
    
    <div>
    <h4>Password</h4>
<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" title=" Password complexity must contain 1 lowercase, 1 uppercase, a combination of special
characters, min=6 and max=20, must not contain spaces." required>
<input type="submit" name="submit" value="Submit" onclick="allLetter(document.form1.text1)" /></div>

</form>
</div>
<script>function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
      alert('Your name have accepted : you can try another');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }
 </script>
</body>
</html>