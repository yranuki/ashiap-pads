<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ashiap</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <!-- <script src="jquery.min.js"></script> -->
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <style media="screen">
      .custom-bg {
        background-image: url(atta.png);
        background-position: center;
        height: 100%;
        width: 100%;
      }
      .pads {
        padding: 80px;
        box-shadow: 0 0 15px black;
      }
    </style>
  </head>
  <body>
    <div class="custom-bg">
      <div class="container text-center">
        <div class="" style="padding: 16.05vw 0">
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-4">
                <div class="btn btn-light ashiap1 pads">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="btn btn-light ashiap2 pads">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="btn btn-light ashiap3 pads">
                </div>
              </div>
            </div>
            <div class="" style="padding: 1vw 0">
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="btn btn-light ashiap4 pads">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="btn btn-light ashiap5 pads">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="btn btn-light ashiap6 pads">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2">
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {

      var ashiap1  = new Audio('Ashiap1.mp3');
      var ashiap2 = new Audio('Ashiap2.mp3');
      var ashiap3 = new Audio('Ashiap3.mp3');
      var ashiap4 = new Audio('Ashiap4.mp3');
      var ashiap5 = new Audio('Ashiap5.mp3');
      var ashiap6 = new Audio('Ashiap6.mp3');

      $(".ashiap1").mousedown(function() {
        ashiap1.load();
        ashiap1.play();
      });
      $(".ashiap2").mousedown(function() {
        ashiap2.load();
        ashiap2.play();
      });
      $(".ashiap3").mousedown(function() {
        ashiap3.load();
        ashiap3.play();
      });
      $(".ashiap4").mousedown(function() {
        ashiap4.load();
        ashiap4.play();
      });
      $(".ashiap5").mousedown(function() {
        ashiap5.load();
        ashiap5.play();
      });
      $(".ashiap6").mousedown(function() {
        ashiap6.load();
        ashiap6.play();
      });
    });
    </script>
  </body>
</html>
