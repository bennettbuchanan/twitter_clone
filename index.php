<?php
  // load array of users
  include_once './model/user.php';
  // load array of statuses
  include_once './model/status.php';
  // set variables for credential authenication
  $login = $_POST["name"];
  $password = $_POST["password"];
  $login_display = "there!";
  $len = strlen($login);
  $encrypted_user_name = str_rot13($login);

  // check to see if user exists, and has entered the correct password
  function userExists($login, $password, $users) {
    foreach ($users as $elem) {
      if($elem['login'] == $login) {
        if ($elem['password'] == $password) {
          return true;
        }
        else {
          return false;
        }
      }
    }
    return false;
  }

  // store return results from function
  $is_true = userExists($login, $password, $users);

  // if the cookie already exists, update it to new user
  if ($_COOKIE['login_name']) {
    $login_display = $_COOKIE['login_name'];
  }

  // set a cookie with the username if credentials are valid
  if ($is_true == true) {
    $login_display = $login;
    setcookie('login_name', $login); // 86400 = 1 day
  }

  // if credentials are invalid, display error message to user
  if ($is_true == false && strlen($login) > 0) {
    // set variable to default message to replace any preexisting cookie
    $login_display = 'there!';
    setcookie('login_name', $login_display);
    $error = '<p class="error_message">Invalid Credentials</p>';
  }

  // display error for a case where the user enters a password but no username
  if ($login == "" && strlen($password) > 0) {
    $error = '<p class="error_message">Invalid Credentials</p>';
  }

