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
          <h1>Students - Assessments &amp; Assignments</h1>

          <div class="row">

            <!-- ASSESSMENTS/TESTS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="assessments_tests"><img src="../assets/images/students/tests_assignments/assessments_tests/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="assessments_tests">Assessments/Tests</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Assessments/Tests Modal -->
              <div id="assessments_tests" class="reveal-modal" data-reveal>
                <h2>How to Take an Online Quiz/Test/Assessment</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/tests_assignments/assessments_tests/assessments_tests.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>On the Course Menu, under Course Tools select the Assessments.
                    <img src="../assets/images/students/tests_assignments/assessments_tests/01.png" alt"" />
                  </li>
                  <li>Navigate to an assessment and click the link associated with it. If the link is not available, check the date that the assessment is available to be taken.</li>
                  <li>Click Begin to take the assessment.
                    <img src="../assets/images/students/tests_assignments/assessments_tests/03.png" alt"" />
                  </li>
                  <li>Your instructor may choose to have you type a password to begin taking an assessment. If necessary, type the valid password and click Submit to begin the assessment. The assessment continues to prompt for a valid password until the correct one is provided.</li>
                  <li>
                    As you work, answers will be saved automatically. You can also manually save each question by clicking the  Save or  Save All Answers button at the top or bottom of the page as you work.<br />
                    <span class="bold">Do not use the browser's Back button during an assessment. This may cause loss of data. If you have difficulties while taking an assessment, contact your instructor.</span>
                    <img src="../assets/images/students/tests_assignments/assessments_tests/05.png" alt"" />
                  </li>
                  <li>Click Save and Submit when you complete the assessment.</li>
                  <li>Once submitted, you will receive a confirmation.
                    <img src="../assets/images/students/tests_assignments/assessments_tests/07.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Assessments/Tests Modal -->
            </div>
            <!-- END OF ASSESSMENTS/TESTS -->

            <!-- ASSIGNMENTS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="assignments"><img src="../assets/images/students/tests_assignments/assignments/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="assignments">Assignments</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Assignments Modal -->
              <div id="assignments" class="reveal-modal" data-reveal>
                <h2>How to Submit an Assignment in Blackboard 9.1</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/tests_assignments/assignments/assignments.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>On the Course Menu, under Course Tools select Assignments
                    <img src="../assets/images/students/tests_assignments/assignments/01.png" alt"" />
                  </li>
                  <li>Click the name of the assignment you will be submitting to.
                    <img src="../assets/images/students/tests_assignments/assignments/02.png" alt"" />
                  </li>
                  <li>On the Upload Assignment page, review the instructions and download any files provided by your instructor and complete the assignment using one or both of the following:
                    <ol type="a">
                      <li>Click Type Submission to expand the Assignment Submission box where you can type your response. You can use the content editor to format text, add files, images, links, multimedia and mashups.</li>
                      <li>If your response to the assignment is in a separate file, click Browse My Computer and select a file to attach. If you attach a file, type a title. If the box is left blank, the file name becomes the link. Follow any instructions that your instructor provided for naming your file.</li>
                    </ol>
                    <img src="../assets/images/students/tests_assignments/assignments/03.png" alt"" />
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

            <!-- MY GRADES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="my_grades"><img src="../assets/images/students/tests_assignments/my_grades/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="my_grades">My Grades</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- My Grades Modal -->
              <div id="my_grades" class="reveal-modal" data-reveal>
                <h2>Where Do I See My Grades?</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/tests_assignments/my_grades/my_grades.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>On the Course Menu, select My Grades. The My Grades page shows the status of gradable items, such as tests, assignments, journal and blog entries, and discussion posts. If you don't see a grade, your instructor may not have released it to students as of yet.</p>
                <img src="../assets/images/students/tests_assignments/my_grades/01a.png" alt"" />
                <img src="../assets/images/students/tests_assignments/my_grades/01b.png" alt"" />
                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of My Grades Modal -->
            </div>
            <!-- END OF MY GRADES -->

            <!-- TEST SUBMISSION -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="test_submission"><img src="../assets/images/students/tests_assignments/test_submission/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="test_submission">Test Submission</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Test Submission Modal -->
              <div id="test_submission" class="reveal-modal" data-reveal>
                <h2>How to View a Test Submission</h2>
      
      			 <div class="downloads">
                  <p><a href="../assets/_source/students/tests_assignments/test_submission/test_submission.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>
				

                <br>
                <p>After you submit a test or quiz, you may be able to review your <span class="bold">Test Submission</span> depending on whether your instructor has released the submission results to you.</p>

				<h2>Access Submission from "My Grades"</h2>
                <p>
                  If your instructor has already graded your Test and your instructor has made the grade available, you can access your Test Submission in <span class="bold">My Grades</span>.<br />
                  Here is how:
                </p>
                <ol>
                  <li>Select the <span class="bold">My Grades</span> tool on the Course Menu.</li>
                  <li>
                    Locate the title of the Test (e.g. Test 1 or Quiz 1) on the My Grades page.  Your score (Point Value) for that Test or Quiz is located on the right side in the same row.  To access additional information about your submission, click on the <span class="bold">Title of the Test</span>.                
                  </li>
                  
                  <img src="../assets/images/students/tests_assignments/test_submission/02a.png" alt"" />

                  <li>
                  The <span class="bold">View Attempts</span> page provides a short summary of your activity related to the Test, including the date you submitted the Test on. 
                  </li>
                  <li>
                  To access detailed performance results, correct answers, and feedback for your Test submission, click on the <span class="bold">Test Score</span> listed in the Calculated Grade column. (e.g. 15)
                  </li>
                  <img src="../assets/images/students/tests_assignments/test_submission/04a.png" alt"" />
                  <li>The <span class="bold">Review Test Submission</span> page displays the performance results you receive after completing a Test. The information displayed depends on the options selected by your instructor such as Submitted Answers, Correct Answers, Feedback, or Incorrectly Answered Questions.</li>
                  
                  <li>
                  When you are done reviewing your Test submission information, click on <span class="bold">OK</span> to return to the <span class="bold">View Attempts</span> page.
                  </li>
                </ol>
                
                
                <h2>Access Submission from within the Test</h2>
                <p>If the Test or Quiz is still available, you can access and review your Test Submission from the Content Area where the Test or Quiz is located. <br>
