<?php
	session_start();
?><html>
<head>
<title>Chat Room</title>
<script src="jquery-1.8.2.js"></script>
<link href="style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
$(document).ready(function(){
	$("#ctxt").keyup(function(e){
		if (e.keyCode==13){
			var ctxt=$("#ctxt").val();
			$.ajax({
				type:'POST',
				url:'Insertmcz.php',
				data:{ctxt:ctxt},
				success:function(){
					$("#mcz").load("displaymcz.php");
					$("#ctxt").val("");
				}
		});
		}
	});
	setInterval(function(){
	$("#mcz").load("displaymcz.php");
	},1500);
	$("#mcz").load("displaymcz.php");
});

function users(){
	xhr1 = new XMLHttpRequest();
	xhr1.open('POST' , 'userFetch.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();
	xhr1.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('loginperson').innerHTML = xhr1.responseText;
			}
		
		
		}
		
		
</script>
</head>
<body>
<h2>Welcome<span style="color:green; ">
<?php echo $_SESSION['username'];?></Span></h2>
<div id="chatb">
<div id="mcz">
<div id="loginperson">
</div>
</div>
<textarea rows="4" cols="100" id="ctxt" name="ctxt" ></textarea>	
</div>
</body>
</html>
<style>#loginperson {
					width:238px;
					height:497px;
					border:double;
					float:right;}</style>