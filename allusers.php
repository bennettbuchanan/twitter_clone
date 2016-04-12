<?php include_once './model/user.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="twitter.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impossible Octopus Fitness Farm Users</title>
  <link rel="shortcut icon" href="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" type="image/x-icon" />
</head>
<body>
<!-- Header -->
<header>
  <div class="headercontainer flex-item">
    <div id="mobile_view_header">
      <button id="nav-button"><span style="color: #aeaeae">&#9776;</span></button>
      <img id="logo" src="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" alt="Impossible Octopus Fitness Club Logo">
    </div>
    <nav>
      <ul class="centernav flex-item">
        <li><a href="index.html">Home</a></li>
        <li><a href="mystatuses.html">My statuses</a></li>
        <li><a href="allusers.html">All users</a></li>
      </ul>
      <ul class="toprightmenu flex-item">
        <li id="firstitem"><a href="#">Edit my profile</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
  </div>
</header>
  <div class="outercontainer flex-item">
    <!-- End Header -->
    <!-- Content Overwrap-->
    <div class="mystatuseswrapper flex-item">
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="https://pbs.twimg.com/profile_images/671167132147691520/uV8CeWDU_bigger.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[0]['full_name']?></a></p>
          <div>
            <p class="useraddress">@nbveroczi
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[1]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[2]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[3]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[4]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[5]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[6]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[7]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi"><?php echo $users[8]['full_name']?></a></p>
          <div>
            <p class="useraddress">@username
            </p>
          </div>
        </div>
        <div class="userstats flex-item">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div class="bio">
          <!-- Bio -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
    </div>
    <!-- End mystatuseswrapper -->
  </div>
  <!-- End Outermost container -->
  <div class="beta">
    <p>Welcome! Please bear in mind that this application is in beta.</p>
  </div>
  <script type="text/javascript" src="all_images_data.js" defer></script>
  <script type="text/javascript" src="post_a_status.js" defer></script>
  <script type="text/javascript" src="sticky_smart_header.js" defer></script>
  <script type="text/javascript" src="geolocation.js" defer></script>
  <script type="text/javascript" src="reply.js" defer></script>
  <script type="text/javascript" src="toggle.js" defer></script>
  <script type="text/javascript" src="geolocation_progressive_enhancement.js" defer></script>
</body>

</html>
