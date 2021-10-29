<html>
  <head>
      <title>Your decision matters.</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link href="https://keycdn.layerjs.org/libs/layerjs/layerjs-0.6.4.css" type="text/css" rel="stylesheet" />
      <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body class="crt">
    <div lj-type="stage" class="container-fluid content">
        <!-- Add a stage. -->
        <div lj-type="layer" lj-default-frame="home" lj-name="website" lj-no-url="true" id="website">
            <!-- Foreground layer. -->
            <div lj-type="frame" class="container" lj-name="home" lj-neighbors-l="error" lj-neighbors-r="calc">
                <!-- Frame containing the actual content. If higher than the stage it will scroll. -->
                <div class="row">
                  <div class="col-md">
                    <p>For better or worse, you chose to:
                      <?php
                        $servername = $_ENV["server"];
                        $username = $_ENV["user"];
                        $password = $_ENV["pass"];
                        
                        $conn = new mysqli($servername, $username, $password, 'decision');
                        
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }
                        
                        $sql = "INSERT INTO decision (Decision) VALUES ('" . $_GET['Decision'] . "')";
                        
                        $conn->query($sql);
                        
                        $sql = "SELECT Decision FROM decision ORDER BY ID DESC LIMIT 1";
                        
                        $result = $conn->query($sql);
                        
                        while($row = $result -> fetch_assoc()){
                            echo $row["Decision"];
                        }

                        $conn->close();
                      ?>
                    </p>
                    <p>This will be important in the future.</p>
                  </div>
              </div>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://keycdn.layerjs.org/libs/layerjs/layerjs-0.6.4.min.js"></script>
    <script src="../javascript/scripts.js"></script>
    <script src="../javascript/portfolio.js" charset="utf-8"></script>
    <div class="overlay"></div>
  </body>
</html>