Here's how:</p>

			<ol>
            	<li>Go to the <span class="bold">Content Area</span> where the Test or Quiz is located. (e.g. Assessments)</li>
            	<li>Click on the <span class="bold">Title of the Test</span> you want to review. (e.g. Quiz 1)</li>
                	<img src="../assets/images/students/tests_assignments/test_submission/02b.png" alt"" />
                <li>On the <span class="bold">Begin Test</span> page, click on the <span class="bold">Begin</span> button.</li>
                	<img src="../assets/images/students/tests_assignments/test_submission/03b.png" alt"" />
                <li>On the next page, click on <span class="bold">View All Attempts</span> button.</li>
                	<img src="../assets/images/students/tests_assignments/test_submission/04b.png" alt"" />
                <li>On the <span class="bold">View Attempts</span> page, click on the <span class="bold">Test Score</span> link.</li>
                	<img src="../assets/images/students/tests_assignments/test_submission/05b.png" alt"" />
                <li>The <span class="bold">Review Test Submission</span> page displays the performance results you receive after completing a Test. The information displayed depends on the options selected by your instructor such as Submitted Answers, Correct Answers, Feedback, or Incorrectly Answered Questions.</li>
                  
                  <li>
                  When you are done reviewing your Test submission information, click on <span class="bold">OK</span> to return to the <span class="bold">View Attempts</span> page.
                  </li>
            </ol>


                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Test Submission Modal -->
            </div>
            <!-- END OF TEST SUBMISSION -->

            <!-- WIKI/BLOGS/JOURNALS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="wiki_blogs_journals"><img src="../assets/images/students/tests_assignments/wiki_blogs_journals/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="wiki_blogs_journals">Wiki/Blogs/Journals</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Wiki/Blogs/Journals Modal -->
              <div id="wiki_blogs_journals" class="reveal-modal" data-reveal>
                <h2>Wiki/Blogs/Journals</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/tests_assignments/wiki_blogs_journals/wiki_blogs_journals.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <h2>Wiki</h2>
                <p>Your instructor controls which tools are available. If this tool is not available, your instructor may have disabled it.</p>
                <p>A wiki is a collaborative tool that allows you to contribute and modify one or more pages of course related materials. A wiki provides an area where users can collaborate on content. Users within a course can create and edit wiki pages that pertain to the course or a course group.</p>
                <p>Instructors and students can offer comments, and your instructor can grade individual work.</p>

                <h5 class="bold">How to Create a Wiki Page</h5>
                <ol>
                  <li>On the <span class="bold">Wikis</span> listing page, select a wiki title.</li>
                  <li>On the wiki topic page, <span class="bold">click Create Wiki</span> Page on the action bar.</li>
                  <li>On the <span class="bold">Create Wiki Page</span>, type a <span class="bold">Name</span> for the wiki page.</li>
                  <li>Type information in the <span class="bold">Content</span> text box. You can use the content editor functions to format the text and include files, images, web links, multimedia, and mashups.</li>
                  <li>Click Submit.</li>
                </ol>

                <h2>Blog</h2>
                <p>A blog is your personal online journal. Each blog entry you make can include any combination of text, images, links, multimedia, mashups, and attachments. Blogs are an effective means of sharing knowledge and materials created and collected by the group in the course. You can post entries and add comments to existing blogs. Use your blog to express your ideas and share them with the class.</p>

                <h5 class="bold">How to Create a Blog Entry</h5>
                <p>Only your instructor can create a blog, but after creation, you can create entries. The blog topics appear in alphabetical order on the <span class="bold">Blogs</span> page. Following each blog title, view if the blog belongs to a group, the course, or to individual students.</p>
                <ol>
                  <li>On the course menu, click <span class="bold">Blogs</span>.</li>
                  <li>On the <span class="bold">Blogs</span> listing page, click the name of the blog you want to access.</li>
                  <li>On the blog's topic page, click <span class="bold">Create Blog Entry</span> on the action bar.</li>
                  <li>On the <span class="bold">Create Blog Entry</span> page, provide a <span class="bold">Title</span>.</li>
                  <li>Provide text in the <span class="bold">Entry Message</span> text box.</li>
                  <li>
                    Click <span class="bold">Post Entry</span>.<br />
                    -OR-<br />
                    Click <span class="bold">Save Entry as Draft</span> to save the entry for later posting.
                    <img src="../assets/images/students/tests_assignments/wiki_blogs_journals/b06.png" alt"" />
                  </li>
                </ol>

                <h2>Journals</h2>
                <p>Journals are a personal space for you to communicate privately with your instructor. You can also use a journal as a self-reflective tool to post your opinions, ideas, and concerns about your course, or discuss and analyze course related materials. For example, you can describe problems you faced and how you solved them. Your instructor can direct journal entries to be more formal in nature and narrower in focus by listing topics for discussion.</p>
                <p>Your instructor can choose to make journal entries public, allowing all course members to view all entries. You can read what other students wrote and build on those ideas.</p>

                <h5 class="bold">How to Access a Journal</h5>
                <ol>
                  <li>
                    On the course menu, click <span class="bold">Journals</span>.<br />
                    -OR-<br />
                    On the course menu, click <span class="bold">Tools</span> and select <span class="bold">Journals</span>.
                  </li>
                  <li>On the <span class="bold">Journals</span> listing page, click the journal title you want to access.</li>
                  <li>The journal listing page appears.</li>
                </ol>

                <h5 class="bold">How to Create a Journal Entry</h5>
                <p>Only your instructor can create a journal topic, but after creation, you can create entries. The journal topics appear in alphabetical order on the journals listing page. Create and post journal entries or save them in draft form for later posting.</p>
                <ol>
                  <li>On the course menu, click <span class="bold">Journals</span>.</li>
                  <li>On the <span class="bold">Journals</span> listing page, select a journal to open.</li>
                  <li>On the journal topic page, click <span class="bold">Create Journal Entry</span>.</li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Wiki/Blogs/Journals Modal -->
            </div>
            <!-- END OF WIKI/BLOGS/JOURNALS -->

            <!-- SUBMITTING GROUPASSIGN -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="submitting_groupassign"><img src="../assets/images/students/tests_assignments/submitting_groupassign/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="submitting_groupassign">Submitting GroupAssign</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Submitting GroupAssign Modal -->
              <div id="submitting_groupassign" class="reveal-modal" data-reveal>
                <h2>Submitting GroupAssign</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/tests_assignments/submitting_groupassign/submitting_groupassign.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <div class="spacer"></div>

                <p>To submit group assignments:</p>
                <ol>
                  <li>Click <span class="bold">Assignments</span> under <span class="bold">Course Tools</span>.
                    <img src="../assets/images/students/tests_assignments/submitting_groupassign/01.png" alt"" />
                  </li>
                  <li>Find the Group Assignment and click the link.
                    <img src="../assets/images/students/tests_assignments/submitting_groupassign/02.png" alt"" />
                  </li>
                  <li>Under <span class="bold">Assignment Submission</span>, click <span class="bold">Browse My Computer</span> to find the assignment file.
                    <img src="../assets/images/students/tests_assignments/submitting_groupassign/03.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Submit</span> to submit the group assignment.<br><span class="bold">NOTE: Only one member for each group needs to submit a group assignment</span>. </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Submitting GroupAssign Modal -->
            </div>
            <!-- END OF SUBMITTING GROUPASSIGN -->

            <!-- SUBMITTING SAFEASSIGN -->
            <div class="large-4 medium-4 small-6 columns end">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="submitting_safeassign"><img src="../assets/images/students/tests_assignments/submitting_safeassign/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="submitting_safeassign">Submitting SafeAssign</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Submitting SafeAssign Modal -->
              <div id="submitting_safeassign" class="reveal-modal" data-reveal>
                <h2>Submitting SafeAssign</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/tests_assignments/submitting_safeassign/submitting_safeassign.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>To submit a Safe Assignment:</p>

                <ol>
                  <li>Click <span class="bold">Assignments</span> under <span class="bold">Course Tools</span>.
                    <img src="../assets/images/students/tests_assignments/submitting_safeassign/01.png" alt"" />
                  </li>
                  <li>Find the <span class="bold">SafeAssign</span> and click <span class="bold">View/Complete</span>.
                    <img src="../assets/images/students/tests_assignments/submitting_safeassign/02.png" alt"" />
                  </li>
                  <li>Under <span class="bold">Your Files</span> click <span class="bold">Choose File</span> to upload the assignment.
                    <img src="../assets/images/students/tests_assignments/submitting_safeassign/03.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Submit</span> to submit the SafeAssign. </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Submitting SafeAssign Modal -->
            </div>
            <!-- END OF SUBMITTING SAFEASSIGN -->

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
