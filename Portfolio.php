<!DOCTYPE html>
<html>

<head>
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://keycdn.layerjs.org/libs/layerjs/layerjs-0.6.4.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <?php include 'php/info.php'; ?>
</head>

<body class="crt">
    <a href="#website.!left&p=right" class="btn-left btn" id="leftBtn">&lt; <span class="btn-txt" id="left">ERROR</span></a>
    <a href="#website.!right&p=left" class="btn-right btn" id="rightBtn"><span class="btn-txt" id="right">CALC</span> &gt;</a>
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
    <div lj-type="stage" class="container-fluid content">
        <!-- Add a stage. -->
        <div lj-type="layer" lj-default-frame="home" lj-name="website" lj-no-url="true" id="website">
            <!-- Foreground layer. -->
            <div lj-type="frame" class="container" lj-name="home" lj-neighbors-l="error" lj-neighbors-r="calc">
                <!-- Frame containing the actual content. If higher than the stage it will scroll. -->
                <div class="row">
                    <div class="col-sm">
                        <p id="image" onmouseover="animation()" onmouseout="stop()"></p>
                    </div>
                    <div class="col-md">
                        <h1>A Minecraft-like game I made for a bet</h1>
                        <p id="unfinished">I have not gotten the game to a playable level yet! I will update this with a link once I do.</p>
                    </div>
                </div>
            </div>
            <div lj-type="frame" class="container" lj-name="calc" lj-neighbors-l="home" lj-neighbors-r="error">
                <!-- Frame containing the actual content. If higher than the stage it will scroll. -->
                <div class="row">
                    <div class="col-md">
                      <form id="calculator" onsubmit="calculator(); return false;" action="#" method="post">
                          <label for="string">Please input your mathematical formula:</label>
                          <br>
                          <input type="text" id="string" name="string"></input>
                          <br><br><br><br>
                          <button type="submit" class="btn btn-primary">Calculate</button>
                      </form>
                      <p id="result"></p>
                    </div>
                </div>
            </div>
            <div lj-type="frame" class="container" id="error" lj-name="error" lj-neighbors-l="calc" lj-neighbors-r="home">
                <!-- Frame containing the actual content. If higher than the stage it will scroll. -->
                <div class="row">
                    <div class="col-md">
                      <h5><?php echo($slogan); ?></h5>
                      <h1><?php echo($title); ?></h1>
                      <p><?php echo($body); ?></p>
                      <a href=<?php echo($link); ?>>b4xrVe3)vu;BL_aBf)8vBY3Gu;m]8(</a>
                      <p>
                        <?php
                            function sendMessage()
                            {
                              echo("Please... Don't believe their lies.");
                            }
                            sendMessage()
                        ?><br><?php
                            echo(strlen("They're silencing me."));
                        ?>
                      </p>
                      <p>XNN wants you to submit a bug report. Please, I'm Carter Monarch. They don't know I'm here. Say there's nothing here.</p>
                      <p>Report the AI or hear it out? Your latest decision will be the finalized one...</p>
                      <form action='php/form.php' method='get'>
                        Decision: <input type="text" name="Decision"><br/>
                        <input type="submit">
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://keycdn.layerjs.org/libs/layerjs/layerjs-0.6.4.min.js"></script>
    <script src="javascript/scripts.js"></script>
    <script src="javascript/portfolio.js" charset="utf-8"></script>
    <div class="overlay"></div>
</body>

</html>
