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
            <h1>Instructors - Content Creation</h1>

            <div class="row">

              <!-- DOWNLOAD RESPONDUS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="download_respondus"><img src="../assets/images/instructors/respondus/download_respondus/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="download_respondus">Download Respondus</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Download Respondus Modal -->
                <div id="download_respondus" class="reveal-modal" data-reveal>
                  <h2>Download Respondus</h2>
                  <hr />

                  <p>Respondus is a powerful tool for creating and managing exams that can be printed to paper or published directly to Blackboard. Exams can be created offline using a familiar Windows environment, or moved from one LMS to another. Whether you are a veteran of online testing or relatively new to it, Respondus will save you hours on each project.</p>

                  <p>At the moment, Respondus is only compatible with Windows based operating systems.  To install, Respondus on your computer, follow the steps below:</p>

                  <ol>
                    <li>Go to ITS website at <a href="https://its.humber.ca" target="_blank">https://its.humber.ca</a> and log in with your Humber credentials</li>
                    <li>Once logged in, click on &quot;Support Centre&quot; pull-down menu and choose &quot;Software Downloads&quot; as shown below:
                      <img src="../assets/images/instructors/respondus/download_respondus/02.png" alt"" />
                    </li>
                    <li>Click on &quot;Respondus4Campus.zip&quot; link to download it to your computer:
                      <img src="../assets/images/instructors/respondus/download_respondus/03.png" alt"" />
                    </li>
                    <li>Next, download the serial key by clicking on &quot;Respondus_Serial.txt&quot; link:
                      <img src="../assets/images/instructors/respondus/download_respondus/04.png" alt"" />
                    </li>
                    <li>Unzip &quot;Respondus4Campus.zip&quot; that you downloaded in step 3, and install the software on your computer</li>
                    <li>Enter the serial key when prompted</li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Download Respondus Modal -->
              </div>
              <!-- END OF DOWNLOAD RESPONDUS -->

              <!-- RESPONDUS COMPATIBILE M/C TEST -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="respondus_compatible_mc_test"><img src="../assets/images/instructors/respondus/respondus_compatible_mc_test/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="respondus_compatible_mc_test">Respondus Compatible M/C Test</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Respondus Compatible M/C Test Modal -->
                <div id="respondus_compatible_mc_test" class="reveal-modal" data-reveal>
                  <h2>Respondus Compatible M/C Test</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/respondus/respondus_compatible_mc_test/respondus_compatible_mc_test.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <h2>Creating Respondus Compatible Multiple Choice Assessment.</h2>

                  <ol>
                    <li>To format an assessment to be compatible with Respondus
                      <ol type="a">
                        <li>Take off any headings in the document. Titles will not be recognized by Respondus.</li>
                        <li>Select all questions and Clear all formatting if you have not done so.
                          <img src="../assets/images/instructors/respondus/respondus_compatible_mc_test/01-b.png" alt"" />
                        </li>
                        <li>Select all the questions again.</li>
                        <li>Format the questions using the “Multilevel list” tool and select the 1st option.
                          <img src="../assets/images/instructors/respondus/respondus_compatible_mc_test/01-d.png" alt"" />
                        </li>
                        <li>"Tab" over the answers such that they appear in the following format:
                          <ol>
                            <li>What is your favourite colour?
                              <ol type="a">
                                <li>Orange</li>
                                <li>Blue</li>
                                <li>Pink</li>
                                <li>Black</li>
                                <li>None of the above</li>
                              </ol>
                            </li>
                          </ol>
                        </li>
                      </ol>
                    </li>
                    <li>To format the answer key
                      <ol type="a">
                        <li>At the end of the assessment, write "Answers:"<br />
                          NOTE: It is case sensitive and you must have the colon.
                        </li>
                        <li>Using the "numbered list", type in answers. Example:<br />
                            Answers:
                            <ol type="1">
                              <li>A</li>
                              <li>B</li>
                              <li>C</li>
                              <li>D</li>
                            </ol>
                        </li>
                      </ol>
                    </li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Respondus Compatible M/C Test Modal -->
              </div>
              <!-- END OF RESPONDUS COMPATIBILE M/C TEST -->

              <!-- CONVERTING WORD DOCUMENTS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="converting_word_docs"><img src="../assets/images/instructors/respondus/converting_word_docs/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="converting_word_docs">Converting Word Documents</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Converting Word Documents Modal -->
                <div id="converting_word_docs" class="reveal-modal" data-reveal>
                  <h2>Converting Word Documents</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/respondus/converting_word_docs/converting_word_docs.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Open Respondus and click on "Import Questions".
                      <img src="../assets/images/instructors/respondus/converting_word_docs/01.png" alt"" />
                    </li>
                    <li>Under "Select File to import", click on "Microsoft Word 2007 (DOCX)".
                      <img src="../assets/images/instructors/respondus/converting_word_docs/02.png" alt"" />
                    </li>
                    <li>Click "Browse" to find the Word document containing the assessment</li>
                    <li>Under "2. Choose where to add the new Questions:", click "Create a new document, named: _________". Enter the name of the assessment in the box.
                      <img src="../assets/images/instructors/respondus/converting_word_docs/04.png" alt"" />
                    </li>
                    <li>Under "Use the Preview button to check for problems", click on "Preview".
                      <ol type="a">
                        <li>If there are errors such as "3 questions had no correct answer" or "invalid questions", ensure that the document was formatted accordingly.
                          <img src="../assets/images/instructors/respondus/converting_word_docs/05-1.png" alt"" />
                        </li>
                        <li>If you have warnings that indicate duplicate questions, it is ok to continue. Click "Finish".
                          <img src="../assets/images/instructors/respondus/converting_word_docs/05-2.png" alt"" />
                        </li>
                      </ol>
                    </li>
                    <li>If there are no warnings, then click on "Finish".
                      <img src="../assets/images/instructors/respondus/converting_word_docs/06.png" alt"" />
                    </li>
                    <li>To Modify a question on Respondus, click on the "Edit" button at the top (1). Click on the "Arrow" at the bottom (2). Click on "Edit" (3).</li>
                    <li>Change the "Numbering Type" for Multiple Choice Answers by clicking on "Settings" (1). Click on "Other Settings" (2). At the bottom, you’ll find "Answer Numbering" (3). Click on the pull down menu and select "Lowercase Letters (a,b,c)" (4). Click on "Use As New Defaults" to change this setting as default for future assessments.
                      <img src="../assets/images/instructors/respondus/converting_word_docs/08-1.png" alt"" />
                      <img src="../assets/images/instructors/respondus/converting_word_docs/08-2.png" alt"" />
                    </li>
                    <li>Click on "Preview and Publish" at the top blue bar.
                      <img src="../assets/images/instructors/respondus/converting_word_docs/09.png" alt"" />
                    </li>
                    <li>To preview the file, click on "Preview the file" and ensure that the questions are formatted correctly and that the answer is correct.
                      <img src="../assets/images/instructors/respondus/converting_word_docs/10.png" alt"" />
                    </li>
                  </ol>
                  
                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Converting Word Documents Modal -->
              </div>
              <!-- END OF CONVERTING WORD DOCUMENTS -->

              <!-- PUBLISH RESPONDUS QUIZ TO BLACKBOARD -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="publish_respondus_quiz"><img src="../assets/images/instructors/respondus/publish_respondus_quiz/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="publish_respondus_quiz">Publish Respondus Quiz to Blackboard</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Publish Respondus Quiz to Blackboard Modal -->
                <div id="publish_respondus_quiz" class="reveal-modal" data-reveal>
                  <h2>Publish Respondus Quiz to Blackboard</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/respondus/publish_respondus_quiz/publish_respondus_quiz.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>To publish the quiz to blackboard, click on "publish to blackboard" and click on the "Publish wizard".
                      <img src="../assets/images/instructors/respondus/publish_respondus_quiz/01.png" alt"" />
                    </li>
                    <li>As soon as the dialog box opens up, click on “Save pool to local file for manual uploading” and click “Next” at the bottom.
                      <img src="../assets/images/instructors/respondus/publish_respondus_quiz/02.png" alt"" />
                    </li>
                    <li>Click "Test with points" (1). Then click "Save As" to save the file onto computer (2). Choose location to save the zip file (3).
                      <img src="../assets/images/instructors/respondus/publish_respondus_quiz/03.png" alt"" />
                    </li>
                    <li>Click "Finish" at the bottom (1). Click "OK" when the dialog box pops up (2).
                      <img src="../assets/images/instructors/respondus/publish_respondus_quiz/04.png" alt"" />
                    </li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Publish Respondus Quiz to Blackboard Modal -->
              </div>
              <!-- END OF PUBLISH RESPONDUS QUIZ TO BLACKBOARD -->

              <!-- UPLOAD ASSESSMENTS FROM RESPONDUS TO BLACKBOARD -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="upload_assessments_from_respondus"><img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="upload_assessments_from_respondus">Upload Assessments from Respondus to Blackboard</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Upload Assessments from Respondus to Blackboard Modal -->
                <div id="upload_assessments_from_respondus" class="reveal-modal" data-reveal>
                  <h2>Upload Assessments from Respondus to Blackboard</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/respondus/upload_assessments_from_respondus/upload_assessments_from_respondus.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Download zip file from Respondus</li>
                    <li>Log on to Blackboard and enter course.</li>
                    <li>Under Control Panel, click on "Course Tools".
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/03.png" alt"" />
                    </li>
                    <li>Click on "Tests, Surveys and Pools".
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/04.png" alt"" />
                    </li>
                    <li>Click on "Tests".</li>
                    <li>To import a test/quiz from Respondus, click on "Import Test" on the blue/gray bar.
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/06.png" alt"" />
                    </li>
                    <li>Under "1. Test Import", click on "Browse my computer" to find the zip file containing assessment.  Click "Submit".
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/07.png" alt"" />
                    </li>
                    <li>Click "Ok" at the bottom once this dialog box appears.
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/08.png" alt"" />
                    </li>
                    <li>To deploy the assessment and enable students to complete it, click on "Assessments" on the left hand column.
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/09.png" alt"" />
                    </li>
                    <li>Click on "Assessments" on the blue/gray bar and click on "Test".
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/10.png" alt"" />
                    </li>
                    <li>Under "Test Options", follow the steps to customize the options for the assessment and click "Submit".
                      <img src="../assets/images/instructors/respondus/upload_assessments_from_respondus/11.png" alt"" />
                    </li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Upload Assessments from Respondus to Blackboard Modal -->
              </div>
              <!-- END OF UPLOAD ASSESSMENTS FROM RESPONDUS TO BLACKBOARD -->

              <!-- IMPORT WORD TESTS INTO RESPONDUS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="import_word_tests_into_respondus"><img src="../assets/images/instructors/respondus/import_word_tests_into_respondus/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="import_word_tests_into_respondus">Import Word Tests into Respondus</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Import Word Tests into Respondus Modal -->
                <div id="import_word_tests_into_respondus" class="reveal-modal" data-reveal>
                  <h2>Import Word Tests into Respondus</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/respondus/import_word_tests_into_respondus/import_word_tests_into_respondus.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <h2>Standard Format for Importing Different Question Types into Respondus</h2>
                  <p>Respondus will import multiple choice, true-false, essay, fill in the blank, and multiple answer questions. The plain text, rich-text, or MS Word file must be organized in a "Standard Format" before it can be imported into Respondus.</p>
                  <p><span class="bold">NOTE: For Detailed information please see attached PDF.</span></p>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Import Word Tests into Respondus Modal -->
              </div>
              <!-- END OF IMPORT WORD TESTS INTO RESPONDUS -->

              <!-- USING RESPONDUS TO CREATE TEST QUESTIONS -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="using_respondus_to_create_test_questions"><img src="../assets/images/instructors/respondus/using_respondus_to_create_test_questions/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="using_respondus_to_create_test_questions">Using Respondus to Create Test Questions</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Using Respondus to Create Test Questions Modal -->
                <div id="using_respondus_to_create_test_questions" class="reveal-modal" data-reveal>
                  <h2>Using Respondus to Create Test Questions</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/respondus/using_respondus_to_create_test_questions/using_respondus_to_create_test_questions.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Open up Respondus and click on <span class="bold">"Exam Wizard"</span>
                      <img src="../assets/images/instructors/respondus/using_respondus_to_create_test_questions/01.png" alt"" />
                    </li>
                    <li>Select the option <span class="bold">"Create a new exam in which all the questions will be entered manually"</span>. Click Next
                      <img src="../assets/images/instructors/respondus/using_respondus_to_create_test_questions/02.png" alt"" />
                    </li>
                    <li>Provide a <span class="bold">name</span> and <span class="bold">description</span>. Click next and we will be ready to create questions.</li>
                    <li>Select the type of question to create from the left side tabs. For instructional purposes we will use the multiple choice question.
                      <img src="../assets/images/instructors/respondus/using_respondus_to_create_test_questions/04.png" alt"" />
                    </li>
                    <li>Put the question in the <span class="bold">"Question Wording"</span> box.</li>
                    <li>Put the respective answers in the <span class="bold">"Answers"</span> boxes.</li>
                    <li>Select the correct answer with the dropdown besides <span class="bold">"Select Correct Answer"</span>.</li>
                    <li>Specify a point value for the question. The default is set to 1.00 point.</li>
                    <li>To preview the question, click on the <span class="bold">"Preview"</span> button.</li>
                    <li>When ready, click <span class="bold">"add to end of list"</span> to create the question. </li>
                    <li>Continue creating your other questions. Created questions will appear at the bottom under the <span class="bold">"Question List"</span>.</li>
                  </ol>

                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Using Respondus to Create Test Questions Modal -->
              </div>
              <!-- END OF USING RESPONDUS TO CREATE TEST QUESTIONS -->

              <!-- PUBLISHING FROM RESPONDUS DIRECTLY TO BLACKBOARD -->
              <div class="large-4 medium-4 small-6 columns end">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="publishing_from_respondus_to_blackboard"><img src="../assets/images/instructors/respondus/publishing_from_respondus_to_blackboard/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="publishing_from_respondus_to_blackboard">Publishing from Respondus Directly to Blackboard</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Publishing from Respondus Directly to Blackboard Modal -->
                <div id="publishing_from_respondus_to_blackboard" class="reveal-modal" data-reveal>
                  <h2>Publishing from Respondus Directly to Blackboard</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/instructors/respondus/publishing_from_respondus_to_blackboard/publishing_from_respondus_to_blackboard.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>You can publish and deploy a test directly into Blackboard. First you must edit your test so it is in the proper format.  See: <a href="#" data-reveal-id="respondus_compatible_mc_test">Creating Respondus Compatible Multiple Choice Assessment</a>, and <a href="#" data-reveal-id="converting_word_docs">Converting Word Documents into Respondus format</a>.</p>

                  <ol>
                    <li>Once all the questions are created, click on the <span class="bold">Settings</span> tab at the top to format any test settings before publishing to Blackboard.</li>
                    <li>Manage the settings under <span class="bold">Random Blocks, Availability</span> and <span class="bold">Other Settings</span>. These settings are used when the Apply Settings option is selected when the test is published.</li>
                    <li><span class="bold">Random Blocks</span> are the same as Question Sets. You can configure several blocks or sets of questions.</li>
                    <li><span class="bold">Availability</span> will set the option in the first part of the Blackboard test canvas.</li>
                    <li><span class="bold">Other Settings</span> will set the rest of the option in Blackboard’s test canvas.<br />
                      NOTE: Be sure <span class="bold">NOT</span> to check Include the test in <span class="italic">Gradebook score calculations</span> unless you are creating a Self-Assessment.
                    </li>
                    <li>If you are going to create several tests you can click <span class="bold">Use as New Defaults</span> to save your settings. If you do this be sure to check and edit any dates you may have added.</li>
                    <li>Once these tests are published to Blackboard, always double check to make sure the settings copied over. You can only specify <span class="bold">Test Availability Exceptions</span> in Blackboard itself. </li>
                    <li>Once the questions are ready and the settings for the test are set, click <span class="bold">Preview and Publish</span> You will be linking Respondus directly to your Blackboard course. Click on <span class="bold">Publish to Blackboard</span> and then <span class="bold">Publish Wizard</span>.</li>
                    <li>To set up the connection between Respondus and Blackboard, click on the dropdown menu beside <span class="bold">Blackboard Server</span>. Select <span class="bold">Add new Server</span>.</li>
                    <li>Select <span class="bold">No, I want to enter the server settings manually.</span></li>
                    <li>Copy the address of the Blackboard Login into box #1. <span class="bold">(NOTE: the full address and not learn.humber.ca)</span></li>
                    <li>Now log in to your blackboard and enter a course you have instructor rights to. Copy the address into box #2</li>
                    <li>Once steps 5-6 are completed, click on Extract > > </li>
                    <li>Give a name for this profile under <span class="bold">Description</span>, e.g. Bb 9.1</li>
                    <li>Put your blackboard login credentials into <span class="bold">Username</span> and <span class="bold">Password</span>. If this is a personal computer, you can check <span class="bold">remember my username and password</span>.<br />
                      <span class="bold">NOTE:</span> Respondus may say it is not responding while it connects to Blackboard.
                    </li>
                    <li>You can now select your linked Blackboard profile under <span class="bold">Blackboard Server.</span> Click <span class="bold">Next</span> to start publishing.</li>
                    <li>Select which of your courses you would like to publish to under <span class="bold">Choose course to publish to.</span></li>
                    <li>You can choose to publish it as a <span class="bold">New Exam</span> or <span class="bold">New Pool</span>. Click next to continue.<br />
                      <span class="bold">Note:</span> If you are publishing it as a pool only then uncheck all choices in number 3.
                    </li>
                    <li>You will be able to select a specific folder to import the new test if you selected the <span class="bold">Create new Exam</span> option. Click Next to start the publishing process.</li>
                    <li>Once publishing is complete, click Finish.</li>
                    <li>Your new Test will be deployed to Blackboard. <span class="bold">Be sure to go into the test options on Blackboard and ensure all settings are correct.</span></li>
                  </ol>

                  <p><span class="bold">To follow exact step with images, Please download PDF file.</span></p>
                  <?php include '../assets/includes/instructor-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Publishing from Respondus Directly to Blackboard Modal -->
              </div>
              <!-- END OF PUBLISHING FROM RESPONDUS DIRECTLY TO BLACKBOARD -->
              
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
