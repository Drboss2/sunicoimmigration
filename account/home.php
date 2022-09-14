<?php
    include "config/db.php";
    include "modules/script.php";

    if(!isset($_SESSION['admin_id'])){
        header("location:../../account/login");
    }

    //instantiate database object
    $database = new Database();
    $db       = $database->connect();

    //instantiate user object
    $user = new User($db);
?>
<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add icon library -->
    <link rel="icon" href="https://assets.coinbase.com/assets/favicon-32x32.d4c99c275565ed6e271c914063d2c1bc.png" sizes="32x32">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" 
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper JS -->

    <script src="js/popper.min.js"></script>

    <script src="https://fxswith.com/slick/slick.js" type="text/javascript" charset="utf-8"></script>

    <script src="https://fxswith.com/slick/slick-animation.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form.js"></script>

    <!-- <link rel="stylesheet" href="css/select2.min.css"> -->
    <!-- <link href="css/select2-bootstrap4.min.css" rel="stylesheet" type="text/css"> -->

    <!-- <link href="css/animate.css" rel="stylesheet" /> -->
    <link href="css/main.css" rel="stylesheet"/>
    <link href="css/home.css" rel="stylesheet"/>

    <title>Admin | account</title>
    <meta name="theme-color" content="#FCB116">
    <meta name="msapplication-navbutton-color" content="#FCB116">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#FCB116">

    <meta name="theme-color" content="#FCB116">
    <meta name="msapplication-navbutton-color" content="#FCB116">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#FCB116">
    

</head>
<nav class="navbar navbar-expand-lg bg-white navbar-white text-dark shadow-sm py-1" style="position: relative; z-index: 20000">
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" id="menu_btn">
      <img src="https://fxswith.com/images/signs.svg" style="width:30px">
    </button>
    <!-- Brand -->
    <a style="color:rgb(22, 82, 240);font-size:17px;font-weight:bold" class="navbar-brand mr-auto" href="">
      Admin
    </a>
	<ul class="navbar-nav ml-auto" style="-ms-flex-direction: row; flex-direction: row;">
		<li class="nav-item py-1">
			<a href="" class="nav-link"><i class="fa fa-exclamation-circle" style="font-size: 20px"></i></a>
		</li>
		<li class="nav-item px-0 py-1">
			<a href="" class="nav-link px-0"><i class="fas fa-cog fa-spin" style="font-size: 20px"></i></a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link pl-2 pr-0" href="#" id="navbardrop" data-toggle="dropdown">
				<span class="d-none d-md-inline">Admin</span>
				<img src="https://fxswith.com/images/avatar.png" style="width: 30px; height:30px" class="rounded-circle ml-2"/>
			</a>
			<div class="dropdown-menu dropdown-menu-right" style="position:absolute;">
				<a class="dropdown-item" href="home?info"></a>
				<div class="dropdown-divider"></div> 
				<a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i> Sign Out</a>
			</div>
		</li>
	</ul>
</nav> 
<div class="udex-container">
  <div class="udex-sidebar udex-collapse" id="mySidebar">
        <ul class="nav flex-column">
            <li class="nav-item active"><a href="home?account" class="nav-link"><i class="fas fa-compass"></i> Admin</a></li>
        </ul>
        <div class="px-4 py-2 font-weight-bold">Client Area</div>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="home?addclient"> <i class="fa fa-inbox"></i> Add Clients </a></li>
                <li class="nav-item"><a class="nav-link" href="home?client"> <i class="far fa-money-bill-alt"></i> All Clients</a></li>
            </ul>
        <div class="px-4 py-2 font-weight-bold">Others</div>
        <ul class="nav flex-column">

            <li class="nav-item"><a class="nav-link" href="logout.php"> <i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
    </div>
<div class="container-fluid">
    <?php
        if(isset($_GET['addclient'])){
            include 'addclients.php';
        }elseif(isset($_GET['client'])){
            include 'client.php';
        }elseif(isset($_GET['view'])){
            include 'viewclient.php';
        }elseif(isset($_GET['delete'])){
            include 'delete.php';
        }elseif(isset($_GET['single'])){
            include 'single.php';
        }else{
            include 'account.php';
        }

    ?>
</div>
</div>


<script>
if ($(window).width() > 992) {
	boxPosition = $(".udex-sidebar").offset().top;
	$(window).scroll(function(){
	   var isFixed = $(".udex-sidebar").css("position") === "fixed";
	   if($(window).scrollTop() > boxPosition && !isFixed){
				$(".udex-sidebar").css({position:"fixed", top: "0px"});
	   }else if($(window).scrollTop() < boxPosition){
			$(".udex-sidebar").css({position:"absolute", top: "auto"});
	   }
	});
}
</script>

<script>
$("#menu_btn").click( function(){
	$("#mySidebar").toggle();
	$("#main, .udex_footer").toggleClass("cubic-left");
	$("body").toggleClass("udex_overflow");
});
$("#account_menu").click( function(){
	$("#myAccount").toggle();
	$("#main, .udex_footer").toggleClass("cubic-right");
	$("body").toggleClass("udex_overflow");
});
</script>

<style>
  .skiptranslate {
    display: none !important;
  }
  body {
    top: 0 !important;
  }
</style>
<div id="google_translate_element" style="display:none"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>