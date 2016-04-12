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
            <?php echo $login_display; // display welcome message to user ?>
          </a>
        </li>
        <li class="seconditem">
          <a href="logout.php">Logout</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
