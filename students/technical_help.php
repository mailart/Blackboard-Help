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
            <h1>Students - Technical Help</h1>

            <div class="row">

              <!-- COMMON TECHNICAL ISSUES -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="common_technical_issues"><img src="../assets/images/students/technical_help/common_technical_issues/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="common_technical_issues">BB9.1 Common Technical Issues</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Common Technical Issues Modal -->
                <div id="common_technical_issues" class="reveal-modal" data-reveal>
                  <h2>Common Technical Issues</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/technical_help/common_technical_issues/common_technical_issues.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <h2>I Can't Log into Blackboard</h2>
                  <p class="bold">Go to <a href="https://learn.humber.ca" target="_blank">https://learn.humber.ca</a> and enter your username and password.</p>
                  <p>If you receive an error message stating “your credentials can’t be authenticated,” it may be an issue with your password. The password is case sensitive, so input it exactly the way it was generated. </p>
                  <p>If you still have problems logging in, you may need to contact the IT department for assistance.</p>

                  <h2>I Don't See My Course(s)</h2>
                  <p>Students are added to Blackboard Learn classes one week before the official start date of the semester. At that time they will be able to view their course(s). </p>
                  <p>If you don’t see your class in the BbLearn list after the first official day of class, contact your instructor to confirm it has been made available to students.</p>

                  <h2>My Test Crashed. What do I do?</h2>
                  <p>If you're in the middle of taking a test when your computer or Web browser crashes:</p>
                  <ol>
                    <li>Immediately close ALL windows on your computer.</li>
                    <li>Restart the Web browser.</li>
                    <li>If the Web browser won't restart, reboot your computer.</li>
                  </ol>
                  <p>If You Still have Problems Logging in, You May need to Contact the IT Department For Assistance.</p>
                  <p>All questions that were automatically saved should appear. In most cases you will be able to continue where you left off. However, your instructor controls the Test settings which specify whether you will be able to continue or not.</p>
                  <p class="bold">Contact your Instructor if you are unable to continue taking a test.</p>

                  <h2>I Sent an Email to My Instructor. Where is it?</h2>
                  <p>Blackboard keeps no record of sent email. When you send an email message, you receive a copy of your email in the Inbox of your external email account. Keep a copy of important messages in case you need them at a later date.</p>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Common Technical Issues Modal -->
              </div>
              <!-- END OF COMMON TECHNICAL ISSUES -->

              <!-- JAVA PLUGIN -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="java_plugin"><img src="../assets/images/students/technical_help/java_plugin/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="java_plugin">Java Plugin</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Java Plugin Modal -->
                <div id="java_plugin" class="reveal-modal" data-reveal>
                  <h2>Java Plugin</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/technical_help/java_plugin/java_plugin.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <ol>
                    <li>Blackboard relies heavily on the Java client installed with your Web browser. Cookies, Java, and scripts must be enabled for Blackboard to function properly. Blackboard requires the latest version of Sun JRE 7. The Java can be downloaded from <a href="http://www.java.com/en/download/manual.jsp" target="_blank">http://www.java.com/en/download/manual.jsp</a>.</li>
                    <li>Click on <span class="bold">Windows Offline</span>.
                      <img src="../assets/images/students/technical_help/java_plugin/02.png" alt"" />
                    </li>
                    <li>A screen will appear, click <span class="bold">Save File</span> and save to your Desktop.
                      <img src="../assets/images/students/technical_help/java_plugin/03.png" alt"" />
                    </li>
                    <li>Once the download is complete, open the downloaded file from your desktop.</li>
                    <li>Click <span class="bold">Install</span>.
                      <img src="../assets/images/students/technical_help/java_plugin/05.png" alt"" />
                    </li>
                    <li>If the download is successful, you will receive this message.
                      <img src="../assets/images/students/technical_help/java_plugin/06.png" alt"" />
                    </li>
                  </ol>

                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Java Plugin Modal -->
              </div>
              <!-- END OF JAVA PLUGIN -->

              <!-- DOWNLOAD/UPLOAD FILE ISSUES -->
              <div class="large-4 medium-4 small-6 columns">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="download_upload_file_issues"><img src="../assets/images/students/technical_help/download_upload_file_issues/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="download_upload_file_issues">Download/Upload File Issues</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Download/Upload File Issues Modal -->
                <div id="download_upload_file_issues" class="reveal-modal" data-reveal>
                  <h2>How to Create a Group Wiki</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/technical_help/download_upload_file_issues/download_upload_file_issues.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>There are a number of reasons you may have trouble uploading or downloading a file from BbLearn. Here are a couple of things you can check:</p>

                  <h3>File Name</h3>
                  <p>Avoid using special characters ( @ ! # % ? & ; * ) for any titles or file names that will be uploaded or downloaded from BbLearn.</p>
                  <p>Problems caused by special characters could include:</p>
                  <ul>
                    <li>Files may not upload to BbLearn</li>
                    <li>Files may not download from BbLearn</li>
                    <li>Uploaded files are hidden and not viewable by your Instructor and/or Students</li>
                  </ul>

                  <h3>File Size</h3>
                  <p>Depending on the size of the file you're trying to view, download, or upload, and the speed of your connection on the internet, you may need to wait anywhere from several minutes to several hours if the file is really large.</p>
                  <p>Browser Plugin Missing</p>
                  <p>Common free Web browser plugins for viewing course content are:</p>
                  <table>
                    <tbody>
                      <tr>
                        <td>Adobe Reader</td>
                        <td>JAVA</td>
                        <td>Real Player</td>
                      </tr>
                      <tr>
                        <td>Flash Player</td>
                        <td>QuickTime</td>
                        <td>Windows Media Player </td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>A PDF won’t open</h3>
                  <p>At times, a PDF will come up blank, or all black, or all white. Here are a few things to try:</p>
                  <p class="bold">PC Tips</p>
                  <ul>
                    <li>Download the latest Adobe Reader.</li>
                    <li>Update your Web Browser to the latest version.</li>
                    <li>Try a different Web Browser (Chrome, Firefox, Internet Explorer).</li>
                  </ul>
                  <p class="bold">Mac Tips</p>
                  <ul>
                    <li>Download & install the latest Adobe Reader.</li>
                    <li>Use the Google Chrome Web Browser.</li>
                    <li>Use the PDF Browser Plugin.</li>
                  </ul>
                  
                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Download/Upload File Issues Modal -->
              </div>
              <!-- END OF DOWNLOAD/UPLOAD FILE ISSUES -->

              <!-- BROWSER CHECK -->
              <div class="large-4 medium-4 small-6 columns end">
                <!-- Grid Tile -->
                <div class="grid-tile">
                  <a href="#" data-reveal-id="browser_check"><img src="../assets/images/students/technical_help/browser_check/tile.png" alt"" /></a>
                  <div class="grid-link-container">
                    <a href="#" data-reveal-id="browser_check">Browser Check</a>
                  </div>
                </div>
                <!-- End of Grid Tile -->

                <!-- Browser Check Modal -->
                <div id="browser_check" class="reveal-modal" data-reveal>
                  <h2>What Browsers are Supported by Blackboard 9.1?</h2>
                  <div class="downloads">
                    <p><a href="../assets/_source/students/technical_help/browser_check/browser_check.pdf" target="_blank"><span class="icon-book"></span> PDF</a></p>
                    <div class="clearfix"></div>
                  </div>

                  <p>The following tables highlight the new platform and browser configurations tested for SP 12 and SP13 using the following support terms:</p>

                  <ul>
                    <li class="green">Certified: Fully supported technology with highest level of testing before release.</li>
                    <li>Compatible: Fully supported technology with minimal level of testing before release.</li>
                    <li class="red">Unsupported: Unsupported technology because it is either impossible or not tested.</li>
                  </ul>

                  <h2>Browser Support for SP13</h2>
                  <h3>Microsoft Windows</h3>
                  <table>
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Internet Explorer 10</th>
                        <th scope="col">Internet Explorer 9</th>
                        <th scope="col">Internet Explorer 8</th>
                        <th scope="col">Firefox ESR<sup>1</sup></th>
                        <th scope="col">Firefox (Final Release Channel)<sup>2</sup></th>
                        <th scope="col">Chrome (Stable Channel)<sup>3</sup></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="bold">Windows XP (32-bit)</span></td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td>Compatible</td>
                        <td class="green">Certified</td>
                        <td>Compatible</td>
                        <td>Compatible</td>
                      </tr>
                      <tr>
                        <td><span class="bold">Windows Vista (32-bit)</span></td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td class="green">Certified</td>
                        <td>Compatible</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td>Compatible</td>
                      </tr>
                      <tr>
                        <td><span class="bold">Windows Vista (64-bit)</span></td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td>Compatible</td>
                        <td>Compatible</td>
                        <td class="green">Certified</td>
                        <td>Compatible</td>
                        <td>Compatible</td>
                      </tr>
                      <tr>
                        <td><span class="bold">Windows 7 (32-bit)</span></td>
                        <td>Compatible</td>
                        <td class="green">Certified</td>
                        <td>Compatible</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                      </tr>
                      <tr>
                        <td><span class="bold">Windows 7 (64-bit)</span></td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td>Compatible</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                      </tr>
                      <tr>
                        <td><span class="bold">Windows 8 (32-bit)</span></td>
                        <td>Compatible</td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                      </tr>
                      <tr>
                        <td><span class="bold">Windows 8 (64-bit)</span></td>
                        <td class="green">Certified</td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td class="red">Unsupported by Microsoft</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                      </tr>
                    </tbody>
                  </table>

                  <h3>Apple Mac OS</h3>
                  <table>
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Safari 6.0.1</th>
                        <th scope="col">Safari 5.1</th>
                        <th scope="col">Safari 5.0</th>
                        <th scope="col">Safari 4.0</th>
                        <th scope="col">Firefox ESR<sup>1</sup></th>
                        <th scope="col">Firefox4 (Final Release Channel)<sup>2</sup></th>
                        <th scope="col">Chrome (Stable Channel)<sup>3</sup></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span class="bold">Mac OS X 10.6</span></td>
                        <td class="red">Unsupported by Apple</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td>Compatible</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                      </tr>
                      <tr>
                        <td><span class="bold">Mac OS X 10.7</span></td>
                        <td class="green">Certified (10.7.5)</td>
                        <td class="green">Certified</td>
                        <td class="red">Unsupported by Apple</td>
                        <td class="red">Unsupported</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>

                      </tr>
                      <tr>
                        <td><span class="bold">Mac OS X 10.8</span></td>
                        <td class="green">Certified (10.8.2)</td>
                        <td class="green">Certified</td>
                        <td class="red">Unsupported by Apple</td>
                        <td class="red">Unsupported</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                        <td class="green">Certified</td>
                      </tr>
                    </tbody>
                  </table>

                  <h2>Technologies Not Supported</h2>
                  <p>The following technologies are not supported by SP 11:</p>
                  <ul>
                    <li>Internet Explorer 6, 7</li>
                    <li>Firefox 1.x, 2.0, 3.0, 3.5, and 3.6</li>
                    <li>Safari 2.0, 3.x and any version on Windows</li>
                    <li>Windows XP 64-bit</li>
                    <li>Mac OSX 10.3, 10.4, 10.5</li>
                    <li>Java 5, although it may continue to work</li>
                  </ul>

                  <h2>Other Support in SP 13</h2>
                  <h4 class="bold">Accessibility and JAWS</h4>
                  <p>Blackboard strives to make all its products as accessible as possible. JAWS for Windows 13 and 14 were used during accessibility testing in SP 13.</p>

                  <h4 class="bold">JRE Support</h4>
                  <p>
                    Blackboard Learn requires the latest version of Sun JRE 7, &nbsp; JRE 6 will continue to work SP 11.<br />
                    The JRE can be downloaded from <a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html">http://www.oracle.com/technetwork/java/javase/downloads/index.html</a>.
                  </p>
                  <p>Windows system administrators who want to provide auto-download for users can find the.cab file link for the appropriate JRE at <a href="http://www.oracle.com/technetwork/java/javase/autodownload-140472.html">http://www.oracle.com/technetwork/java/javase/autodownload-140472.html</a></p>


                  <?php include '../assets/includes/student-modal-footer.php' ?>

                  <a class="button radius right btn-close">Close</a>
                  <a class="close-reveal-modal">&#215;</a>
                </div>
                <!-- End of Browser Check Modal -->
              </div>
              <!-- END OF BROWSER CHECK -->

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
