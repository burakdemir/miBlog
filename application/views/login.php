<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Giriş Yap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <?php foreach ($link as $i): ?>
    <?php echo link_tag($i); ?>
    <?php endforeach; ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript">
    	
    </script>
  </head>

  <body>

      <div class="row">
      	<form class="well span3 whiteTextShadow5 center loginForm">
      	  <label class="bold gray3" for="input01">Kullanıcı Adı:</label>
      	  <input type="text" class="span3" id="input01">
      	  
      	  <label class="bold gray3" for="input01">Şifre:</label>
      	  <input type="password" class="span3" id="input01">
      	  
      	  <a href="adminPage.html" type="submit" class="btn btn-info pull-right">
      	    Giriş Yap
      	    <i class="icon-chevron-right icon-white"></i> 
      	  </a>
      	  
      	  <div class="clearBoth"></div>
      	</form>
      </div> <!-- end .row -->

      <div class="emptyFooter"></div>
    </div> <!-- end .container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>