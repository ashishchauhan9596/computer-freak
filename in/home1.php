<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>home geek society</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
 <h2>Welcome<span style="color:green; ">
<?php echo $_SESSION['username'];?></Span></h2>

<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
    <div id="logo" ><img src="img/logo.png" class="img-responsive" alt="Placeholder image" width="50%" style="margin-right: 700px; background-size: cover;"> 
    </div>

  </header>
  <div id="content">
    <section class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
<input type="text"  id="search" value="search">
      <div id="menubar">
        <nav class="menu">

<figure class="snip1302">
  <img src="img/OBDL960.jpg" alt="sample42"/>
  <figcaption>
    <h2>Timeline</h2>
    <div class="icons">
      <a href="#"><i class="ion-social-reddit-outline"></i></a>
      <a href="#"> <i class="ion-social-twitter-outline"></i></a>
      <a href="#"> <i class="ion-social-vimeo-outline"></i></a></div>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1302">
  <img src="img/2826626-4.png"s alt="sample52"/>
  <figcaption>
    <h2>Home</h2>
    <div class="icons">
      <a href="#"><i class="ion-social-reddit-outline"></i></a>
      <a href="#"> <i class="ion-social-twitter-outline"></i></a>
      <a href="#"> <i class="ion-social-vimeo-outline"></i></a></div>
  </figcaption>
  <a href="#"></a>
</figure>

<figure class="snip1302">
  <img src="img/Untitled-.jpg" alt="sample42"/>
  <figcaption>
    <h2>News</h2>
    <div class="icons">
      <a href="#"><i class="ion-social-reddit-outline"></i></a>
      <a href="#"> <i class="ion-social-twitter-outline"></i></a>
      <a href="#"> <i class="ion-social-vimeo-outline"></i></a></div>
  </figcaption>
  <a href="#"></a>
</figure>
<a href="home2.php">
<figure class="snip1302">
  <img src="img/OHEAOW0.jpg" alt="sample42"/>
  <figcaption>
    <h2>Chat Room</h2>
    <div class="icons">
      <a href="#"><i class="ion-social-reddit-outline"></i></a>
      <a href="#"> <i class="ion-social-twitter-outline"></i></a>
      <a href="#"> <i class="ion-social-vimeo-outline"></i></a></div>
  </figcaption>
  <a href="#"></a>
</figure></a>
 <script>
			  /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
			</script>
