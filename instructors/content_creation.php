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
          <h1>Instructors - Content Creation</h1>

          <div class="row">

            <!-- ADD A FILE -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="add_file"><img src="../assets/images/instructors/content_creation/add_file/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="add_file">Add a File</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Add a File Modal -->
              <div id="add_file" class="reveal-modal" data-reveal>
                <h2>Add a File</h2>
                <div class="downloads">
                  <p><a href="#add_file_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/content_creation/add_file/add_file.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>To Add a File to a Module or Content Area:</p>

                <ol>
                  <li>Make sure the <span class="bold">Edit Mode</span> is turned <span class="bold">ON</span>.</li>
                  <li>Go to the Module page or Content Area where you want to add the file.</li>
                  <li>From the Menu Bar, Select <span class="bold">Build Content</span> and choose <span class="bold">File</span>.Provide a name for the File.</li>
                  <li>Provide a name for the File.</li>
                  <li>Edit any of the Standard Option if necessary or applicable.</li>
                  <li>Click <span class="bold">Submit</span>.</li>
                </ol>

                <h3 id="add_file_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/e2eq9FPsTMk?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Add a File Modal -->
            </div>
            <!-- END OF ADD A FILE -->

            <!-- ADD A CONTENT FOLDER -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="add_content_folder"><img src="../assets/images/instructors/content_creation/add_content_folder/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="add_content_folder">Add a Content Folder</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Add a Content Folder Modal -->
              <div id="add_content_folder" class="reveal-modal" data-reveal>
                <h2>Add a Content Folder</h2>
                <div class="downloads">
                  <p><a href="#add_content_folder_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/content_creation/add_content_folder/add_content_folder.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>Make sure the <span class="bold">Edit Mode</span> is turned <span class="bold">ON</span>.</li>
                  <li>Navigate to the content area where you want to add a Content folder.</li>
                  <li>From the action menu, choose Build Content and then Content Folder.
                    <img src="../assets/images/instructors/content_creation/add_content_folder/03.png" alt"" />
                  </li>
                  <li>Type a name for the Content Folder.</li>
                  <li>Edit any of the Standard Options if necessary or applicable.</li>
                  <li>Click Submit.</li>
                  <li>Click on the name of the Content Folder to access it and being adding materials within it.</li>
                </ol>

                <h3 id="add_content_folder_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/g5ndxs_VOhQ?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Add a Content Folder Modal -->
            </div>
            <!-- END OF ADD A CONTENT FOLDER -->

            <!-- COPYRIGHT GUIDELINES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="copyright_guidelines"><img src="../assets/images/instructors/content_creation/copyright_guidelines/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="copyright_guidelines">Copyright Guidelines</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Copyright Guidelines Modal -->
              <div id="copyright_guidelines" class="reveal-modal" data-reveal>
                <h2>Copyright Guidelines</h2>
                <hr />

                <p>Copyright is the exclusive legal right given to a creator to reproduce, publish, sell or distribute his/her work. All members of the Humber community are <span class="bold">required</span> to comply with Canadian copyright law which governs the reproduction, use and distribution of copyrighted materials. This means that the copying, use and distribution of copyright- protected materials, regardless of format, is subject to certain limits and restrictions. For example, photocopying or scanning an entire textbook is not allowed, nor is distributing a scanned book.</p>
                <p>See the Humber Library copyright website (<a href="http://library.humber.ca/copyright" title="Humber Library copyright website" target="_blank">http://library.humber.ca/copyright</a>) for additional information regarding copyright and for details on allowable limits.</p>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Copyright Guidelines Modal -->
            </div>
            <!-- END OF COPYRIGHT GUIDELINES -->

            <!-- BUILD A DISCUSSION FORUM -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="build_discussion_forum"><img src="../assets/images/instructors/content_creation/build_discussion_forum/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="build_discussion_forum">Build a Discussion Forum</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Build a Discussion Forum Modal -->
              <div id="build_discussion_forum" class="reveal-modal" data-reveal>
                <h2>Build a Discussion Forum</h2>
                <div class="downloads">
                  <p><a href="#build_discussion_forum_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/content_creation/build_discussion_forum/build_discussion_forum.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>On the Course Menu under Course Tools click <span class="bold">Discussion Board</span>.
                    <img src="../assets/images/instructors/content_creation/build_discussion_forum/01.jpg" alt"" />
                  </li>
                  <li>On the Discussion Board page, click Create Forum on the action bar.
                    <img src="../assets/images/instructors/content_creation/build_discussion_forum/02.jpg" alt"" />
                  </li>
                  <li>On the Create Forum page, type a Name. Choose a descriptive and unique name because users click this name to access the forum.</li>
                  <li>Optionally, type instructions or a description in the Description box.</li>
                  <li>In the Forum Availability section, select Yes to make the forum available to users. You can create forums ahead of time and set the availability to No until the discussion is ready to start.</li>
                  <li>For Enter Date and Time Restrictions, you can set forums to display on a specific date and time and to stop displaying on a specific date and time.</li>
                  <li>Select the Display After and Display Until check boxes to enable the date and time selections. Use the pop-up Date Selection Calendar and Time Selection Menu to select dates and times or type dates and times in the boxes. Display restrictions do not affect the forum availability, only when it appears.</li>
                  <li>Select the Forum Settings based on your specific needs. </li>
                  <li>Click Submit.</li>
                </ol>

                <h3 id="build_discussion_forum_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/9rmiwbMo9os?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Build a Discussion Forum Modal -->
            </div>
            <!-- END OF BUILD A DISCUSSION FORUM -->

            <!-- ORGANIZE CONTENT -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="organize_content"><img src="../assets/images/instructors/content_creation/organize_content/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="organize_content">Organize Content</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Organize Content Modal -->
              <div id="organize_content" class="reveal-modal" data-reveal>
                <h2>Organize Content</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/content_creation/organize_content/organize_content.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <h2>Hide / Show Content</h2>
                <p>The instructions below will show you how to hide or show content course menu and content areas.</p>

                <h2>Hide Content Area</h2>
                <p>If you would like to hide an entire course menu item, and all the content items and tools within it:</p>
                <ul>
                  <li>Ensure that <span class="bold">Edit Mode</span> is <span class="bold">on</span>.</li>
                  <li>Click the <span class="bold">Option Menu</span> next to the <span class="bold">Content Area/Course Menu</span> item you want to hide.</li>
                  <li>Press <span class="bold">Hide Link</span>.
                    <img src="../assets/images/instructors/content_creation/organize_content/b03.png" alt"" />
                  </li>
                  <li>Blackboard Learn will then add a <span class="bold">slashed through square</span> icon to indicate the course menu item is hidden from student view.</li>
                </ul>

                <h2>Show Content Area</h2>
                <p>If you would like to show a course menu item that has previously been hidden:</p>
                <ul>
                  <li>Make sure that <span class="bold">Edit Mode</span> is <span class="bold">on</span>.</li>
                  <li>Click the <span class="bold">Option Menu</span> next to the <span class="bold">Content Area/Course Menu</span> item you want to show.</li>
                  <li>Press <span class="bold">Show Link</span>.
                    <img src="../assets/images/instructors/content_creation/organize_content/c03.png" alt"" />
                  </li>
                </ul>

                <h2>Reorder Content</h2>
                <p>Use the <span class="bold">action bar</span> to the left of any content within a Content Folder/Area to <span class="bold">drag and drop</span> the item up or down the page.</p>
                <img src="../assets/images/instructors/content_creation/organize_content/d01.png" alt"" />

                <h2>Reorder Course Menu</h2>
                <p>Click and drag the double headed <span class="bold">arrow</span> to the left of the course menu item to reorder the navigation.</p>
                <p><span class="bold">CAUTION</span> when <span class="bold">DELETING</span> Keep in mind, when you delete a course menu item. If it's a "Content Area" then you are also deleting the content contained within the area.</p>
                <img src="../assets/images/instructors/content_creation/organize_content/e01.png" alt"" />


                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Organize Content Modal -->
            </div>
            <!-- END OF ORGANIZE CONTENT -->

            <!-- ADD AN ITEM -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="add_item"><img src="../assets/images/instructors/content_creation/add_item/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="add_item">Add an Item</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Add an Item Modal -->
              <div id="add_item" class="reveal-modal" data-reveal>
                <h2>Add an Item</h2>
                <div class="downloads">
                  <p><a href="#add_item_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/content_creation/add_item/add_item.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>To Add an Item to a Module or Content Area:</p>
                <ol>
                  <li>Make sure the <span class="bold">Edit Mode</span> is turned <span class="bold">ON</span>.
                    <img src="../assets/images/instructors/content_creation/add_item/01.png" alt"" />
                  </li>
                  <li>Go to the Module page or Content Area where you want to add the item.</li>
                  <li>From the Menu Bar, Select <span class="bold">Build Content</span> and choose <span class="bold">Item</span>.</li>
                  <li>Provide a name for the Item.</li>
                  <li>Type or copy and paste the content into the editor. Click the arrow to expand or compress the editing options.
                    <img src="../assets/images/instructors/content_creation/add_item/05-1.png" alt"" />
                    <img src="../assets/images/instructors/content_creation/add_item/05-2.png" alt"" />
                  </li>
                  <li>Add any attachments and edit any of the Standard Options if necessary or applicable.</li>
                  <li>Click <span class="bold">Submit</span>.</li>
                </ol>

                <h3 id="add_item_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/aMBAhV7rn5w?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Add an Item Modal -->
            </div>
            <!-- END OF ADD AN ITEM -->

            <!-- ADD A MODULE -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="add_module"><img src="../assets/images/instructors/content_creation/add_module/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="add_module">Add a Module</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Add a Module Modal -->
              <div id="add_module" class="reveal-modal" data-reveal>
                <h2>Add a Module</h2>
                <div class="downloads">
                  <p><a href="#add_module_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/content_creation/add_module/add_module.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>Make sure the <span class="bold">Edit Mode</span> is turned <span class="bold">ON</span>.</li>
                  <li>Go to the Content Area where you want to add the module.</li>
                  <li>From the Menu Bar, Select <span class="bold">Build Content</span> and choose <span class="bold">Learning Module</span>.
                    <img src="../assets/images/instructors/content_creation/add_module/03.png" alt"" />
                  </li>
                  <li>Provide a name for the Learning Module. </li>
                  <li>Edit any of the Learning Module options or Standard Options if necessary or applicable.</li>
                  <li>To show a structured view of the Learning Module, select Yes under the Table of Contents option. </li>
                  <li>Click <span class="bold">Submit</span>.</li>
                </ol>

                <h3 id="add_module_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/2geUZSnqQds?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Add a Module Modal -->
            </div>
            <!-- END OF ADD A MODULE -->

            <!-- CREATE & MANAGE GROUPS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="create_manage_groups"><img src="../assets/images/instructors/content_creation/create_manage_groups/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="create_manage_groups">Create &amp; Manage Groups</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Create & Manage Groups Modal -->
              <div id="create_manage_groups" class="reveal-modal" data-reveal>
                <h2>Create &amp; Manage Groups</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/content_creation/create_manage_groups/create_manage_groups.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>You can create formal groups of students to collaborate on work, and create these groups one at a time or in sets. You can manually select group members or allow students to self-enroll. Each group has its own space, or homepage, with links to tools to help students collaborate. Only you and group members can access the group tools.<br />
                  Two group creation options:</p>
                  <ul>
                    <li>Create a single group</li>
                    <li>Create a Group Set</li>
                  </ul>

                  <h2>About Group Enrollment Methods</h2>
                  <p>
                    <span class="bold">Self-Enroll</span> allows students to add themselves to a group using a <span class="bold">sign-up sheet.</span></br>
                    <span class="bold">Manual Enroll</span> allows you to assign each student in your course to a group. Manual enrollment is available for both single groups and group sets.</br>
                    <span class="bold">Random Enroll</span> is available for group sets only and automatically distributes membership into groups based on a designated number of students per group or the designated number of groups. Random distribution applies only to students who are currently enrolled in your course. You can enroll additional students manually.
                  </p>

                  <h2>Accessing Groups</h2>
                  <p>On the Control Panel, expand the Users and Groups section and select <span class="bold">Groups.</span></p>
                  <img src="../assets/images/instructors/content_creation/create_manage_groups/b01.png" alt"" />

                  <h2>How to Create a Single Group</h2>
                  <ol>
                    <li>Access the Groups listing page and point to Create <span class="bold">Single Group</span> on the action bar to access the drop-down list.</li>
                    <li>Select Self-Enroll or Manual Enroll.
                      <img src="../assets/images/instructors/content_creation/create_manage_groups/c02.png" alt"" />
                    </li>
                    <li>On the Create Group page, type a <span class="bold">Name</span> and <span class="bold">optional Description</span>.</li>
                    <li>Select the <span class="bold">Yes</span> option to make the Group <span class="bold">Available</span>. If you <span class="bold">do not</span> want the group to be <span class="bold">available</span> at this time, select <span class="bold">No</span>.</li>
                    <li>Select the <span class="bold">check boxes</span> for the course tools you want to make available to the group.</li>
                    <li>Select the Grade option and type Points possible for Blogs, Journals, and Wikis, if you want to grade student submissions.</li>
                    <li>Select the check box for Allow Personalization to allow students to add personal modules to the group homepage. Only the group member who added the modules can view them.</li>
                    <li>For <span class="bold">self-enroll Sign-up options</span>, type the <span class="bold">Name of Sign-up Sheet</span>. Type the Maximum Number of Members. Select any other Sign-up options you want to include.<br />
                      <span class="text-center">-OR-</span><br />
                      For <span class="bold">manual enroll</span> Membership section, select the students from the Items to Select box and click the right-pointing arrow to add the selected names to the Selected Items box.
                    </li>
                    <li>Click <span class="bold">Submit</span>.
                      <img src="../assets/images/instructors/content_creation/create_manage_groups/c09.png" alt"" />
                    </li>
                  </ol>

                  <h2>How to Create a Group Set</h2>
                  <ol>
                    <li>Access the Groups listing page and point to Create Group Set on the action bar to access the drop-down list.</li>
                    <li>Select <span class="bold">Self-Enroll, Manual Enroll,</span> or <span class="bold">Random Enroll.</span></li>
                    <li>On the Create Random Enrollment Group Set page, type a Name and optional Description.</li>
                    <li>Select the <span class="bold">Yes</span> option to make the Group <span class="bold">Available</span>. If you <span class="bold">do not</span> want the group set to be <span class="bold">available</span> at the present time, select <span class="bold">No</span>.</li>
                    <li>Select the check boxes for course tools you want to make available to the group set.</li>
                    <li>Select the <span class="bold">Grade option</span> and type Points possible for <span class="bold">Blogs, Journals,</span> and <span class="bold">Wikis,</span> if you want to grade student submissions.</li>
                    <li>Select the check box for Allow Personalization to allow individual group members to add personal modules to the group homepage. Only the group member who added the modules can view them. </li>
                    <li>For self-enroll Sign-up options, type the Name of Sign-up Sheet. Type the Maximum Number of Members. Select any other Sign-up options you want to include.
                      <span class="text-center">OR</span>
                      For manual enroll Group Set Options section, type the Number of Groups to create.
                      <span class="text-center">OR</span>
                      For random enroll Membership section, type the Number of Students per Group to create or the Number of Groups. Select an option to Determine How to enroll any Remaining Members in the groups.
                    </li>
                    <li>Click <span class="bold">Submit</span>.</li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Create & Manage Groups Modal -->
              </div>
              <!-- END OF CREATE & MANAGE GROUPS -->

              <!-- ANNOUNCEMENTS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="announcements"><img src="../assets/images/instructors/content_creation/announcements/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="announcements">Announcements</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Announcements Modal -->
                <div id="announcements" class="reveal-modal" data-reveal>
                  <h2>Announcements</h2>
                  <div class="downloads">
                    <p><a href="#announcements_vid"><span class="icon-video"></span> Video</a></p>
                    <p><a href="../assets/_source/instructors/content_creation/announcements/announcements.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Make sure the Edit Mode is ON.</li>
                    <li>In the Course Menu, click <span class="bold">Announcements</span>. From the action bar, <span class="bold">Create Announcement</span>.
                      <img src="../assets/images/instructors/content_creation/announcements/a02.jpg" alt"" />
                    </li>
                    <li>Provide a Subject and Message.</li>
                    <li>Set the Duration.</li>
                    <li>Set Date Restricted if necessary.</li>
                    <li>Check box to send students an email containing the announcement if you desire.</li>
                    <li>Optionally, link to a course area, tool, or item using the Browse button.</li>
                    <li>Click Submit</li>
                  </ol>

                  <h2>How to Edit or Delete Announcements</h2>

                  <ol>
                    <li>Hover over the announcement you want to edit or delete. Slect the drop-down arrow and choose edit or delete.
                      <img src="../assets/images/instructors/content_creation/announcements/b01.jpg" alt"" />
                    </li>
                  </ol>

                  <h2>How to Reorder Announcements</h2>
                  <p>Announcements appear below the movable bar in the order posted, with the most recent announcement appearing first.</p>

                  <ol>
                    <li>Select the announcement and drag it up or down.</li>
                    <li>To move an announcement to the top of a list permanently, select the announcement and drag it above the movable reading line.</li>
                  </ol>

                  <h3 id="announcements_vid">Video Help</h3>
                  <div class="row">
                    <div class="large-10 large-centered small-12 columns">
                      <div class="flex-video-embedded">
                        <iframe width="450" height="400" src="//www.youtube.com/embed/2w1JTXm2SHg?rel=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Announcements Modal -->
              </div>
              <!-- END OF ANNOUNCEMENTS -->

              <!-- CREATING A TOOL LINK -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="creating_a_tool_link"><img src="../assets/images/instructors/content_creation/creating_a_tool_link/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="creating_a_tool_link">Creating a Tool Link</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Creating a Tool Link Modal -->
                <div id="creating_a_tool_link" class="reveal-modal" data-reveal>
                  <h2>Creating a Tool Link</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/content_creation/creating_a_tool_link/creating_a_tool_link.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>To create a tool link:</p>

                  <div class="medium-6 columns">
                    <ol>
                      <li>Click the <span class="bold">‘+’</span> sign on the top left hand side of the page.</li>
                      <li>Click <span class="bold">Tool Link</span></li>
                      <li>Under <span class="bold">Name</span>, type in the name of the tool</li>
                      <li>Under <span class="bold">Type</span>, click the drop down menu to select the type of tool that you wish to make available.
                        <img src="../assets/images/instructors/content_creation/creating_a_tool_link/03.png" alt"" />
                      </li>
                    </ol>
                  </div>
                  <div class="medium-6 columns">
                    <img src="../assets/images/instructors/content_creation/creating_a_tool_link/01.png" alt"" />
                  </div>

                  <div class="clearfix"></div>

                  <ol start="5">
                    <li>Once you have selected the type of tool, check the box beside <span class="bold">Available to Users</span> in order to make it visible for your students.  Click <span class="bold">Submit</span>.
                      <img src="../assets/images/instructors/content_creation/creating_a_tool_link/05.png" alt"" />
                    </li>
                    <li>Drag the link up to the appropriate location.</li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Creating a Tool Link Modal -->
              </div>
              <!-- END OF CREATING A TOOL LINK -->

              <!-- CREATING RUBRICS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="creating_rubrics"><img src="../assets/images/instructors/content_creation/creating_rubrics/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="creating_rubrics">Creating Rubrics</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Creating Rubrics Modal -->
                <div id="creating_rubrics" class="reveal-modal" data-reveal>
                  <h2>Creating Rubrics</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/content_creation/creating_rubrics/creating_rubrics.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Under the <span class="bold">Control Panel</span>, click on <span class="bold">Course Tools</span>, and then <span class="bold">Rubrics</span>.
                      <img src="../assets/images/instructors/content_creation/creating_rubrics/01.png" alt"" />
                    </li>
                    <li>Click on <span class="bold">“Create Rubric”</span></li>
                    <li>Provide a Name for the rubric. A description is not necessary.
                      <img src="../assets/images/instructors/content_creation/creating_rubrics/03.png" alt"" />
                    </li>
                    <li>Under Rubric Type, select the type of Rubric Grading System</li>
                    <li>Click the drop down arrows beside each column to rename or delete the column</li>
                    <li>Click the drop down arrows beside each column to rename or delete the row</li>
                    <li>Provide descriptions and points for each of the cells.
                      <img src="../assets/images/instructors/content_creation/creating_rubrics/07.png" alt"" />
                    </li>
                    <li>Once complete, click <span class="bold">Submit</span> at the bottom of the page.</li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Creating Rubrics Modal -->
              </div>
              <!-- END OF CREATING RUBRICS -->

              <!-- USING THE TEXT EDITOR -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="using_the_text_editor"><img src="../assets/images/instructors/content_creation/using_the_text_editor/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="using_the_text_editor">Using the Text Editor</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Using the Text Editor Modal -->
                <div id="using_the_text_editor" class="reveal-modal" data-reveal>
                  <h2>Using the Text Editor</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/content_creation/using_the_text_editor/using_the_text_editor.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>To access the Text Editor on Blackboard:</p>
                  <ol>
                    <li>Click <span class="bold">Learning Materials</span> on the course menu.
                      <img src="../assets/images/instructors/content_creation/using_the_text_editor/01.png" alt"" />
                    </li>
                    <li>Click a Module Name to access the folder
                      <img src="../assets/images/instructors/content_creation/using_the_text_editor/02.png" alt"" />
                    </li>
                    <li>Click <span class="bold">Build Content</span> and create <span class="bold">Item</span>
                      <img src="../assets/images/instructors/content_creation/using_the_text_editor/03.png" alt"" />
                    </li>
                    <li>Under <span class="bold">Name</span>, enter the name of the item.</li>
                    <li>Underneath, you will see a textbox. This is the <span class="bold">Text Editor</span>.
                      <img src="../assets/images/instructors/content_creation/using_the_text_editor/05.png" alt"" />
                    </li>
                    <li>6.  Use the  <img src="../assets/images/instructors/content_creation/using_the_text_editor/06.png" style="display:inline;" alt"" /> button to utilize the full screen function of the text editor.  (<span class="bold">NOTE</span>: Remember to <span class="bold">exit</span> full screen once you are finished in order to see the <span class="bold">Submit</span> button.)</li>
                    <li>If you do not see a full list of tools, click the <img src="../assets/images/instructors/content_creation/using_the_text_editor/07a.png" style="display:inline;" alt"" /> button in order to <span class="bold">show or hide</span>.
                      <img src="../assets/images/instructors/content_creation/using_the_text_editor/07b.png" alt"" />
                    </li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Using the Text Editor Modal -->
              </div>
              <!-- END OF USING THE TEXT EDITOR -->

              <!-- USING THE MATH EDITOR -->
              <div class="large-4 medium-4 small-6 columns end">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="using_the_math_editor"><img src="../assets/images/instructors/content_creation/using_the_math_editor/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="using_the_math_editor">Using the Math Editor</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Using the Math Editor Modal -->
                <div id="using_the_math_editor" class="reveal-modal" data-reveal>
                  <h2>Using the Math Editor</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/content_creation/using_the_math_editor/using_the_math_editor.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>To access the Math Editor on Blackboard:</p>
                  <ol>
                    <li>Click Learning Materials on the side bar.
                      <img src="../assets/images/instructors/content_creation/using_the_math_editor/01.png" alt"" />
                    </li>
                    <li>Click a Module Name to access the folder</li>
                    <li>Click Build Content and create Item
                      <img src="../assets/images/instructors/content_creation/using_the_math_editor/03.png" alt"" />
                    </li>
                    <li>Inside the Text Editor, you will see the following symbol: ƒx. Click to open the Math Editor.
                      <img src="../assets/images/instructors/content_creation/using_the_math_editor/04.png" alt"" />
                    </li>
                    <li>Use the Math Editor to insert equations and formulas.
                      <img src="../assets/images/instructors/content_creation/using_the_math_editor/05.png" alt"" />
                    </li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Using the Math Editor Modal -->
              </div>
              <!-- END OF USING THE MATH EDITOR -->

              
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
