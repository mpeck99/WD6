
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <? include 'assets/styles/style.php'?>
    <title>Morgan Peck Server Side Languages</title>
    <style>
    .active{color:#333}
    </style>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/js/bootstrap.min.js" rel="javascript">
  </head>
  <body class="off-canvas-nav-left" style="padding-top:70px;">
<header>
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
            <li <?=@$data["pagename"]=="home"?'class="active"':''?>><a href="index">Home</a></li>
                <li <?=@$data["pagename"]=="about"?'class="active"':''?>><a href="about">About</a></li>
                <li <?=@$data["pagename"]=="contact"?'class="active"':''?>><a href="contact">Contact Form</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Links<span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?
                $datalinks=unserialize($menu);
                foreach($datalinks as $items){
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
              <a href="secondcontroller.php">Second Controller</a>
            </form>
            <ul class="nav navbar-nav">
            <li<?=@$data["pagename"]=="login"?'class="active"':''?>><a href="login">Login</a></li>
            </ul>
 
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
   </header>
