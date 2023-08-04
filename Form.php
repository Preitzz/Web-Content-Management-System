<?php
include_once("connect.php");?>
<!DOCTYPE html>
<!-- saved from url=(0047)https://technext.github.io/admin-one/forms.html -->
<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forms -  Dashboard</title>
<script src="https://kit.fontawesome.com/b5f405ef21.js" crossorigin="anonymous"></script>
  <!-- Tailwind is included -->
  <link rel="stylesheet" href="main.css">

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
  <script type="text/javascript" async="" src="./Form_files/analytics.js.download"></script><script type="text/javascript" async="" src="./Form_files/js"></script><script src="./Form_files/658339141622648" async=""></script><script async="" src="./Form_files/fbevents.js.download"></script><script async="" src="./Form_files/js(1)"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
    <div class="navbar-item">
      <div class="control"><input placeholder="Search everywhere..." class="input"></div>
    </div>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
      
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
            <img src="./Form_files/initials.svg" alt="John Doe" class="rounded-full">
          </div>
          <div class="is-user-name"><span>Admin1</span></div>
          <span class="icon"><i class="fas fa-chevron-down"></i></span>
        </a> <div class="navbar-dropdown">
          <a href="Profile.html" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
            <span>My Profile</span>
          </a>
          <a class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-repeat"></i></span>
            <span>Switch User</span>
          </a>
          
          <hr class="navbar-divider">
          <a href="signout.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
      
      <a href="signout.php" title="Log out" class="navbar-item desktop-icon-only"><span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
       </span>
        <span>Sign out</span>
      </a>
    </div>
  </div>
</nav>

<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
    <b class="font-black" ><i>W</b>eb <b class="font-black">C</b>ontent <b class="font-black">M</b>anager</i>
    </div>
  </div>
  <div class="menu is-menu-main">
    <br>
    <ul class="menu-list">
      <li class="active">
        <a href="Dashboard.php">
        <span class="icon-text">
  <span class="icon">
    <i class="fas fa-home"></i>
  </span>
  
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    
    <ul class="menu-list">
      <!--li class="--set-active-tables-html">
        <a href="Tables%20.php" target="file" class="menu-item-label">
         <span class="icon"> <i class="fas fa-table"></i></span>
          <span class="menu-item-label"> Tables</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="Form.php">
          <span class="icon"><i class="fa-sharp fa-solid fa-pen-to-square"></i></span>
          <span class="menu-item-label">Register</span>
        </a>
      </li>
      <li class="--set-active-profile-html">
        <a href="Profile.html" class="nav-link">
          <span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
          <span class="menu-item-label">Profile</span>
        </a>
      </li>
      <li>
        <a href="mainLog.php">
          <span class="icon"><i class="fa-sharp fa-solid fa-lock"></i></span>
          <span class="menu-item-label">Login</span>
        </a>
      </li--><br>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="fa-sharp fa-solid fa-users"></i></span>
          <span class="menu-item-label">User Management</span>
          <span class="icon"><i class="fa-sharp fa-solid fa-circle-chevron-down"></i></span>
        </a>
        <ul>
          <li>
            <a href="Tables%20.php">
              <span class="icon"><i class="fa-sharp fa-solid fa-chart-line"></i></span><span> Activity Status </span>
            </a>
          </li>
          <li>
            <a href="Tables%20.php">
             <span class="icon"><i class="fa-sharp fa-solid fa-repeat"></i></span> 
             <span> List Users </span>
            </a>
          </li>
          <li><a href="Form.php">
             <span class="icon"><i class="fa-sharp fa-solid fa-square-plus"></i></span>
              <span>Add New User</span>
            </a></li>
        </ul>
      </li>
    </ul><br><meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 20%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="Form.php">Add new Users</a><br>
    <a href="Tables%20.php">Activity logs</a><br>
    <a href="roles.html">Manage Roles</a><br>
    
  </div>
</div>

<span style="font-size:20px;color:white;cursor:pointer" onclick="openNav()">&#9776; Administration </span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
  </div>
</aside>
        
   
<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Forms</li>
    </ul>
    <!--a href="https://justboil.me/" onclick="alert(&#39;Coming soon&#39;); return false" target="_blank" class="button blue">
      
      <span>+ New User </span>
    </a-->
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Forms
    </h1>
    <!--button class="button light">reload</button-->
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="fa-solid fa-file-pen fa-2px"></i></span>
          Forms
        </p>
  
      </header>
      <div class="card-content">
        <form action="form.php" method="post">
          <div class="field">
            <label class="label">Add User</label>
            <div class="field-body">
              <div class="field">
                <div class="control icons-left">
                  <input class="input" id="name" name="name" type="text" placeholder="Name">
                  <span class="icon left"><i class="fa-sharp fa-solid fa-user"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input" name="email"  type="email" placeholder="Email Address">
                  <span class="icon left"><i class="fas fa-at"></i></span>
                  <span class="icon right"><i class="fa-solid fa-check"></i></span>
                </div>
              </div>
              <div class="field">
                <div class="control icons-left icons-right">
                  <input class="input"id="address" name="address" type="address" placeholder="Address location">
                  <span class="icon left"><i class="fas fa-home"></i></span>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="field">
            <div class="field-body">
              <div class="field">
                <div class="field addons">
                  <div class="control">
                    <input class="input" value="+91" size="3" readonly="">
                  </div>
                  <div class="control expanded">
                    <input class="input" type="tel" id="phone" name="phone" placeholder="Your phone number">
                  </div>
                </div>
                <p class="help">Do not enter the first zero</p>
              </div>
            </div>
          </div><style>
            .container {
  padding: 8px;
}
          input[type=id], input[type=password] {
            background-color: #fefefe;
          
            --tw-border-opacity: 1;
    border-color: rgba(156,163,175,var(--tw-border-opacity));
    border-radius: 0.25rem;

  width: 45%;
  padding: 8px 20px;
  margin: 3px 6px;
  
  background-color: rgba(255,255,255,var(--tw-bg-opacity));
  border: 2px solid #888;
  box-sizing: border-box;
}
.input[type=id], input[type=password]:hover {
  
  box-shadow: 0 0 11px rgba(33,33,33,.2); 
}
</style>
          <div class="container">
          
    <input type="id" placeholder="Enter Username"  id="userid" name="userid" required>
   
    
    <input type="password" placeholder="Enter Password"  id="password" name="password" required>
   
</div>
          <hr>
          
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red"><a href="Form.php">
                Reset
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    
      
              
            
        
      </div>
    </div>
  </section>
  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Validate the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  if (empty($name) || empty($email) || empty($address) || empty($phone)|| empty($userid)|| empty($password)) {
    
    echo "Please fill out all fields.";
  } else {
   
    
    
    $sql = "INSERT INTO users(username, email, address,phone_number,status,userid,password) VALUES('$name','$email','$address','$phone','active','$userid','$password')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
     mysqli_close($conn);

   
   
  }
}
?>


<style>
    #blue{
      font-size:27px;
      color:blue;
      float:right;
      padding-left:710px;
    }</style>

<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2022,PHP backend project
      
    </div><p id="blue"><a href="https://www.trizentinc.com/"><i>Trizent</i></a></p>

        
  </div>
</footer>


</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="./Form_files/main.min.js.download"></script>


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

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="./Form_files/materialdesignicons.min.css">



</body></html>