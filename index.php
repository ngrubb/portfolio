<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noah Grubb</title>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/portfolio.css" rel="stylesheet">


</head>

<body>
    <div class="container">
        <div class="span5" id="header">
            <div id="logo" class="circle">
                <img src="img/me.png" class="img-circle" alt="Noah Grubb"/>
            </div>

            <h1>Noah Grubb</h1>
            <h2 class="muted">Web Developer</h2>

            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav">
                      <li>
                        <a href="#about">About</a>
                      </li>
                      <li class="divider-vertical"></li>
                      <li><a href="#experiences">Education &amp; Jobs</a></li>
                      <li class="divider-vertical"></li>
                      <li><a href="#portfolio">Portfolio</a></li>
                      <li class="divider-vertical"></li>
                      <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========ABOUT PANEL========== -->
	<div class="row panel" id="about">
        <!--  container -->
        <div class="container">

            <h2><span class="muted">About</span>Me</h2>

            <p class="lead bio pull-left span8">My name is Noah Grubb and I am a Senior Marketing major with a Computer Science minor at Messiah College.
             I currently live in the Harrisburg, Pennsylvania area. I have a passion for the web and I dream of becoming a successful web developer! 
             Some of my favorite things are: live music, chicken parmesan, and Minecraft.</p>

            <img src="img/steve.png" class="pull-right bio-image" alt="Minecraft Steve"/>
        </div><!--  /container -->
    </div><!--  /ABOUT PANEL -->


    <!-- ==========EXPERIENCES PANEL========== -->
    <div class="row panel" id="experiences">
        <!--  container -->
        <div class="container">
                <div class="education">
                    <div class="row">
                        <h2>Education<span class="muted">&amp;</span>Jobs</h2>

                        
                        <div class="span4 pull-left">
                            <img src="img/mclogo.png" alt="Messiah College Logo"/>
                        </div>
                        <div class="span5 pull-right">
                            <h4 class="company">Messiah College</h4>
                            <p class="muted">2009 - 2013</p>
                            <p class="position">B.S. in Marketing, Minor in Computer Science</p>
                            <p class="gpa">GPA 3.55</p>
                            <p class="job-description">- Vice-President of Students in Free Enterprise</p>
                        </div>
                    </div>
                </div>

                <div class="company-info row-fluid">

                    <div class="span4">
                        <div class="company-logo">
                            <img src="img/keychain.jpg" class="img-circle" alt="SAB Logo"/>
                        </div>
                        <h4 class="company">SAB Lost Films</h4>
                        <p class="muted">2010 - Present</p>
                        <p class="position">Head Projectionist</p>
                        <p class="job-description">
                            <ul>
                                <li>Manage, train, and assist other projectionists</li>
                                <li>Troubleshoot technical issues and cooperate with outside parties</li>
                            </ul>  
                        </p>
                    </div>

                    <div class="span4">
                        <div class="company-logo">
                            <img src="img/sams_club.png" alt="Sam's Club Logo"/>
                        </div>
                        <h4 class="company">Sam's Club</h4>
                        <p class="muted">2012</p>
                        <p class="position">Web Content Management Intern</p>
                        <p class="dept">SamsClub.com</p>
                        <p class="job-description">
                            <ul>
                                <li>Performed a search term audit to optimize the search terms for over 12,000 items</li>
                                <li>Developed strategies, planned implementation, and analyzed results of the project</li>
                                <li>Assisted in managing the workflow from merchants to the Content and Creative team</li>
                                <li>Trained and educated the content team on search term best practices and implementation</li>
                            </ul>                     
                        </p>
                    </div>
               
                    <div class="span4">
                        <div class="company-logo">
                            <img src="img/cpaeel_logo.png" class="img-rounded cpaeel-logo" alt="CPAEEL Logo"/>
                        </div>
                        <h4 class="company">CPAEEL</h4>
                        <p class="muted">2011 - Present</p>
                        <p class="position">Digital Marketing Intern</p>
                        <p class="job-description">
                            <ul>
                                <li>Developed a digital marketing strategy  </li>
                                <li>Created, updated, and maintained the organization’s web site </li>
                            </ul>   
                        </p>
                    </div>
                </div>
            </div><!--  /container -->
        </div><!--  /EXPERIENCES PANEL -->

    
    <!-- ==========PORTFOLIO PANEL========== -->
    <div class="row panel" id="portfolio">
        <!--  container -->
        <div class="container">

                <h2>Portfolio</h2>


            <p class="lead portfolio-description"></p>

