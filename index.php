<?php
  // Load array of users
  include_once './model/user.php';
  $login = $_POST["name"];
  $login_display = "there!";
  $password = $_POST["password"];
  $len = strlen($login);
  $encrypted_user_name = str_rot13($login);

  // check to see if user exists, and have entered the correct password
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

  if ($_COOKIE['login_name']) {
    $login_display = $_COOKIE['login_name'];
  }

  // store return results from function
  $is_true = userExists($login, $password, $users);

  // set a cookie with the username if credentials are valid
  if ($is_true == true) {
    $login_display = $login;
    setcookie('login_name', $login); // 86400 = 1 day
  }

  // if credentials are invalid, display error message to user
  if ($is_true == false && strlen($login) > 0) {
    $login_display = 'there!';
    setcookie('login_name', $login_display); // 86400 = 1 day
    $error = '<p id="error_message">Invalid Credentials</p>';
  }

?>

<!doctype html>

<!-- Microdata markup added by Google Structured Data Markup Helper. -->
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

include './views/header.php';
?>
  <!-- Outermost container -->
  <!-- Header -->
<!-- End Header -->
  <!-- Content Overwrap-->
  <div class="outercontainer flex-item">
    <?echo $error;?>
    <div class="contentoverwrap flex-item">
      <!--Content -->
      <div class="statuscontentcontainer flex-item">
        <p>Your rot13’d login is: <?echo $encrypted_user_name;?></p>
        <br>
        <p>The length of your login is: <?echo $len;?></p>
        <br>
        <button class="button postlink flex-item" id="post_button">Post a status!</button>
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
          <section class="statuscontent">
            <img src="http://s19.postimg.org/t38mrbb0f/gus.jpg" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Gus</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Impossible Octopus Fitness really helped me out. When I first came to San Francisco, I didn't know what to do. I thought fitness was impossible. But Impossible Octpus Fitness showed me the way after I went to their farm.</p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="0">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_0" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_0">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_0"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_0">Add Emoji</label>
                    <input class="location" id="emoji_0" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://s19.postimg.org/br8a5vhj3/marine.jpg " alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Marine</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">I highly recommend Impossible Octopus Fitness. I know the founders of the farm and they are really great people. Nothing is impossible!!</p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="1">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_1" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_1">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_1"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_1">Add Emoji</label>
                    <input class="location" id="emoji_1" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://s19.postimg.org/c1b7bh6rj/bilal.jpg " alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Bilal</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">After a friend recommended Impossible Octopus Fitness, I knew I had to try. I love to eat healthily and stay active. There's nothing like farming to get your workout in.</p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="2">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_2" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_2">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_2"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_2">Add Emoji</label>
                    <input class="location" id="emoji_2" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="https://holbertonschool.s3.amazonaws.com/quotes/photos/000/000/012/larger/bennett2.jpg?1449535775" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Bennett</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">Never doubt yourself. That's what we say at Impossible Octopus Fitness Farm. Come on out to the farm for a free lunch. Meet our farmers and see the fitness in action. Take hold of life by taking hold of a fresh potato.
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="3">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_3" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_3">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_3"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_3">Add Emoji</label>
                    <input class="location" id="emoji_3" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Impossible Octopus Fan</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">I just love love love this fitness farm, a I think I'll just post it like seven times to make sure it is heard by all.
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="4">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_4" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_4">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_4"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_4">Add Emoji</label>
                    <input class="location" id="emoji_4" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Impossible Octopus Fan</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">I just love love love this fitness farm, a I think I'll just post it like seven times to make sure it is heard by all.
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="5">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_5" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_5">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_5"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_5">Add Emoji</label>
                    <input class="location" id="emoji_5" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Impossible Octopus Fan</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">I just love love love this fitness farm, a I think I'll just post it like seven times to make sure it is heard by all.
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="6">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_6" role="form" aria-expanded="false">
              <form method="get">
                <label aria-live="polite" for="responsearea_6">Reply to this post:</label>
                <textarea name="status" id="responsearea_6"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_6">Add Emoji</label>
                    <input class="location" id="emoji_6" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Impossible Octopus Fan</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">I just love love love this fitness farm, a I think I'll just post it like seven times to make sure it is heard by all.
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="7">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_7" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_7">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_7"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_7">Add Emoji</label>
                    <input class="location" id="emoji_7" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Impossible Octopus Fan</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">I just love love love this fitness farm, a I think I'll just post it like seven times to make sure it is heard by all. Check out their <a href="http://www.foodnetwork.com/shows/restaurant-impossible/specials/fitness-impossible.html">Impossible Octopus Fitness</a> restaurant too!
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="8">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_8" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_8">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_8"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_8">Add Emoji</label>
                    <input class="location" id="emoji_8" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
          <section class="statuscontent">
            <img src="http://www-g.eng.cam.ac.uk/reactingflows/images/content/people/placeholder.jpg" alt="Impossible Octopus Fitness Fan Image" class="userimage">
            <h2 class="username">Impossible Octopus Fan</h2>
            <p class="date">March 2nd</p>
            <p class="usertxt">I just love love love this fitness farm, a I think I'll just post it like seven times to make sure it is heard by all.
            </p>
            <p class="usertxt">
              <button class="button reply_link" data-tag="9">Reply</button>
            </p>
            <div class="reply_form" id="user_reply_9" role="form" aria-expanded="false">
              <form method="get">
                <label for="responsearea_9">Reply to this post:</label>
                <textarea aria-live="polite" name="status" id="responsearea_9"></textarea>
                <div class="locationdiv flex-item">
                  <div class="reply_checkbox visuallyhidden">
                    <label for="emoji_9">Add Emoji</label>
                    <input class="location" id="emoji_9" type="checkbox" name="location" value="true">
                  </div>
                  <input class="replybutton" type="submit" value="Post">
                </div>
              </form>
            </div>
          </section>
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
  <!-- <div class="beta">
    <p>Welcome! Please bear in mind that this application is in beta.</p>
  </div> -->
  <?php include './views/footer.php';?>
  <!-- <script type="text/javascript" src="all_images_data.js" defer></script> -->
  <script type="text/javascript" src="/node_modules/handlebars/dist/handlebars.min.js" defer></script>
  <script type="text/javascript" src="ajax.js" defer></script>
  <script type="text/javascript" src="post_a_status.js" defer></script>
  <script type="text/javascript" src="sticky_smart_header.js" defer></script>
  <script type="text/javascript" src="geolocation.js" defer></script>
  <script type="text/javascript" src="weather.js" defer></script>
  <script type="text/javascript" src="load_more.js" defer></script>
  <script type="text/javascript" src="reply.js" defer></script>
  <script type="text/javascript" src="toggle.js" defer></script>
  <script type="text/javascript" src="geolocation_progressive_enhancement.js" defer></script>
</body>
</html>
