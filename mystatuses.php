<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/twitter.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impossible Octopus Fitness Farm Statuses</title>
  <link rel="shortcut icon" href="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" type="image/x-icon" />
</head>
<body>
  <?php
    include_once 'credential_authentication.php';
    include_once 'cookie_updates.php';
    include_once 'model/user.php';
    include_once 'model/status.php';
    include_once 'views/header.php';
  ?>
  <div class="outercontainer flex-item">
    <!-- End Header -->
    <!-- Content Overwrap-->
    <div class="alluserswrapper flex-item">
      <!-- Column left -->
      <div class="profile flex-item">
        <!-- profile -->
        <div class="background">
        </div>
        <img class="minipic" src="https://pbs.twimg.com/profile_images/671167132147691520/uV8CeWDU_bigger.jpg" alt="User Picture">
        <div class="userinfo">
          <p><a href="https://twitter.com/nbveroczi">Naomi Veroczi</a></p>
          <div>
            <p class="useraddress">@nbveroczi
            </p>
          </div>
        </div>
        <div class="userstats flexitem">
          <ul>
            <li><a href="#">FOLLOWING</a></li>
            <li><a href="#">FOLLOWERS</a></li>
            <li class="followstats">20</li>
            <li class="followstats">134</li>
          </ul>
        </div>
        <div>
          <!-- Bio -->
          <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End Bio -->
      </div>
      <!-- End profile -->
      <div class="postcontainer flex-item">
        <!-- Post container -->
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End post -->
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End post -->
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End post -->
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End post -->
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End post -->
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End post -->
        <div class="statuspost">
          <!-- Post -->
          <div class="postheader">
            <p>1/26/13</p>
          </div>
          <p class="postcontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio suscipit tempora impedit, consectetur minima, illum molestiae? A facilis sed odio non, molestiae laborum facere esse eligendi eos, dolores officiis soluta.</p>
        </div>
        <!-- End post -->
      </div>
      <!-- End status container -->
    </div>
    <!-- End Alluserswrapper -->
  </div>
  <!-- End Outermost container -->
  <?php include_once 'views/footer.php';?>
  <script type="text/javascript" src="node_modules/handlebars/dist/handlebars.min.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>
  <script type="text/javascript" src="js/all_images_data.js"></script>
  <script type="text/javascript" src="js/post_a_status.js"></script>
  <script type="text/javascript" src="js/sticky_smart_header.js"></script>
  <script type="text/javascript" src="js/geolocation.js"></script>
  <script type="text/javascript" src="js/weather.js"></script>
  <script type="text/javascript" src="js/load_more.js"></script>
  <script type="text/javascript" src="js/reply.js"></script>
  <script type="text/javascript" src="js/toggle.js"></script>
  <script type="text/javascript" src="js/geolocation_progressive_enhancement.js"></script>
</body>

</html>
