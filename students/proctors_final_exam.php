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

          <section class="right">
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
            <h1>Students - Proctors &amp; Final Exam</h1>

            <div class="row">

              <!-- OFF CAMPUS PROCTOR REQUEST -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="off_campus"><img src="../assets/images/students/proctors_final_exam/off_campus/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="off_campus">BB9.1 Off Campus Proctor Request</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Off Campus Proctor Request Modal -->
                <div id="off_campus" class="reveal-modal" data-reveal>
                  <h2>Off Campus Proctor Request</h2>
                  <hr />

                  <p>Humber College offers three proctoring options to those students who are unable to write the final exam under their instructor’s direct supervision.</p>

                  <ul>
                    <li>You would use this form if you live further than 100 km from Humber College.</li>
                    <li>The off campus proctor MUST be a university or college and MUST have a business email address.</li>
                    <li>Please ensure that you have secured a proctor and collected all the necessary information.</li>
                    <li>Off campus proctoring fee will apply.</li>
                    <li>Visit <a href="http://www.humber.ca/onlinelearning/proctor.php" target="_blank">http://www.humber.ca/onlinelearning/offcampus.php</a>.</li>
                    <li>Click the Off-Campus Proctor Request Form button.</li>
                    <li>Fill out the required information.
                      <img src="../assets/images/students/proctors_final_exam/off_campus/07.png" alt"" />
                    </li>
                  </ul>
                  
                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Off Campus Proctor Request Modal -->
              </div>
              <!-- END OF OFF CAMPUS PROCTOR REQUEST -->

              <!-- TEST CENTER PROCTOR REQUEST -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="test_center"><img src="../assets/images/students/proctors_final_exam/test_center/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="test_center">Test Center Proctor Request</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Test Center Proctor Request Modal -->
                <div id="test_center" class="reveal-modal" data-reveal>
                  <h2>Test Center Proctor Request</h2>
                  <hr />

                  <p>Humber College offers three proctoring options to those students who are unable to write the final exam under their instructor’s direct supervision.</p>

                  <ul>
                    <li>You would use this form if you live further than 100 km from Humber College.</li>
                    <li>You would submit this form if you need to write the exam at the  Humber Test Centre due to a conflict.</li>
                    <li>Late proctor requests will be accepted, but time and date options will be potentially restricted.</li>
                    <li>Visit <a href="http://www.humber.ca/onlinelearning/proctor.php" target="_blank">http://www.humber.ca/onlinelearning/proctor.php</a></li>
                    <li>Click the Test Center Request Form button.</li>
                    <li>Fill out the required information.
                      <img src="../assets/images/students/proctors_final_exam/test_center/06.png" alt"" />
                    </li>
                  </ul>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Test Center Proctor Request Modal -->
              </div>
              <!-- END OF TEST CENTER PROCTOR REQUEST -->

              <!-- VIRTUAL PROCTOR REQUEST -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="virtual"><img src="../assets/images/students/proctors_final_exam/virtual/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="virtual">Virtual Proctor Request</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Virtual Proctor Request Modal -->
                <div id="virtual" class="reveal-modal" data-reveal>
                  <h2>Virtual Proctor Request</h2>
                  <hr />

                  <p>Humber College offers three proctoring options to those students who are unable to write the final exam under their instructor’s direct supervision.</p>

                  <ul>
                    <li>You would use this form if you live further than 100 km from Humber College.</li>
                    <li>With Virtual Proctoring, you can take the online exam from the comfort of your own home.</li>
                    <li>You MUST have a high speed internet connection and a good quality webcam to be eligible for Virtual Proctoring.</li>
                    <li>Virtual Proctoring fee will apply.</li>
                    <li>For Virtual Proctoring requirements go to, <a href="http://onlineproctornow.com/techreq.php" target="_blank">http://onlineproctornow.com/techreq.php.</a></li>
                    <li>To see how Virtual Proctoring works, <a href="#" data-reveal-id="virtual_proctoring_video">click here to watch the video</a>.</li>
                    <li>Visit <a href="http://www.humber.ca/onlinelearning/proctor.php" target="_blank">http://www.humber.ca/onlinelearning/proctor.php</a></li>
                    <li>Click the Virtual Proctor Request Form button.</li>
                    <li>Fill out the required information.
                      <img src="../assets/images/students/proctors_final_exam/virtual/09.png" alt"" />
                    </li>
                  </ul>
                  
                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Virtual Proctor Request Modal -->

                <!-- Start of Virtual Proctoring Video Modal -->
                <div id="virtual_proctoring_video" class="reveal-modal medium" data-reveal>
                  <h3>Virtual Proctoring</h3>
                  <div class="flex-video-embedded">
                    <iframe width="900" height="675" src="http://www.youtube.com/embed/gUlPg9xaCew?rel=0" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                  <a class="button radius right btn-close">Close</a>
                  <a class="button radius right" data-reveal-id="virtual">Back</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Virtual Proctoring Video Modal -->
              </div>
              <!-- END OF VIRTUAL PROCTOR REQUEST -->

              <!-- FINAL EXAM -->
              <div class="large-4 medium-4 small-6 columns end">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="final_exam"><img src="../assets/images/students/proctors_final_exam/final_exam/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="final_exam">Final Exam</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Final Exam Modal -->
                <div id="final_exam" class="reveal-modal" data-reveal>
                  <h2>Final Exam</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/proctors_final_exam/final_exam/final_exam.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>All credit based online courses have a final exam which is typically supervised on-campus. That means, you will need to come to the campus to write your final exam. Your instructor will confirm the final exam details in your online course.</p>
                  <p>If you cannot come to Humber to write your final exam, the Open Learning Center (OLC) will be happy to assist you in making the arrangements at another educational institution - with your instructor's approval of course.</p>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Final Exam Modal -->
              </div>
              <!-- END OF FINAL EXAM -->

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
