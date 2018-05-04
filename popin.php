<!DOCTYPE html>
<html>

<head>
  <title>SmartBoard - Tarr Lorant</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="public/css/dashboard.css" type="text/css" />
  <link rel="stylesheet" href="public/css/popin.css" type="text/css" />
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="public/js/script.js" type="text/javascript"></script>

<body>
  <header>
    <div class="logo">
      <img src="public/img/logo.png" />
    </div>
    <div class="menu">
      <a href="#" class="asd selected">My Dashboard</a>
      <a href="#" class="asd">Statisics</a>
    </div>
    <div class="header-button">
      <a href="#"><img src="public/img/header-button.png" /></a>
      <div class="clear"></div>
    </div>
  </header>
  <div id="container">
    <aside>
      <div class="user">
        <img src="public/img/user.png" />
        <span id="current-user">Current user</span>
        <button id="NewUserBtn">Create new</button>
      </div>
      <div class="aside-menu">
        <a href="#" class="selected">Dashboard</a></li>
        <a href="#">Widgets</a>
        <a href="#">Charts</a>
        <a href="#">Tables</a>
        <a href="#">Alerts</a>
      </div>
      <div class="login-logout">
        <div class='inl'>
          <a href="login.html">Login</a>
          <span>/</span>
          <a href="#">Logout</a>
        </div>    
      </div>
    </aside>
    <main>
      <div class="left-content">
       <div class="square1">
          <div class="inbox-header">
            <img src="public/img/chat.png" />
            <span>Inbox</span>
          </div>
          <div class="inbox-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo...
            </p>
            <p><a href="#">Read more</a>
              <p>
          </div>
        </div>
        <div class="square2">
          <div class="new-product prodbox">
            <img class="prodimg" src="public/img/prglpt.PNG" />
            <a href="popin.php">New Product</a>
          </div>
          <div class="copy-product prodbox">
            <img class="prodimg" src="public/img/prglng.PNG" />
            <a href="#">Copy of New Product</a>
          </div>
        </div>
      </div>
      <div class="right-content">
        <div class="square3">
          <div class="square3-1">
            <img class="comment-img" src="public/img/comment.png" />
            <div class="comment-txt">
              <b class="comment-ct">50</b>
              <p>Comments</p>
            </div>
          </div>
          <div class="square3-2">
            <div class="view-txt">
              <img class="view-img" src="public/img/view.png" />
              <div class="view-txt">
                <b class="view-ct">26.4k</b>
                <p>Views</p>
              </div>
            </div>
          </div>
        </div>
        <div id="chart"></div>
    </main>
    </div>
  <div class="popin-container">
      <div class="popin">
        <a href="index.html" class="popin-x">X</a>
        <div>
          <div class="popin-top">
          </div>
          <div class="popin-content">
            <div class="control-row">
              <div class="info">
                CATEGORIE / BY ADMIN / 05.11.2016
              </div>
              <div class="edit">
                <a href="edit-popin.html" onclick="popinWindow();">Edit</a>
              </div>
              <div class="popin-title">
                <?php
                  if(isset($_REQUEST['edit-btn-save'])) {
                    echo "<p>".$_REQUEST['popin-title-textarea']."</p>";
                  } else {
                    echo "<p>Un articol despre IT-isti</p>";
                  }
                ?>
                
              </div>
              <div class="popin-txt">
                <?php
                  if(isset($_REQUEST['edit-btn-save'])) {
                    echo "<p>".$_REQUEST['popin-txt-textarea']."</p>";
                  } else {
                    echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu tristique odio. Donec nisl lectus, varius quis dignissim id,
                 finibus sit amet libero. Fusce sed dignissim risus. Proin mattis luctus velit quis molestie. Quisque varius cursus ligula.
                 Sed blandit est in mi auctor, sit amet interdum velit tincidunt. Fusce nec erat sit amet erat fermentum egestas.
                 Proin ipsum libero, euismod vitae facilisis vel, efficitur sit amet tellus. Nunc nibh nulla, consequat ut quam et,
                 ultricies bibendum nunc.</p>";
                    echo "<p>Ut sapien elit, condimentum a dapibus sit amet, commodo sed risus. Nulla sagittis aliquet pellentesque.
                 Praesent vel arcu vitae elit fermentum rhoncus non congue mauris. Suspendisse nec commodo metus, sed volutpat mi.
                 Curabitur interdum lobortis neque, vel mattis libero dignissim eget.</p>";
                    echo "<p>Sed luctus, est sit amet tempor interdum, augue elit tincidunt est, eu eleifend erat mauris in nunc.
                 In nisl turpis, pharetra sed ligula eget, aliquet consectetur nunc. Nunc id tellus vitae leo iaculis auctor non sit amet felis.
                 Sed aliquet lobortis ligula.</p>";
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
