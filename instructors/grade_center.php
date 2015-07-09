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
          <h1>Instructors - Grade Center</h1>

          <div class="row">

            <!-- COMPREHENSIVE GRADE CENTER -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="comprehensive_grade_center"><img src="../assets/images/instructors/grade_center/comprehensive_grade_center/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="comprehensive_grade_center">Comprehensive Grade Center</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Comprehensive Grade Center Modal -->
              <div id="comprehensive_grade_center" class="reveal-modal" data-reveal>
                <h2>Comprehensive Grade Center</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/grade_center/comprehensive_grade_center/comprehensive_grade_center.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <h2>Needs Grading</h2>
                <p>On the <span class="bold">Needs Grading</span> page, a list is displayed of all student submissions that are ready to be graded including <span class="bold">Assignments</span>, <span class="bold">Tests</span>, <span class="bold">Discussion Board</span> posts, <span class="bold">Blogs</span>, <span class="bold">Journals</span>, and <span class="bold">Wikis</span>. Instructors may use the dropdown arrow beside the Item Name of the submission to begin grading the item.</p>
                <img src="../assets/images/instructors/grade_center/comprehensive_grade_center/a01.png" alt"" />
                <div class="spacer"></div>

                <h2>Full Grade Center</h2>
                <p>The <span class="bold">Full Grade Center</span> displays all grading <span class="bold">columns</span> for items that are not hidden and each student’s score on the item. Scores can be inputted manually and overridden on this page. Instructors may also <span class="bold">Create Columns</span> or <span class="bold">Calculated Columns</span> to record or calculate marks and generate <span class="bold">Reports</span> through the action bar. <span class="bold">Columns</span>, <span class="bold">Rows</span>, <span class="bold">Categories</span> and <span class="bold">Grading Periods</span> can be organized through the <span class="bold">Manage</span> tool.</p>
                <img src="../assets/images/instructors/grade_center/comprehensive_grade_center/b01.png" alt"" />
                <div class="spacer"></div>

                <h2>Assignments</h2>
                <p><span class="bold">Grade Center: Assignments</span> is a smart view that displays all items in the Assignment category. All <span class="bold">Assignments</span> and <span class="bold">SafeAssign</span> assignments deployed through Blackboard are automatically added to this category and instructor created grading columns can be added manually.</p>
                <img src="../assets/images/instructors/grade_center/comprehensive_grade_center/c01.png" alt"" />
                <div class="spacer"></div>

                <h2>Tests</h2>
                <p><span class="bold">Grade Center: Tests</span>, similar to <span class="bold">Assignments</span>, is a smart view that displays all items in the Test category. All <span class="bold">Tests</span> deployed through Blackboard are automatically added to this category and instructor created grading columns can be added manually.</p>
                <img src="../assets/images/instructors/grade_center/comprehensive_grade_center/d01.png" alt"" />
                <div class="spacer"></div>

                <h2>Icon Legend</h2>
                <p>The <span class="bold">Icon Legend</span> is a useful tool that shows the meanings of icons that appear in the <span class="bold">Grade Center</span>.</p>



                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Comprehensive Grade Center Modal -->
            </div>
            <!-- END OF COMPREHENSIVE GRADE CENTER -->
            
            <!-- GRADE CENTER: CREATE A COLUMN -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="gc_create_column"><img src="../assets/images/instructors/grade_center/gc_create_column/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="gc_create_column">Grade Center: Create a Column</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Grade Center: Create a Column Modal -->
              <div id="gc_create_column" class="reveal-modal" data-reveal>
                <h2>Grade Center: Create a Column</h2>
                <div class="downloads">
                  <p><a href="#gc_create_column_vid"><span class="icon-video"></span> Video</a></p>
                  <p><a href="../assets/_source/instructors/grade_center/gc_create_column/gc_create_column.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>In the <span class="bold">Grade Center</span>, click <span class="bold">Create Column</span> on the action bar.
                    <img src="../assets/images/instructors/grade_center/gc_create_column/01.png" alt"" />
                  </li>
                  <li>On the Create Grade Column page, type a <span class="bold">brief, descriptive</span> Column Name. </li>
                  <li>Optionally, type a Description</li>
                  <li>Make a selection in the Primary Display drop-down list. The selection is the grade format shown in the Grade Center and to students in My Grades.</br>Choose from:
                    <ul type="circle">
                      <li><span class="bold">Score:</span> A numeric grade appears in the column. </li>
                      <li><span class="bold">Letter:</span> A letter grade appears in the column. The default grading schema is used to assign letter grades. For example, a score of 21/30 equals 70% and appears as a C.</li>
                      <li><span class="bold">Percentage:</span> A percentage appears in the column. For example, a score of 21/30 appears as 70%.</li>
                      <li><span class="bold">Complete/Incomplete:</span> When a student submits an item, a check mark (<img style="display:inline;" src="../assets/images/instructors/grade_center/gc_create_column/04-4.png" alt"" />) appears in the column, regardless of the score achieved.</li>
                    </ul>
                  </li>
                  <li>Optionally, make a selection in the Secondary Display drop-down list. The secondary value does not appear to students.</li>
                  <li>Optionally, you can associate the column with a category by making a selection in the Category drop-down list. The default setting is No Category.</li>
                  <li>In the Points Possible box, type the total points. Entries must be numeric.</li>
                  <li>If grading periods exist, you can associate the column with a grading period by making a selection in the Grading Period drop-down list. If no grading periods exist, the drop-down list does not appear.</li>
                  <li>Optionally, select the option next to Due Date and type a date (mm/dd/yyyy) or use the pop-up Date Selection Calendar. Columns that you assigned a due date to are associated automatically with a grading period if the due date falls within the date range of the grading period.</li>
                  <li>Select the Options.
                    <ul type="circle">
                      <li><span class="bold">Include this Column in Grade Center Calculations:</span> Select Yes to make the column available for potential inclusion when creating calculated columns.</li>
                      <li><span class="bold">Show this Column to Students:</span> Select Yes to display the column to students in My Grades.</li>
                      <li><span class="bold">Show Statistics (average and median) for this Column to Students in My Grades:</span> Select Yes to include statistical information with the grade value when shown to students.</li>
                    </ul>
                  </li>
                  <li>Click <span class="bold">Submit.</span></li>
                </ol>

                <h2>After you create a grade column, you can:</h2>
                <ul>
                  <li>Associate a rubric with it to make grading easier and less subjective.</li>
                  <li>Assign grades</li>
                  <li>Include the column when creating calculated columns.</li>
                </ul>

                <h3 id="gc_create_column_vid">Video Help</h3>
                <div class="row">
                  <div class="large-10 large-centered small-12 columns">
                    <div class="flex-video-embedded">
                      <iframe width="450" height="400" src="//www.youtube.com/embed/7TtuRgtsylM?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Grade Center: Create a Column Modal -->
            </div>
            <!-- END OF GRADE CENTER: CREATE A COLUMN -->

            <!-- GRADE CENTER: CREATE A WEIGHTED COLUMN -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="gc_create_weighted_column"><img src="../assets/images/instructors/grade_center/gc_create_weighted_column/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="gc_create_weighted_column">Grade Center: Create a Weighted Column</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Grade Center: Create a Weighted Column Modal -->
              <div id="gc_create_weighted_column" class="reveal-modal" data-reveal>
                <h2>Grade Center: Create a Weighted Column</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/grade_center/gc_create_weighted_column/gc_create_weighted_column.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <ol>
                  <li>In the <span class="bold">Grade Center</span>, click <span class="bold">Create Calculated Column</span> on the action bar.</li>
                  <li>From the Drop-Down menu, select <span class="bold">Weighted Column.</span>
                    <img src="../assets/images/instructors/grade_center/gc_create_weighted_column/02.png" alt"" />
                  </li>
                  <li>On the Create Weighted Column page, type a name for the column.</li>
                  <li>Optionally, type a Description.</li>
                  <li>Make a selection in the Primary Display drop-down list and optionally, make a selection in the Secondary Display drop-down list. The secondary value does not appear to students.</li>
                  <li>Under <span class="bold">3. Select Columns</span> select the column(s) that will be included in the weighted total from the list on the left. Click arrow to move them to the selected columns box.</li>
                  <li>Enter the weighted grade for each column. The total must equal 100.
                    <img src="../assets/images/instructors/grade_center/gc_create_weighted_column/07.png" alt"" />
                  </li>
                  <li><span class="bold">Choose "No" for the Calculate as a Running Total option.</span>
                    <img src="../assets/images/instructors/grade_center/gc_create_weighted_column/08.png" alt"" />
                  </li>
                  <li>Edit any of the <span class="bold">Options</span> if necessary</li>
                  <li>Choose <span class="bold">Submit.</span></li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Create a Weighted Column Modal -->
            </div>
            <!-- END OF GRADE CENTER: CREATE A WEIGHTED COLUMN -->

            <!-- USING EXCEL WITH GRADE CENTER -->
            <div class="large-4 medium-4 small-6 columns">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="gc_using_excel"><img src="../assets/images/instructors/grade_center/gc_using_excel/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="gc_using_excel">Using Excel With Grade Center</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Using Excel With Grade Center Modal -->
              <div id="gc_using_excel" class="reveal-modal" data-reveal>
                <h2>Using Excel With Grade Center</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/grade_center/gc_using_excel/gc_using_excel.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <h2>How to Download Grades to Excel sheet</h2>
                <ol>
                  <li>On the action bar, point to <span class="bold">Work Offline</span> and select <span class="bold">Download.</span>
                    <img src="../assets/images/instructors/grade_center/gc_using_excel/a01.png" alt"" />
                  </li>
                  <li>Select the data to <span class="bold">download.</span></li>
                  <li>Select the <span class="bold">file delimiter</span>, <span class="bold">Comma</span> or <span class="bold">Tab</span>.</li>
                  <li>Select whether to Include Hidden Information in the downloaded data. Hidden information includes columns and students who have been hidden from the view in the downloaded file.</li>
                  <li>Select the location for the download. Click Browse to select a folder in the Content Collection.</li>
                  <li>Click <span class="bold">Submit</span>.</li>
                  <li>On the next Download Grades page, <span class="bold">click Download and save the file</span>.</li>
                </ol>
                <p><span class="bold">NOTE:</span> Do not change the file name while saving because the Grade Center needs the information it contains to deliver it to the appropriate column when uploading.</p>

                <h2>How to Upload Grades from Excel to Grades Center</h2>
                <ol>
                  <li>On the action bar, point to <span class="bold">Work Offline</span> and select <span class="bold">Upload.</span>
                    <img src="../assets/images/instructors/grade_center/gc_using_excel/b01.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Browse</span> My Computer to locate the file. Click Okay to upload.</li>
                  <li>Select the <span class="bold">delimiter type:</span> Comma, Tab, or Auto. Choosing Auto attempts to automatically detect the delimiter used in the selected file.</li>
                  <li>Click <span class="bold">Submit</span> to upload the selected file.
                    <img src="../assets/images/instructors/grade_center/gc_using_excel/b04.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Using Excel With Grade Center Modal -->
            </div>
            <!-- END OF USING EXCEL WITH GRADE CENTER -->

            <!-- CREATING SMART VIEWS CENTER -->
            <div class="large-4 medium-4 small-6 columns end">
              <!-- Grid Tile -->
              <div class="grid-tile">
                <a href="#" data-reveal-id="creating_smart_views"><img src="../assets/images/instructors/grade_center/creating_smart_views/tile.png" alt"" /></a>
                <div class="grid-link-container">
                  <a href="#" data-reveal-id="creating_smart_views">Creating Smart Views</a>
                </div>
              </div>
              <!-- End of Grid Tile -->

              <!-- Creating Smart Views Modal -->
              <div id="creating_smart_views" class="reveal-modal" data-reveal>
                <h2>Creating Smart Views</h2>
                <div class="downloads">
                  <p><a href="../assets/_source/instructors/grade_center/creating_smart_views/creating_smart_views.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                  <div class="clearfix"></div>
                </div>

                <p>A smart view is a focused look at the Grade Center. It shows only the columns that match a set of criteria. When the Grade Center includes a great number of students and columns, you can use smart views to quickly find data.</p>

                <ol>
                  <li>Click <span class="bold">Grade Center</span> under Control Panel and click <span class="bold">Full Grade Center</span>.
                    <img src="../assets/images/instructors/grade_center/creating_smart_views/01.png" alt"" />
                  </li>
                  <li>Under <span class="bold">Manage</span>, click <span class="bold">Smart Views</span>
                    <img src="../assets/images/instructors/grade_center/creating_smart_views/02.png" alt"" />
                  </li>
                  <li>Click <span class="bold">Create Smart View</span> on the blue action bar.</li>
                  <li>Under <span class="bold">Name</span>, type in the name of the smart view. </li>
                  <li>Select the type of smart view under <span class="bold">Selection Criteria</span>.</li>
                  <li>Click <span class="bold">Submit</span> to save changes.
                    <img src="../assets/images/instructors/grade_center/creating_smart_views/06.png" alt"" />
                  </li>
                  <li>Once you have set up the Smart view, click the <span class="bold">star</span> under <span class="bold">Add as Favourite</span> and click <span class="bold">OK</span>.
                    <img src="../assets/images/instructors/grade_center/creating_smart_views/07.png" alt"" />
                  </li>
                  <li>The custom smart view should be now visible under the <span class="bold">Grade Center</span>.
                    <img src="../assets/images/instructors/grade_center/creating_smart_views/08.png" alt"" />
                  </li>
                </ol>

                <?php include '../assets/includes/instructor-modal-footer.php' ?>

                <a class="button radius right btn-close">Close</a>
                <a class="close-reveal-modal">&#215;</a>
              </div>
              <!-- End of Creating Smart Views Modal -->
            </div>
            <!-- END OF CREATING SMART VIEWS CENTER -->

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