<!--        <div class="row" id="skills">
            </div> -->

            <div class="row-fluid" id="portfolioWork">
                <p class="lead">Listed below are screenshots and information pertaining to a few of my personal projects.</p>

                <ul class="thumbnails">
                    <li class="span3">
                        <a class="thumbnail" id="cpaeel-trigger" data-toggle="collapse" data-target="#cpaeel-collapsible">
                            <img src="img/cpaeel_new.png" alt="">
                        </a>
                    </li>
                    <li class="span3">
                        <a class="thumbnail" id="turtle-trigger" data-toggle="collapse" data-target="#turtle-collapsible">
                            <img src="img/turtle8me8.png" alt="">
                        </a>
                    </li>
                    <li class="span3">
                        <a class="thumbnail" id="bridge-trigger" data-toggle="collapse" data-target="#bridge-collapsible">
                            <img src="img/thebridge.png" alt="">
                        </a>
                    </li>
                    <li class="span3">
                        <a class="thumbnail" id="l33t-trigger" data-toggle="collapse" data-target="#l33t-collapsible">
                            <img src="img/l33tbeatz.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div><!--  /container -->

                <div id="cpaeel-collapsible" class="collapse collapsible-content">
                    <!--  container -->
                    <div class="container">
                        <img class="portfolio-image" src="img/macbook_air_cpaeel.png" width="550px" height="450px">
                        <div class="portfolio-content">
                            <h5>Central PA Estate &amp; Elder Law</h5>
                            <p class="description">I designed and developed CPAEEL's new website to increase the organization's web presence.</p>

                            <p class="description">This site was built on the Twitter Bootstrap framework.</p>
                            <a href="http://www.cpaeel.com" class="portfolio-link">
                                <button class="btn btn-large btn-inverse" type="button">Visit Site</button>
                            </a>
                            <a href="https://github.com/ngrubb/cpaeel" class="github-link">
                                <button class="btn btn-large" type="button">View Code</button>
                            </a>                        </div>
                    </div><!--  /container -->
                </div>

                <div id="turtle-collapsible" class="collapse collapsible-content">
                    <!--  container -->
                    <div class="container">
                        <img class="portfolio-image" src="img/macbook_air_turtle.png" width="550px" height="450px">
                        <div class="portfolio-content">
                            <h5>Turtle8me8</h5>
                            <p class="description">Turtle8me8 is a fun website I created to house information for our website. The website is an online portal to our apartment's blog, TheBridge (see above), and in the future, our server files.</p>

                            <p class="description">
                            The name of the website actually comes from a goofy old email address one of my roommates made when he was younger.</p>
                            <a href="http://turtle8me8.com" class="portfolio-link">
                                <button class="btn btn-large btn-inverse" type="button">Visit Site</button>
                            </a>
                            <a href="https://github.com/ngrubb/turtle8me8" class="github-link">
                                <button class="btn btn-large" type="button">View Code</button>
                            </a>
                        </div>
                    </div><!--  /container -->
                </div>

                <div id="bridge-collapsible" class="collapse collapsible-content">
                    <!--  container -->
                    <div class="container">
                        <img class="portfolio-image" src="img/macbook_air_bridge.png" width="550px" height="450px">
                        <div class="portfolio-content">
                            <h5>TheBridge</h5>
                            <p class="description">TheBridge is the combined effort of my roommate, <a href="http://benclouser.com">Ben Clouser</a>, and I's desire for apartment automation. I designed and developed the front-end and much of the PHP backend. Ben designed a system to interact with our database by using an arduino and some hand-crafted mechanisms.</p>

                            <p>For videos of this in progress visit Ben's portfolio, <a href="#">here.</a></p>
                            <a href="http://turtle8me8.com/m_bridge.php" class="portfolio-link">
                                <button class="btn btn-large btn-inverse" type="button">Visit Site</button>
                            </a>
                            <a href="https://github.com/ngrubb/theBridge" class="github-link">
                                <button class="btn btn-large" type="button">View Code</button>
                            </a>
                        </div>
                    </div><!--  /container -->
                </div>

                <div id="l33t-collapsible" class="collapse collapsible-content">
                    <!--  container -->
                    <div class="container">
                        <img class="portfolio-image" src="img/macbook_air_l33t.png" width="550px" height="450px">
                        <div class="portfolio-content">
                            <h5>L33t-Beatz</h5>
                            <p class="description">L33t-Beatz was a class project where we had to create a music kiosk with features that we decided on with our backing database team. Since I was in both classes, I participated in the database management as well as the web development.</p>

                            <p class="description muted">Disclaimer: This project is not perfectly polished, but it does help to attest to some of my PHP skills.</p>
                            <a href="http://camelot.cs.messiah.edu/~l33tbeatz/" class="portfolio-link">
                                <button class="btn btn-large btn-inverse" type="button">Visit Site</button>
                            </a>
                            <a href="https://github.com/ngrubb/l33tbeatz" class="github-link">
                                <button class="btn btn-large" type="button">View Code</button>
                            </a>
                        </div>
                    </div><!--  /container -->
                </div>
   
    </div><!--  /PORTFOLIO PANEL -->


    <!-- ==========CONTACT PANEL========== -->
    <div class="row panel" id="contact">
        <!--  container -->
        <div class="container">

            <div class="page-header">
                <h2>Contact<span class="muted">Me</span></h2>
            </div>

            <div class="row">

            <?php  
          
                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
              
            ?> 

                <div class="contact-form pull-left">
                    <form name="contact" id="contact-form" method="post" action="contact_form_submission.php">
                        <legend><i class="icon-comments icon-2x"></i> Leave a Message:</legend>
                        <div class="row">
                            <div class="identifiers">
                              <div class="control-group">
                                <label class="control-label" for="inputName">Name:</label>
                                <div class="controls">
                                  <input type="text" id="inputName" class="input-large required" name="name" placeholder="Name">
                                </div>
                              </div>
                              <div class="control-group">
                                <label class="control-label" for="inputEmail">Email:</label>
                                <div class="controls">
                                  <input type="email" id="inputEmail" class="input-large required" name="email" placeholder="Email">
                                </div>
                              </div>
                            </div>
                            <div class="message">
                                <div class="control-group">
                                    <label class="control-label" for="subjectArea">Subject:</label>
                                    <div class="controls">
                                      <textarea rows="5" id="subjectArea" class="span4 required" name="message" placeholder="Leave a message!"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="buttons">
                            <input type="hidden" name="save" value="contact"> 
                            <button type="submit" class="btn pull-right">Send</button>
                        </div>
                    </form>
                </div>

                <div class="connect pull-right">
                    <h5>Connect with me!</h5>
                    <ul class="social-icons">
                        <li><a href="http://www.facebook.com/noahgrubb"><i class="icon-facebook-sign icon-3x"></i></a></li>
                        <li><a href="https://twitter.com/noahgrubb"><i class="icon-twitter-sign icon-3x"></i></a></li>
                        <li><a href="http://www.linkedin.com/in/ngrubb/"><i class="icon-linkedin-sign icon-3x"></i></a></li>
                        <li><a href="https://github.com/ngrubb"><i class="icon-github icon-3x"></i></a></li>
                    </ul>
                </div>
            </div>

            <div id="copyright" class="">
                <p><small>© 2012 Noah Grubb - Web Portfolio</small></p>
            </div> 
        </div><!--  /container -->
    </div><!--  /CONTACT PANEL -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/portfolio.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/form_validation.js"></script>
   
<script>
      $("contact-form").validate();
</script>
</body>

</html>
