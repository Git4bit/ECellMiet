

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="shortcut icon" class="til" href="images/oie_oie_trim_image.png"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@600&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />`
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="sty.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  <i class="fa fa-bars"></i>
          <div class="nav-menu">
            <i class="fa fa-times"></i>
            <ul id="menuelements">
              <li id="about">
                <a onclick="myfunc()" href="ABOUT.HTML">About Us</a>
              </li>
              <li id="events">
                <a onclick="myfunc()" href="#events1">Events</a>
              </li>
              <li id="gallery">
                <a onclick="myfunc()" href="#gallery1">Gallery</a>
              </li>
              <li id="team"><a onclick="myfunc()" href="#team1">Team</a></li>
              <li id="contact">
                <a onclick="myfunc()" href="contact.php">Contact Us</a>
              </li>
               <div class="account-dropdown__footer">
                                                    <a href="#">
                                                        <form action="include/function.php" method="post">
                                                        <label for="logout">
                                                        <i class="zmdi zmdi-power"></i>
                                                        Logout
                                                        </label>
                                                            <button type="hidden" id="logout" name="logout"></button>
                                                        </form>
                                                    </a>    
                                                </div>
              

            </ul>
            <div class="socialmenu">
              <ul id="socialicons">
                <li>
                  <a
                    href="https://www.instagram.com/ecelluvce/?hl=en"
                    target="_blank"
                    ><i class="fa fa-instagram"></i
                  ></a>
                </li>
                <li>
                  <a href="https://twitter.com/ECellUVCE" target="_blank"
                    ><i class="fa fa-twitter"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="https://www.facebook.com/EntrepreneurshipCell.UVCE/"
                    target="_blank"
                    ><i class="fa fa-facebook-official"></i
                  ></a>
                </li>

                <li>
                  <a
                    href="https://www.linkedin.com/groups/6793994"
                    target="_blank"
                    ><i class="fa fa-linkedin"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>

    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <script src="script.js"></script>
    <script src="particles.js"></script>
    <script src="js/main.js"></script>
    <script src="js/function.js"></script>

  </body>
</html>
