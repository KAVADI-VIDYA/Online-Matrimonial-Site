<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | Terms :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Terms and Conditions</li>
     </ul>
   </div>
   <div class="terms_1">
	    
	    
		<p>In order to use Matrimony, you must register as a member of the Site ("Member"). The Member or any users using the Site agree to be bound by these Terms and Conditions ("Agreement"). If you give us your consent during the registration process, we may pass on your details to 3rd parties to contact you with profiles matching your preferences and or other relevant promotional mailers. You can opt out of such communication by contacting us at any time</p>

		<p>Matrimony is an online matrimonial search engine that is free to use for its members.It aggregates profiles from multiple Matrimonial Service providers to provide a compelling search experience. Matrimony does not have any control on the content of these external websites nor vouches for the authenticity of the profiles details and photos. Third-party trademarks, trade names, product names and logos contained in this website may be the trademarks or registered trademarks of their respective owners.</p>

		<p>Matrimony is only for personal use of individual members and can not be used for commercial purposes. Matrimony owns and retains all proprietary rights in the MyMarriage.com Site and the Matrimony Service.</p>

		<p>This Agreement may be modified by Matrimony from time to time without any prior notice. Your continued use of the site will indicate your agreement to be bound by this agreement and any changes to the agreement.</p>
		
     </div>
   </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	