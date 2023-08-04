<?php
include_once("connect.php");?>

<!DOCTYPE html>
<!-- saved from url=(0049)https://technext.github.io/admin-one/profile.html -->
<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile - Admin One </title>

  <!-- Tailwind is included -->
  <script src="https://kit.fontawesome.com/b5f405ef21.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./main.css">

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
  <script src="./Profile - Admin One_files/658339141622648" async=""></script><script async="" src="./Profile - Admin One_files/fbevents.js.download"></script><script type="text/javascript" async="" src="./Profile - Admin One_files/analytics.js.download"></script><script type="text/javascript" async="" src="./Profile - Admin One_files/js"></script><script async="" src="./Profile - Admin One_files/js(1)"></script>
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
      
      </div>
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
            <img src="./Profile - Admin One_files/initials.svg" alt="John Doe" class="rounded-full">
          </div>
          <div class="is-user-name"><span>Admin1</span></div>
          <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
        </a> <div class="navbar-dropdown">
          <a href="Profile.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
            <span>My Profile</span>
          </a>
          <a href="Form.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-repeat"></i></span>
            <span>Add User</span>
          </a>
          
          <hr class="navbar-divider">
          <a class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
      
      <a title="Log out" class="navbar-item desktop-icon-only"><span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
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
        <a href="CSS%20Admin%20Dashboard.html">
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
        <a href="Profile.php" class="nav-link">
          <span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
          <span class="menu-item-label">Profile</span>
        </a>
      </li>
      <li>
        <a href="mainlog.php">
          <span class="icon"><i class="fa-sharp fa-solid fa-lock"></i></span>
          <span class="menu-item-label">Login</span>
        </a>
      </li>
      <li>
        <a class="dropdown">
          <span class="icon"><i class="fa-sharp fa-solid fa-users"></i></span>
          <span class="menu-item-label">Users</span>
          <span class="icon"><i class="fa-sharp fa-solid fa-circle-chevron-down"></i></span>
        </a>
        <ul>
          <li>
            <a href="Tables%20.php">
              <span class="icon"><i class="fa-sharp fa-solid fa-chart-line"></i></span><span> Activity Status </span>
            </a>
          </li>
          <li>
            <a href="Profile.html">
             <span class="icon"><i class="fa-sharp fa-solid fa-repeat"></i></span> 
             <span> Switch User </span>
            </a>
          </li>
          <li><a href="Form.php">
             <span class="icon"><i class="fa-sharp fa-solid fa-square-plus"></i></span>
              <span>Add new User</span>
            </a></li>
        </ul>
      </li-->
    </ul><br><meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $profile_picture = $_FILES['profile_picture'];

  // Validate the form data
  if (empty($name)) {
    $error = 'Name is required';
  } else if (empty($email)) {
    $error = 'Email is required';
  } else if ($profile_picture['error'] !== UPLOAD_ERR_OK) {
    $error = 'Profile picture is required';
  } else {
    // Update the user's profile in the database
    $update_query = "UPDATE users SET name='$name', email='$email' WHERE id='$user_id'";
    $update_result = mysqli_query($database, $update_query);
    if ($update_result) {
      // Upload the profile picture
      move_uploaded_file($profile_picture['tmp_name'], 'uploads/' . $profile_picture['name']);
      $message = 'Profile updated successfully';
    } else {
      $error = 'Failed to update profile';
    }
  }
}
?>
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
    <a href="Form.php">Users</a><br>
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
      <li>Profile</li>
    </ul>
    
  </div>

</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Profile
    </h1><!--a href="Form.php" onclick="alert(&#39;Coming soon&#39;); return false" target="_blank" class="button blue">
      <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
      <span>+ New Profile</span>
    </a-->
   
  </div>
</section>

  <section class="section main-section">
    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="fa-solid fa-user-pen"></i></span>
            Edit Profile
          </p>
        </header>
        <div class="card-content">
          <form>
            <div class="field">
              <label class="label">Avatar</label>
              <div class="field-body">
                <div class="field file">
                  <label class="upload control">
                    <a class="button blue">
                      Upload
                    </a>
                    <input type="file">
                  </label>
                </div>
              </div>
            </div>
            <hr>
            <div class="field">
              <label class="label">Name</label>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input type="text" autocomplete="on" name="name" value="username" class="input" required="">
                  </div>
                  <p class="help">Required. Your name</p>
                </div>
              </div>
            </div>
            <div class="field">
              <label class="label">E-mail</label>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input type="email" autocomplete="on" name="email" value="user@example.com" class="input" required="">
                  </div>
                  <p class="help">Required. Your e-mail</p>
                </div>
              </div>
            </div>
            <hr>
            <div class="field">
              <div class="control">
                <button type="submit" class="button green">
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            <span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
            Profile
          </p>
        </header>
        <?php

$sql = "SELECT username,email FROM users";
$res = mysqli_query($conn, $sql);


?>


        
        <?php
          if (mysqli_num_rows($res) > 0)
{
  while($row = mysqli_fetch_assoc($res)) {
if (mysqli_query($conn, $sql)) {}}}
?>
        <div class="card-content">
          <div class="image w-48 h-48 mx-auto">
            <img src="avatar.jpeg" alt="profile photo" class="rounded-full" style="width:300px" onclick="add">
          </div>
          <hr>
          <div class="field">
            <label class="label">Name</label>
            <div class="control">
              <input type="text" readonly="<?php echo $row["username"]; ?>" value="username" class="input is-static">
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">E-mail</E-mail></label>
            <div class="control">
              <input type="text" readonly="<?php echo $row["email"]; ?>" value="user@gmail.com" class="input is-static">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
          Change Password
        </p>
      </header>
      <div class="card-content">
        <form>
          <div class="field">
            <label class="label">Current password</label>
            <div class="control">
              <input type="password" name="password_current" autocomplete="current-password" class="input" required="">
            </div>
            <p class="help">Required. Your current password</p>
          </div>
          <hr>
          <div class="field">
            <label class="label">New password</label>
            <div class="control">
              <input type="password" autocomplete="new-password" name="password" class="input" required="">
            </div>
            <p class="help">Required. New password</p>
          </div>
          <div class="field">
            <label class="label">Confirm password</label>
            <div class="control">
              <input type="password" autocomplete="new-password" name="password_confirmation" class="input" required="">
            </div>
            <p class="help">Required. New password one more time</p>
          </div>
          <hr>
          <div class="field">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

<footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3"><style>
    #blue{
      font-size:27px;
      color:blue;
      float:right;
      padding-left:710px;
    }</style>
      <div>
        © 2022, PHP backend project
      </div><p id="blue"><a href="https://www.trizentinc.com/"><i>Trizent</i></a></p>
     
    </div>
   
        
      </svg>
    </a>
  </div>
</footer>

<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="./Profile - Admin One_files/main.min.js.download"></script>


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
<link rel="stylesheet" href="./Profile - Admin One_files/materialdesignicons.min.css">



</body></html>