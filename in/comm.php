<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=geek", "root", "");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    die("ERROR: Could not connect. " . $error->getMessage());
}
try{
	$emailf = $_POST['email'];
	$result=$pdo->prepare('SELECT  email FROM adata WHERE rollno=:rollno');
	$result->bindParam(':rollno',$_POST['rollno']);
	$result->execute(); 
	$data1 = $result->fetchAll();
	$coupons = array();
	  foreach($data1 as $row)
        {    
            $em = $receipt[] = $row['email']; 
        } 
		if ($em == $emailf){
			try{
    
    $sql = "INSERT INTO reg (username,email, pass,conpass,rollno) VALUES (:username, :email, :pass,:conpass,:rollno)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':pass', $_POST['pass']);
	$stmt->bindParam(':conpass', $_POST['conpass']);
	$stmt->bindParam(':rollno', $_POST['rollno']);
        
    $stmt->execute();
    header('Location:index1.html'); 
} catch(PDOException $error){
    $err=$error->getMessage();
	echo "$err";
	}
		}
		else{
			echo "this email is not ur please fill ur email exact email</br>";
			echo "<a href='index.php'><input type='button' value='Again Signup'></a>";
		}
		
		
        unset($result);
} catch(PDOException $error){
    $err=$error->getMessage();
	echo "$err";
}
unset($pdo);
?>