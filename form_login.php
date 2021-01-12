<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>DUTA APP | PT. Duta Utama Tehnik Abadi</title>
  <script src="assets/login/js/modernizr.js" type="text/javascript"></script>

  <link rel="stylesheet" href="assets/login/css/reset.css">
  <link rel="stylesheet" href="assets/login/css/style.css">

</head>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<img src="gambar/logo.png" alt="logoduta" width="95" height="90">
<br>
<br>
<!--<img src="gambar/duta.png" alt="duta" width="750" height="130">-->

</center>




 	<form action="login.php" method="post" name="form_login">
  <div class="form">
    <div class="forceColor"></div>
    <div class="topbar">
      <div class="spanColor"></div>
      <input type="text" class="input" id="username" name="username" placeholder="Username"/>
      <input type="password" class="input" id="password" name="password" placeholder="Password"/>
    </div>
    <button class="submit" id="submit" >Masuk</button>
  </div>
  </form>
  <script src='assets/login/js/jquery.min.js'></script>
  <script src="assets/login/js/index.js"></script>

  <!--
  <style>
  .breaking-news-headline {
  display: block;
  position: absolute;
  font-family: arial;
  font-size: 13px;
  margin-top: -22px;
  color: white;
  margin-left: 150px;
}

.breaking-news-title {
  background-color: #ffea00;
  display: block;
  height: 20px;
  width: 90px;
  font-family: arial;
  font-size: 11px;
  position: absolute;
  top: 0px;
  margin-top: 0px;
  margin-left: 20px;
  padding-top: 10px;
  padding-left: 10px;
  z-index: 3;
  &:before {
    content: "";
    position: absolute;
    display: block;
    width: 0px;
    height: 0px;
    top: 0;
    left: -12px;
    border-left: 12px solid transparent;
    border-right: 0px solid transparent;
    border-bottom: 30px solid #ffea00;
  }
  &:after {
    content: "";
    position: absolute;
    display: block;
    width: 0px;
    height: 0px;
    right: -12px;
    top: 0;
    border-right: 12px solid transparent;
    border-left: 0px solid transparent;
    border-top: 30px solid #ffea00;
  }
}

#breaking-news-colour {
  height: 30px;
  width: 1024px;
  background-color: #3399ff;
}

#breaking-news-container {
  height: 30px;
  width: 694px;
  overflow: hidden;
  position: absolute;
  &:before {
    content: "";
    width: 30px;
    height: 30px;
    background-color: #3399ff;
    position: absolute;
    z-index: 2;
  }
}

.animated {
  -webkit-animation-duration: 0.2s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 0.2s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
}

.delay-animated {
  -webkit-animation-duration: 0.4s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 0.4s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
}

.scroll-animated {
  -webkit-animation-duration: 3s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 3s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
}

.delay-animated2 {
  -webkit-animation-duration: 0.4s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 0.4s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
}

.delay-animated3 {
  -webkit-animation-duration: 5s;
  -webkit-animation-fill-mode: both;
  -moz-animation-duration: 5s;
  -moz-animation-fill-mode: both;
  -webkit-animation-iteration-count: 1;
  -moz-animation-iteration-count: 1;
  -webkit-animation-delay: 0.5s;
  animation-delay: 3s;
}

.fadein {
  -webkit-animation-name: fadein;
  -moz-animation-name: fadein;
  -o-animation-name: fadein;
  animation-name: fadein;
}

@-webkit-keyframes fadein {
  from {
    margin-left: 1000px;
  }
  to {
  }
}
@-moz-keyframes fadein {
  from {
    margin-left: 1000px;
  }
  to {
  }
}

.slidein {
  -webkit-animation-name: slidein;
  -moz-animation-name: slidein;
  -o-animation-name: slidein;
  animation-name: slidein;
}

@keyframes marquee {
  0% {
    left: 0;
  }
  20% {
    left: 0;
  }
  100% {
    left: -100%;
  }
}

.marquee {
  animation: marquee 10s linear infinite;
  -webkit-animation-duration: 10s;
  -moz-animation-duration: 10s;
  -webkit-animation-delay: 0.5s;
  animation-delay: 3s;
}

@-webkit-keyframes slidein {
  from {
    margin-left: 800px;
  }
  to {
    margin-top: 0px;
  }
}
@-moz-keyframes slidein {
  from {
    margin-left: 800px;
  }
  to {
    margin-top: 0px;
  }
}

.slideup {
  -webkit-animation-name: slideup;
  -moz-animation-name: slideup;
  -o-animation-name: slideup;
  animation-name: slideup;
}
@-webkit-keyframes slideup {
  from {
    margin-top: 30px;
  }
  to {
    margin-top: 0;
  }
}
@-moz-keyframes slideup {
  from {
    margin-top: 30px;
  }
  to {
    margin-top: 0;
  }
}
</style>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<div id="breaking-news-container">
  <div id="breaking-news-colour" class="slideup animated">
    
  </div>  
   <span class="breaking-news-title delay-animated slidein">
      // INFORMASI //
    </span> 
    <a class="breaking-news-headline delay-animated2 fadein marquee">
      Selamat TAHUN BARU 2021 !!!
    </a>  
</div>  

-->
</body>
</html>
