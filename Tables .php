<?php
include_once("connect.php");?>

<!DOCTYPE html>
<!-- saved from url=(0048)https://technext.github.io/admin-one/tables.html -->
<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tables-Admin One </title>

  <!-- Tailwind is included --><script src="https://kit.fontawesome.com/b5f405ef21.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="main.css">

  <link rel="apple-touch-icon" sizes="180x180" href="https://technext.github.io/admin-one/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://technext.github.io/admin-one/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://technext.github.io/admin-one/favicon-16x16.png">
  <link rel="mask-icon" href="https://technext.github.io/admin-one/safari-pinned-tab.svg" color="#00b4b6">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script-->
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
  <script type="text/javascript" async="" src="./Tables _files/analytics.js.download"></script>
  <script type="text/javascript" async="" src="./Tables _files/js"></script><script src="./Tables _files/658339141622648" async="">

  </script><script async="" src="./Tables _files/fbevents.js.download"></script>
  <script async="" src="./Tables _files/js(1)"></script>
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
;width:200%;height:200%;left:0;top:0}</style>
</head>
<body>

<div id="app">

<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-brand">
    <a class="navbar-item mobile-aside-button">
      <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
    </a>
    <div class="navbar-item">
      <div class="control"><input placeholder="Search ..." class="input"></div>
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
            <img src="./Tables _files/initials.svg" alt="John Doe" class="rounded-full">
          </div>
          <div class="is-user-name"><span> admin1<</span></div>
          <span class="icon"><i class="fa-solid fa-chevron-down"></i></span>
        </a> <div class="navbar-dropdown">
          <a href="Profile.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
            <span>My Profile</span>
          </a>
          <a href="Form.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-repeat"></i></span>
            <span>Add new User</span>
          </a>
          
          <hr class="navbar-divider">
          <a href="signout.php" class="navbar-item">
            <span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i></span>
            <span>Log Out</span>
          </a>
        </div>
      </div>
      
      <a  href="signout.php" title="Log out" class="navbar-item desktop-icon-only"><span class="icon"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
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
      <li class="--set-active-tables-html">
        <!--a href="Tables%20.php" target="file" class="menu-item-label">
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
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
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
    <a href="Form.php">Add new User</a><br>
    <a href="Tables%20.php">Activity logs</a><br>
    <a href="roles.html">Manage Roles</a><br>
    <a href="editForm.php">Manage Permissions</a><br>
  </div>
</div>

<?php

$sql = "SELECT id,username, Phone_number,email,status,create_at,address FROM users order by create_at DESC";
$result = mysqli_query($conn, $sql);

?>



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
      <li>Users</li>
    </ul>
    <a href="Form.php"  target="_blank" class="button blue">
      <span class="icon"><i class="fa-solid fa-user-plus"></i></span>
      <span> New User</span>
    </a>
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      User List    </h1>
    <!--button class="button light">Drop</button-->
  </div>
</section>

  <section class="section main-section">
    <!--div class="notification blue">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="fa-solid fa-table-list"></i></span>
          <b>Responsive table</b>
        </div>
        <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
      </div>
    </div-->
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="fa-solid fa-users "></i></span>
          <span>      Users</span>
        </p>
        <a href="Tables%20.php" class="card-header-icon">
          <span class="icon"><i class="fa fa-refresh"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Phone Number </th>
            <th>email Address</th>
            <th> Address</th>
            <th>Status</th>
            <th>Created</th>
            <th>Edit&Delete</th>
          </tr>
          </thead>
          <tbody><?php
          if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result)) {
if (mysqli_query($conn, $sql)) {
?>
<tr>
            <td class="image-cell">
              <div class="image"><i class="fa-solid fa-circle-user fa-lg" style="color:blue"></i>
                <!--img src="./CSS Admin Dashboard_files/initials(1).svg" class="rounded-full"-->
              </div>
            </td>
            <td data-label="Name"><?php echo $row["username"]; ?></td>
            <td data-label="Company"><?php echo $row["Phone_number"]; ?></td>
            <td> <?php echo $row["email"] ?></td>
            <td data-label="City"><?php echo $row["address"] ?></td>
            <td data-label="Progress" class="progress-cell"><div class="field-body">
            <div class="field">
              <label class="switch">
                <input type="checkbox" value="true" checked>
                <span class="check">
                <span class="control-label"></span></span>
              </label>
            </div>
          </div>
             
            </td>
            <td data-label="Created">
              <small class="text-gray-500" ><?php echo $row["create_at"] ?></small>
            </td>
            <td data-label="Edit&Delete " class="actions-cell">
              <div class="buttons right nowrap"><a href="editForm.php?id=<?php echo $row["id"] ?>">
                <button class="button1" type="submit"> <span class="icon"> <i class="fa-solid fa-pen-nib fa-lg"></i></span></button></a>
                <a href="deleteusers.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Are you sure ?!   If so click OK to delete this row')">
                <button class="button small red "  type="button">
                
                  <span class="icon"><i class="fas fa-trash-can"></i></span></button>
                 </a>
              </div>
            </td>
          </tr>
            
<?php
   
  }
}}
else {
  echo "0 results";
}?>
          
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
    </div>

    <div class="notification red">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="fa-solid fa-border-none"></i></span>
          <b>Empty table.</b>
        </div>
        <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
      </div>
    </div>

    <div class="card empty">
      <div class="card-content">
        <div>
          <span class="icon large"><i class="fa-regular fa-file fa-2xl"></i></span>
        </div>
        <div>Nothing's here…</div>
      </div>
    </div><style>
    #blue{
      font-size:27px;
      color:blue;
      float:right;
      padding-left:710px;
    }</style>
  </section><footer class="footer">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
    <div class="flex items-center justify-start space-x-3">
      <div>
        © 2022, Common Admin Panel project
      
    </div><p id="blue"><a href="https://www.trizentinc.com/"><i>Trizent</i></a></p>
    
  </div>
</footer>

<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Delete User</p>
    </header>
    <section class="modal-card-body">
      <p>Do you want to <b>Remove this User ?</b></p>
      
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm 
     

</button>
    </footer>
  </div>
</div>

<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Edit user</p>
    </header>
    <section class="modal-card-body">
      <p>Do you want to <b>edit the details of this user?</b></p>
      <p>Click <b>'confirm'</b> to edit user form details</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close"><span class="text"><a href="editForm.php" target="_blank">Confirm</span></button></a>
    </footer>
  </div>
</div>

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="./Tables _files/main.min.js.download"></script>


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
<link rel="stylesheet" href="./Tables _files/materialdesignicons.min.css">



</body></html>