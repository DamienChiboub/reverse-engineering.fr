<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reverse Engineering | reverse-engineering.fr</title>
    <meta name="description" content="reverse-engineering.fr, vulns, disclosures, dataleaks, it's another way to bring help in security world">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="dvi-">
  
    <!-- Le styles -->
    <style type="text/css">
      body {
        background-color:#FFFFFF;
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 980px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 42px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
      
      
      
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
<div class="navbar navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
          <div class="nav-collapse collapse offset2">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
                   <li class="divider-vertical"></li>
              <li class="active"><a href="#contact">Article</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#">Publication</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#about">Submit</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#about">Warning</a></li>
              <li class="divider-vertical"></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="container-narrow">
      <div class="row-fluid">
      <div class="span8 offset2 jumbotron">
                <h1>reverse-engineering.fr</h1><br>
        <div id="myCarousel" class="carousel slide"><center>
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="https://pbs.twimg.com/media/BIOdY0fCYAAyy2I.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://pbs.twimg.com/media/BGxiobfCEAAQ6_J.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Dkad odio.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="https://pbs.twimg.com/media/BCbRXS1CcAAEYyB.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Dapibus facilisis</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
          </center>
              </div>
      <br><br>
      <small>will be back soon</small>
  <p>
    
  </p>
</div>
</div>      
      
      
      
  
 <div class="row-fluid">
  <center> 
  <ul class="breadcrumb">
  <li class="active"><a href="#">Home</a> <span class="divider">/</span></li>
  <li><a href="#">Library</a> <span class="divider">/</span></li>  
        <li><a href="#">Size</a> <span class="divider">/</span></li>
        <li><a href="#">Contact</a></li>
    </center></ul>
  
   
   
   
   <ul class="span2 nav nav-tabs nav-stacked">
              <li><a class="accordion-toggle" data-toggle="collapse" href="#Menu1">Menu1<i class="icon-chevron-right pull-right"></i></a></li>
              <li><a class="accordion-toggle" data-toggle="collapse" href="#Menu2">Menu2 <i class="icon-chevron-right pull-right"></i></a></li>
              <li><a class="accordion-toggle" data-toggle="collapse" href="#Menu3">Menu3 <i class="icon-chevron-right pull-right"></i></a></li>
            </ul>
   
  
   
  
   <div class="span8 tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs ">
    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
    <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
     </ul>
     <div class="lead tab-content">
    <div class="tab-pane active" id="tab1">
      <p>Packed with features.
A 12-column responsive grid, dozens of components, JavaScript plugins, typography, form controls, and even a web-based Customizer to make Bootstrap your own.</p>
    </div>
    <div class="tab-pane" id="tab2">
      <p>Made for everyone.
Bootstrap was made to not only look and behave great in the latest desktop browsers (as well as IE7!), but in tablet and smartphone browsers via responsive CSS as well.</p>
    </div>
       <div class="tab-pane" id="tab3">
      <p>By nerds, for nerds.
Built at Twitter by @mdo and @fat, Bootstrap utilizes LESS CSS, is compiled via Node, and is managed through GitHub to help nerds do awesome stuff on the web.</p>
    </div>
    </div>
  </div>
</div>
     
 <br><br>
 <br><br>     
 <br><br>

<center>
<div class="page-header">
<h1><small>Footer</small></h1>
</div>

reverse-engineering.fr &copy;</a>

  </center>
   </div>     
   </div>
 

<script src="http://code.jquery.com/jquery.min.js"></script>
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36239076-1']);
  _gaq.push(['_setDomainName', 'reverse-engineering.fr']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



 
     </body>
    </html>
