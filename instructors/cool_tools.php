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
          <h1>Instructors - Cool Tools</h1>

          <div class="row">

            <!-- CALENDAR -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="calendar"><img src="../assets/images/instructors/cool_tools/calendar/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="calendar">Calendar</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Calendar Modal -->
              <div id="calendar" class="reveal-modal" data-reveal>
                <h2>Calendar</h2>
                <div class="downloads">
                  <p><a href="#calendar_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/cool_tools/calendar/calendar.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>Select Calendar from the Course Menu</li>
                  <li>On the calendar, click the plus (+) or the desired day to create a new event.</li> 
                  <li>Type the New Event Name.</li>
                  <li>Select a Calendar to associate the event to, such as your personal calendar.</li> 
                  <li>Only instructors and administrators can add events to the course and institution calendars.</li>
                  <li>Select the Start and End times.</li>
                  <li>Type the Event Description.</li> 
                  <li>Click Save.
                    <img src="../assets/images/instructors/cool_tools/calendar/a08.png" alt"" />
                  </li>
                </ol>

                <h2>How to Edit or Delete an Event</h2>
                <ol>
                  <li>On the Calendar, navigate to the date of the event in the main view.</li>
                  <li>Click the event to edit or delete it. </li>
                  <li>Drag an event to another date in the main view to change the date of the event. The time of the event and calendar it is associated with remain the same.</li>
                  <li>Drag an event from the main view to another date on the smaller monthly view to change the date.
                    <img src="../assets/images/instructors/cool_tools/calendar/b04.png" alt"" />
                  </li>
                </ol>

                <h3 id="calendar_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/5VLbFxJ4W4M?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Calendar Modal -->
            </div>
            <!-- END OF CALENDAR -->

            <!-- BLACKBOARD COLLABORATE -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="blackboard_collaborate"><img src="../assets/images/instructors/cool_tools/blackboard_collaborate/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="blackboard_collaborate">Blackboard Collaborate</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Blackboard Collaborate Modal -->
              <div id="blackboard_collaborate" class="reveal-modal" data-reveal>
                <h2>Blackboard Collaborate</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/cool_tools/blackboard_collaborate/blackboard_collaborate.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Blackboard Collaborate is a virtual classroom/web conferencing tool built into Blackboard Learn 9.1. It offers a more collaborative, interactive, and mobile learning experience that constantly evolves.  With Blackboard Collaborate, you can effectively keep your students engaged in the learning process.</p>

                <p><span class="bold">Course Room:</span> A default room provided for your course that lasts as long as the duration of your course. By default, the room is titled with your course name and is always available.</p>
                <ul>
                  <li>By default, students enter your Course Room as participants. Instructors and administrators enter as moderators. You can allow all participants to join as moderators so collaboration can start without your presence.</li>
                  <li>If you have supervision concerns, you can completely turn off your Course Room at the course level.</li>
                  <li>Use your Course Room to acclimate students to your course setup, introduce new concepts, host Q and A sessions, lead study sessions, and grade group presentations.</li>
                </ul>

                <p><span class="bold">Shared Room:</span> A default room provided for each instructor that lasts as long you retain an account on the system. By default, the room is titled with your name and is always available.</p>
                <ul>
                  <li>My Room is accessible from any course where you have the instructor role.</li>
                  <li>You can disallow participants from a certain course to enter your room.</li>
                  <li>By default, students enter your room as participants. You can allow all students to join as moderators or only allow select users from a course you teach to join your room.</li>
                </ul>

                <h2>The Main Blackboard Collaborate Page </h2>
                <p>You can enter an existing room, edit settings for existing rooms, set defaults for sessions you want to create, create new sessions from this page, and search existing sessions and recordings.</p>
                <img src="../assets/images/instructors/cool_tools/blackboard_collaborate/b01.png" alt"" />

                <h2>Begin Collaborating</h2>
                <p>Click Launch Room to enter a room. The Launch Room function only appears if the session is ready to be launched. On the Room Details page, click <span class="bold">Launch Room</span> to initiate <span class="bold">Blackboard Collaborate.</span></p>
                <img src="../assets/images/instructors/cool_tools/blackboard_collaborate/c01.png" alt"" />

                <h2>Collaborate Launcher Pop-up Window</h2>
                <p>With some operating systems, when users click the Launch Room function, a pop-up window provides the following two options.</p>
                <ol>
                  <li>If you do not have the Collaborate Launcher, download it now, and when complete, double-click the <span class="bold">.collab</span> file in your Downloads folder to launch your session.</li>
                  <li>If you have already downloaded the Collaborate Launcher, double-click the <span class="bold">.collab</span> file in your Downloads folder to launch your session.</li>
                </ol>
                <p>You may find you do not need to use the launcher as the <span class="bold">.jnlp</span> file opens your session properly after clicking Launch Room.</p>
                <img src="../assets/images/instructors/cool_tools/blackboard_collaborate/d01.png" alt"" />

                <h2>Edit Settings</h2>
                <p>You can customize any of your rooms. Click Edit Room to adjust settings for simultaneous speakers, private messages, the recording options, and more.</p>

                <h2>Add a Course Link</h2>
                <p><span class="bold">Click Add Link</span> to create a <span class="bold">course link</span> to the room in one of your course areas, such as a <span class="bold">content area</span> or <span class="bold">learning module</span>. When you add a course link, students can access the room at a designated time alongside the relevant content in your course.</p>

                <h2>Allow Guests</h2>
                <p>You can send guests a URL to access your Blackboard Collaborate session. In the pop-up window, add your guests' email addresses and click Send Invitations.</p>

                <h2>Search Sessions and Recordings</h2>
                <p>Type a keyword or phrase in the Search box to locate a specific session or recording. You can also provide a date range for the search. Results are limited to the scheduled sessions or available recordings listed in the course you are in.</p>
                <img src="../assets/images/instructors/cool_tools/blackboard_collaborate/h01.png" alt"" />

                <h2>Grade Center Integrations</h2>
                <p>If you select <span class="bold">ON</span> for Add a grade column, you can automatically add a Grade Center column after a session is over. Provide the points you want to assign for this activity.After a session ends, you can access an attendance report that allows you to push points to the Grade Center. The points are solely for attendance. From the sesssion's contextual menu, select View Session Attendance.</p>
                <p>On the View Session Attendance page, you see a list of the students who attended the session. If a student exited the session and returned, his or her name appears in the list again.</p>
                <p>To automatically award the predetermined points for attending the session. <span class="bold">Click Post Attendance</span> to Grade Center on the action bar. You cannot select which users receive points, but you can adjust points for individual users from their Grade Details pages in the Grade Center.</p>
                <p>In the Grade Center, point to the column heading to view more information about the column on the Grade Information Bar. Click the column heading's contextual menu to edit the column title.</p>
                <img src="../assets/images/instructors/cool_tools/blackboard_collaborate/i01.png" alt"" />

                <p>For more details on Blackboard Collaborate Click <a href="http://help.blackboard.com/en-us/Learn/9.1_SP_12_and_SP_13/Instructor/060_Course_Tools/Blackboard_Collaborate_Building_Block/Blackboard_Collaborate_Sessions" target="_blank">Here</a>.</p>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Blackboard Collaborate Modal -->
            </div>
            <!-- END OF BLACKBOARD COLLABORATE -->

            <!-- SELF AND PEER ASSESSMENTS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="self_peer_assessments"><img src="../assets/images/instructors/cool_tools/self_peer_assessments/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="self_peer_assessments">Self and Peer Assessments</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Self and Peer Assessments Modal -->
              <div id="self_peer_assessments" class="reveal-modal" data-reveal>
                <h2>Self and Peer Assessments</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/cool_tools/self_peer_assessments/self_peer_assessments.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>The Self and Peer Assessment Building Block is a tool designed to facilitate the objective, analytical, and learning comprehension skills of students. Reviewing the work of fellow students through criteria-based reference evaluation allows constructive feedback. The constructive feedback that students give to and receive from their peers can enhance their comprehension of the subject material and provide valuable insights into their own efforts.</p>

                <h2>Creating a New Self and Peer Assessment</h2>
                <ol>
                  <li>Access a content area and point to <span class="bold">Assessments</span> on the action bar to access the drop-down list.</li>
                  <li>Select <span class="bold">Self and Peer Assessment.</span></li>
                  <li>On the <span class="bold">Create Self</span> and <span class="bold">Peer Assessment</span> page, type a <span class="bold">Name</span>.</li>
                  <li>Type instructions for the assessment in the <span class="bold">Instructions</span> content editor.</li>
                  <li>Optionally, use the content editor <span class="bold">Insert File</span> function to add files.</li>
                  <li>Set the <span class="bold">Submission Start Date</span> and <span class="bold">Submission End Date</span> by using the date and time fields.</li>
                  <li>Set the <span class="bold">Start Date</span> and <span class="bold">End Date</span> for the peer evaluations by using the date and time fields.</li>
                  <li><span class="bold">Allow Anonymous Evaluations</span> by selecting <span class="bold">Yes</span>. Click <span class="bold">No</span> to disallow.</li>
                  <li><span class="bold">Allow Self Evaluations</span> by selecting <span class="bold">Yes</span>. Click <span class="bold">No</span> to disallow.</li>
                  <li>Allow submitters to view their own evaluation results by selecting <span class="bold">Yes</span> for <span class="bold">Show Evaluation Results to Submitter</span>. Click <span class="bold">No</span> to disallow.</li>
                  <li>In the <span class="bold">Number of Submissions to Evaluate</span> field, define how many of their peer's tests each student is expected to evaluate.<br /><br />
                    <span class="bold">NOTE:</span>The number entered in the <span class="bold">Number of Submissions to Evaluate</span> field does not include the creator of the assessment. Type zero (0) in this field if self-evaluations are the only kind you want.<br /><br />
                  </li>
                  <li>Make the assessment available by selecting <span class="bold">Yes</span>. Select <span class="bold">No</span> to make it unavailable.</li>
                  <li>Track the number of views by selecting <span class="bold">Yes</span>. Select <span class="bold">No</span> to disable tracking.</li>
                  <li>Select <span class="bold">Display After</span> and/or <span class="bold">Display Until</span> to control when the content is available.</li>
                  <li>Set the date and time restrictions for the attached content by using the date and time fields for <span class="bold">Display After</span> or <span class="bold">Display Until</span>.</li>
                  <li>Click <span class="bold">Submit</span>.
                    <img src="../assets/images/instructors/cool_tools/self_peer_assessments/16.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Self and Peer Assessments Modal -->
            </div>
            <!-- END OF SELF AND PEER ASSESSMENTS -->

            <!-- COURSE REPORTS/STATISTICS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="course_reports_statistics"><img src="../assets/images/instructors/cool_tools/course_reports_statistics/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="course_reports_statistics">Course Reports/Statistics</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Course Reports/Statistics Modal -->
              <div id="course_reports_statistics" class="reveal-modal" data-reveal>
                <h2>Course Reports/Statistics</h2>
                <div class="downloads">
                  <p><a href="#course_reports_statistics_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/cool_tools/course_reports_statistics/course_reports_statistics.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>You can run Course Reports to view information about course usage and activity.</p>

                <ol>
                  <li>On the <span class="bold">Control Panel</span> under <span class="bold">Course Management</span>, go to <span class="bold">Evaluation</span>.</li>
                  <li>Choose <span class="bold">Course Reports.</span></li>
                  <li>Choose the report you wish to run, and choose the chevron when it becomes available.</li>
                  <li>Choose <span class="bold">Run</span>.
                    <img src="../assets/images/instructors/cool_tools/course_reports_statistics/04.png" alt"" />
                  </li>
                  <li>Input any required information on the specific report page.</li>
                  <li>Click <span class="bold">Submit.</span></li>
                </ol>

                <h3 id="course_reports_statistics_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/v8AXOFxkdco?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Course Reports/Statistics Modal -->
            </div>
            <!-- END OF COURSE REPORTS/STATISTICS -->

            <!-- JOURNALS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="journals"><img src="../assets/images/instructors/cool_tools/journals/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="journals">Journals</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Journals Modal -->
              <div id="journals" class="reveal-modal" data-reveal>
                <h2>Journals</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/cool_tools/journals/journals.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>The journals tool offers students the opportunity to reflect on course content and communicate privately with you. You can use the tool to gauge understanding and guide students in their knowledge acquisition. Your comments can help students refine their writing and ideas. You can create one or more journals for use by students in your course. You must create journal topics before students can add their entries.</p>

                <h2>How to Create a Journal</h2>
                <ol>
                  <li>Change Edit Mode to ON.</li>
                  <li>On the Control Panel, expand the Course Tools section and select Journals.</li>
                  <li>On the Journals listing page, click Create Journal on the action bar.</li>
                  <li>On the Create Journal page, type a Name for the journal.</li>
                  <li>Optionally, type instructions in the box provided.</li>
                  <li>For Journal Availability, select the Yes option to make it available to users.</li>
                  <li>For Journal Date and Time Restrictions, select the dates and times that the journal will be available.</li>
                  <li>In the Journal Settings section, select Monthly or Weekly Index Entries.
                    <ul type="square">
                      <li>Optionally, select the check box to Allow Users to Edit and Delete Entries.</li>
                      <li>Optionally, select the check box to Allow Users to Delete Comments.</li>
                      <li>Optionally, select the check box to Permit Course Users to View Journal. If selected, the journal becomes public. All users can view all journal entries made to the journal topic.</li>
                    </ul>
                  </li>
                  <li>In the Grade Settings section, select No grading or the Grade option and type the number of Points possible. Points possible will apply to one or more entries made by the user to the journal topic. After you enable grading, a column is created automatically in the Grade Center. It is permanently gradable, and you cannot change the setting to No grading.</li>
                  <li>Optionally, select the check box for Show participants in needs grading status and select the number of entries required. Applying this setting will show the needs grading icon in the Grade Center and place the entries in the queue on the Needs Grading page after the specified number of entries are made.
                    <img src="../assets/images/instructors/cool_tools/journals/10.png" alt"" />
                  </li>
                  <li>Optionally, associate a rubric by pointing to Add Rubric to access the drop-down list.</li>
                  <li>Click Submit.</li>
                </ol>

                <h2>How to Create Journal Entries</h2>
                <p>You and your students can create journal entries. Only you can comment on students' private entries. You and group members can comment on group entries.</p>
                <p>On the Journals listing page, information is provided about each journal. Students can see if their entries are private—between the student and you—or public.</p>
                <ol>
                  <li>On the Journals listing page, select a journal title.</li>
                  <li>On the journal's topic page, click Create Journal Entry on the action bar.</li>
                  <li>On the Create Journal Entry page, type a Title for the journal entry.</li>
                  <li>Type text in the Entry Message box. Format the text and add images, links, multimedia, Mashups, and attachments using the functions in the content editor, if needed. Attachments you add using the content editor can be launched in a new window and have alternate text added to describe the attachment.</li>
                  <li>In the Journal Entry Files section, browse for a file to attach to the journal entry.</li>
                  <li>Click Post Entry to submit the journal entry or click Save Entry as Draft to add the entry later.</li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Journals Modal -->
            </div>
            <!-- END OF JOURNALS -->

            <!-- BLOGS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="blogs"><img src="../assets/images/instructors/cool_tools/blogs/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="blogs">Blogs</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Blogs Modal -->
              <div id="blogs" class="reveal-modal" data-reveal>
                <h2>Blogs</h2>
                <div class="downloads">
                  <p><a href="#blogs_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/cool_tools/blogs/blogs.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>A blog - a shorthand term that means web log - is a personal online journal that is frequently updated and intended for general public access and use. Most blogs also have some kind of commenting system, so that people can respond to and interact with one another. Blogs encourage students to clearly express their ideas and addresses the need to expand various aspects of social learning. Moreover, they are an effective means of gaining insight into students' activities and provide a way to share the knowledge and materials collected.</p>
                <p>In Blackboard Learn, instructors create and manage blogs, and only enrolled users can view and create entries and comments in them.</p>

                <h2>Creating a Blog</h2>
                <ol>
                  <li>Change <span class="bold">Edit Mode</span> to <span class="bold">ON.</span></li>
                  <li>On the <span class="bold">Control Panel</span>, expand the <span class="bold">Course Tools</span> section and select <span class="bold">Blogs</span>.</li>
                  <li>On the <span class="bold">Blogs</span> listing page, click <span class="bold">Create Blog</span> on the action bar.</li>
                  <li>On the Create <span class="bold">Blog</span> page, type a <span class="bold">Name</span> for the blog.</li>
                  <li>Type optional <span class="bold">Instructions</span> for the blog. Format the text and add images, links, multimedia, mashups, and attachments using the functions in the content editor, if needed. Attachments you add using the content editor can be launched in a new window and have alternate text added to describe the attachment. Any files you upload from your computer are saved in Course Files or the Content Collection in the top-level folder.</li>
                  <li>For <span class="bold">Blog Availability</span>, select the <span class="bold">Yes</span> option to make it available to users.</li>
                  <li>For <span class="bold">Blog Date and Time Restrictions</span>, you can set a blog to display on a specific date and time and to stop displaying on a specific date and time. Select the <span class="bold">Display After</span> and <span class="bold">Display Until</span> check boxes to enable the date and time selections. Use the pop-up <span class="bold">Date Selection Calendar</span> and <span class="bold">Time Selection Menu</span> to select dates and times or type dates and times in the boxes. Display restrictions do not affect the blog availability, only when it appears.</li>
                  <li>In the <span class="bold">Blog Participation</span> section, select <span class="bold">Individual to All Students</span> or <span class="bold">Course</span>. Optionally, select <span class="bold">Allow Anonymous Comments</span> for individual blogs or <span class="bold">Allow Anonymous Entries and Comments</span> for course and group blogs.</li>
                  <li>In the <span class="bold">Blog Settings</span> section, select <span class="bold">Monthly</span> or <span class="bold">Weekly Index Entries</span>.
                    <ul type="square">
                      <li>Optionally, select the check box to <span class="bold">Allow Users to Edit and Delete Entries.</span></li>
                      <li>Optionally, select the check box to <span class="bold">Allow Users to Delete Comments</span>.</li>
                    </ul>
                  </li>
                  <li>In the <span class="bold">Grade Settings</span> section, select <span class="bold">No grading</span> or the <span class="bold">Grade</span> option and type the number of <span class="bold">Points possible</span>. Points possible will apply to one or more entries made by the user to the blog topic. After you enable grading, a column is created automatically in the Grade Center. It is permanently gradable, and you cannot change the setting to <span class="bold">No grading</span>.</li>
                  <li>Optionally, select the check box for <span class="bold">Show participants in needs grading status</span> and from the drop-down list, select the number of entries required. Applying this setting will show the needs grading icon in the Grade Center and place the entries in the queue on the <span class="bold">Needs Grading</span> page after the specified number of entries are made.
                    <img src="../assets/images/instructors/cool_tools/blogs/11.png" alt"" />
                  </li>
                  <li>Optionally, associate a rubric by pointing to <span class="bold">Add Rubric</span> to access the drop-down list.</li>
                  <li>Click <span class="bold">Submit</span>.</li>
                </ol>

                <p>The blog topics appear in alphabetical order on the Blogs listing page. You can sort columns by clicking the column title or caret.</p>

                <h3 id="blogs_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="600" height="400" src="//www.youtube.com/embed/4dK_HclOzHo?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Blogs Modal -->
            </div>
            <!-- END OF BLOGS -->

            <!-- WIKIS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="wikis"><img src="../assets/images/instructors/cool_tools/wikis/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="wikis">Wikis</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Wikis Modal -->
              <div id="wikis" class="reveal-modal" data-reveal>
                <h2>Wikis</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/cool_tools/wikis/wikis.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>Access the course.</li>
                  <li>Change Edit Mode to ON.</li>
                  <li>On the Control Panel, expand the Course Tools section.</li>
                  <li>Select Wikis.
                    <img src="../assets/images/instructors/cool_tools/wikis/04.png" alt"" />
                  </li>
                  <li>On the Wikis listing page, click Create Wiki.
                    <img src="../assets/images/instructors/cool_tools/wikis/05.png" alt"" />
                  </li>
                  <li>On the Create Wiki page, type a name for the wiki.</li>
                  <li>Type optional Instructions. Format the text and add images, links, multimedia, mashups, and attachments using the functions if needed. Attachments added using the content editor can be launched in a new window and have alternate text added to describe the attachment.</li>
                  <li>Select the Yes option to make the wiki available to users.</li>
                  <li>Use the Display After and Display Until date and time fields to limit availability of the wiki. Select the Display After and Display Until check boxes in order to enable the date and time selections. Display restrictions do not affect the content in the wiki, only the appearance of the wiki.
                    <img src="../assets/images/instructors/cool_tools/wikis/09.png" alt"" />
                  </li>
                  <li>Select the Student Access option. Student access can be changed at any time. 
                    <ul type="square">
                      <li>Closed to Editing: Select this option when the instructor will be the only one contributing pages or to disallow further page editing by users, such as when the wiki pages are set to be graded. Wikis can still be viewed when Closed to Editing is selected.</li>
                      <li>Open to Editing: Allows users to modify any wiki page. In a group wiki, a user must be a member of the group to edit a wiki page.</li>
                    </ul>
                  </li>
                  <li>Select No grading or the Grade option and type the number of Points possible. Points possible will apply to one or more pages added and all edits by the user. Once a wiki is set to be graded, a column is created for it in the Grade Center. It is permanently gradable and cannot be set to No grading.</li>
                  <li>Click Submit.
                    <img src="../assets/images/instructors/cool_tools/wikis/12.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Wikis Modal -->
            </div>
            <!-- END OF WIKIS -->

            <!-- MASHUPS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="mashups"><img src="../assets/images/instructors/cool_tools/mashups/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="mashups">Mashups</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Mashups Modal -->
              <div id="mashups" class="reveal-modal" data-reveal>
                <h2>Mashups</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/cool_tools/mashups/mashups.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Mashups allow you to include content in a course that is from an external website. Follow Humber's copyright guidelines at (<a href="http://library.humber.ca/copyright" title="Humber's copyright guidelines" target="_blank">http://library.humber.ca/copyright</a>) when choosing and citing this content.  Three types of Mashups are available:</p>
                <ul type="square">
                  <li><span class="bold">Flickr Photo:</span> Link to a site for viewing and sharing photographic images</li>
                  <li><span class="bold">SlideShare:</span> Link to a site for viewing and sharing PowerPoint presentations, Word documents, or Adobe PDF Portfolios</li>
                  <li><span class="bold">YouTube:</span> Link to a site for viewing and sharing online videos</li>
                </ul>

                <ol>
                  <li>Change Edit Mode to ON.</li>
                  <li>Access a content area, learning module, lesson plan, or folder.</li>
                  <li>On the action bar, point to Build Content to access the drop-down list and select Item.
                    <img src="../assets/images/instructors/cool_tools/mashups/03.png" alt"" />
                  </li>
                  <li>On the Create Item page, type a Name for the item.</li>
                  <li>The Text box allows you to type instructions or a description and add the appropriate mashups. </li>
                  <li>Submit once you have made changes to the item.
                    <img src="../assets/images/instructors/cool_tools/mashups/06.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Mashups Modal -->
            </div>
            <!-- END OF MASHUPS -->

            <!-- ADDING IMAGES/AUDIO & WEB LINKS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="adding_images_audio_links"><img src="../assets/images/instructors/cool_tools/adding_images_audio_links/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="adding_images_audio_links">Adding Images/Audio &amp; Web Links</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Adding Images/Audio & Web Links Modal -->
              <div id="adding_images_audio_links" class="reveal-modal" data-reveal>
                <h2>Adding Images/Audio &amp; Web Links</h2>
                <div class="downloads">
                  <p><a href="#adding_images_audio_links_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/cool_tools/adding_images_audio_links/adding_images_audio_links.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>Make sure the Edit Mode is turned ON.</li>
                  <li>
                    Go to the Content Area where you want to add the image, audio/video, or web link.
                    Follow Humber's copyright guidelines (<a href="http://library.humber.ca/copyright" title="Humber's copyright guidelines" target="_blank">http://library.humber.ca/copyright</a>) when choosing and citing this content. </li>
                    <li>From the Menu Bar, Select Build Content and choose either Audio, Image, Video, or Web Link.
                      <img src="../assets/images/instructors/cool_tools/adding_images_audio_links/a03.png" alt"" />
                    </li>
                  </ol>

                  <h2>Audio</h2>
                  <ol>
                    <li>If Audio is selected, provide a name for the audio on the Create Audio page. Browse either the computer or course for the audio file you want to upload.</li>
                    <li>Edit any of the Audio/Standard Options if necessary and click submit.
                      <img src="../assets/images/instructors/cool_tools/adding_images_audio_links/b02.png" alt"" />
                    </li>
                  </ol>

                  <h2>Image</h2>
                  <ol>
                    <li>If Image is selected, provide a name for the image on the Create Image page. Browse the computer, course, or Mashups for the image file you want to upload.</li>
                    <li>Edit any of the Image/Standard Options if necessary and click submit.
                      <img src="../assets/images/instructors/cool_tools/adding_images_audio_links/c02.png" alt"" />
                    </li>
                  </ol>

                  <h2>Web Link</h2>
                  <ol>
                    <li>If Web Link is selected, provide a name for the link on the Create Web Link page, and type in the URL just below it. </li>
                    <li>Edit any of the Web Link/Standard Options if necessary and click submit.
                      <img src="../assets/images/instructors/cool_tools/adding_images_audio_links/d02.png" alt"" />
                    </li>
                  </ol>

                  <h3 id="adding_images_audio_links_vid">Video Help</h3>
                  <div class="row">
                    <div class="large-10 large-centered small-12 columns">
                      <div class="flex-video-embedded">
                        <iframe width="450" height="400" src="//www.youtube.com/embed/3UqWCilfjew?rel=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Adding Images/Audio & Web Links Modal -->
              </div>
              <!-- END OF ADDING IMAGES/AUDIO & WEB LINKS -->
              
              <!-- POLL EVERYWHERE -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="poll_everywhere"><img src="../assets/images/instructors/cool_tools/poll_everywhere/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="poll_everywhere">Embed Poll Everywhere in Blackboard</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Poll Everywhere Modal -->
                <div id="poll_everywhere" class="reveal-modal" data-reveal>
                  <h2>Embed Poll Everywhere in Blackboard</h2>
                  <hr>

                  <p>To embed a poll from Poll Everywhere within Blackboard:</p>

                  <ol>
                    <li>Go to the <span class="bold">Share and Publish</span> menu to the left side of the poll.</li>
                    <li>Select the option for Blog or WebPage.</li>
                    <li>Copy the resulting Embed Code.</li>
                    <li>Login to your Blackboard course.</li>
                    <li>Select a Content Area where you would like to embed the poll.</li>
                    <li>From Build Content menu, select Add Item.</li>
                    <li>Give the item a Name.</li>
                    <li>Add some text in the Text Box explaining what you want the students to do and why.</li>
                    <li>Click on the HTML editor button [&lt;&gt;] in the text editor menu.</li>
                    <li>Below the text you typed in 8 above, paste the Embed Code.</li>
                    <li>Click Save/Submit to add it to your course.</li>
                  </ol>
                  
                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Poll Everywhere Modal -->
              </div>
              <!-- END OF POLL EVERYWHERE -->

              <!-- INSERTING A YOUTUBE VIDEO TO BLACKBOARD -->
              <div class="large-4 medium-4 small-6 columns end">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="inserting_a_youtube_video_to_blackboard"><img src="../assets/images/instructors/cool_tools/inserting_a_youtube_video_to_blackboard/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="inserting_a_youtube_video_to_blackboard">Inserting a YouTube Video to Blackboard</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Inserting a YouTube Video to Blackboard Modal -->
                <div id="inserting_a_youtube_video_to_blackboard" class="reveal-modal" data-reveal>
                  <h2>Inserting a YouTube Video to Blackboard</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/cool_tools/inserting_a_youtube_video_to_blackboard/inserting_a_youtube_video_to_blackboard.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Go to the Content Area you wish to insert a video from YouTube.</li>
                    <li>Under Build Content, click on <span class="bold">YouTube Video</span>.
                      <img src="../assets/images/instructors/cool_tools/inserting_a_youtube_video_to_blackboard/02.png" alt"" />
                    </li>
                    <li>Enter the video description in the search bar. Click “Go” to start searching.
                      <img src="../assets/images/instructors/cool_tools/inserting_a_youtube_video_to_blackboard/03.png" alt"" />
                    </li>
                    <li>A list of videos will appear. Select your desired video by clicking on “select”.
                      <img src="../assets/images/instructors/cool_tools/inserting_a_youtube_video_to_blackboard/04.png" alt"" />
                    </li>
                    <li>Finalize the display options and submit when finished.
                      <img src="../assets/images/instructors/cool_tools/inserting_a_youtube_video_to_blackboard/05.png" alt"" />
                    </li>
                    <li>The video is now playable directly in Blackboard.</li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Inserting a YouTube Video to Blackboard Modal -->
              </div>
              <!-- END OF INSERTING A YOUTUBE VIDEO TO BLACKBOARD -->
              
              
              
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
