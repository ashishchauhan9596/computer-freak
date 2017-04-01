<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Random Login Form</title>
  
  
  


      <script type="text/javascript" >
	function cku()
		{
		var user = document.getElementById("user");
		var ckem = /^[A-Za-z0-9_]{3,20}$/;
    	if(ckem.test(user.value)== false)
			{
	
			alert("User name you entered might not contain any special characters expect _");
			user.value="";
    		}
		}
	function cke()
		{
		var email = document.getElementById("email");
		var ckem =  /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
    	if(ckem.test(email.value)== false)
			{
	
			alert("Email you entered is not in proper format");
			email.value="";
    		}
		}
	function cip() 
		{
			document.getElementById("pass1").value = "";
			document.getElementById("pass2").value = "";
		}
	function ck1()
		{
		var pass1 = document.getElementById("pass1");
		var ckpass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
		if(ckpass.test(pass1.value)== false)
		{
		alert("Password must have more than 6 alphabets and special characters like !@#$%^&*()_");
			cip();
		}
	}
	function checkpass()
		{
		var pass1 = document.getElementById("pass1");
		var pass2 = document.getElementById("pass2");
		var goodColor = "#40ea0c";
		var badColor = "#e0241b";
		if(pass1.value == pass2.value)
		{
			pass2.style.backgroundColor = goodColor;
		}else
		{
			pass2.style.backgroundColor = badColor;
		}
	}  
	function check()
		{
		var pass1 = document.getElementById("pass1");
		var pass2 = document.getElementById("pass2");

		if(pass1.value != pass2.value)
		{
		alert("Password don't match");
		pass2.value = "";
		}
	}
</script>

</head>

<body>
 
			<form action="insert.php" method="post">
				<input id="user"  type="text" onchange="cku(); return false;" name="username" placeholder="Username"  ><br>
				<input id="email" type="email" onchange="cke(); return false;" name="email" placeholder="Email"  ><br>
				<input id="pass1" type="password" onchange="ck1(); return false;" name="pass" placeholder="password" ><br>
				<input id="pass2"  type="password" onkeyup="checkpass();return false;" onchange="check();return false;" name="conpass" placeholder="Confirm password"  ><br>
				                <select  name="rollno" >
				  <option  value="pick">Select one Roll no.</option>
				  <?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=geek", "root", "");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
}
try{
    $sql = "SELECT rollno FROM adata";   
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        while($row = $result->fetch()){
          echo "<option value='".$row['rollno']."'>".$row['rollno']."</option>";
    }
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $error){
    $err=$error->getMessage();
	echo "$err";
}
unset($pdo);
?></select> 
				<input type="submit" value="aaa">
				</form>
				
				<a href="index1.html" ><input type="button" value="Already Have A Account "></a>
		


  
</body>
</html>
