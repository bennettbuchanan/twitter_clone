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
  <?php
    include_once 'cookie_updates.php';
    include_once 'model/user.php';
    include_once 'model/status.php';
    include_once 'views/header.php';
  ?>
  <div class="outercontainer flex-item">
    <!-- End Header -->
    <!-- Content Overwrap-->
    <div class="mystatuseswrapper flex-item">
      <?php
        // for each item in the $users array, display their status
        foreach ($users as $elem) {
          echo '
          <div class="profile flex-item">
            <!-- profile -->
            <div class="background">
            </div>
            <img class="minipic" src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="User Profile Image">
            <div class="userinfo">
              <p><a href="https://twitter.com/nbveroczi">'.$elem['full_name'].'</a></p>
              <div>
                <p class="useraddress">'.$elem['user_name'].'
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
          <!-- End profile -->';
        }
      ?>
    </div>
    <!-- End mystatuseswrapper -->
  </div>
  <!-- End Outermost container -->
  <?php include_once 'views/footer.php';?>
  <script type="text/javascript" src="all_images_data.js" defer></script>
  <script type="text/javascript" src="post_a_status.js" defer></script>
  <script type="text/javascript" src="sticky_smart_header.js" defer></script>
  <script type="text/javascript" src="geolocation.js" defer></script>
  <script type="text/javascript" src="reply.js" defer></script>
  <script type="text/javascript" src="toggle.js" defer></script>
  <script type="text/javascript" src="geolocation_progressive_enhancement.js" defer></script>
</body>

</html>
