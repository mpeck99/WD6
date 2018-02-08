<body class="off-canvas-nav-left" style="padding-top:70px;">

      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" data-toggle="popover" data-placement="bottom" data-content="My Name!">Morgan Peck</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <?
            $links=unserialize($menu); 
            if(isset($_SERVER['REQUEST_URI']))
                {
                    foreach($links as $items){
                        echo "<li class='active'><a href=".$items["url"].">".$items["title"]."</a></li>";
                       
                    }
                }
                else{
                    foreach($links as $items){
                        echo "<li class='active'><a href=".$items["url"].">".$items["title"]."</a></li>";
                       
                    }
                }
            //var_dump($items["url"]);
            
        ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Links<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?
                $links=unserialize($data);
                foreach($links as $items){
                //var_dump($items["url"]);
                echo "<li><a href=".$items["url"].">".$items["title"]."</a></li>";
                }
                  ?>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Click Me</button>
              <a href="../controllers/secondcontroller.php">Second Controller</a>
            </form>
 
  </div>


          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Morgans Modal</h5>

      </div>
      <div class="modal-body">
        This is my modal!
      </div>
      <div class="modal-footer">
        <button type="button" id="#close" class="btn btn-secondary" data-dismiss="modal" onclick=$(#myModal).modal('hide')>Close</button>
      </div>
    </div>
  </div>
</div>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="d-block img-fluid" src="../assets/images/cat2.jpg" alt="Cat" style="width: 500px,text-align:center"/>
        </div>
        <div class="item">
          <img class="d-block img-fluid" src="../assets/images/forest.jpg" alt="Forest" style="width: 500px,text-align:center" />
        </div>
        <div class="item">
          <img class="d-block img-fluid" src="../assets/images/sea.jpeg" alt="Sea" style="width: 500px, text-align:center"/>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

     

      <div class="progress" data-toggle="popover" data-placement="top" data-content="This is a progres bar at 10%!" style="margin-top:10px">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress" data-toggle="popover" data-placement="left" data-content="This is a progres bar at 25%!">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress"data-toggle="popover" data-placement="right" data-content="This is a progres bar at 50%!">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress" data-toggle="popover" data-placement="left" data-content="This is a progres bar at 75%!">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="progress" data-toggle="popover" data-placement="bottom" data-content="This is a progres bar at 100%!">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
        <div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
     

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function () {
  $('[data-toggle="tooltip"]').tooltip()
  $('[data-toggle="popover"]').popover()
  $('.carousel').carousel()
})

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })

</script>
  </body>