<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
    .cards-container{
    flex-wrap: wrap;
    justify-content: flex-start;
    margin: 30px 0;
    }

    .card{
    margin: 12px 35px;
    }


    </style>
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
      <div class="cards-container">
        <div class="card">
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
          </div>
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

      <div class="container-footer w-container" id="footer">
        <div class="w-row">
          <div class="footer-column w-clearfix w-col w-col-4"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/596d33f36607b12cfdaf8ad2_LogoWhite.png" alt="" width="40" class="failory-logo-image">
            <h3 class="footer-failory-name">Explorescape</h3>
            <p class="footer-description-failory">Explore beautiful views here!<br></p>
          </div>
          <div class="footer-column w-col w-col-8">
            <div class="w-row">
              <div class="w-col w-col-8">
                <div class="w-row">
                  <div class="w-col w-col-7 w-col-small-6 w-col-tiny-7">
                    <h3 class="footer-titles">Learn</h3>
                    <p class="footer-links"><a href="" target="_blank"><span class="footer-link">Failed Startups<br></span></a><a href=""><span class="footer-link">Successful Startups<br></span></a><a href=""><span class="footer-link">Blog</span></a><span><br></span><a href=""><span class="footer-link">Entrepreneurial Tools<br></span></a><a href=""><span class="footer-link">Startup Cemetery<br></span></a><a href=""><span class="footer-link">Podcast</span></a><strong><br></strong></p>
                  </div>
                  <div class="w-col w-col-5 w-col-small-6 w-col-tiny-5">
                    <h3 class="footer-titles">Other</h3>
                    <p class="footer-links"><a href=""><span class="footer-link">Sponsor Us!<br></span></a><a href=""><span class="footer-link">Open Startup<br></span></a><a href=""><span class="footer-link"></span></a><a href=""><span class="footer-link">Contribute<br></span></a><a href=""><span class="footer-link">FAQ</span></a><strong><br></strong></p>
                  </div>
                </div>
              </div>
              <div class="column-center-mobile w-col w-col-4">
                <h3 class="footer-titles">Follow Us!</h3><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbf0a2f2b67e3b3ba079c_Twitter%20Icon.svg" width="20" alt="Twitter icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbfe70fcf5a0514c5b1da_Instagram%20Icon.svg" width="20" alt="Instagram icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbe42e1e6034fdaba46f6_Facebook%20Icon.svg" width="20" alt="Facebook Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg" width="20" alt="LinkedIn Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0112f2b6739c9ba0871_Pinterest%20Icon.svg" width="20" alt="Pinterest Icon" class=""></a>
                <p class="footer-description">Email me at: <a href=""><strong class="link-email-footer">Lorem Ipsum</strong></a><br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>