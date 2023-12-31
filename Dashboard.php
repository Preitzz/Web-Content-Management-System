<?php
include_once("connect.php");?>
<?php
session_start();

?>

<!DOCTYPE html>

<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>web content manager
  
  
  </title>

<link rel="stylesheet" href="admin-one-css.html">
  


<!--link rel="stylesheet" href="./CSS Admin Dashboard_files/materialdesignicons.min.css" -->
<script src="https://kit.fontawesome.com/b5f405ef21.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./materialdesignicons.css" >
  
  <link rel="stylesheet" href="main.css">

  <link rel="apple-touch-icon" sizes="180x180" href="https://technext.github.io/admin-one/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://technext.github.io/admin-one/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://technext.github.io/admin-one/favicon-16x16.png">
  <link rel="mask-icon" href="https://technext.github.io/admin-one/safari-pinned-tab.svg" color="#00b4b6">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <meta name="description" content="Admin One - free Tailwind dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
  <script src="./CSS Admin Dashboard_files/658339141622648" async=""></script><script async="" src="./CSS Admin Dashboard_files/fbevents.js.download"></script><script type="text/javascript" async="" src="./CSS Admin Dashboard_files/analytics.js.download"></script><script type="text/javascript" async="" src="./CSS Admin Dashboard_files/js"></script><script async="" src="./CSS Admin Dashboard_files/js(1)"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.
chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,
.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;
right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>
div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute
;width:200%;height:200%;left:0;top:0}</style></head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
    <div class="navbar-item">
      <div class="control"><input placeholder="Search everywhere.... " class="input"></i></div>
    </div>
  </div>
  <div class="navbar-brand is-right">
    <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
      <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
    </a>
  </div>
  
        
      <div class="navbar-item dropdown has-divider has-user-avatar">
        <a class="navbar-link">
          <div class="user-avatar">
        <!--span>  <i class="fa-solid fa-circle-user fa-lg" style="color:green"></i></span-->
        <img src="./CSS Admin Dashboard_files/in1.png" alt="Admin" class="rounded-full" style="width: 300px; height: 26px;">
          </div>
          <div class="is-user-name"><span> <?php
       $id = 73;
       $sql = "SELECT username FROM users WHERE id = $id";
       $result = mysqli_query($conn, $sql);
       
       if (mysqli_num_rows($result) > 0) {
           // username found, retrieve and display it
           $row = mysqli_fetch_assoc($result);
           $username = $row["username"];
           echo " $username ";
       } else {
           // username not found
           echo "Username not found.";
       }
         
?>
          </span></div>
          <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
        </a>
        <div class="navbar-dropdown">
          <a href="Profile.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
            <span>My Profile</span>
          </a>
          <a href="Form.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-repeat"></i></span>
            <span>Add User</span>
          </a>
          
          <hr class="navbar-divider">
          <a href="signout.php" class="navbar-item" >
            <span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i></span> 
            <span>Log Out</span>
          </a>
        </div>
      </div>
      
      <a title="Log out" href="signout.php" class="navbar-item desktop-icon-only"><span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
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
    <br>
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
      </li-->
      <li>
        <a class="dropdown">
          <span class="icon"><i class="fa-sharp fa-solid fa-users"></i></span>
          <span class="menu-item-label">User management</span>
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
</style><br>
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="Form.php">New User</a><br>
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
      <li>Dashboard</li>
    </ul>
    <a href="Tables%20.php"  target="_blank" class="button blue">
    <span class="icon"></i><i class="fa-solid fa-bookmark"></i></span>
      <span><B>  Activity log   </b></span>
    </a>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Dashboard
    </h1>
    
  </div>
</section>

  <section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Users
              </h3>
              <h1>
              <?php

