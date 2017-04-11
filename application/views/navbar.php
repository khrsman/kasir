<nav class="navbar navbar-default" id="navbar">
<div class="container-fluid">
  <div class="navbar-collapse collapse in">
    <ul class="nav navbar-nav navbar-mobile">
      <li>
        <button type="button" class="sidebar-toggle">
          <i class="fa fa-bars"></i>
        </button>
      </li>
      <li class="logo">
        <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
      </li>
      <li>
        <button type="button" class="navbar-toggle">
          <img class="profile-img" src="./assets/images/profile.png">
        </button>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-left">
      <li class="navbar-title"><h2><?php echo $title ?><h2></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li class="navbar-title">Asep</li>
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" >
            <div class="icon"><i class="fa fa-user-times"></i></div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Logout</li>
            </ul>
          </div>
        </li>
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" >
            <div class="icon"><i class="fa fa-close"></i></div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Keluar Aplikasi</li>            
            </ul>
          </div>
        </li>
    </ul>
  </div>
</div>
</nav>
