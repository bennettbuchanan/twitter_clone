<?php
  // Load array of users and statuses.
  include_once './model/user.php';
  include_once './model/status.php';
  include_once 'credential_authentication.php';

?><!DOCTYPE HTML>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
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
  include_once 'cookie_updates.php';
  include_once 'views/header.php';
  ?>
  <!-- Content Overwrap-->
  <div class="outercontainer flex-item">
    <?php echo $error;?>
    <div class="contentoverwrap flex-item">
      <!--Content -->
      <div class="statuscontentcontainer flex-item">
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
              <p class="asidetxt">GOODBYE Einstein was a German-born theoretical physicist. He developed the general theory of relativity, one of the two pillars of modern physics. Einstein's work is also known for its influence on the philosophy of science. Actively involved on this site from the spirit realm.
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
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