$res = mysqli_query($conn, "SELECT COUNT(*) FROM users");
$num_users = mysqli_fetch_array($res)[0];
echo $num_users;
?>

              </h1>
            </div>
            <span class="icon widget-icon text-green-500"><i class="fa-solid fa-users fa-3x"></i></span>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Sales
              </h3>
              <h1>
                $7,770
              </h1>
            </div>
            <span class="icon widget-icon text-blue-500"><i class="fa-solid fa-chart-pie fa-3x"></i></span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <div class="flex items-center justify-between">
            <div class="widget-label">
              <h3>
                Performance
              </h3>
              <h1>
                256%
              </h1>
            </div>
            <span class="icon widget-icon text-red-500"><i class="fa-solid fa-chart-line fa-3x"></i></span>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="fa-solid fa-coins"></i></span>
          Performance
        </p>
        <a href="https://technext.github.io/admin-one/index.html?_ga=2.245473155.685139795.1668689949-1712477807.1668689949#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <div class="chart-area">
          <div class="h-full"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div></div>
              </div>
            </div>
            <canvas id="big-line-chart" width="1011" height="400" class="chartjs-render-monitor block" style="height: 400px; width: 1011px; display: block;"></canvas>
          </div>
        </div>
      </div>
    </div>

    

    <!--div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="fa-solid fa-users"></i></span>
          Users
        </p>
        <a href="file:///S:/TRizent/CSS%20Admin%20Dashboard.html" class="card-header-icon">
          <span class="icon"><i class="fa fa-refresh"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>Action</th>
            <th>Created</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          <tr> <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(1).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Rebecca Bauch</td>
            <td data-label="Company">Daugherty-Daniel</td>
            <td data-label="City">South Cory</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
             
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(2).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Felicita Yundt</td>
            <td data-label="Company">Johns-Weissnat</td>
            <td data-label="City">East Ariel</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
                
              
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Jan 8, 2021">Jan 8, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(3).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Mr. Larry Satterfield V</td>
            <td data-label="Company">Hyatt Ltd</td>
            <td data-label="City">Windlerburgh</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
              
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Dec 18, 2021">Dec 18, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(4).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Mr. Broderick Kub</td>
            <td data-label="Company">Kshlerin, Bauch and Ernser</td>
            <td data-label="City">New Kirstenport</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
              
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Sep 13, 2021">Sep 13, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(5).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Barry Weber</td>
            <td data-label="Company">Schulist, Mosciski and Heidenreich</td>
            <td data-label="City">East Violettestad</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
              
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Jul 24, 2021">Jul 24, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(6).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Bert Kautzer MD</td>
            <td data-label="Company">Gerhold and Sons</td>
            <td data-label="City">Mayeport</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
           
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Mar 30, 2021">Mar 30, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(7).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Lonzo Steuber</td>
            <td data-label="Company">Skiles Ltd</td>
            <td data-label="City">Marilouville</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
             
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Feb 12, 2021">Feb 12, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(8).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Jonathon Hahn</td>
            <td data-label="Company">Flatley Ltd</td>
            <td data-label="City">Billiemouth</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
             
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Dec 30, 2021">Dec 30, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(9).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Ryley Wuckert</td>
            <td data-label="Company">Heller-Little</td>
            <td data-label="City">Emeraldtown</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
            
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Jun 28, 2021">Jun 28, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td class="image-cell">
              <div class="image">
                <img src="./CSS Admin Dashboard_files/initials(10).svg" class="rounded-full">
              </div>
            </td>
            <td data-label="Name">Sienna Hayes</td>
            <td data-label="Company">Conn, Jerde and Douglas</td>
            <td data-label="City">Jonathanfort</td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="false">
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
           
            </td>
            <td data-label="Created">
              <small class="text-gray-500" title="Mar 7, 2021">Mar 7, 2021</small>
            </td>
            <td class="actions-cell">
              <div class="buttons right nowrap">
                <button class="button small green --jb-modal" data-target="sample-modal-2" type="button">
                  <span class="icon"><i class="fas fa-eye"></i></span>
                </button>
                <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                  <span class="icon"><i class="fas fa-trash-can"></i></span>
                </button>
              </div>
            </td>
          </tr>
          </tbody>
        </table>
        <div class="table-pagination">
          <div class="flex items-center justify-between">
            <div class="buttons">
              <button type="button" class="button active">1</button>
              <button type="button" class="button">2</button>
              <button type="button" class="button">3</button>
            </div>
            <small>Page 1 of 3</small>
          </div>
        </div>
      </div>
    </div-->
            
       
  </section><style>
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
        ©2022, Common Admin Panel project
      
    </div><p id="blue"><a href="https://www.trizentinc.com/"><i>Trizent</i></a></p>
    
      
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
<script type="text/javascript" src="./CSS Admin Dashboard_files/main.min.js.download"></script>

<script type="text/javascript" src="./CSS Admin Dashboard_files/Chart.min.js.download"></script>
<script type="text/javascript" src="./CSS Admin Dashboard_files/chart.sample.min.js.download"></script>


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



</body></html>