<?php
include_once("connect.php");
session_start();
//$_SESSION['SAMPLE']="tester";
if (isset($_SESSION['userid'])){
  header("location:dashboard.php");
}
?>
<!DOCTYPE html>

<html lang="en" class="form-screen"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <style>body {
  background-image: url("tech.jpg"); 
}

    
   </style>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login </title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="main.css">
<script src="https://kit.fontawesome.com/b5f405ef21.js" crossorigin="anonymous"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="https://technext.github.io/admin-one/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://technext.github.io/admin-one/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://technext.github.io/admin-one/favicon-16x16.png">
  <link rel="mask-icon" href="https://technext.github.io/admin-one/safari-pinned-tab.svg" color="#00b4b6">

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">
 
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script type="text/javascript" async="" src="./Login_files/analytics.js.download"></script><script type="text/javascript" async="" src="./Login_files/js"></script><script src="./Login_files/658339141622648" async=""></script><script async="" src="./Login_files/fbevents.js.download"></script><script async="" src="./Login_files/js(1)"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

  <section class="section main-section">
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="fa-sharp fa-solid fa-lock"></i></span>
          Login
        </p>
      </header>
      <div class="card-content"><form action="mainlog.php" method="post">
 
  <!--input type="text" id="userid "--><br>
  
  
  

        

          <div class="field spaced">
            <label for="username"  id="userid"  class="label">User ID</label>
            <div class="control icons-left">
              <input class="input" type="text" id="userid" name="userid" placeholder="user@example.com" autocomplete="userid">
              <span class="icon is-small left"><i class="fa-sharp fa-regular fa-user"></i></span>
            </div>
            <p class="help">
              Please enter your login
            </p>
          </div>
          <div class="field spaced"> 
            <label for="password" id="password" name="password" class="label">Password</label>
            <p class="control icons-left">
              <input class="input" type="password" id="password" name="password" placeholder="Password" autocomplete="current-password">
              <span class="icon is-small left"><i class="fa-sharp fa-regular fa-asterisk"></i></span>
            </p>
            <p class="help">
              Please enter your password
            </p>
          </div>

          <div class="field spaced">
            <div class="control">
 
              <label class="checkbox"><input type="checkbox" name="remember" value="1" checked="">
                <span class="check"></span>
                <span class="control-label">Remember</span>
              </label>
            </div>
          </div>

<style>



.button-64 {
  align-items: center;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  border: 0;
  margin-left:145px;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 3px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
}

.button-64:active,
.button-64:hover {
  outline: 0;
}

.button-64 span {
  background-color: rgb(5, 6, 45);
  padding: 16px 24px;
  border-radius: 6px;
  width: 100%;
  height: 100%;
  transition: 300ms;
}

.button-64:hover span {
  background: none;
}

@media (min-width: 768px) {
  .button-64 {
    font-size: 24px;
    min-width: 196px;
  }
}
          </style>
            <div class="control">
            <button type="submit" class="button-64" role="button" name="submit" value="submit"><span class="text">login</span></button>
             <!-- -->
              </a>
            </div>
          </div>

        </form>
      </div>
    </div>

  </section>


</div>
<?php

if(isset($_POST['submit'])){
    //connect to database
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    //query the database to check if user exists
    $query = "SELECT * FROM users WHERE userid='$userid' AND password='$password'";
    $result = mysqli_query($conn, $query);
    //$sql = "INSERT INTO users(userid,password) VALUES('$userid','$password')";
    //echo $sql;
    var_dump($result);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['userid'] = $userid;
       // $_SESSION['SAMPLE1']="tester";
        header("location: Dashboard.php");
    }else{
        echo "Invalid login";
    }
}

 mysqli_close($conn);

?>







<!-- Scripts below are for demo only -->
<script type="text/javascript" src="./Login_files/main.min.js.download"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>





</body></html>