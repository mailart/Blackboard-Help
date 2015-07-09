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
          <img src="../assets/images/ctl_logo.png" alt="" />
        </section>

        <section class="right show-for-medium-only">
        </section>
      </nav>

      <aside class="left-off-canvas-menu">
        <ul class="off-canvas-list">
          <?php include '../assets/includes/instructor-inner-nav.php' ?>
          <li><a href="../index.php"><span class="icon-home"></span> Blackboard Help Home</a></li>
        </ul>
      </aside>

      <section class="row main-section">
        <div class="large-3 show-for-large-up columns side-nav-wrap">

          <div class="ctl-logo">
            <img src="../assets/images/ctl_logo.png" alt="" />
          </div>

          <nav class="side-nav-links-wrap">
            <ul class="side-nav-links">
              <?php include '../assets/includes/instructor-inner-nav.php' ?>
            </ul>
          </nav>

          <div class="home-button">
            <h6><a href="../index.php"><span class="icon-home"></span> Blackboard Help Home</a></h6>
          </div>

          <div class="calendar-button">
            <div class="large-6 columns">
              <a href="http://www.humber.ca/centreforteachingandlearning/calendar.html" target="_blank">Workshops Calendar</a>
            </div>
            <div class="large-6 columns">
              <h3><a href="http://www.humber.ca/centreforteachingandlearning/calendar.html" target="_blank"><span class="icon-calendar"></span></a></h3>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>


        <div class="large-9 columns">
          <h1>Instructors - Assessments &amp; Assignments</h1>

          <div class="row">

            <!-- CREATE AN ASSIGNMENT -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="create_assignment"><img src="../assets/images/instructors/tests_assignments/create_assignment/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="create_assignment">Create an Assignment</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Create an Assignment Modal -->
              <div id="create_assignment" class="reveal-modal" data-reveal>
                <h2>Create an Assignment</h2>
                <div class="downloads">
                  <p><a href="#create_assignment_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/tests_assignments/create_assignment/create_assignment.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Assignments allow you to create coursework and manage the grades and feedback for each student separately. In an assignment, you can include a description, point value, and file attachments. You can create assignments in several courses areas, such as in a content area or in a learning module, lesson plan, or folder. Students access the assignment, type a submission, attach files, and submit it. You can respond to each student separately with comments and attached files. You access submitted assignments in the Grade Center.</p>

                <ol>
                  <li>Change edit mode to ON and access the course area where you want to create the assignment.</li>
                  <li>On the action bar, point to Assessments to access the drop-down list.</li>
                  <li>Select Assignment.
                    <img src="../assets/images/instructors/tests_assignments/create_assignment/03.png" alt"" />
                  </li>
                  <li>On the Create Assignment page, type a Name. Students click this name in the course area to access the assignment.
                    <img src="../assets/images/instructors/tests_assignments/create_assignment/04.png" alt"" />
                  </li>
                  <li>In the Assignment Information box, type instructions for the assignment. Format the text and include images, links, multimedia, Mashups, and attachments using the functions in the content editor, if needed. Attachments added using the content editor can be launched in a new window and have alternate text added to describe the attachment.</li>
                  <li>Optionally, in the Assignment Files section, attach a file using one of the following options:
                    <ul type="square">
                      <li>To upload a file from your computer, click Browse My Computer.</li>
                      <li>To upload a file from the course's storage repository:
                        <span class="text-center">-OR-</span>
                      </li>
                      <li>If the course files are in the course's storage repository, click Browse Course.</li>
                      <li>If your school licenses content management, click Browse Content Collection.</li>
                    </ul>
                  </li>
                  <li>Type Points Possible.</li>
                  <li>Optionally, associate a rubric by pointing to Add Rubric to access the drop-down list. Rubrics are a way to create criteria for evaluating student performance on assignments.</li>
                  <li>Select the check box to Make the Assignment Available.</li>
                  <li>Select the appropriate option for Number of Attempts. You can allow students to submit and resubmit work for an assignment more than once, and receive comments and a grade for each submission.</li>
                  <li>For Limit Availability, you can set the assignment to display on a specific date and time and stop displaying on a specific date and time. Select the Display After and Display Until check boxes to enable the date and time selections. Type dates and times in the boxes or use the pop-up Date Selection Calendar and Time Selection Menu to select dates and times. Display restrictions do not affect availability, only when the assignment appears.</li>
                  <li>Optionally, select a Due Date. Due dates are used to organize and assign gradable items to grading periods in the Grade Center.</li>
                  <li>In the Recipients section, select the All Students Individually option.</li>
                  <li>Click Submit.</li>
                </ol>

                <p>For more help on Assignments go to <a href="https://help.blackboard.com/en-us/Learn/9.1_SP_10_and_SP_11/Instructor/070_Assignments" target="_blank">the Official Blackboard Help Site</a>.</p>

                <h3 id="create_assignment_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/WbXZCMfCmzg?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Create an Assignment Modal -->
            </div>
            <!-- END OF CREATE AN ASSIGNMENT -->

            <!-- GRADING AN ASSIGNMENT -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="grading_assignment"><img src="../assets/images/instructors/tests_assignments/grading_assignment/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="grading_assignment">Grading an Assignment</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Grading an Assignment Modal -->
              <div id="grading_assignment" class="reveal-modal" data-reveal>
                <h2>Grading an Assignment</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/grading_assignment/grading_assignment.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>You can download assignment submissions to review them offline instead of reviewing them online in the Grade Center. Choose to download all or only selected submissions as a single ZIP file. Unzip or expand the file to view the contents. Each submission is saved as a separate file.</p>
                <ol>
                  <li>In the Grade Center, locate the column for the assignment you want to download.
                    <img src="../assets/images/instructors/tests_assignments/grading_assignment/01.png" alt"" />
                  </li>
                  <li>Access the assignment column's contextual menu and select Assignment File Download.
                    <img src="../assets/images/instructors/tests_assignments/grading_assignment/02.png" alt"" />
                  </li>
                  <li>On the Download Assignment page, select the student submissions to download</li>
                  <li>Click Submit.
                    <img src="../assets/images/instructors/tests_assignments/grading_assignment/04.png" alt"" />
                  </li>
                  <li>On the next Download Assignment page, click the Download assignments now link. A pop-up window displays instructions for what to do with the file.</li>
                  <li>In the pop-up window, select Save File and click OK.
                    <img src="../assets/images/instructors/tests_assignments/grading_assignment/06.png" alt"" />
                  </li>
                  <li>Browse to the location where you want to download the file and click Save.</li>
                  <li>To return to the Grade Center, click OK on the Download Assignment page.</li>
                </ol>

                <p>For more help on Assignments go to <a href="https://help.blackboard.com/en-us/Learn/9.1_SP_10_and_SP_11/Instructor/070_Assignments" target="_blank">the Official Blackboard Help Site</a>.</p>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Grading an Assignment Modal -->
            </div>
            <!-- END OF GRADING AN ASSIGNMENT -->

            <!-- GRADING AN ASSESSMENT -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="grading_assessment"><img src="../assets/images/instructors/tests_assignments/grading_assessment/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="grading_assessment">Grading an Assessment</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Grading an Assessment Modal -->
              <div id="grading_assessment" class="reveal-modal" data-reveal>
                <h2>Grading an Assessment</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/grading_assessment/grading_assessment.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Many types of questions within Blackboard are automatically graded. But if you created tests with essay or paragraph type questions, below are instructions for grading those.</p>

                <ol>
                  <li>On the Control Panel, expand the Grade Centre section.</li>
                  <li>Select Full Grade Centre.
                    <img src="../assets/images/instructors/tests_assignments/grading_assessment/02.png" alt"" />
                  </li>
                  <li>Click the option menu next to test column you'd like to grade.</li>
                  <li>From here you may choose to Grade Attempts, Grade Anonymously, View All Attempts, or Grade Questions, etc.</li>
                  <li>When you're viewing a Grade Attempt, click Test Information to get more details such as their score, start and submission time, and you also may clear the attempt.</li>
                  <li>For Essay questions, the students response is listed as the Given Answer.</li>
                  <li>You can score each question as you go along.</li>
                  <li>For automatically graded questions, a red X indicates an incorrect answer, and a green check indicates a correctly answered questions. You can manually override the score if needed.</li>
                  <li>Press Submit when you're done grading.
                    <img src="../assets/images/instructors/tests_assignments/grading_assessment/09.png" alt"" />
                  </li>
                </ol>

                <p>For more help on Assignments go to <a href="https://help.blackboard.com/en-us/Learn/9.1_SP_10_and_SP_11/Instructor/070_Assignments" target="_blank">the Official Blackboard Help Site</a>.</p>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Grading an Assessment Modal -->
            </div>
            <!-- END OF GRADING AN ASSESSMENT -->

            <!-- ADAPTIVE RELEASE - BASIC AND ADVANCED -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="adaptive_release"><img src="../assets/images/instructors/tests_assignments/adaptive_release/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="adaptive_release">Adaptive Release - Basic and Advanced</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Adaptive Release - Basic and Advanced Modal -->
              <div id="adaptive_release" class="reveal-modal" data-reveal>
                <h2>Adaptive Release - Basic and Advanced</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/adaptive_release/adaptive_release.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Adaptive Release allows you to control when material is released to students and which students are able to view it.</p>

                <h2>Adaptive Release: Basic</h2>
                <ol>
                  <li>Locate the item, file, module, content folder, assignment, assessment or specific course material that you would like to add Adaptive Release  criteria to.</li>
                  <li>From the drop-down menu beside the name, select Adaptive Release.
                    <img src="../assets/images/instructors/tests_assignments/adaptive_release/a02.png" alt"" />
                  </li>
                  <li>On the Adaptive Release page you can choose to edit the Date, Membership, Grade and Review Status of the selected content.</li>
                  <li>To edit the Date criteria, input the Days After and/or Days Unit criteria.</li>
                  <li>To edit the Membership criteria, enter specific usernames or choose pre-made groups.</li>
                  <li>To edit the Grade criteria, choose a column to associate the content with.</li>
                  <li> To edit the Review Status criteria, choose an item to mark ad reviewed. </li>
                  <li> Choose <span class="bold">Submit</span>.</li>
                </ol>

                <h2>Adaptive Release: Advanced</h2>
                <p>Using the Advanced Adaptive Release, you create a rule that contains specific criteria. </p>
                <ol>
                  <li>Locate the item, file, module, content folder, assignment, assessment or specific course material that you would like to add Adaptive Release criteria to.</li>
                  <li>From the drop-down menu beside the name, select <span class="bold">Adaptive Release: Advanced</span>
                    <img src="../assets/images/instructors/tests_assignments/adaptive_release/b02.png" alt"" />
                  </li>
                  <li>Choose <span class="bold">Create Rule</span>.</li>
                  <li>On the Create Rule page, input a name and choose Submit.</li>
                  <li>On the Manage Criteria page for the rule, choose Create Criteria and select Date, Membership or Grade.</li>
                  <li>Input the applicable criteria that you wish to be in the rule.</li>
                  <li>Click the check box for the rule to select it for the specific content. </li>
                  <li> Choose <span class="bold">Submit</span>.</li>
                </ol>
                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Adaptive Release - Basic and Advanced Modal -->
            </div>
            <!-- END OF ADAPTIVE RELEASE - BASIC AND ADVANCED -->

            <!-- ASSESSMENT QUESTION TYPES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="assessment_question_types"><img src="../assets/images/instructors/tests_assignments/assessment_question_types/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="assessment_question_types">Assessment Question Types</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Assessment Question Types Modal -->
              <div id="assessment_question_types" class="reveal-modal" data-reveal>
                <h2>Assessment Question Types</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/assessment_question_types/assessment_question_types.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Question Pools are used to build tests, quizzes and surveys (collectively termed assessments) one question at a time, as well as for the creation of random blocks and question sets for use in assessments.  The following types of questions can be added to online tests or surveys or exams:</p>

                <ul>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Calculated_Formula_Questions" target="_blank">Calculated Formula Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Calculated_Numeric_Questions" target="_blank">Calculated Numeric Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Either%2F%2FOr_Questions" target="_blank">Either/Or Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Essay_Questions" target="_blank">Essay Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/File_Response_Questions" target="_blank">File Response Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Fill_in_Multiple_Blanks_Questions" target="_blank">Fill in Multiple Blanks Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Fill_in_the_Blank_Questions" target="_blank">Fill in the Blank Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Hot_Spot_Questions" target="_blank">Hot Spot Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Jumbled_Sentence_Questions" target="_blank">Jumbled Sentence Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Matching_Questions" target="_blank">Matching Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Multiple_Answer_Questions" target="_blank">Multiple Answer Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Multiple_Choice_Questions" target="_blank">Multiple Choice Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Opinion_Scale_and_Likert_Questions" target="_blank">Opinion Scale and Likert Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Ordering_Questions" target="_blank">Ordering Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Quiz_Bowl_Questions" target="_blank">Quiz Bowl Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/Short_Answer_Questions" target="_blank">Short Answer Questions</a></li>
                  <li><a href="https://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/100_Tests_Surveys_Pools/090_Question_Types/True_or_False_Questions" target="_blank">True or False Questions</a></li>
                </ul>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Assessment Question Types Modal -->
            </div>
            <!-- END OF ASSESSMENT QUESTION TYPES -->

            <!-- USING SAFE ASSIGN -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="using_safe_assign"><img src="../assets/images/instructors/tests_assignments/using_safe_assign/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="using_safe_assign">Using Safe Assign</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Using Safe Assign Modal -->
              <div id="using_safe_assign" class="reveal-modal" data-reveal>
                <h2>Using Safe Assign</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/using_safe_assign/using_safe_assign.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <h2>Create a Safe Assign Dropbox</h2>
                <ol>
                  <li>Ensure that the Edit Mode is turned ON.</li>
                  <li>Navigate to the content area where you wish to put the Safe Assign.</li>
                  <li>From the menu, choose Assessments and then choose SafeAssignment from the drop-down list.
                    <img src="../assets/images/instructors/tests_assignments/using_safe_assign/03.png" alt"" />
                  </li>
                  <li>Type a name and enter the points possible for the Assignment.</li>
                  <li>Optionally, input a due date.</li>
                  <li>Optionally, type instructions.</li>
                  <li>Ensure that the “Yes” is selected to make the assignment available for students.</li>
                  <li>Optionally, select the box to Track Number of Views.</li>
                  <li>Optionally, enter the Display After and Display Until dates.</li>
                  <li>Check the box for Draft if the assignment can be submitted multiple times.</li>
                  <li>Optionally, check the box for Urgent checking.</li>
                  <li>Decide if the students can view their submission.</li>
                  <li>Optionally, create an announcement.</li>
                  <li>Click Submit.</li>
                </ol>

                <h2>Access Submitted Safe Assignments</h2>
                <ol>
                  <li>In the Control Panel under Course Management, expand Course Tools.</li>
                  <li>Click on SafeAssign.</li>
                  <li>Click on SafeAssignments.</li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Using Safe Assign Modal -->
            </div>
            <!-- END OF USING SAFE ASSIGN -->

            <!-- PASSWORD PROTECT A TEST/EXAM -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="password_protect_test"><img src="../assets/images/instructors/tests_assignments/password_protect_test/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="password_protect_test">Password Protect a Test/Exam</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Password Protect a Test/Exam Modal -->
              <div id="password_protect_test" class="reveal-modal" data-reveal>
                <h2>Password Protect a Test/Exam</h2>
                <div class="downloads">
                  <p><a href="#password_protect_test_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/tests_assignments/password_protect_test/password_protect_test.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Password protecting a test requires students to input a password to gain access to a test.</p>

                <ol>
                  <li>Ensure that the Edit Mode is turned ON</li>
                  <li>Locate the test in the content area.</li>
                  <li>Click on the drop-down link and choose "Edit the Test Options"
                    <img src="../assets/images/instructors/tests_assignments/password_protect_test/a03.png" alt"" />
                  </li>
                </ol>

                <ol>
                  <li>On the Edit the Test Options page, scroll down to '2. Test Availability'.</li>
                  <li>Click the checkbox for Password and type a password in the box.</li>
                  <li>Scroll down and click submit.
                    <img src="../assets/images/instructors/tests_assignments/password_protect_test/b03.png" alt"" />
                  </li>
                </ol>

                <p>The test is now password protected.</p>

                <h3 id="password_protect_test_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/HF5RYAuumYo?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Password Protect a Test/Exam Modal -->
            </div>
            <!-- END OF PASSWORD PROTECT A TEST/EXAM -->

            <!-- CREATE AN ASSESSMENT -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="create_assessment"><img src="../assets/images/instructors/tests_assignments/create_assessment/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="create_assessment">Create an Assessment</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Create an Assessment Modal -->
              <div id="create_assessment" class="reveal-modal" data-reveal>
                <h2>Create an Assessment</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/create_assessment/create_assessment.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>On the <span class="bold">Course Menu</span>, under <span class="bold">Course Tools</span> click on <span class="bold">Assessments</span>.
                    <img src="../assets/images/instructors/tests_assignments/create_assessment/01.png" alt"" />
                  </li>
                  <li>On the action bar, point to Assessments to access the drop-down list.</li>
                  <li>Select <span class="bold">Test or Survey</span>.
                    <img src="../assets/images/instructors/tests_assignments/create_assessment/03.png" alt"" />
                  </li>
                  <li>Choose Create or select an existing test from the menu.
                    <img src="../assets/images/instructors/tests_assignments/create_assessment/04.png" alt"" />
                  </li>
                  <li>Provide a name for the assessment. Provide a description if desired. Click Submit.</li>
                  <li>Click Create Question and select the desired question type from the drop-down list.</li>
                  <li>On the <span class="bold">Create/Edit page</span>, provide the necessary information to create a survey question.</li>
                  <li>Click <span class="bold">Submit</span>.</li>
                  <li>Repeat Step 6 through Step 8 to add more questions.</li>
                  <li>Click <span class="bold">OK</span>. The Test is added to the list on the Test page and is ready to deploy in a content area.</li>
                </ol>

                <h2>Reordering Questions</h2>
                <p>By default, when you create new questions, they are added to the end of the test.</p>
                <ol>
                  <li>Reorder questions using the drag-and-drop function or the keyboard accessible reordering tool.</li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Create an Assessment Modal -->
            </div>
            <!-- END OF CREATE AN ASSESSMENT -->

            <!-- RETENTION CENTER -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="retention_center"><img src="../assets/images/instructors/tests_assignments/retention_center/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="retention_center">Retention Center</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Retention Center Modal -->
              <div id="retention_center" class="reveal-modal" data-reveal>
                <h2>Retention Center</h2>
                <hr />

                <p>The Retention Center provides an easy way for you to discover which students in your course are at risk. From the Retention Center, &nbsp; you can communicate with struggling students and help them take immediate action for improvement.</p>

                <h2>Access the Retention Center</h2>
                <p>To access the Retention Center go to My Blackboard menu, and also accessible in the Evaluation section of a course's Control Panel.</br>
                  You can turn the Retention Center on or off in an individual course from the Control Panel &gt; Customization &gt; Tool Availability.
                </p>

                <h2>The Retention Center Page</h2>
                <p>Click the colored bar preceding the table to display a summary of the at-risk students in your course. Click the red dot indicator in a student's cell for more information, to include the student in the monitoring section in the right panel, or to send an email.</p>

                <h2>Right Side Panel</h2>
                <p>In the right side panel, you can view two types of information.</p>
                <ul>
                  <li>Students you are monitoring.</li>
                  <li>Other information you are monitoring.</li>
                </ul>

                <h2>Deleting Rules and Restoring Default Rules</h2>
                <p>When you delete a rule, all your course content and data remains intact.</p>
                <img src="../assets/images/instructors/tests_assignments/retention_center/d01.png" alt"" />

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Retention Center Modal -->
            </div>
            <!-- END OF RETENTION CENTER -->

            <!-- IMPORTING OR EXPORTING TESTS IN BLACKBOARD -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="importing_or_exporting_tests_in_blackboard"><img src="../assets/images/instructors/tests_assignments/importing_or_exporting_tests_in_blackboard/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="importing_or_exporting_tests_in_blackboard">Importing or Exporting Tests in Blackboard</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Importing or Exporting Tests in Blackboard Modal -->
              <div id="importing_or_exporting_tests_in_blackboard" class="reveal-modal" data-reveal>
                <h2>Importing or Exporting Tests in Blackboard</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/importing_or_exporting_tests_in_blackboard/importing_or_exporting_tests_in_blackboard.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>


                <div class="medium-6 columns border-right">
                  <h2>Importing Tests</h2>
                  <p>To import a test onto Blackboard, ensure that you have the file in the correct format. Blackboard will accept tests in a <span class="bold">zip file format</span>.</p>

                  <p>To import the test:</p>
                  <ol>
                    <li>Click <span class="bold">Course Tools</span> under <span class="bold">Control Panel</span></li>
                    <li>Click <span class="bold">Tests, Surveys and Pools</span> and click <span class="bold">Tests</span>.
                      <img src="../assets/images/instructors/tests_assignments/importing_or_exporting_tests_in_blackboard/a01.png" alt"" />
                    </li>
                    <li>Click <span class="bold">Import Test</span>
                      <img src="../assets/images/instructors/tests_assignments/importing_or_exporting_tests_in_blackboard/a03.png" alt"" />
                    </li>
                    <li>Under <span class="bold">Test Import</span>, click <span class="bold">Browse My Computer</span> to find the test file. Click <span class="bold">Submit</span> to import the test onto Blackboard.
                      <img src="../assets/images/instructors/tests_assignments/importing_or_exporting_tests_in_blackboard/a04.png" alt"" />
                    </li>
                  </ol>
                </div>
                <div class="medium-6 columns">


                  <h2>Exporting Tests</h2>
                  <p>To export a test from Blackboard:</p>

                  <ol>
                    <li>Click <span class="bold">Course Tools</span> under <span class="bold">Control Panel</span></li>
                    <li>Click <span class="bold">Tests, Surveys and Pools</span> and click <span class="bold">Tests</span>.</li>
                    <li>You will find a list of all tests that are available in Blackboard for a particular course. </li>
                    <li>To export a test, click the <span class="bold">drop down arrow</span> beside the test name and click <span class="bold">Export</span>.
                      <img src="../assets/images/instructors/tests_assignments/importing_or_exporting_tests_in_blackboard/b04.png" alt"" />
                    </li>
                    <li>Once you click <span class="bold">Export</span>, you will be asked to <span class="bold">Save</span> or <span class="bold">Open</span> the file. Click <span class="bold">Save</span> and <span class="bold">Ok</span>.
                      <img src="../assets/images/instructors/tests_assignments/importing_or_exporting_tests_in_blackboard/b05.png" alt"" />
                    </li>
                  </ol>
                </div>


                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Importing or Exporting Tests in Blackboard Modal -->
            </div>
            <!-- END OF IMPORTING OR EXPORTING TESTS IN BLACKBOARD -->

            <!-- IMPORTING TEST POOLS -->
            <div class="large-4 medium-4 small-6 columns end">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="importing_test_pools"><img src="../assets/images/instructors/tests_assignments/importing_test_pools/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="importing_test_pools">Importing Test Pools</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Importing Test Pools Modal -->
              <div id="importing_test_pools" class="reveal-modal" data-reveal>
                <h2>Importing Test Pools</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/tests_assignments/importing_test_pools/importing_test_pools.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <div class="spacer"></div>

                <p>To import Test pools from a publisher:</p>

                <ol>
                  <li>Click <span class="bold">Course Tools</span> under <span class="bold">Control Panel</span></li>
                  <li>Click <span class="bold">Tests, Surveys and Pools</span> and click <span class="bold">Pools</span>.
                    <img src="../assets/images/instructors/tests_assignments/importing_test_pools/02.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Import Pool</span>
                    <img src="../assets/images/instructors/tests_assignments/importing_test_pools/03.png" alt"" />
                  </li>
                  <li>Under <span class="bold">Pool Import</span>, click <span class="bold">Browse My Computer</span> to find the <span class="bold">Test Pool zip file</span>.</li>
                  <li>Click <span class="bold">Submit</span> to import the pool onto Blackboard. </li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Importing Test Pools Modal -->
            </div>
            <!-- END OF IMPORTING TEST POOLS -->

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
