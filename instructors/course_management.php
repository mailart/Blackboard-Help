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
          <h1>Instructors - Course Management</h1>

          <div class="row">

            
                        <!-- STUDENT PREVIEW -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="student_preview"><img src="../assets/images/instructors/course_management/student_preview/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="student_preview">Student Preview</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Student Preview Modal -->
              <div id="student_preview" class="reveal-modal" data-reveal>
                <h2>Student Preview Mode</h2>
                <div class="downloads">
                  <p><a href="#student_preview_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/course_management/student_preview/student_preview.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>The official Student Preview mode allows instructors to view a course exactly as student would without having to login to a separate student account.  The <span class="italic">Edit Mode</span> is still available but to see a true student view, simply click the <span class="bold">Student Preview</span> icon located in the same row as the <span class="bold">Change Course Theme</span> function.</p>
                
                <p>With student preview, you can experience your course exactly as your students do. While in student preview mode, you can do the following student activities:
					<ul>
                        <li>Submit assignments</li>
                        <li>Take tests</li>
                        <li>Create blog and discussion posts</li>
                        <li>Create journal and wiki entries</li>
                        <li>View student tools, such as My Grades</li>
                    </ul>
				</p>

				<h2>Enter Student Preview Mode</h2>


                <ol>
                  <li>To enter student preview mode, click the <span class="bold">Enter Student Preview</span> function, at the top-right corner of your course pages, next to the <span class="bold">Change Course Theme</span> function.
                  <img src="../assets/images/instructors/course_management/student_preview/a01.png" alt"" />
                  </li>
                  
                    
                  
                  <li><span class="bold">Student Preview</span> creates a student account, called the preview user account, logs you in as that student and enrolls you in the current course. When you enter student preview mode, the student preview bar appears at the top of every page. The bar displays the text "Student Preview mode is ON" and has <span class="bold">Settings</span> and <span class="bold">Exit Preview</span> functions.
                    <img src="../assets/images/instructors/course_management/student_preview/a02.png" alt"" />
                  </li>
                 </ol>
                 
                 <h2>Exit and Delete Your Preview User Account</h2>
                 
                 <ol>
                  <li>Click <span class="bold">Exit Preview</span> to exit the student preview.  When you exit the student preview, you are prompted to keep or delete the preview user and all its associated data.  It is considered best practice to remove the preview user and its associated data.
                  <img src="../assets/images/instructors/course_management/student_preview/b01.png" alt"" />
                  </li>
                 </ol>

                <h3 id="student_preview_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/JCrAQewg7Is" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Student Preview Modal -->
            </div>
            <!-- END OF STUDENT PREVIEW -->

            
            
            
            
            <!-- EXPORT COURES PACKAGES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="export_course_packages"><img src="../assets/images/instructors/course_management/export_course_packages/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="export_course_packages">Export Course Packages</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Export Course Packages Modal -->
              <div id="export_course_packages" class="reveal-modal" data-reveal>
                <h2>Export Course Packages</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/course_management/export_course_packages/export_course_packages.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>
                <p>The <span class="bold">Export Course</span> feature in Blackboard Learn 9.1 allows instructors to download a copy of their courses.  This method is often used in order to give another instructor a copy of your content.  The exported packages can also be used by an instructor to copy content from his/her one course to another course.</br>
                  In the tutorial below, you will <span class="bold">learn how to Export Course (package) and its File Structure (package) from a course.</span>
                </p>

                <ol>
                  <li>Login to the course you want to export.</li>
                  <li>Under the <span class="bold">Control Panel</span>, expand <span class="bold">Packages and Utilities</span> section and click <span class="bold">Export/Archive Course</span>.
                    <img src="../assets/images/instructors/course_management/export_course_packages/02.png" alt"" />
                  </li>
                  <li>On the <span class="bold">Export/Archive Course</span> page, click on the <span class="bold">Export Package</span> button.
                    <img src="../assets/images/instructors/course_management/export_course_packages/03.png" alt"" />
                  </li>
                 
                 
                 <li>
                 
                 Under <span class="bold">File Attachments</span>, leave the default <span class="bold">Copy links and include copies of the files in the course default directory</span> checked for <span class="italic">Course Files Default Directory and Files Outside of the Course Default Directory</span>.
                 
                 </li>
                 
                 
                  <li>In the <span class="bold">Select Course Materials</span> section, click on <span class="bold">Select ALL</span> unless you know specifically what you want to export. If you select <span class="bold">Discussion Board</span>, decide whether to include starter posts for each thread in each forum (anonymously) or include only forums with no starter posts.<br />
                    
                    <img src="../assets/images/instructors/course_management/export_course_packages/05.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Submit</span> to begin creating an export of your course.  Blackboard will display a <span class="bold">Success: This action has been queued</span> message. This indicates the process has started, but hasn't yet finished. Blackboard will email you when the process is complete.
                  <img src="../assets/images/instructors/course_management/export_course_packages/06.png" alt"" />
                  </li>
                </ol>

                <h2>Download the Exported Course Package</h2>

                <ol start="7">
                  <li>When you receive your confirmation email, refresh the screen by clicking on <span class="bold">Export/Archive Course</span> again under <span class="bold">Packages and Utilities</span> in the <span class="italic">Control Panel</span>.</li>
                  <li>Click the chevron next to your export file and choose Open.
                  </li>
                  <li>Save the file on your computer.</li>
                </ol>


                <h2>Download the File Structure Package</h2>
                <p>After downloading the Exported Course package, you will also need to download the File Structure package of your course.</p>

                <ol start="10">
                  <li>Under <span class="italic">Control Panel</span>, click on <span class="bold">Files</span>.</li>
                  <li>Click on the Course ID.
                  <img src="../assets/images/instructors/course_management/export_course_packages/11.png" alt"" />
                  </li>
                  
                  <li>This is your Course Files section.  Check pagination to make sure <span class="bold">Show All</span> is selected.</li>
                  <li>Select all files.</li>
                  <li>Click on <span class="bold">Download Package</span> button to save it on your computer.
                  <img src="../assets/images/instructors/course_management/export_course_packages/14.png" alt"" />
                  </li>
                </ol>


                <p><span class="bold">NOTE:</span> The <span class="bold">next step</span> is to <span class="bold">import</span> both downloaded packages to your new blank Blackboard Learn 9.1 course.  To learn more, see <span class="bold">"Importing Course Packages"</span>.</p>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Export Course Packages Modal -->
            </div>
            <!-- END OF EXPORT COURES PACKAGES -->

            <!-- IMPORT COURES PACKAGES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="import_course_packages"><img src="../assets/images/instructors/course_management/import_course_packages/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="import_course_packages">Import Course Packages</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Import Course Packages Modal -->
              <div id="import_course_packages" class="reveal-modal" data-reveal>
                <h2>Import Course Packages</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/course_management/import_course_packages/import_course_packages.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Instructors may import content that has previously been exported from another Blackboard course. This content is typically in the <span class="bold">.ZIP</span> file format.</p> There are two major steps involved in importing a course:
                
                <ul>
                	
                    <li>Import Course Package</li>
                    <li>Upload File Structure Package</li>
                
                </ul>

		<h2>Import Course Package</h2>

                <ol>
                  <li>Under <span class="bold">Control Panel</span>, expand <span class="bold">Packages and Utilities</span> section and select <span class="bold">Import Package/View Logs.</span>
                  	<img src="../assets/images/instructors/course_management/import_course_packages/01.png" alt"" />
                  </li>
                  <li>Click on <span class="bold">Import Package</span>
                    <img src="../assets/images/instructors/course_management/import_course_packages/02.png" alt"" />
                  </li>
                  <li>Click on <span class="bold">Browse My Computer</span> to locate and select the Course Package.
                    <img src="../assets/images/instructors/course_management/import_course_packages/03.png" alt"" />
                  </li>
                  <li>Select the Course Materials you want included in the import.</span>
                    <img src="../assets/images/instructors/course_management/import_course_packages/04.png" alt"" />
                  </li>
                  <li>Click on <span class="bold">Submit</span>.</li>
                  <li>You will receive an <span class="bold">email</span> when the <span class="bold">import process</span> has been <span class="bold">completed.</span>
                  	<img src="../assets/images/instructors/course_management/import_course_packages/06.png" alt"" />
                  </li>
                  <li>The next step is to upload File Structure package to your new Blackboard course.</li>
                </ol>


			<h2>Upload File Structure Package</h2>
				<p>After importing the Exported Course package, you will also need to upload the File Structure package to your course.</p>
				<ol start="8">
                	<li>Under <span class="italic">Control Panel</span>, click on <span class="bold">Files</span>.</li>
                  <li>Click on the Course ID.
                  	<img src="../assets/images/instructors/course_management/import_course_packages/09.png" alt"" />
                  </li>
                  <li>This is your Course Files section.</li>
                	<li>Click on <span class="bold">Upload</span> menu on the Action bar and choose <span class="bold">Upload Zip Package</span>
                    	<img src="../assets/images/instructors/course_management/import_course_packages/11.png" alt"" />
                    </li>
                    <li>Click on <span class="bold">Choose File</span> to locate and select the File Structure package</li>
                    <li>Check off (put a tick mark) <span class="italic">If Selected, the system automatically overwrites the existing file with the same name</span>.</li>
                	<li>Click on <span class="bold">Submit</span> to upload the File Structure
                    	<img src="../assets/images/instructors/course_management/import_course_packages/14.png" alt"" />
                    </li>
                    <li>Log out of Blackboard and log back in to view all course content</li>
                </ol>
				



                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Import Course Packages Modal -->
            </div>
            <!-- END OF IMPORT COURES PACKAGES -->

            <!-- BACKUP/ARCHIVE COURSES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="backup_archive_courses"><img src="../assets/images/instructors/course_management/backup_archive_courses/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="backup_archive_courses">Backup/Archive Course</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Backup/Archive Courses Modal -->
              <div id="backup_archive_courses" class="reveal-modal" data-reveal>
                <h2>Backup/Archive Course</h2>
                <div class="downloads">
                  <p><a href="#backup_archive_courses_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/course_management/backup_archive_courses/backup_archive_courses.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p><span class="bold">Archive Course</span> creates a permanent record of a course including all the content and user interactions available at the time the Archive is created. <span class="bold">This includes all course content and also includes student data.</span></p>

                <ol>
                  <li>In the <span class="bold">Control Panel</span> under Course Management, expand <span class="bold">Packages and Utilities</span>.</li>
                  <li>Select <span class="bold">Export/Archive Course</span></li>
                  <li>Choose <span class="bold">Archive Course</span> depending on what information you would like to keep.</li>
                </ol>

                <h2>Archive Course:</h2>
                <p>Choose whether or not to include Grade history. Click <span class="bold">Submit.</span></p>
                <ol start="4">
                  <li>If your request was successful this message will appear at the top of the Blackboard screen.</li>
                  <li>When the process is complete you will see the file. Click the drop-down menu (chevron) and select <span class="bold">Open</span>.</li>
                  <li>Select "Save as" and save the file to your desired location.</li>
                </ol>

                <h3 id="backup_archive_courses_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="600" height="400" src="//www.youtube.com/embed/Uhn3fCDtGN0?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Backup/Archive Courses Modal -->
            </div>
            <!-- END OF BACKUP/ARCHIVE COURSES -->

            <!-- REQUEST A DEV COURSE/SANDBOX -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="http://www.formstack.com/forms/?1535369-IJPCrhqLaD" target="_blank"><img src="../assets/images/instructors/course_management/request_dev_sandbox/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="http://www.formstack.com/forms/?1535369-IJPCrhqLaD" target="_blank">Request a DEV course or Sandbox</a>
                </div>
              </div>
              <!-- End of Grid Tile -->
            </div>
            <!-- END OF REQUEST A DEV COURSE/SANDBOX -->

            <!-- MERGE COURSES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="merge_courses"><img src="../assets/images/instructors/course_management/merge_courses/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="merge_courses">Merge Courses</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Merge Courses Modal -->
              <div id="merge_courses" class="reveal-modal" data-reveal>
                <h2>Merge Courses</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/course_management/merge_courses/merge_courses.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Instructors who teach multiple sections of the same course may prefer to manage those sections through a single master course with associated child courses.</p>
                <p>In the course listing, master and child courses are always displayed together, with child courses indicated by an up arrow in the status column, pointing to the master course. New content must be managed from the master course. Child courses are marked as unavailable, but can be managed through the master course.</p>

                <img src="../assets/images/instructors/course_management/merge_courses/02.png" alt"" />

                <p>To request merging (cross listing) of courses, submit the online form at the following web link:<a href="http://www.formstack.com/forms/?1530624-IJPCrhqLaD" target="_blank"> http://www.formstack.com/forms/?1530624-IJPCrhqLaD</a></p>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Merge Courses Modal -->
            </div>
            <!-- END OF MERGE COURSES -->

            <!-- MOVING FILES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="moving_files"><img src="../assets/images/instructors/course_management/moving_files/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="moving_files">Moving Files</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Moving Files Modal -->
              <div id="moving_files" class="reveal-modal" data-reveal>
                <h2>Moving Files</h2>
                <div class="downloads">
                  <p><a href="#moving_files_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/course_management/moving_files/moving_files.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>When you upload a file to a course in Blackboard 9.1, you have the option of moving or copying it to another course.</p>

                <ol>
                  <li>Locate the item, file, module, content folder, assignment, assessment or specific course material that you would like to move or copy to another course.</li>
                  <li>From the drop-down menu beside the name, select <span class="bold">Move</span> or <span class="bold">Copy</span>.
                    <img src="../assets/images/instructors/course_management/moving_files/02.png" alt"" />
                  </li>
                  <li>Choose the course from the drop-down list that you wish to move or copy the file to (Destination Course).</li>
                  <li>Select <span class="bold">Browse</span> to choose the content folder or Area from the pop-up window where the file fill be moved or copied to.</li>
                  <li>Click <span class="bold">Submit</span>.
                    <img src="../assets/images/instructors/course_management/moving_files/05.png" alt"" />
                  </li>
                </ol>

                <h3 id="moving_files_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/L_9Ss5JsyPo?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Moving Files Modal -->
            </div>
            <!-- END OF MOVING FILES -->

            <!-- HIDE COURSES -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="hide_courses"><img src="../assets/images/instructors/course_management/hide_courses/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="hide_courses">Hide Courses</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Hide Courses Modal -->
              <div id="hide_courses" class="reveal-modal" data-reveal>
                <h2>Hide Courses</h2>
                <div class="downloads">
                  <p><a href="#hide_courses_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/course_management/hide_courses/hide_courses.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>Hiding a course does not remove it from the Blackboard Learn System. Hidden courses do not appear on the Blackboard Learn instructor homepage.</p>

                <ol>
                  <li>Log in to blackboard.</li>
                  <li>Click the icon in the corner of the "My Courses" module.
                    <img src="../assets/images/instructors/course_management/hide_courses/02.png" alt"" />
                  </li>
                  <li>Using the Select All/Unselect All, unselect the check-box beside the course that you wish to hide.
                    <img src="../assets/images/instructors/course_management/hide_courses/03.png" alt"" />
                  </li>
                  <li>Click Submit. The course should not appear on the homepage.</li>
                </ol>

                <h3 id="hide_courses_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/P6YuBM3bvJc?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Hide Courses Modal -->
            </div>
            <!-- END OF HIDE COURSES -->

            <!-- ADD INSTRUCTORS -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="http://www.formstack.com/forms/?1535369-IJPCrhqLaD" target="_blank"><img src="../assets/images/instructors/course_management/add_instructors/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="http://www.formstack.com/forms/?1535369-IJPCrhqLaD" target="_blank">Add Instructors</a>
                </div>
              </div>
              <!-- End of Grid Tile -->
            </div>
            <!-- END OF ADD INSTRUCTORS -->

            <!-- STUDENT ROSTER -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="student_roster"><img src="../assets/images/instructors/course_management/student_roster/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="student_roster">Student Roster</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Student Roster Modal -->
              <div id="student_roster" class="reveal-modal" data-reveal>
                <h2>Student Roster</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/course_management/student_roster/student_roster.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>When using the Roster tool in Blackboard 9.1, you can search students individually by typing in certain criteria.</p>

                <p>To view a full class list:</p>
                <ol>
                  <li>Select <strong>"Not Blank"</strong> from the second drop-down menu and select <strong>Go</strong>.
                    <img src="../assets/images/instructors/course_management/student_roster/01.jpg" alt"" />
                  </li>
                </ol>

                <p>(Optionally) To delete the Content Area name from the Course Menu:</p>

                <ol>
                  <li>Hover over the name of the Content area</li>
                  <li>Click the chevron when it becomes available</li>
                  <li>Choose <span class="bold">Delete</span></li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Student Roster Modal -->
            </div>
            <!-- END OF STUDENT ROSTER -->

            <!-- CONTROL PANEL -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="control_panel"><img src="../assets/images/instructors/course_management/control_panel/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="control_panel">Control Panel</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Control Panel Modal -->
              <div id="control_panel" class="reveal-modal" data-reveal>
                <h2>Control Panel</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/course_management/control_panel/control_panel.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <div class="spacer"></div>

                

                <p>The control panel at the bottom of the page in a course in Blackboard is <span class="bold">only visible for instructors</span>. It provides links to course tools, the Grade Center as well as access to further help on Blackboard. For more information about specific Control Panel Tools, see corresponding Help Documents on the BB91 Help Site.</p>

                <img src="../assets/images/instructors/course_management/control_panel/00.png" alt"" />

                
                
                <div class="clearfix"></div>
                <div class="spacer"></div>

                <div class="medium-6 columns">
                  <h4>1. Files</h4>
                  <p>The <span class="bold">Files</span> menu is a place for instructors to store materials directly on Blackboard.</p>
                  <img src="../assets/images/instructors/course_management/control_panel/01.png" alt"" />
                  <div class="spacer show-for-small-only"></div>
                </div>
                <div class="medium-6 columns">
                  <h4>2. Course Tools</h4>
                  <p>The <span class="bold">Course Tools</span> provide instructors links to tools such as <span class="bold">Achievements</span>, <span class="bold">Discussion Board</span>, and <span class="bold">Tests, Surveys and Pools</span>. You can choose which tools are made available to your students.</p>
                  <img src="../assets/images/instructors/course_management/control_panel/02.png" alt"" />
                </div>

                <div class="clearfix"></div>
                <div class="spacer"></div>

                <div class="medium-6 columns">
                  <h4>3. Evaluation</h4>
                  <p>The <span class="bold">Evaluation</span> link allows instructors to run <span class="bold">Course Reports</span> and access the <span class="bold">Retention Center</span>.</p>
                  <img src="../assets/images/instructors/course_management/control_panel/03.png" alt"" />
                  <div class="spacer show-for-small-only"></div>
                </div>
                <div class="medium-6 columns">
                  <h4>4. Grade Center</h4>
                  <p>In the <span class="bold">Grade Center</span>, instructors can provide and manage students' grades for assignments, tests, discussion posts, journals, blogs, and wikis, and for ungraded items, such as surveys or self-tests. Instructors can also create <span class="bold">Grade Columns</span> for any activities such as special projects, participation, or attendance. </p>
                  <img src="../assets/images/instructors/course_management/control_panel/04.png" alt"" />
                </div>

                <div class="clearfix"></div>
                <div class="spacer"></div>

                <div class="medium-6 columns">
                  <h4>5. Users and Groups</h4>
                  <p>Instructors can view a list of users in the course. To do this, click <span class="bold">Users</span> under <span class="bold">Users and Groups</span>. Instructors can also set up groups directly on Blackboard by clicking on <span class="bold">Groups</span>.</p>
                  <img src="../assets/images/instructors/course_management/control_panel/05.png" alt"" />
                  <div class="spacer show-for-small-only"></div>
                </div>
                <div class="medium-6 columns">
                  <h4>6. Customization</h4>
                  <p>Instructors can customize their Blackboard course using the various customization tools. You can choose which course tools are available to the students by clicking <span class="bold">Tool Availability</span>.</p>
                  <img src="../assets/images/instructors/course_management/control_panel/06.png" alt"" />
                </div>

                <div class="clearfix"></div>
                <div class="spacer"></div>

                <div class="medium-6 columns">
                  <h4>7. Packages and Utilities</h4>
                  <p><span class="bold">Packages and Utilities</span> allows instructors to <span class="bold">Import</span> or <span class="bold">Copy</span> Blackboard courses. </p>
                  <img src="../assets/images/instructors/course_management/control_panel/07.png" alt"" />
                  <div class="spacer show-for-small-only"></div>
                </div>
                <div class="medium-6 columns">
                  <h4>8. Grade Center</h4>
                  <p>The help links provides additional support for Blackboard.</p>
                  <img src="../assets/images/instructors/course_management/control_panel/08.png" alt"" />
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Control Panel Modal -->
            </div>
            <!-- END OF CONTROL PANEL -->

            <!-- PERFORMANCE DASHBOARD -->
            <div class="large-4 medium-4 small-6 columns end">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="performance_dashboard"><img src="../assets/images/instructors/course_management/performance_dashboard/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="performance_dashboard">Performance Dashboard</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Performance Dashboard Modal -->
              <div id="performance_dashboard" class="reveal-modal" data-reveal>
                <h2>Performance Dashboard</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/course_management/performance_dashboard/performance_dashboard.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>The performance dashboard is located under the <span class="bold">Control Panel > Evaluation</span>.
                    <img src="../assets/images/instructors/course_management/performance_dashboard/01.png" alt"" />
                  </li>
                  <li>The performance dashboard provides up to date report on the activity for all students.
                    <img src="../assets/images/instructors/course_management/performance_dashboard/01.png" alt"" />
                  </li>
                  <li><span class="bold">Adaptive Release</span> shows any special permission applied to the views of the particular student. <span class="bold">Discussion Board</span> shows how many posts the student has made. <span class="bold">Retention Center</span> shows how many rules did the student not meet. <span class="bold">View Grades</span> takes you to the grade center.</li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Performance Dashboard Modal -->
            </div>
            <!-- END OF PERFORMANCE DASHBOARD -->


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
