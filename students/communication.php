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
          <h1>Students - Communication</h1>

          <div class="row">

            <!-- VIRTUAL CLASSROOM/BB COLLABORATE -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="virtual_classroom_bb_collaborate"><img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="virtual_classroom_bb_collaborate">Virtual Classroom/BB Collaborate</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Virtual Classroom/BB Collaborate Modal -->
              <div id="virtual_classroom_bb_collaborate" class="reveal-modal" data-reveal>
                <h2>How to Access a Virtual Classroom/BB Collaborate</h2>
                
             <div class="downloads">
                 <p><a href="../assets/_source/students/communication/virtual_classroom_bb_collaborate/virtual_classroom_bb_collaborate.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>
                
                <hr>

                <p>
                  The Chat tool allows you to interact with other users using a text-based chat. Chat is part of the Virtual Classroom. It can also be accessed separately. Some of the functions in the Chat are limited to those users with an active role.<br />
                  <span class="bold">Please note that your instructor controls which tools are available. If this tool is not available, your instructor may have disabled it.</span>
                </p>

                <h2>How to Join a Virtual Class Room</h2>
                <ol>
                  <li>On the Course Menu under Course Tools click on Virtual Classroom (Blackboard Collaborate) or as advised by your instructor.
                    <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/a01.png" alt"" />
                  </li>
                  <li>On the Blackboard Collaborate page, click on the title of a session (as advised by your instructor).
                    <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/a02-1.png" alt"" />
                  </li>
                  <li>If this is the first time you are joining a webinar, you will need to download and install "Blackboard Collaborate Launcher" on your computer.  Click on download the "Blackboard Collaborate Launcher" link as shown below and install it on your computer.
                  <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/a03.png" alt"" />
                  </li>
                  <li>After installing Collaborate launcher, click on <span class="bold">Join Room</span> button
                  <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/a04.png" alt"" />
                  </li>
                  <li>You will be prompted to open or save the "meeting.collab" file (if using Internet Explorer).  In other browsers such as Google Chrome or Firefox, the "meeting.collab" file may automatically download to your computer. 
                  <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/a05.png" alt"" />
                  </li>
                  <li>Open or run the "meeting.collab" file from the previous step to join the Blackboard Collaborate chat/webinar.
                  </li>
                  
                  <li>Click on the <span class="bold">Accept</span> button if you see the Collaborate Participant Agreement as shown below:
                  <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/a07.png" alt"" />
                  </li>
                  
                  <li>Choose your Internet connection speed in the next prompt.
                  <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/a08.png" alt"" />
                  </li>
                  
                  <li>You will now join the Virtual Classroom/Chat for your course.</li>
                  
                </ol>

                <h2>How to Send a Chat Message in Blackboard Collaborate</h2>
                <ol>
                  <li>In the Chat panel at the bottom left corner, type your message and press Enter key on your keyboard.</li>
                  <img src="../assets/images/students/communication/virtual_classroom_bb_collaborate/b01.png" alt"" />
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Virtual Classroom/BB Collaborate Modal -->
            </div>
            <!-- END OF VIRTUAL CLASSROOM/BB COLLABORATE -->

            <!-- DISCUSSION FORUM -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="discussion_forum"><img src="../assets/images/students/communication/discussion_forum/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="discussion_forum">Discussion Forum</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Discussion Forum Modal -->
              <div id="discussion_forum" class="reveal-modal" data-reveal>
                <h2>How to Post a Message on a Discussions Forum</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/communication/discussion_forum/discussion_forum.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>The Discussion Board is a tool for sharing thoughts and ideas about class materials. On your home page; click on the course that you want to post a message.
                    <img src="../assets/images/students/communication/discussion_forum/01.png" alt"" />
                  </li>
                  <li>From the Course Menu under Course tools click  Discussion Board.
                    <img src="../assets/images/students/communication/discussion_forum/02.png" alt"" />
                  </li>
                  <li>Click on a desired Forum title. A forum is a way to organize discussion into topics. Within each Forum, users can create multiple threads. A thread includes the initial post and any replies to it. Some Discussion Forums can be graded and some are moderated by your instructors (Moderated posts must be approved by your instructor before you can publish it to your class).
                    <img src="../assets/images/students/communication/discussion_forum/03.png" alt"" />
                  </li>
                  <li>Once you click on a Forum, click on Create Thread.
                    <img src="../assets/images/students/communication/discussion_forum/04.png" alt"" />
                  </li>
                  <li>On the Create Thread page, type a Subject.</li>
                  <li>In the Message text box, type your reply. You can use the content editor functions to format the text and add files, images, web links, multimedia, and mashups.</li>
                  <li>You have the option to add an attachment and can do this by clicking on the Attachments and browse your computer for the file. You can attach multiple files. After you add one file, the option to attach another file appears.</li>
                  <li>Click Submit to create the thread.
                    <img src="../assets/images/students/communication/discussion_forum/08.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Discussion Forum Modal -->
            </div>
            <!-- END OF DISCUSSION FORUM -->

            <!-- COURSE MESSAGES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="course_messages"><img src="../assets/images/students/communication/course_messages/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="course_messages">Course Messages</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Course Messages Modal -->
              <div id="course_messages" class="reveal-modal" data-reveal>
                <h2>How to Send a Message Using Course Messages</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/communication/course_messages/course_messages.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>On the <span class="bold">Course Menu</span> under <span class="bold">Course Tools</span> select Course Messages.
                    <img src="../assets/images/students/communication/course_messages/01.png" alt"" />
                  </li>
                  <li>On the Course Messages page, click <span class="bold">Create Message</span>.
                    <img src="../assets/images/students/communication/course_messages/02.png" alt"" />
                  </li>
                  <li>On the Compose Message page, click <span class="bold">To</span>. A list of course members appears.</li>
                  <li>In the <span class="bold">Select Recipients</span>, select the recipients in the box and click the right-pointing arrow to move them into the <span class="bold">Recipient</span> box. A back arrow is available to move a user out of the recipient list.</li>
                  <li>You can use the Cc, and Bcc functions to send the course message to those users that may be interested in the message, but are not the primary recipients. When using Bcc, other recipients do not know that the users listed in the Bcc field are receiving the message.
                    <img src="../assets/images/students/communication/course_messages/05.png" alt"" />
                  </li>
                  <li>Type a message. Optionally, you can use the content editor to format the Body text.
                    <img src="../assets/images/students/communication/course_messages/06.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Browse</span> to select a file to attach to the message. If the message is a reply or a forward, you have the option of including the original attachment.</li>
                  <li>Click <span class="bold">Submit</span>. Remember course messages can only be viewed inside the course.</li>
                </ol>
                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Course Messages Modal -->
            </div>
            <!-- END OF COURSE MESSAGES -->

            <!-- ANNOUNCEMENTS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="announcements"><img src="../assets/images/students/communication/announcements/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="announcements">Announcements</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Announcements Modal -->
              <div id="announcements" class="reveal-modal" data-reveal>
                <h2>How to Check Announcements</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/communication/announcements/announcements.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>There are two ways to view your announcements:</p>
                <ol>
                  <li>On the Tools panel on your home page, click Announcements to view all announcements from all of your courses.
                    <img src="../assets/images/students/communication/announcements/01.png" alt"" />
                  </li>
                  <li>Click on your course, and click on Announcement on the course menu. This will allow you to view the announcement from course selected.
                    <img src="../assets/images/students/communication/announcements/02.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Announcements Modal -->
            </div>
            <!-- END OF ANNOUNCEMENTS -->

            <!-- NOTIFICATION FOR COURSE MESSAGES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="email"><img src="../assets/images/students/communication/email/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="email">Notification for Course Messages</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Notification for Course Messages Modal -->
              <div id="email" class="reveal-modal" data-reveal>
                <h2>Notification for Course Messages</h2>
                <hr/>

                <p>You can manage the notification settings for all of the courses you are enrolled in. From the global navigation menu, select <span class="bold">Settings</span> and then select <span class="bold">Edit Notifications Settings</span>.</p>

                <h2>How to Turn Notifications On and Off for Course Messages</h2>
                <p>You can select which notification types you receive and the methods used to deliver them to you.</p>
                <ol>
                  <li>From the global navigation menu, select <span class="bold">Settings</span> and then select <span class="bold">Edit Notification Settings</span>
                    <img src="../assets/images/students/communication/email/01.png" alt"" />
                  </li>
                  <li>On the <span class="bold">Edit Notification Settings</span> page, select the link for <span class="bold">Courses I am taking</span> to change notification settings for all courses at once
                    <img src="../assets/images/students/communication/email/02.png" alt"" />
                  </li>
                  <li>Under <span class="bold">Settings</span>, select how your notifications are delivered by selecting the check box for <span class="bold">Course Messages Received</span>
                    <ul>
                      <li><span class="bold">Dashboard</span> - Course Message notification would appear in the Global Navigation Menu in the Updates tool</li>
                      <li><span class="bold">Email</span> - email notification messages are sent to the email address you provided in your personal information</li>
                    </ul>
                    <img src="../assets/images/students/communication/email/03.png" alt"" />
                  </li>
                  <li>Finally, click <span class="bold">Submit</span> to proceed.</li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Notification for Course Messages Modal -->
            </div>
            <!-- END OF NOTIFICATION FOR COURSE MESSAGES -->

            <!-- HOW TO CONTACT YOUR PROFESSOR -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="how_to_contact_your_professor"><img src="../assets/images/students/communication/how_to_contact_your_professor/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="how_to_contact_your_professor">How to Contact Your Professor</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- How to Contact Your Professor Modal -->
              <div id="how_to_contact_your_professor" class="reveal-modal" data-reveal>
                <h2>How to Contact Your Professor</h2>
                <hr />

                <p>You need to communicate to your professors several times during the semester. There are some ways that you can contact your professors.</p>
                <ul>
                  <li>Send personal email</li>
                  <li>Communicate through blogs, journal or course message</li>
                </ul>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of How to Contact Your Professor Modal -->
            </div>
            <!-- END OF HOW TO CONTACT YOUR PROFESSOR -->

            <!-- ADDING CALENDAR EVENTS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="adding_calendar_events"><img src="../assets/images/students/communication/adding_calendar_events/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="adding_calendar_events">Adding Calendar Events</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Adding Calendar Events Modal -->
              <div id="adding_calendar_events" class="reveal-modal" data-reveal>
                <h2>Adding Calendar Events</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/communication/adding_calendar_events/adding_calendar_events.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>Click on the <span class="bold">Calendar </span>on the left sidebar.
                    <img src="../assets/images/students/communication/adding_calendar_events/01.png" alt"" />
                  </li>
                  <li>To add a new event, click on a date in the interactive calendar.</li>
                  <li>Provide an Event Name, Date Period, and Time Period, as well as an Event Description if necessary. <span class="bold">All Day</span> refers to an all-day event and <span class="bold">Repeat</span> will repeat the event on your calendar however many times you specify. </li>
                  <li>To finalize, click <span class="bold">Save</span>
                    <img src="../assets/images/students/communication/adding_calendar_events/04.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Adding Calendar Events Modal -->
            </div>
            <!-- END OF ADDING CALENDAR EVENTS -->

            <!-- JOINING GROUPS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="joining_groups"><img src="../assets/images/students/communication/joining_groups/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="joining_groups">Joining Groups</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Joining Groups Modal -->
              <div id="joining_groups" class="reveal-modal" data-reveal>
                <h2>Joining Groups</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/communication/joining_groups/joining_groups.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>Click on <span class="bold">Groups</span> on the left sidebar.
                    <img src="../assets/images/students/communication/joining_groups/01.png" alt"" />
                  </li>
                  <li>From the list of groups, pick the group you wish to join and click <span class="bold">Sign Up</span>.
                    <img src="../assets/images/students/communication/joining_groups/02.png" alt"" />
                  </li>
                  <li>Users are able to view current members in the group as well as the maximum amount of members allowed. Click <span class="bold">Sign Up</span> to join the group.
                    <img src="../assets/images/students/communication/joining_groups/03.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Joining Groups Modal -->
            </div>
            <!-- END OF JOINING GROUPS -->

            <!-- FILE SHARING -->
            <div class="large-4 medium-4 small-6 columns end">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="file_sharing"><img src="../assets/images/students/communication/file_sharing/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="file_sharing">File Sharing</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- File Sharing Modal -->
              <div id="file_sharing" class="reveal-modal" data-reveal>
                <h2>File Sharing</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/students/communication/file_sharing/file_sharing.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <div class="spacer"></div>

                <p>Students can exchange files between group members if the instructor has granted access to this tool.</p>

                <ol>
                  <li>Find your group name under <span class="bold">My Groups</span>.
                    <img src="../assets/images/students/communication/file_sharing/01.png" alt"" />
                  </li>
                  <li>Click your <span class="bold">group name</span> for more options. Click <span class="bold">File Exchange</span>
                    <img src="../assets/images/students/communication/file_sharing/02.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Add File</span> on the action bar. <img style="display:inline;" src="../assets/images/students/communication/file_sharing/03.png" alt"" /></li>
                  <li>Under <span class="bold">Name</span>, enter the name of the file that you wish to exchange. Click <span class="bold">Browse My Computer</span> to find the file.</li>
                  <li>Click <span class="bold">Submit</span>.
                    <img src="../assets/images/students/communication/file_sharing/05.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/student-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of File Sharing Modal -->
            </div>
            <!-- END OF FILE SHARING -->

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
