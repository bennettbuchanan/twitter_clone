<header>
  <div class="headercontainer flex-item">
    <div id="mobile_view_header">
      <button id="nav-button">&#9776;</button>
        <h1><img id="logo" src="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" alt="Impossible Octopus Fitness Club Logo"> <span class="visuallyhidden">Impossible Octopus Fitness</span> </h1>
    </div>
    <nav>
      <ul class="centernav flex-item">
        <li><a href="index.php">Home</a></li>
        <li><a href="mystatuses.php">My statuses</a></li>
        <li><a href="allusers.php">All users</a></li>
      </ul>
      <ul class="toprightmenu flex-item">
        <li class="firstitem">
          <a href="#">Hello,
            <!-- Display a message to the user. -->
            <?php echo $login_display;?>
          </a>
        </li>
        <li class="seconditem">
          <!-- Display "login" for guests, and "logout" for logged in users -->
          <a href=<?php echo $login_file?>><?php echo $login_string?></a>
        </li>
      </ul>
    </nav>
  </div>
</header>
