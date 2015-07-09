<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blackboard Learn 9.1</title>
    <link rel="stylesheet" href="../assets/css/app.css" />
    <script src="../assets/bower_components/modernizr/modernizr.js"></script>
    
        <!-- GOOGLE ANALYTICS CODE BEGINS HERE -->
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-52731700-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
	
	<!-- GOOGLE ANALYTICS CODE ENDS HERE -->
    
  </head>
  <body>
    <!-- HUMBER NAVIGATION -->
    <?php include_once("/var/www/humber_global/navigation.php"); ?>
    <?php include_once("/var/www/humber_global/header.php"); ?>
    <!-- END OF HUMBER NAVIGATION -->

    <div class="off-canvas-wrap">
      <div class="inner-wrap">
        <nav class="tab-bar hide-for-large-up" data-topbar>
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
          </section>

          <section class="middle tab-bar-section">
            <img src="../assets/images/olc_logo.png" alt="" />
          </section>

          <section class="right show-for-medium-only">
          </section>
        </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <?php include '../assets/includes/student-inner-nav.php' ?>
            <li><a href="../index.php"><span class="icon-home"></span> Blackboard Help Home</a></li>
          </ul>
        </aside>

        <section class="row main-section">
          <div class="large-3 show-for-large-up columns side-nav-wrap">

            <div class="ctl-logo">
              <img src="../assets/images/olc_logo.png" alt="" />
            </div>

            <nav class="side-nav-links-wrap">
              <ul class="side-nav-links">
                <?php include '../assets/includes/student-inner-nav.php' ?>
              </ul>
            </nav>
            <div class="home-button">
              <h6><a href="../index.php"><span class="icon-home"></span> Blackboard Help Home</a></h6>
            </div>

          </div>


          <div class="large-9 columns">
            <h1>Students - Getting Started</h1>

            <div class="row">

              <!-- LOGIN TO BLACKBOARD -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="login_to_blackboard"><img src="../assets/images/students/getting_started/login_to_blackboard/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="login_to_blackboard">Login to Blackboard</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Login to Blackboard Modal -->
                <div id="login_to_blackboard" class="reveal-modal" data-reveal>
                  <h2>Login to Blackboard</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/getting_started/login_to_blackboard/login_to_blackboard.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>To log into Blackboard 9.1 go to <a href="https://learn.humber.ca" target="_blank">https://learn.humber.ca</a></p>
                  <p>Enter the user name and password that was provided by ITS service desk or any E-Link lab.</p>
                  <p>If you are logging in for the first time, you will be given a temporary password from the ITS Service desk or from any E-Link lab.  After you log in, you will be ask to <span class="bold">change your password</span>.</p>
                  <p>Students will have access to their course 3 days before the course starts and two weeks after the course ends.</p>  

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Login to Blackboard Modal -->
              </div>
              <!-- END OF LOGIN TO BLACKBOARD -->

              <!-- LOGIN PROBLEMS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="login_problems"><img src="../assets/images/students/getting_started/login_problems/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="login_problems">Login Problems</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Login Problems Modal -->
                <div id="login_problems" class="reveal-modal" data-reveal>
                  <h2>Login Problems</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/getting_started/login_problems/login_problems.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <h2>When to Contact ITS?</h2>
                  <ul>
                    <li>To retrieve your user name and password for Blackboard Learn 9.1</li>
                    <li>If you are having difficulty installing software or any other technical issues.</li>
                  </ul>

                  <h2>When to Contact the Open Learning Centre?</h2>
                  <ul>
                    <li>If you need help with logging in to your online courses.</li>
                    <li>If you need help finding your way around in Blackboard Learn 9.1</li>
                    <li>If you are registered for an Ontario Learn course and need help with login.</li>
                    <li>To arrange for your off-campus final exam.</li>
                    <li>For all other non-academic questions.</li>
                  </ul>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Login Problems Modal -->
              </div>
              <!-- END OF LOGIN PROBLEMS -->

              <!-- BLACKBOARD PROFILE -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="blackboard_profile"><img src="../assets/images/students/getting_started/blackboard_profile/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="blackboard_profile">Blackboard Profile</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Blackboard Profile Modal -->
                <div id="blackboard_profile" class="reveal-modal" data-reveal>
                  <h2>Blackboard Profile</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/getting_started/blackboard_profile/blackboard_profile.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Log into Blackboard and click on your name on the top right hand corner.
                      <img src="../assets/images/students/getting_started/blackboard_profile/01.png" alt"" />
                    </li>
                    <li>From the drop-down menu, click on the face icon to edit your Blackboard profile.
                      <img src="../assets/images/students/getting_started/blackboard_profile/02.png" alt"" />
                    </li>
                    <li>Enter your primary email address. When you submit your Blackboard profile with this email address, you will receive a verification email. With Blackboard 9.1, you can connect your Blackboard profile to all of your Blackboard institution accounts.
                      <img src="../assets/images/students/getting_started/blackboard_profile/03.png" alt"" />
                    </li>
                    <li>Your name and email address will automatically appear on your Blackboard Profile. It is optional to add a picture, connect with Face book and Twitter, and add personal information.</li>
                    <li><span class="bold">Pay attention to the Privacy Options</span>. If you want to share your profile with others at Humber College, click <span class="bold">My Institution</span>. If you only want to share your profile with your classmates, click <span class="bold">Private</span>. If you do not want to share your profile, please click <span class="bold">Hidden</span>.
                      <img src="../assets/images/students/getting_started/blackboard_profile/05.png" alt"" />
                    </li>
                    <li>Once you have created or edited your Blackboard profile, please click <span class="bold">Submit</span>. When you submit your profile, you will receive a verification email from Blackboard.
                      <img src="../assets/images/students/getting_started/blackboard_profile/06.png" alt"" />
                    </li>
                    <li>Check your email and then click on the verification link provided to complete the verification. Blackboard needs to verify the email address that you included in your profile.</li>
                  </ol>
                  
                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Blackboard Profile Modal -->
              </div>
              <!-- END OF BLACKBOARD PROFILE -->

              <!-- FIND YOUR WAY AROUND BLACKBOARD -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="find_your_way_around_blackboard"><img src="../assets/images/students/getting_started/find_your_way_around_blackboard/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="find_your_way_around_blackboard">Find Your Way Around Blackboard</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Find Your Way Around Blackboard Modal -->
                <div id="find_your_way_around_blackboard" class="reveal-modal" data-reveal>
                  <h2>Find Your Way Around Blackboard</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/getting_started/find_your_way_around_blackboard/find_your_way_around_blackboard.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <h2>Welcome Letter</h2>
                  <p>A welcome letter is a way to greet and introduce instructor to new students. Its purpose is to welcome students and give an insight into what is expected and needed throughout the school year. This is the first contact between teacher students. It also includes contact information, as well as a classroom behaviour and homework policy.</p>
                  <p>You can find your welcome letter under the getting started menu in Blackboard 9.1</p>

                  <h2>Critical Path</h2>
                  <p>The Critical Path is the calendar, timeline or weekly course schedule. It is an important document that lays out weekly objectives that you, the student, are responsible for to ensure academic success. You are strongly advised to print out a copy of the Critical Path and to refer to it regularly.</p>
                  <p>You can find the critical path under the getting started menu.</p>

                  <h2>Course Outline</h2>
                  <p>Course outlines are intended to provide students with an overall plan for a course what topics they will be covering, and to enable them to function efficiently and effectively in the course. It also tells how long the course runs for the order in which the topics will be studies. It also provides the details about course code, course name, credit value, pre-requisite, faculty name, course description, reference text book and other learning materials, method of student's evaluation and class policy.</p>
                  <p>You can see the Course outline under the Getting Started menu.</p>
                  <img src="../assets/images/students/getting_started/find_your_way_around_blackboard/03.png" alt"" />

                  <h2>How to Contact Your Professor.</h2>
                  <p>You should communicate with your professors several times during the semester. Here are some ways that you may contact him/her.</p>
                  <ul>
                    <li>Send personal email</li>
                    <li>Communicate through blogs, journal or course message</li>
                  </ul>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Find Your Way Around Blackboard Modal -->
              </div>
              <!-- END OF FIND YOUR WAY AROUND BLACKBOARD -->

              <!-- PREPARE YOUR COMPUTER -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="prepare_your_computer"><img src="../assets/images/students/getting_started/prepare_your_computer/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="prepare_your_computer">Prepare Your Computer</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Prepare Your Computer Modal -->
                <div id="prepare_your_computer" class="reveal-modal" data-reveal>
                  <h2>Prepare Your Computer</h2>
                  <hr/>

                  <dl class="tabs" data-tab>
                    <dd class="active"><a href="#windows-tab">Windows</a></dd>
                    <dd><a href="#macintosh-tab">Macintosh</a></dd>
                  </dl>
                  <div class="tabs-content">
                    <!-- Windows Tab Content -->
                    <div class="content active" id="windows-tab">
                      <div class="large-6 small-12 columns">
                        <h4>Operating System</h4>
                        <ul>
                          <li>Minimum: Windows XP</li>
                          <li>Recommended: Windows 7</li>
                        </ul>

                        <h4>Processor</h4>
                        <ul>
                          <li>Minimum: 1 GHz or faster 32-bit or 64-bit</li>
                          <li>Recommended: 2 GHz or faster 32-bit or 64-bit</li>
                        </ul>

                        <h4>Memory (RAM)</h4>
                        <ul>
                          <li>Minimum: 1 GB RAM</li>
                          <li>Recommended: 3 GB RAM or greater</li>
                        </ul>

                        <h4>Internet Browser</h4>
                        <ul>
                          <li>Minimum: Internet Explorer 7 or Chrome 14</li>
                          <li>Recommended: Internet Explorer 9 or Chrome 16</li>
                        </ul>
                      </div>
                      <div class="large-6 small-12 columns">
                        <h4>Office Suite</h4>
                        <ul>
                          <li>Minimum: Office 2007</li>
                          <li>Recommended: Office 2010</li>
                        </ul>

                        <h4>Software Plug-ins</h4>
                        <ul>
                          <li><a href="#">Java Plug-in (Version 7 Update 6)</a></li>
                          <li><a href="#">Adobe Flash</a></li>
                          <li><a href="#">PDF Reader</a></li>
                        </ul>

                        <h4>Hardware Peripherals</h4>
                        <ul>
                          <li>Headset, Microphone</li>
                        </ul>
                      </div>
                    </div>

                    <!-- Macintosh Tab Content -->
                    <div class="content" id="macintosh-tab">
                      <div class="large-6 small-12 columns">
                        <h4>Operating System</h4>
                        <ul>
                          <li>Minimum: MAC OS 10.3</li>
                          <li>Recommended: MAC OS X 10.4 or above</li>
                        </ul>

                        <h4>Processor</h4>
                        <ul>
                          <li>Minimum: G3 Processor</li>
                          <li>Recommended: G4 or higher</li>
                        </ul>

                        <h4>Memory (RAM)</h4>
                        <ul>
                          <li>Minimum: 1 GB RAM</li>
                          <li>Recommended: 3 GB RAM or greater</li>
                        </ul>

                        <h4>Internet Browser</h4>
                        <ul>
                          <li>Minimum: Safari 3.2</li>
                          <li>Recommended: Safari 4 or above</li>
                        </ul>
                      </div>
                      <div class="large-6 small-12 columns">
                        <h4>Office Suite</h4>
                        <ul>
                          <li>Minimum: Office for Mac 2008</li>
                          <li>Recommended: Office for Mac 2011</li>
                        </ul>

                        <h4>Software Plug-ins</h4>
                        <ul>
                          <li><a href="#">Java Software</a></li>
                          <li><a href="#">Adobe Flash</a></li>
                          <li><a href="#">PDF Reader</a></li>
                        </ul>

                        <h4>Hardware Peripherals</h4>
                        <ul>
                          <li>Headset, Microphone</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Prepare Your Computer Modal -->
              </div>
              <!-- END OF PREPARE YOUR COMPUTER -->

              <!-- MOBILE APPS -->
              <div class="large-4 medium-4 small-6 columns end">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="mobile_apps"><img src="../assets/images/students/getting_started/mobile_apps/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="mobile_apps">Mobile Apps</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Mobile Apps Modal -->
                <div id="mobile_apps" class="reveal-modal" data-reveal>
                  <h2>Mobile Apps</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/getting_started/mobile_apps/mobile_apps.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <h2>On Apple devices</h2>
                  <ol>
                    <li>Click the <span class="bold">App Store</span> link to download <span class="bold">Blackboard Mobile Learn</span>.</li>
                    <li>Launch Blackboard Mobile Learn and search for <span class="bold">Humber Institute of Technology and Advance Learning</span>.</li>
                    <li><span class="bold">Log in</span> using your <span class="bold">school credentials</span> (Username and Password).</li>
                  </ol>

                  <h2>On Android devices</h2>
                  <ol>
                    <li>From your phone or computer go to the Google Play store and search for <span class="bold">Blackboard Mobile Learn</span> app.</li>
                    <li><span class="bold">Download</span> the app</li>
                    <li>Open <span class="bold">Blackboard Mobile Learn</span> and search for <span class="bold">Humber Institute of Technology and Advance Learning</span>.</li>
                    <li>Once you have located your school, <span class="bold">log in</span> using your <span class="bold">school credentials</span> (Username and Password).
                      <img src="../assets/images/students/getting_started/mobile_apps/b04.png" alt"" />
                    </li>
                  </ol>


                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Mobile Apps Modal -->
              </div>
              <!-- END OF MOBILE APPS -->
              
            </div>
          </div>
          <div class="clearfix"></div>
          <!-- HUMBER FOOTER -->
          <?php include_once("/var/www/humber_global/footer.php"); ?>
          <!-- END OF HUMBER FOOTER -->
        </section>

      <a class="exit-off-canvas"></a>

      </div>
    </div>

    <script src="../assets/bower_components/jquery/jquery.js"></script>
    <script src="../assets/bower_components/foundation/js/foundation.min.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/custom.js"></script>
  </body>
</html>