?><!DOCTYPE HTML>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="twitter.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Impossible Octopus Fitness Farm, where impossibility is impossible." name="description">
  <meta content="impossible, octopus, fitness, farm" name="keywords">
  <title>Impossible Octopus Fitness Farm</title>
  <link rel="shortcut icon" href="https://maxcdn.icons8.com/wp-content/uploads/2014/01/octopus-128.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
  <?php
  // include page header
  include_once 'views/header.php';
  ?>
  <!-- Content Overwrap-->
  <div class="outercontainer flex-item">
    <?echo $error;?>
    <div class="contentoverwrap flex-item">
      <!--Content -->
      <div class="statuscontentcontainer flex-item">
        <p class="login_info">Your rot13’d login is: <?echo $encrypted_user_name;?></p>
        <p class="login_info">The length of your login is: <?echo $len;?></p>
        <button class="button post_button" id="post_button">Post a status!</button>
        <div class="poststatus" id="post_form" aria-live="polite">
          <form method="get" id="post_status">
            <label for="textarea_0">What is your status?</label>
            <textarea aria-live="polite" name="status" id="textarea_0"></textarea>
            <div class="locationdiv flex-item">
              <div>
                <label for="geolocation">Include Location</label>
                <input class="location" type="checkbox" id="geolocation" name="location" value="true"><span id="geolocation_text"></span>
              </div>
              <input id="submit_button" type="submit" value="Post">
            </div>
          </form>
        </div>
        <!-- display post status field for users without JavaScript -->
        <noscript>
          <div class="statuscontentcontainer flex-item">
            <div class="poststatus noscriptPost">
              <form method="get">
                <label for="textarea_1">What is your status?</label>
                <textarea aria-live="polite" name="status" id="textarea_1"></textarea>
                <div class="locationdiv flex-item">
                  <input type="submit" value="Post">
                </div>
              </form>
            </div>
          </div>
        </noscript>
        <div>
          <?php
            // for each item in the $users array, display their status
            foreach ($statuses as $elem) {
              // display each status post, use status post id for data attributes
              echo
              '<section class="statuscontent">
              <img src="'.$elem['profile_pic'].'" alt="Impossible Octopus Fitness Fan Image" class="userimage">
              <h2 class="username">'.$elem['user_id'].'</h2>
              <p class="date">'.$elem['post_date'].'</p>
              <p class="usertxt">'.$elem['post_text'].'
              </p>
              <p class="usertxt">
                <button class="button reply_link" data-tag="'.$elem['id'].'">Reply</button>
              </p>
              <div class="reply_form visuallyhidden" id="user_reply_'.$elem['id'].'">
                <form method="get">
                  <label for="responsearea_'.$elem['id'].'">Reply to this post:</label>
                  <textarea name="status" id="responsearea_'.$elem['id'].'"></textarea>
                  <div class="locationdiv flex-item">
                    <div>
                      <label for="emoji_'.$elem['id'].'">Add Emoji</label>
                      <input class="location" id="emoji_'.$elem['id'].'" type="checkbox" name="location" value="true">
                    </div>
                    <input class="replybutton" type="submit" value="Post">
                  </div>
                </form>
              </div>
            </section>
          ';} ?>

        </div> <!-- end status post section -->
        <div id="extra_statuses">
        </div>
        <!--Data will be inserted in its according place, replacing the brackets.-->
        <script id="user-template" type="text/x-handlebars-template">
          <section class="statuscontent">
            <img src="{{image_path}}" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">{{user_name}}</h2>
            <p class="date">{{post_date}}</p>
            <p class="usertxt">{{post_text}}
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="{{data_tag}}">Reply</button>
            </p>
            <div class="reply_form visuallyhidden" id="user_reply_{{data_tag}}">
              <form method="get">
                <label for="responsearea_{{data_tag}}">Reply to this post:</label>
                <textarea name="status" id="responsearea_{{data_tag}}"></textarea>
                <div class="locationdiv flex-item">
                  <div>
                    <label for="emoji_{{data_tag}}">Add Emoji</label>
                    <input class="location" id="emoji_{{data_tag}}" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
        </script>
        <!-- New statuses are displayed here upon AJAX call.-->
        <div id="content-placeholder" aria-live="polite"></div>
        <button aria-live="assertive" type="button" class="button call_to_action visuallyhidden" id="extra_statuses_button">See more statuses</button>
        <!-- <a id="image_table" href="#">All images on this page</a> -->
      </div>
      <!--End Content Overwrap-->
      <!-- Aside -->
      <div>
        <aside class="flex-item">
          <section class="featureduser">
            <div>
              <img src="http://d.gr-assets.com/authors/1429114964p5/9810.jpg" alt="Impossible Octopus Fitness Fan Image" class="asideimage">
              <h2 class="featuredusername">Albert</h2>
              <p class="asidetxt">Albert Einstein was a German-born theoretical physicist. He developed the general theory of relativity, one of the two pillars of modern physics. Einstein's work is also known for its influence on the philosophy of science. Actively involved on this site from the spirit realm.
            </div>
          </section>
          <section class="featureduser" id="bottomfeature">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Feynman_at_Los_Alamos.jpg/220px-Feynman_at_Los_Alamos.jpg" alt="Impossible Octopus Fitness Fan Image" class="asideimage">
              <h2 class="featuredusername">Robert</h2>
              <p class="asidetxt">Robert was an American theoretical physicist known for his work in the path integral formulation of quantum mechanics, the theory of quantum electrodynamics, and the physics of the superfluidity of supercooled liquid helium, as well as in particle physics for which he proposed the parton model. For his contributions to the development of quantum electrodynamics, Feynman, jointly with Julian Schwinger and Sin-Itiro Tomonaga, received the Nobel Prize in Physics in 1965.
            </div>
          </section>
        </aside>
      </div>
      <!-- End Aside -->
    </div>
    <!-- End Content Overwrap -->
  </div>
  <!-- End Outermost container -->
  <?php include_once 'views/footer.php';?>
  <!-- <script type="text/javascript" src="all_images_data.js" defer></script> -->
  <script type="text/javascript" src="/node_modules/handlebars/dist/handlebars.min.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
  <script type="text/javascript" src="post_a_status.js"></script>
  <script type="text/javascript" src="sticky_smart_header.js"></script>
  <script type="text/javascript" src="geolocation.js"></script>
  <script type="text/javascript" src="weather.js"></script>
  <script type="text/javascript" src="load_more.js"></script>
  <script type="text/javascript" src="reply.js"></script>
  <script type="text/javascript" src="toggle.js"></script>
  <script type="text/javascript" src="geolocation_progressive_enhancement.js"></script>
</body>
</html>
