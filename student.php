<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blackboard Learn 9.1</title>
    <link rel="stylesheet" href="assets/css/app.css" />
    <script src="assets/bower_components/modernizr/modernizr.js"></script>
    
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
            <img src="assets/images/olc_logo.png" alt="" />
          </section>

          <section class="right show-for-medium-only">
          </section>
        </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <?php include 'assets/includes/student-nav.php' ?>
            <li><a href="index.php"><span class="icon-home"></span> Blackboard 9.1 Home</a></li>
          </ul>
        </aside>

        <section class="row main-section">
          <div class="large-3 show-for-large-up columns side-nav-wrap">

            <div class="ctl-logo">
              <img src="assets/images/olc_logo.png" alt="" />
            </div>

            <nav class="side-nav-links-wrap">
              <ul class="side-nav-links">
                <?php include 'assets/includes/student-nav.php' ?>
              </ul>
            </nav>
            <div class="home-button">
              <h6><a href="index.php"><span class="icon-home"></span> Blackboard 9.1 Home</a></h6>
            </div>

          </div>


          <div class="large-9 columns">
            <h1>Blackboard Learn 9.1 - Student Help</h1>

            <div class="row">
              <div class="large-4 medium-4 small-6 columns">
                <div class="grid-tile">
                  <a href="students/getting_started.php"><img src="assets/images/students/getting_started/tile.png" /></a>
                  <div class="grid-link-container">
                    <a href="students/getting_started.php">Getting Started</a>
                  </div>
                </div>
              </div>
              <div class="large-4 medium-4 small-6 columns">
                <div class="grid-tile">
                  <a href="students/communication.php"><img src="assets/images/students/communication/tile.png" /></a>
                  <div class="grid-link-container">
                    <a href="students/communication.php">Communication</a>
                  </div>
                </div>
              </div>
              <div class="large-4 medium-4 small-6 columns">
                <div class="grid-tile">
                  <a href="students/tests_assignments.php"><img src="assets/images/students/tests_assignments/tile.png" /></a>
                  <div class="grid-link-container">
                    <a href="students/tests_assignments.php">Assessments &amp; Assignments</a>
                  </div>
                </div>
              </div>
              <div class="large-4 medium-4 small-6 columns">
                <div class="grid-tile">
                  <a href="students/learning_materials.php"><img src="assets/images/students/learning_materials/tile.png" /></a>
                  <div class="grid-link-container">
                    <a href="students/learning_materials.php">Learning Materials</a>
                  </div>
                </div>
              </div>
              <div class="large-4 medium-4 small-6 columns">
                <div class="grid-tile">
                  <a href="students/technical_help.php"><img src="assets/images/students/technical_help/tile.png" /></a>
                  <div class="grid-link-container">
                    <a href="students/technical_help.php">Technical Help</a>
                  </div>
                </div>
              </div>
              <div class="large-4 medium-4 small-6 columns end">
                <div class="grid-tile">
                  <a href="students/proctors_final_exam.php"><img src="assets/images/students/proctors_final_exam/tile.png" /></a>
                  <div class="grid-link-container">
                    <a href="students/proctors_final_exam.php">Proctors &amp; Final Exam</a>
                  </div>
                </div>
              </div>
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

    <script src="assets/bower_components/jquery/jquery.js"></script>
    <script src="assets/bower_components/foundation/js/foundation.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
