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
            <h1>Students - Learning Materials</h1>

            <div class="row">

              <!-- LEARNING MATERIALS/MODULES -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="learning_materials_modules"><img src="../assets/images/students/learning_materials/learning_materials_modules/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="learning_materials_modules">Learning Materials/Modules</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Learning Materials/Modules Modal -->
                <div id="learning_materials_modules" class="reveal-modal" data-reveal>
                  <h2>Learning Materials/Modules</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/learning_materials/learning_materials_modules/learning_materials_modules.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>A learning module is an organized collection of content presented together. It's a tool where items such as files, folders and tools are added.</p>
                  <p>Your instructor decides whether to enforce a sequential path through the content in a learning module or allow you to open pages in any order.</p>

                  <h2>Following a Sequential Path</h2>

                  <h4 class="bold">Navigating within Learning Modules</h4>
                  <p>To move from page to page within a module, click the right and left arrow buttons on the top right of the content area.</p>
                  <img src="../assets/images/students/learning_materials/learning_materials_modules/01.png" alt"" />

                  <h4 class="bold">Using the Table of Contents</h4>
                  <p>The table of contents displays next to the course menu on the page. You can a move the table of contents below the learning module content area to make more space across the page.</p>
                  <p>There are three display options available on the header of the table of contents:</p>
                  <ul>
                    <li>Minimize</li>
                    <li>Maximize</li>
                    <li>Move to the bottom or the left</li>
                  </ul>

                  <h4 class="bold">How to Move the Table of Contents</h4>
                  <p>Click the button (<img src="../assets/images/students/learning_materials/learning_materials_modules/arrow-down.png" alt"" />) to move the table of contents to the bottom of the page to the left, click the left-facing arrow (<img src="../assets/images/students/learning_materials/learning_materials_modules/arrow-up.png" alt"" />) to move the table of contents back.</p>
                  <img src="../assets/images/students/learning_materials/learning_materials_modules/02.png" alt"" />

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Learning Materials/Modules Modal -->
              </div>
              <!-- END OF LEARNING MATERIALS/MODULES -->

              <!-- MASHUPS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="mashups"><img src="../assets/images/students/learning_materials/mashups/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="mashups">Mashups</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Mashups Modal -->
                <div id="mashups" class="reveal-modal" data-reveal>
                  <h2>Mashups</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/learning_materials/mashups/mashups.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>
                    A Mashup combines elements from two or more sources. For example YouTube™, Flickr, and SlideShare you see on Blackboard. Mashups are displayed in the following ways:<br />
                    Embed, Thumbnail, and Text Link with Player
                  </p>

                  <h2>How to Create a Mashup Item Using the Content Editor</h2>
                  <ol>
                    <li>Navigate to an assignment, journal, or other piece of content.</li>
                    <li>On the Upload Assignment page, click Mashups.
                      <img src="../assets/images/students/learning_materials/mashups/02.png" alt"" />
                    </li>
                    <li>Select Flickr Photo, SlideShare Presentation, or YouTube Video.</li>
                    <li>On the Search pop-up window, search for content. Type the content name in the Search box and click Go.</li>
                    <li>On the Search Results page, click Preview to examine the items, or click Select to include the appropriate item.
                      <img src="../assets/images/students/learning_materials/mashups/05.png" alt"" />
                    </li>
                    <li>On the Create Mashup Item page, you can change the Name of the item. This is a required field.</li>
                    <li>Set the Mashup Options.</li>
                    <li>Click Submit.
                      <img src="../assets/images/students/learning_materials/mashups/09a.png" alt"" />
                    </li>
                    <li>On the Upload Assignment page, click Submit.
                      <img src="../assets/images/students/learning_materials/mashups/09b.png" alt"" />
                    </li>
                  </ol>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Mashups Modal -->
              </div>
              <!-- END OF MASHUPS -->

              <!-- WIKIS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="wikis"><img src="../assets/images/students/learning_materials/wikis/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="wikis">Wikis</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Wikis Modal -->
                <div id="wikis" class="reveal-modal" data-reveal>
                  <h2>How to Create a Group Wiki</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/learning_materials/wikis/wikis.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>From your group page click Group Wiki under Group Tools
                      <img src="../assets/images/students/learning_materials/wikis/01.png" alt"" />
                    </li>
                  </ol>

                  <h2>How to Create a Wiki Page</h2>
                  <p>Each newly created course or group wiki requires a first page, which is the home page. You or any course or group member can create the home page. The home page cannot be deleted, but if the wiki is open to editing, it can be edited by any course or group member. The home page and all subsequent pages are created following the same steps.</p>

                  <ol start="2">
                    <li>On the Create Wiki Page, type a Name.</li>
                    <li>Type text in the Content text box. Format the text and add images, links, multimedia, mashups, and attachments using the functions in the Attachments added using the content editor can be launched in a new window and have alternate text added to describe the attachment.</li>
                    <li>Click Submit.
                      <img src="../assets/images/students/learning_materials/wikis/04.png" alt"" />
                    </li>
                  </ol>

                  <h2>How to Edit Wiki Content</h2>
                  <p>Any course member can edit a course wiki page and any group member can edit a group wiki page.</p>
                  <p>When a wiki page is being edited by one user, it is locked to prevent others from editing the same page. If a user tries to edit a page someone else is editing, he or she is informed that the page is currently being edited by another user.</p>
                  <ol start="5">
                    <li>Access the wiki. The wiki topic page appears.</li>
                    <li>Select the page to review and edit. The wiki page opens in the content frame.</li>
                    <li>Click Edit Wiki Content next to the page’s title in the content frame.
                      <img src="../assets/images/students/learning_materials/wikis/07.png" alt"" />
                    </li>
                    <li>On the Edit Wiki Page, changes can be made to the name and content of the page. Additional content can be added. Use the functions in the existing text or add links, images, multimedia, mashups, attachments, and link to other wiki pages.
                      <img src="../assets/images/students/learning_materials/wikis/08.png" alt"" />
                    </li>
                    <li>Click Submit.</li>
                  </ol>
                  <p>Select History from a page’s contextual menu to see how the page has been modified, view any version, and compare two versions side by side. The Page History page allows you to retrieve information about the development of any page and see who contributed content. The most recent version of the page appears first. Students cannot delete wiki page versions from the Page History page. </p>

                  <h2>How to Link to Other Wiki Pages</h2>
                  <p>When wiki pages are created they are created in alphabetical order. You may need to reference another page in the wiki. If the wiki consists of many pages, it can be helpful to insert a link to that page right on the page currently being viewed. When creating or editing a wiki page, users can use the Link to Wiki page function in the link to another wiki page within the current wiki.</p>
                  <ol start="10">
                    <li>In the Content text box, position the mouse pointer where a link will be added to another wiki page.</li>
                    <li>Click the Link to Wiki page function in the Text Editor, represented by several sheets of paper. If there is only one page in the wiki, this function is disabled.
                      <img src="../assets/images/students/learning_materials/wikis/11.png" alt"" />
                    </li>
                    <li>In the pop-up window, select the wiki page to link to from the drop-down list. </li>
                    <li>Optionally, type a name for the link in the Rename Wiki Page Link text box. If the link is not renamed, the original page title is used as the link.</li>
                    <li>Click Submit. The link appears in the Text Editor.
                      <img src="../assets/images/students/learning_materials/wikis/14.png" alt"" />
                    </li>
                    <li>Click Submit. The new page with the link to the other page is added to the wiki.</li>
                  </ol>
                  
                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Wikis Modal -->
              </div>
              <!-- END OF WIKIS -->

              <!-- ASSESSMENTS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="assessments"><img src="../assets/images/students/learning_materials/assessments/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="assessments">Assessments</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Assessments Modal -->
                <div id="assessments" class="reveal-modal" data-reveal>
                  <h2>How to Take an Online Quiz/Test/Assessment</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/learning_materials/assessments/assessments.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>On the Course Menu, under Course Tools select the Assessments.
                      <img src="../assets/images/students/learning_materials/assessments/01.png" alt"" />
                    </li>
                    <li>Navigate to an assessment and click the link associated with it. If the link is not available, check the date that the assessment is available to be taken. </li>
                    <li>Click Begin to take the assessment.
                      <img src="../assets/images/students/learning_materials/assessments/03.png" alt"" />
                    </li>
                    <li>Your instructor may choose to have you type a password to begin taking an assessment. If necessary, type the valid password and click Submit to begin the assessment. The assessment continues to prompt for a valid password until the correct one is provided.</li>
                    <li>
                      As you work, answers will be saved automatically. You can also manually save each question by clicking the  Save or  Save All Answers button at the top or bottom of the page as you work.<br />
                      <span class="bold">Do not use the browser's Back button during an assessment. This may cause loss of data. If you have difficulties while taking an assessment, contact your instructor.</span>
                      <img src="../assets/images/students/learning_materials/assessments/05.png" alt"" />
                    </li>
                    <li>Click Save and Submit when you complete the assessment.</li>
                    <li>Once submitted, you will receive a confirmation.
                      <img src="../assets/images/students/learning_materials/assessments/07.png" alt"" />
                    </li>
                  </ol>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Assessments Modal -->
              </div>
              <!-- END OF ASSESSMENTS -->

              <!-- ASSIGNMENTS -->
              <div class="large-4 medium-4 small-6 columns end">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="assignments"><img src="../assets/images/students/learning_materials/assignments/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="assignments">Assignments</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Assignments Modal -->
                <div id="assignments" class="reveal-modal" data-reveal>
                  <h2>How to Submit an Assignment in Blackboard 9.1</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/learning_materials/assignments/assignments.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>On the Course Menu, under Course Tools select Assignments
                      <img src="../assets/images/students/learning_materials/assignments/01.png" alt"" />
                    </li>
                    <li>Click the name of the assignment you will be submitting to.
                      <img src="../assets/images/students/learning_materials/assignments/02.png" alt"" />
                    </li>
                    <li>On the Upload Assignment page, review the instructions and download any files provided by your instructor and complete the assignment using one or both of the following:
                      <ol type="a">
                        <li>Click Type Submission to expand the Assignment Submission box where you can type your response. You can use the content editor to format text, add files, images, links, multimedia and mashups.</li>
                        <li>If your response to the assignment is in a separate file, click Browse My Computer and select a file to attach. If you attach a file, type a title. If the box is left blank, the file name becomes the link. Follow any instructions that your instructor provided for naming your file.</li>
                      </ol>
                      <img src="../assets/images/students/learning_materials/assignments/03.png" alt"" />
                    </li>
                    <li>It is optional to type comments to your instructor in the Comments box.</li>
                    <li>Click Submit.</li>
                    <li>Blackboard displays a Success Message at the top of the Review Submission page confirming your assignment has been successfully submitted to your instructor.</li>
                  </ol>
                  
                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Assignments Modal -->
              </div>
              <!-- END OF ASSIGNMENTS -->

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
