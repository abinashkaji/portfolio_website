<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Form validation (basic example)
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $subject = trim($_POST['custom-input3']);
  $message = trim($_POST['message']);
  $error = false;

  if (empty($name)) {
    $error = true;
    echo '<span id="name-error" class="error">Please enter your name.</span><br>';
  }
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = true;
    echo '<span id="email-error" class="error">Please enter a valid email address.</span>';
  }
  if (empty($subject)) {
    $error = true;
    echo '<span id="subject-error" class="error">Please enter a subject.</span><br>';
  }
  if (empty($message)) {
    $error = true;
    echo '<span id="message-error" class="error">Please enter a message.</span><br>';
  }

  // If no errors, send the email
  if (!$error) {
    $to = "abinashkaji@gmail.com"; // Replace with your recipient email
    $from = $email; // Replace with your email
    $headers = "From: $from \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8 \r\n";

    $body = "Name: $name \r\n";
    $body .= "Email: $email \r\n";
    $body .= "Subject: $subject \r\n";
    $body .= "Message: \r\n" . $message;

    if (mail($to, $subject, $body, $headers)) {
      echo "Your message has been sent successfully!";
    } else {
      echo "There was an error sending your message. Please try again later.";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon-portfolio.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Abinash's Portfolio</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <style>
        body, html {
    overflow-x: hidden; /* Hide horizontal scrollbar */
  }
        #scrollingText {
          font-size: 20px;
          padding: 0px;
          width: 100%;
          height: 50px;
          overflow: hidden;
          overflow-x: hidden;
        }
        .scrolling-text {
            position: absolute;
            white-space: nowrap;
            overflow-x: hidden;
            animation: scrollRightToLeft 13s linear infinite;
          }
        
          @keyframes scrollRightToLeft {
            0% {
                transform: translateX(-100%);
              }
            5% {
              transform: translateX(100%);
            }
            100% {
              transform: translateX(-100%);
            }

          }


          .sentence {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;
        }
        
        .sentence.visible {
            opacity: 1;
            transform: translateY(0);
        }          

      </style>
</head>

<body>
    <!-- Navbar Start -->
    <nav id="navbar" class="black navbar navbar-expand-lg fixed-top">
        <!-- Brand -->
        <a id="nav-logo" class="navbar-brand" href="index.html">Abinash </a>

        <!-- Button collapsable -->
        <button class="navbar-toggler" id="nav-btn" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-btn"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul id="nav-ul" class="navbar-nav">
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="index.html">Home</a>
                </li>
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="#about-me">About</a>
                </li>
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="#my-portfolio">Portfolio</a>
                </li>
                <li class="nav-item navigation-list">
                    <a class="nav-link nav-custom-link" href="#section-contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <main class="container-fluid main p-0">
        <!-- SECTION NO 1 -->
        <section class="container-fluid section-1">
            <div class="row section-1-inner">
                <div class="col section-1-inner-col">
                    <div class="image-frame mx-auto my-5">
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION NO 2 -->
        <section id="about-me" class="container-fluid section-2">
            <div class="row">
                <div class="col text-center">
                    <div class="primary-heading">
                        Creative <span class="fw-bold">Work</span>
                    </div>
                    <div class="paragraph mx-auto mt-2">
                        <div id="creative_work">
                        
                        </div>
                        <div>
                            <br><a href="https://www.linkedin.com/in/abinash-basnet/" > Linkedin </a> &nbsp <a href="https://scholar.google.com/citations?user=PtKNPQYAAAAJ">  Google Scholar </a>
                            &nbsp<a href="https://www.researchgate.net/profile/Abinash-Basnet/stats"> Researchgate </a>&nbsp <a href="https://github.com/abinashkaji/"> Github </a>
                        </div>
                    </div>
                    <a type="button" class="section-2-button fw-bold" href="https://www.researchgate.net/profile/Abinash-Basnet">Read More</a>
                </div>
            </div>
        </section>

        <!-- SECTION NO 3 -->
        <section class="container-fluid section-3">
            <div class="row section-3-inner">
                <div class="col-lg-6 section-3-inner-col-left text-center">
                    <div class="primary-heading section-3-heading text-lg-end">
                        I Am an <span class="fw-bold">Engineer</span>
                    </div>
                    <div class="section-3-image-left text-lg-end">
                        <img src="./images/Section-3-image-1.jpg" class="img-fluid sec3-images sec3-img-left" alt="">
                    </div>
                </div>
                <div class="col-lg-6 section-3-inner-col-right text-center mt-5 mt-lg-0">
                    <div class="section-3-image-right text-lg-start">
                        <img src="./images/Section-3-image-2.jpg" class="img-fluid sec3-images sec3-img-right" alt="">
                    </div>
                    <div class="section-3-button-right text-lg-start">
                        <button class="sec3-btn-right text-uppercase fw-bold" onclick="location.href='https://github.com/abinashkaji?tab=repositories'">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
            <div class="background-section-3"></div>
        </section>


        <!-- SECTION NO 4 -->
        <section class="container-fluid section-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-4-left text-center text-lg-end pe-0 pe-lg-5">
                        <span class="section-4-heading text__light">I</span>
                        <span class="section-4-heading text__light">Love </span>
                        <span class="section-4-heading-bold fw-bolder">Engineering  ❤️☸☮</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-4-right text-center text-lg-start">
                        <div class="sec3-blank"></div>
                        <div class="list_display">
                            <ul id="sentenceList">
                               <h2> Abinash Basnet </h2>
                            <li class="sentence">Experience: <ul> Engineer, Nepal Telecom, Feb'17- </ul></li>  
                            <li class="sentence">EDUCATION: <ul>MSc. in Information and Communication Engineering, Jan'16</ul></li>
                            <li class="sentence">Achievements: <ul> • CompTIA Security+ certified certification • CCNA certification • AWS Cloud Technical Essentials • Completed Linux security and hardening course • ISC2 CC certification • Splunk core certification • IDS/ IPS course • Python automation </ul> </li> 
                            <li class="sentence">Experience in <ul>• Multivendor Switches and Router, NMS, cacti, SIEM Splunk, AWS, Linux, RedHat, Docker, IDS/IPS, Git, Bash scripting, SQL, Python, Matlab, Tableau and many more. </ul></li>
                            <li class="sentence">In past: <ul>Assistant Lecturer (Jan'14 –Jan'17)</ul> <ul> Researcher (Published some papers in AI and security in IEEE and Springer)</ul> </li>
                        </ul>

                        </div>
                        <div class="section-4-button">
                            <button class="sec4-btn text-uppercase fw-bold" onclick="location.href='#'">Read
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="bold-line"></div>


        <!-- SECTION NO 5 -->
        <section id="my-portfolio" class="container-fluid section-5">
            <div class="row">
                <div class="col">
                    <div class="section-5-text text-center mx-auto">
                        I Craft Personally-Inspired Experiences That Ignite Positive Transformations In People's Lives.                    </div>
                    <div class="section-5-icon text-center">
                        <i class="bi bi-chevron-double-down sec5-icon"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="sec5-portfolio-head">
                        View Portfolio
                    </div>
                </div>
            </div>

            <div class="row mt-4 mt-md-5 work-gallery-row">
                <div class="masonry">
                    <!-- Work 1 -->
                    <div class="grid">
                        <img src="./images/work-1.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="https://github.com/abinashkaji/Automate-Network-troubleshooting-with-Wireshark"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">#Network troubleshooting automation</span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 2 -->
                    <div class="grid">
                        <img src="./images/work-2.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="https://github.com/abinashkaji/Network-Traffic-Flow-Statistics-Visualization"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">Network-Traffic-Visualization
                
                                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 3 -->
                    <div class="grid">
                        <img src="./images/work-3.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="https://github.com/abinashkaji/Backend-Django-sql-for-flight-management-with-rest-api"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">management-system-rest-api
                                    </span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 4 -->
                    <div class="grid">
                        <img src="./images/work-4.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="https://github.com/abinashkaji/Flutter_quiz_app"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">Flutter Practice app</span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 5 -->
                    <div class="grid">
                        <img src="./images/work-5.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="https://github.com/abinashkaji/New_Website"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">E-Commerce website</span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 6 -->
                    <div class="grid">
                        <img src="./images/work-6.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="https://github.com/abinashkaji/leetcode"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">Leetcode learning app</span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 7 -->
                    <div class="grid">
                        <img src="./images/work-7.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="https://github.com/abinashkaji/Shaing-Dinesh"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">Cybersecurity alert reporting automation </span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 8 -->
                    <div class="grid">
                        <div class="grid__body">
                            <div class="relative">
                                <script type="text/javascript" id="clstr_globe" src="//clustrmaps.com/globe.js?d=c3e8hDDJ7FzXr5FgFZ7FaJQrMAcYo5Q6ByixJTnBSAk"></script>
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">Blog heatmap</span>
                            </div>
                        </div>
                    </div>
                    <!-- Work 9 -->
                    <div class="grid">
                        <img src="./images/work-8.jpg" class="img-fluid image-work">
                        <div class="grid__body">
                            <div class="relative">
                                <a class="grid__link" target="_blank" href="#"></a>
                                 
                            </div>
                            <div class="mt-auto">
                                <span class="grid__tag">#Work 9</span>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="section-5-button mt-4 mt-sm-5 text-center">
                    <button class="sec5-btn text-uppercase fw-bold" onclick="location.href='#'">View More</button>
                </div>
            </div>
        </section>

            <div class="row mt-5">
                <div class="section-6-button-see-all text-center">
                    <button class="sec6-btn-see-all text-uppercase fw-bold" onclick="location.href='https://github.com/abinashkaji?tab=repositories'">See All
                        Projects</button>
                </div>
            </div>
        </section>

        <!-- SECTION CONTACT -->
        <section id="section-contact" class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="contact-heading">
                        Contact Me
                    </div>
                    <div class="contact-para">
                        Let's start a conversation
                    </div>
                </div>
            </div>
            <div class="row card-row-1">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center custom-card">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">
                            <div class="card-circle">
                                <div class="card-circle-icon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
                            </div>
                            <div class="card-heading">Address</div>
                            <div class="card-para">Springfield, OH</div>
                        </div>
                        <!-- <div class="card-footer"></div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center custom-card mt-5 mt-md-0">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">
                            <div class="card-circle">
                                <div class="card-circle-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            </div>
                            <div class="card-heading">Contact Number</div>
                            <div class="card-para"><a class="card-link" href="https://wa.me/+1614779xxxx">+1-614990xxxx</div></a>
                        </div>
                        <!-- <div class="card-footer"></div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center custom-card mt-5 mt-lg-0">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">
                            <div class="card-circle">
                                <div class="card-circle-icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                            </div>
                            <div class="card-heading">Email Address</div>
                            <div class="card-para"><a class="card-link"
                                    href="mailto:abinashkaji@gmail.com">Abinash</div></a>
                        </div>
                        <!-- <div class="card-footer"></div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center custom-card mt-5 mt-lg-0">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-body">
                            <div class="card-circle">
                                <div class="card-circle-icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            </div>
                            <div class="card-heading">Website</div>
                            <div class="card-para"><a class="card-link" href="https://www.basnetabinash.com.np">basnetabinash.com</a></div>
                        </div>
                        <!-- <div class="card-footer"></div> -->
                    </div>
                </div>
            </div>
            <div class="row card-row-2">
                <div class="col-lg-6 contact-image">
                </div>
                <div class="col-lg-6 contact-form-div">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="contact-form" onsubmit="return validateForm()">
                        <div class="form-group mt-3 mt-sm-4">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                            <span id="name-error" class="error"></span><br>
                        </div>
                        <div class="form-group mt-3 mt-sm-4">
                            <input type="text" id="email" name="email"  class="form-control" placeholder="Your Email">
                            <span id="email-error" class="error"></span>
        
                        </div>
                        <div class="form-group mt-3 mt-sm-4">
                            <input type="text" id="custom-input3" class="form-control" placeholder="Subject">
                          </div>
                        <div class="form-group mt-3 mt-sm-4">
                            <textarea id="message" name="message" cols="30" rows="7" class="form-control"
                                placeholder="Message"></textarea>
                              <span id="message-error" class="error"></span><br>

                        </div>
                        <div class="form-group mt-3 mt-sm-4 form-button">
                            <input type="submit" value="Send Message" id="contact-custom-button" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- SECTION NO 7 -->
        <section class="container-fluid section-7">
            <div class="row section-7-inner mx-auto text-center">
                <div class="col">
                    <div class="section-7-text">
                        I want to stay in touch with you! Please follow me on social media so I can keep in touch.
                    </div>
                    <div class="section-7-icons">
                        <a href="https://www.facebook.com/abinashkaji" class="social-icons"><i class="bi bi-facebook icons"></i></a>
                        <a href="#" class="social-icons"><i class="bi bi-twitter icons"></i></a>
                        <a href="#" class="social-icons"><i class="bi bi-instagram icons"></i></a>
                        <a href="#" class="social-icons"><i class="bi bi-linkedin icons"></i></a>
                        <a href="#" class="social-icons"><i class="bi bi-pinterest icons"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION NO 8 -->
        <footer class="container-fluid footer">
            <div class="section-footer-inner cols">
                <span id="typing-text"></span>
            </div>

            <!-- Divider -->
            <hr style="border-bottom: 1px solid #FFFFFF;">

            <div class="row section-footer-inner">
                <div class="col">
                    <div class="scrolling-text text-center" id="scrollingText">
                        "Alone we can do so little; together we can do so much." - Helen Keller

                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script>
        const sentences = [
                "Alone we can do so little; together we can do so much. - Helen Keller",
                "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
                "Peace comes from within. Do not seek it without. - Buddha",
                "Hatred does not cease by hatred, but only by love; this is the eternal rule. - Buddha",
                "Believe you can and you're halfway there. - Theodore Roosevelt",
                "The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt",
                "It does not matter how slowly you go as long as you do not stop. - Confucius",
                "The only way to do great work is to love what you do. - Steve Jobs",
                "In the end, only three things matter: how much you loved, how gently you lived, and how gracefully you let go of things not meant for you. - Buddha",
                "The mind is everything. What you think you become. - Buddha",
                "In the middle of difficulty lies opportunity. - Albert Einstein",
                "The Tao that can be told is not the eternal Tao; The name that can be named is not the eternal name. - Lao Tzu, Tao Te Ching",
                "When I let go of what I am, I become what I might be. - Lao Tzu",
                "The future belongs to those who believe in the beauty of their dreams. - Eleanor Roosevelt",
                "You are never too old to set another goal or to dream a new dream. - C.S. Lewis",
                "Nature does not hurry, yet everything is accomplished. - Lao Tzu",
                "To the mind that is still, the whole universe surrenders. - Lao Tzu",
                "Peace begins with a smile. - Mother Teresa",
                "Imagine all the people living life in peace. You may say I'm a dreamer, but I'm not the only one. I hope someday you'll join us, and the world will be as one. - John Lennon",
                "Failure is the condiment that gives success its flavor. - Truman Capote",
                "Success is not the key to happiness. Happiness is the key to success. If you love what you are doing, you will be successful. - Albert Schweitzer",
                "The only way to achieve the impossible is to believe it is possible. - Charles Kingsleigh",
                "You miss 100% of the shots you don't take. - Wayne Gretzky",
                "Don't watch the clock; do what it does. Keep going. - Sam Levenson",
                "Dream big and dare to fail. - Norman Vaughan",
                "The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt",
                "It does not matter how slowly you go as long as you do not stop. - Confucius"
        ];
      
        let index = 0;
        const scrollingText = document.getElementById('scrollingText');
      
        function scrollText() {
          scrollingText.innerText = sentences[index];
          index = (index + 1) % sentences.length;
          setTimeout(scrollText, 13000); // 5 second pause
        }
      
        scrollText();
        var creative_work="6+ years of experience in engineering. Innovative and analytical IT engineer with a graduate degree in Information and Communication Engineering, who loves to thrives on solving complex analytical problems, proficient networking and security implementation.    "
        var textToType = "Abinash Basnet, Senior Engineer, Nepal Telecom. EDUCATION: MSc. in Information and Communication Engineering (Jan'16). Achievements: • CompTIA Security+ certification • CCNA certification • AWS Cloud Technical Essentials • Completed Linux security and hardening course • ISC2 CC certification • Splunk core certification • IDS/ IPS course • Python automation Experience in • Multivendor Switches and Router, NMS, cacti, SIEM Splunk, AWS, Linux, RedHat, Docker, IDS/IPS, Tableau, Git, Bash scripting, SQL, Python, Matlab and many more.";
        continuousTypeWriter(textToType);
        continuouscreative(creative_work);


        function continuousTypeWriter(textToType) {
            typeWriter(textToType, 0, function() {
                document.getElementById("typing-text").innerHTML="";                
                continuousTypeWriter(textToType); // Rerun typeWriter when typing animation completes
            });
        }        

        function typeWriter(text, i, typingCallback) {
            let lbreak=0
            var typingText = document.getElementById("typing-text");
            if (i < text.length) {   
                typingText.innerHTML += text.charAt(i);
                i++;
                if (typingText.offsetWidth < typingText.scrollWidth) {
                    typingText.innerHTML = typingText.innerHTML.slice(0, -1); // Remove the last character
                    typingText.innerHTML += "<br>"; // Add line break
                }

                /*
                if (i%160<6 &&  [',', '.', ' ','•'].includes(text.charAt(i)) && Math.abs(lbreak-i)>30){                
                    typingText.innerHTML = typingText.innerHTML.slice(0, -1); // Remove the "|" character
                    document.getElementById("typing-text").innerHTML += "<br>";                        
                    lbreak=i;
                    }*/
                
                    setTimeout(function() { typeWriter(text, i, typingCallback);
                cursorPosition.style.display = "none";  
                }, 50);

            } else {

//                clearInterval(interval); // Stop the interval loop when typing is complete
                typingCallback(); // Invoke callback function when typing is complete
      //          setTimeout(typeWriter, 10000); // 5 second pause

            }

        }

                
        function continuouscreative(textToType) {
            typeWriter1(textToType, 0, function() {
                document.getElementById("creative_work").innerHTML="";                
                continuouscreative(textToType); // Rerun typeWriter when typing animation completes
            });
        }        

        function typeWriter1(text, i, typingCallback) {
            let lbreak=0
            var typingText = document.getElementById("creative_work");
            if (i < text.length) {   
                typingText.innerHTML += text.charAt(i);
                i++;
                if (typingText.offsetWidth < typingText.scrollWidth) {
                    typingText.innerHTML = typingText.innerHTML.slice(0, -1); // Remove the last character
                    typingText.innerHTML += "<br>"; // Add line break
                }
                
                    setTimeout(function() { typeWriter1(text, i, typingCallback);
                cursorPosition.style.display = "none";  
                }, 50);

            } else {

                typingCallback(); // Invoke callback function when typing is complete

            }

        }

        window.onload = function() {
            var sentences = document.querySelectorAll('.sentence');
            var index = 0;
            var intervalId;
        
            function showNextSentence() {
                sentences[index].classList.add('visible');
                index++;
                if (index >= sentences.length) {
                    clearInterval(intervalId);
                    setTimeout(function() {
                        sentences.forEach(function(sentence) {
                            sentence.classList.remove('visible');
                        });
                        setTimeout(startAnimation, 1000); // Wait for 30 seconds before starting again
                    }, 4000); // Wait for 30 seconds before hiding
                }
            }
        
            function startAnimation() {
                index = 0;
                intervalId = setInterval(showNextSentence, 1000); // Display each sentence for 1 second
            }
        
            startAnimation(); // Start the animation
        };
        

            function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;
        var isValid = true;

        if (name.trim() === "") {
            document.getElementById("name-error").innerText = "Please enter your name";
            isValid = false;
        } else {
            document.getElementById("name-error").innerText = "";
        }

        if (email.trim() === "") {
            document.getElementById("email-error").innerText = "Please enter your email";
            isValid = false;
        } else if (!isValidEmail(email)) {
            document.getElementById("email-error").innerText = "Please enter a valid email address";
            isValid = false;
        } else {
            document.getElementById("email-error").innerText = "";
        }

        if (message.trim() === "") {
            document.getElementById("message-error").innerText = "Please enter your message";
            isValid = false;
        } else {
            document.getElementById("message-error").innerText = "";
        }

        return isValid;
    }

    function isValidEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
      </script>
</body>

</html>
