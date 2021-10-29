<!DOCTYPE html>
<html>

<head>
    <title>Personel File: Miguel Pimentel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://keycdn.layerjs.org/libs/layerjs/layerjs-0.6.4.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="crt">
    <div id="loader">
        <p class="title">Accessing Personel Database<br>Please Enter Target's Name: <br><br><span id="name"></span></p>
    </div>
    <a href="#website.!left&p=right" class="btn-left btn" id="leftBtn">&lt; <span class="btn-txt" id="left">GOALS</span></a>
    <a href="#website.!right&p=left" class="btn-right btn" id="rightBtn"><span class="btn-txt" id="right">SKILLS</span> &gt;</a>
    <div id="title">
        <h1 class="content center">Personel File: Miguel Pimentel</h1>
    </div>
    <div class="navigation content">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#achievements">Achievements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#goals">Goals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Portfolio.php">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div lj-type="stage" class="container-fluid">
        <!-- Add a stage. -->
        <div lj-type="layer" lj-default-frame="achievements" lj-name="website" lj-no-url="true" id="website">
            <!-- Foreground layer. -->
            <div lj-type="frame" class="container" lj-name="achievements" lj-neighbors-l="contact" lj-neighbors-r="skills">
                <!-- Frame containing the actual content. If higher than the stage it will scroll. -->
                <div class="row">
                    <div class="col-sm">
                        <img src="images/me.jpg" alt="An image of my face, poorly rendered in the style of my site." class="content img-fluid rounded">
                    </div>
                    <div class="col-md">
                        <h1 class="content">Achievements</h1>
                        <ul>
                            <li>Phi Theta Kappa Member</li>
                            <ul>
                                <li>February, 2018 - September, 2020</li>
                            </ul>
                            <li>SPC President's List</li>
                            <ul>
                                <li>January, 2018</li>
                            </ul>
                            <li>Holcombe Scholarship</li>
                            <ul>
                                <li>September, 2020</li>
                            </ul>
                            <li>Florida Academic Scholars</li>
                            <ul>
                                <li>September, 2020</li>
                            </ul>
                            <li>Associates in Web Development</li>
                            <ul>
                                <li>September, 2020</li>
                            </ul>
                            <li>Advanced Java Certificate</li>
                            <ul>
                                <li>September, 2020</li>
                            </ul>
                            <li>My portfolio</li>
                            <ul>
                                <li><a href="Portfolio.php">Click Here</a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div lj-type="frame" class="container" lj-name="skills" lj-neighbors-l="achievements" lj-neighbors-r="goals">
                <div class="row">
                    <h1 class="content center">Skills</h1>
                </div>
                <div class="row">
                    <div class="col-md">
                        <ul>
                            <li>Affinity Designer</li>
                            <li>Apache</li>
                            <li>C#</li>
                            <li>CSS 3</li>
                            <li>Express.JS</li>
                            <li>Gimp</li>
                            <li>HTML5</li>
                            <li>Inkscape</li>
                            <li>Java</li>
                            <li>Javascript</li>
                            <li>JQuery</li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <ul>
                            <li>Linux</li>
                            <li>MongoDB</li>
                            <li>MySQL</li>
                            <li>Node.js</li>
                            <li>PHP</li>
                            <li>Pug / Jade</li>
                            <li>Python</li>
                            <li>Scratch</li>
                            <li>Twitter Bootstrap</li>
                            <li>Wagtail</li>
                            <li>Wordpress</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div lj-type="frame" class="container" lj-name="goals" lj-neighbors-l="skills" lj-neighbors-r="contact">
                <div class="row">
                    <h1 class="content center">Goals</h1>
                </div>
                <div class="row">
                    <div class="col-md">
                        <dl>
                            <dt>Receive My Bachelor's in Information Architecture</dt>
                            <dd>I'm attending USF to get a BSAS: Information Studies: Information architecture in Spring, 2022</dd>
                            <dt>Advance my skills</dt>
                            <dd>I want to advance my skills in data analysis, human interfaces, and cloud computing.</dd>
                            <dt>Project: Metanarativ</dt>
                            <dd>I want to create novel ways for tabletop gamers to connect, meet up, and thrive.</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div lj-type="frame" class="container" lj-name="contact" lj-neighbors-l="goals" lj-neighbors-r="achievements">
                <div class="row">
                    <h1 class="content center">Contact Me</h1>
                </div>
                <div class="row">
                    <div class="col-md">
                        <ul>
                            <li>My Email: justo@aredpanic.com</li>
                            <li>My Phone: 727-225-2287</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://keycdn.layerjs.org/libs/layerjs/layerjs-0.6.4.min.js"></script>
    <script src="javascript/scripts.js"></script>
    <div class="overlay"></div>
</body>

</html>
