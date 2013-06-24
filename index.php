<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Another Security Contribution | reverse-engineering.fr</title>
    <meta name="description" content="reverse-engineering.fr, vulns, disclosures, dataleaks, it's another way to bring help in security world">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="dvi-">
    <!-- Le styles -->
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      body {
        background-color: #FFFFF;
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
     
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -100px;
      }
      
    </style>

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

            <ul class="nav">
              <li class="divider-vertical"></li>
              <li class="active"><a href="http://www.reverse-engineering.fr"><i class="icon-home"></i></a></li>
        <li class="divider-vertical"></li>
              <li><a href="http://www.reverse-engineering.fr/article.php"  data-toggle="modal">Article</a></li>
              <li class="divider-vertical"></li>
              <li><a href="http://www.reverse-engineering.fr/publication.php" data-toggle="modal">Publication</a></li>
              <li class="divider-vertical"></li>

              <li><a href="#Update" data-toggle="modal">Submit</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#Update" data-toggle="modal">Warning</a></li>
              <li class="divider-vertical"></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

     </div>
    
    <div class="container-narrow">
      <div class="row-fluid">
      <div class="jumbotron">
	
<h1>  Another Security Contribution</h1><br><br>

<center>
<ul class="breadcrumb">
<li><a href="http://www.reverse-engineering.fr"><i class="icon-home"></i></a><span class="divider"></span></li>
</ul>
</center>
        
<ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="https://pbs.twimg.com/media/BK1hIu-CUAAb5gm.png" alt="300x200" style="width: 300px; height: 200px; " src="https://pbs.twimg.com/media/BK1hIu-CUAAb5gm.png">
                  <div class="caption">
                    <h3>Article</h3>
                    <p><a href="#Update" data-toggle="modal"class="btn-small btn-info">0 Article</a>

                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img data-src="https://pbs.twimg.com/media/BD9O40WCMAA-jHN.png" alt="300x200" style="width: 300px; height: 200px; " src="https://pbs.twimg.com/media/BD9O40WCMAA-jHN.png">
                  <div class="caption">
                    <h3>Publication</h3>
                    <p><a href="#Update" data-toggle="modal" class="btn-small btn-success">0 Publication</a>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">

                  <img data-src="https://pbs.twimg.com/media/BIOdY0fCYAAyy2I.jpg" alt="300x200" style="width: 300px; height: 200px; " src="https://pbs.twimg.com/media/BIOdY0fCYAAyy2I.jpg">
                  <div class="caption">
                    <h3>Submit</h3>
                    <p><a href="#Update" data-toggle="modal" class="btn-small btn-danger">Closed</a>
                  </div>

                </div>
              </li>
          <li class="span3">
                <div class="thumbnail">
                  <img data-src="https://pbs.twimg.com/media/BCbRXS1CcAAEYyB.jpg" alt="300x200" style="width: 300px; height: 200px; " src="https://pbs.twimg.com/media/BCbRXS1CcAAEYyB.jpg">
                  <div class="caption">
                    <h3>Warning</h3>
                    <p><a href="#Update" data-toggle="modal" class="btn-small btn-warning">0 Warning</a>
                  </div>
                </div>
              </li>
</ul>


  
  

<div class="row-fluid">
<div class="span12">
  <center>
  <ul class="breadcrumb">
    <li><a href="http://www.reverse-engineering.fr"><i class="icon-home"></i></a><span class="divider"></span></li>
  </ul>
      </center>
</div>

<div id="Update" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Status</h3>
  </div>
  <div class="modal-body">
<blockquote class="twitter-tweet" lang="fr"><p>reverse-engineering.fr is not totally completed, but it will come soon. <a href="http://t.co/CnkGQeIJXO" title="http://twitter.com/Damien_Chiboub/status/337032349793538048/photo/1">twitter.com/Damien_Chiboub&#65533;</a></p>&mdash; Damien Chiboub (@Damien_Chiboub) <a href="https://twitter.com/Damien_Chiboub/status/337032349793538048">22 mai 2013</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  <div class="modal-footer">
  <button class="btn" data-dismiss="modal" aria-hidden="true">x</button>
  </div>
</div>  

<br><br>
<br><br>


  <a href="http://www.reverse-engineering.fr"><button class="btn btn-large btn-block" type="button">reverse-engineering.fr</button></a>
<br>  
<br>  
<br>  
<br>
    
<div style="background-color: #f5f5f5";>
        <br><br>
<div class="page-header"></div>
<div class="row-fluid" id="wrap">
          <div class="span1"></div>
          <div class="span2" >
</div>
	  <div class="span2">
<p class="muted">.: About Us :.</p>
<a href="#Update" data-toggle="modal">About</a><br>
<a href="#Update" data-toggle="modal">Contact</a><br>
<a href="#Update" data-toggle="modal">Legal</a>

</div>
	  <div class="span2">
</div>
          <div class="span2">
<p class="muted">.: Ads :.</p>
<a href="#Update" data-toggle="modal">Jobs</a><br>
<a href="#Update" data-toggle="modal">Service</a><br>
<a href="#Update" data-toggle="modal">Security</a>

</div>
          <div class="span2">

</div>
         <div class="span1"></div><br>

<br><br><br><br>
<div class="page-header"></div>
<p class="muted">
Version : <a href="https://github.com/DamienChiboub/reverse-engineering.fr" target="_blank">2.0A1</a><br>
<i class="icon-refresh"></i> 18h15 - 03.06.2013 <br>
</p>


   </div>     

   </div>
<div class="modal hide fade" id="Welcome_Message">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Status</h3>
  </div>
  <div class="modal-body">
    <p class="lead">
   will be back soon</p>
<br>
<div class="progress progress-striped active">
<div class="bar " style="width: 55%;"></div>
</div>


<p class="text-left text-info">
<i class="icon-ok"></i> Responsive Design <br>
<i class="icon-ok"></i> Jobs Board <br>
<i class="icon-ok"></i> Secured Warning Process <br>
</p>
<div class="page-header"></div>
<p class="text-left text-error">
<i class="icon-remove"></i> User Management<br>
<i class="icon-remove"></i> Comments <br>
<i class="icon-remove"></i> Professional Hosting <br>
</p>
<br>

  <div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">x</button>

  </div>
  </div>
</div>
  
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://raw.github.com/imsky/holder/master/holder.js"></script>
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
  
$(window).load(function(){
        $('#Welcome_Message').modal('show');
    });
</script>


</body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
