<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <header class="header">
    <nav class="navbar">
      <span class="mainlogo">
        thinking
      </span>
      <ul class="options">
        <a href="home.php">
          <li>Home</li>
        </a>
        <a href="states.php">
          <li>States</li>
        </a>
        <a href="packages.php">
          <li>Packages</li>
        </a>
        <a href="#footer">
          <li>About Us</li>
        </a>
        <a href="#footer">
          <li>Contact Us</li>
        </a>
      </ul>
    </nav>
  </header>
  <div class="carousel">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <div class="slide-image">
          <img src="images/GoldenTemple.jpg" alt="new" height="1000px" width="1750px">
        </div>
        <div class="carousel-controls">
          <label for="img-3" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-2" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-2" />
      <li class="slide-container">
        <div class="slide-image">
          <img
            src="https://th.bing.com/th/id/R.69309013cce3c9ffdee6c9193b167160?rik=HPU5xM3UuhBg2Q&riu=http%3a%2f%2fwww.allgudthings.com%2fwp-content%2fuploads%2f2019%2f04%2frock-garden-chandigarh_edited-1024x683.jpg&ehk=a5FZ1x3DAtOQlZF2RbbJNHSuLmAMB5LMwsV5h8I%2bcJI%3d&risl=&pid=ImgRaw&r=0"
            height="1000px" width="1750px" alt="rock garden">
        </div>
        <div class="carousel-controls">
          <label for="img-1" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-3" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-3" />
      <li class="slide-container">
        <div class="slide-image">
          <img src="https://speakzeasy.files.wordpress.com/2015/05/twa_blogpic_timisoara-4415.jpg">
        </div>
        <div class="carousel-controls">
          <label for="img-2" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-1" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
    </ul>
  </div>
  <div class="container-1">
    <h2 class="containerheading">OUR SERVICES</h2>
    <div class="innercontainer-1">
      <div class="contentcontainer">
        <div class="logo">
          <!-- <i class="fa fa-bolt"></i> -->
          <!-- <i class="fa fa-location-arrow" aria-hidden="true"></i> -->
          <i class="fa fa-map" aria-hidden="true"> &#xf278;</i>
        </div>
        <h3 class="contentheading">Tourist Interest Place Listings</h3>
        <p class="contentpara">The website displays a comprehensive list of various tourist interest places, including
          details such as descriptions, images, ideal duration, ideal months to visit, location, and entry fees. This
          helps users explore and gather information about different destinations.</p>
      </div>
      <div class="contentcontainer">
        <div class="logo">
          <!-- <i class="fa fa-bolt"></i> -->
          <!-- <i class="fa fa-bookmark-o" aria-hidden="true"></i> -->
          <i class="fa fa-bookmark" aria-hidden="true"></i>
        </div>
        <h3 class="contentheading">Package Booking System</h3>
        <p class="contentpara"> The website provides an online booking system where users can select their desired
          package and make reservations. The system may include a calendar for selecting travel dates, options for
          specifying the number of travelers.</p>
      </div>
      <div class="contentcontainer">
        <div class="logo">
          <i class="fa fa-bolt"></i>

        </div>
        <h3 class="contentheading">Travel Guides and Tips</h3>
        <p class="contentpara">The website may offer travel guides, articles, and tips on various destinations to help
          users plan their trips effectively. This content can include information on local culture, customs, weather,
          transportation options, visa requirements, and popular attractions.</p>
      </div>
      <div class="contentcontainer">
        <div class="logo"><i class="fa fa-bolt"></i></div>
        <h3 class="contentheading">Reviews and Rating</h3>
        <p class="contentpara">The website incorporates a review and rating system where users can share their
          experiences and rate the tourist interest places and packages they have visited or booked. This feature helps
          other users make informed decisions based on feedback from fellow travelers.</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="sliderheading">
    <span class="heading">
      Cities
    </span>
    <a href="states.php">
      <span class="heading-btn">

        Explore
      </span></a>
  </div>
  <div class="card-slider">
    <div class="cards-container">
      <!-- <div class="card">
              <div class="product-img">
                <img src="https://source.unsplash.com/featured/300x200" alt="Card 1">
                          <div class="product-card-btns">
                            <span>explore more</span>
                          </div>
              </div>
              <div class="product-content">
                <h3>Card 1 Title</h3>
                <p>Card 1 Description</p>
              </div>
      </div> -->


      <?php
      require_once 'db.php';
      $x = '';
      $sql = "SELECT * FROM states";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          $x .= '<div class="card">
                        <div class="product-img">
                        <img src="https://source.unsplash.com/featured/300x200" alt="Card 1">
                        <div class="product-card-btns">
                        <form action="description.php" method="post">
                                              <button value="' . $row["state_id"] . '">explore more</button>
                                              </form>
                                                </div>
                      </div>
                    <div class="product-content">
                    <h3>' . $row["name"] . '</h3>
                    <p>' . $row["brief_description"] . '</p>
                    </div>
              </div>';
        }
      }
      echo $x;
      // Close the database connection when done
      // mysqli_close($conn);
      ?>
    </div>
    <!-- <img src="image/' . $row["image"] . '" alt="Card 1"> -->
    <div class="slider-controls">
      <button class="slider-btn left-btn" id="prevBtn">
        <i class="fa fa-chevron-left"></i>
      </button>
      <button class="slider-btn right-btn" id="nextBtn">
        <i class="fa fa-chevron-right"></i>
      </button>
    </div>
  </div>
  <!-- <hr> -->
  <div class="sliderheading">
    <span class="heading">
      Packages
    </span>
    <a href="packages.php">
      <span class="heading-btn">

        Explore
      </span></a>
  </div>
  <div class="card-slider">
    <div class="cards-container">
      <div class="card">
        <div class="product-img-1">
          <img src="https://source.unsplash.com/featured/300x300" alt="Card 1">
          <div class="product-card-btns">
            <span>explore more</span>
          </div>
        </div>
        <div class="product-content">
          <p>Card 1 Description</p>
          <h3>Card 1 Title</h3>
        </div>
      </div>
      <?php
      require_once 'db.php';
      $x = '';
      $sql = "SELECT * FROM packages";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          $x .= '<div class="card">
                        <div class="product-img-1">
                        <img src="https://source.unsplash.com/featured/300x200" alt="Card 1">
                        <div class="product-card-btns">
                        <form action="description.php" method="post">
                                              <button value="' . $row["package_id"] . '">explore more</button>
                                              </form>
                                                </div>
                      </div>
                    <div class="product-content">
                    <h3>' . $row["name"] . '</h3>
                    <p>' . $row["duration"] . '</p>
                    </div>
              </div>';
        }
      }
      echo $x;
      // Close the database connection when done
      mysqli_close($conn);
      ?>
    </div>
    <div class="slider-controls">
      <button class="slider-btn left-btn" id="prevBtn">
        <i class="fa fa-chevron-left"></i>
      </button>
      <button class="slider-btn right-btn" id="nextBtn">
        <i class="fa fa-chevron-right"></i>
      </button>
    </div>
  </div>

  <div class="container-footer w-container" id="footer">
    <div class="w-row">
      <div class="footer-column w-clearfix w-col w-col-4"><img
          src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/596d33f36607b12cfdaf8ad2_LogoWhite.png" alt=""
          width="40" class="failory-logo-image">
        <h3 class="footer-failory-name">Failory</h3>
        <p class="footer-description-failory">Lorem ipsum dolor sit amet.<br></p>
      </div>
      <div class="footer-column w-col w-col-8">
        <div class="w-row">
          <div class="w-col w-col-8">
            <div class="w-row">
              <div class="w-col w-col-7 w-col-small-6 w-col-tiny-7">
                <h3 class="footer-titles">Learn</h3>
                <p class="footer-links"><a href="" target="_blank"><span class="footer-link">Failed
                      Startups<br></span></a><a href=""><span class="footer-link">Successful Startups<br></span></a><a
                    href=""><span class="footer-link">Blog</span></a><span><br></span><a href=""><span
                      class="footer-link">Entrepreneurial Tools<br></span></a><a href=""><span
                      class="footer-link">Startup Cemetery<br></span></a><a href=""><span
                      class="footer-link">Podcast</span></a><strong><br></strong></p>
              </div>
              <div class="w-col w-col-5 w-col-small-6 w-col-tiny-5">
                <h3 class="footer-titles">Other</h3>
                <p class="footer-links"><a href=""><span class="footer-link">Sponsor Us!<br></span></a><a href=""><span
                      class="footer-link">Open Startup<br></span></a><a href=""><span class="footer-link"></span></a><a
                    href=""><span class="footer-link">Contribute<br></span></a><a href=""><span
                      class="footer-link">FAQ</span></a><strong><br></strong></p>
              </div>
            </div>
          </div>
          <div class="column-center-mobile w-col w-col-4">
            <h3 class="footer-titles">Follow Us!</h3><a href="" target="_blank"
              class="footer-social-network-icons w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbf0a2f2b67e3b3ba079c_Twitter%20Icon.svg"
                width="20" alt="Twitter icon"></a><a href="" target="_blank"
              class="footer-social-network-icons w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbfe70fcf5a0514c5b1da_Instagram%20Icon.svg"
                width="20" alt="Instagram icon"></a><a href="" target="_blank"
              class="footer-social-network-icons w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbe42e1e6034fdaba46f6_Facebook%20Icon.svg"
                width="20" alt="Facebook Icon"></a><a href="" target="_blank"
              class="footer-social-network-icons w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg"
                width="20" alt="LinkedIn Icon"></a><a href="" target="_blank"
              class="footer-social-network-icons w-inline-block"><img
                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0112f2b6739c9ba0871_Pinterest%20Icon.svg"
                width="20" alt="Pinterest Icon" class=""></a>
            <p class="footer-description">Email me at: <a href=""><strong class="link-email-footer">Lorem
                  Ipsum</strong></a><br></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="JS/main.js">

  </script>
</body>

</html>