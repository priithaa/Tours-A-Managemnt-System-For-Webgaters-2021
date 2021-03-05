<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit1'])) {
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobileno'];
	$subject = $_POST['subject'];
	$description = $_POST['description'];
	$sql = "INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':fname', $fname, PDO::PARAM_STR);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
	$query->bindParam(':subject', $subject, PDO::PARAM_STR);
	$query->bindParam(':description', $description, PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if ($lastInsertId) {
		$msg = "Enquiry  Successfully submited";
	} else {
		$error = "Something went wrong. Please try again";
	}
}

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>TMS | Tourism Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tourism Management System In PHP" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Custom Theme files -->
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
		}

		.succWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
		}
	</style>
</head>

<body>
	<!-- top-header -->
	<div class="top-header">
		<?php include('includes/header.php'); ?>
		<div class="banner-1 ">
			<div class="container">
				<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">TMS-Tourism Management System</h1>
			</div>
		</div>
		<!--- /banner-1 ---->
		<!--- privacy ---->
		<div class="privacy">
			<div class="container">

				<center>
					<h1>Click on them to see the Answers</h1>
				</center>

				<div class="faqs-container" itemscope itemtype="https://schema.org/FAQPage">

					<div class="faq-singular" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
						<h2 class="faq-question" itemprop="name">What is the refund policy?</h2>
						<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
							<div itemprop="text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
						</div>
					</div>

					<div class="faq-singular" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
						<h2 class="faq-question" itemprop="name">How long does it take to process a refund?</h2>
						<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
							<div itemprop="text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
						</div>
					</div>

					<div class="faq-singular" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
						<h2 class="faq-question" itemprop="name">What is the policy for cancellation of the booking</h2>
						<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
							<div itemprop="text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
						</div>
					</div>

					<div class="faq-singular" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
						<h2 class="faq-question" itemprop="name">Is the package same as shown in pictures?</h2>
						<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
							<div itemprop="text">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</div>
						</div>
					</div>

				</div>





				<p>


				</p>




			</div>
		</div>
		<!--- /privacy ---->
		<!--- footer-top ---->
		<!--- /footer-top ---->
		<?php include('includes/footer.php'); ?>
		<!-- signup -->
		<?php include('includes/signup.php'); ?>
		<!-- //signu -->
		<!-- signin -->
		<?php include('includes/signin.php'); ?>
		<!-- //signin -->
		<!-- write us -->
		<?php include('includes/write-us.php'); ?>
</body>
<script>
	$(document).ready(function() {
		$(".faqs-container .faq-singular:first-child").addClass("active").children(".faq-answer").slideDown(); //Remove this line if you dont want the first item to be opened automatically.
		$(".faq-question").on("click", function() {
			if ($(this).parent().hasClass("active")) {
				$(this).next().slideUp();
				$(this).parent().removeClass("active");
			} else {
				$(".faq-answer").slideUp();
				$(".faq-singular").removeClass("active");
				$(this).parent().addClass("active");
				$(this).next().slideDown();
			}
		});
	});
</script>

</html>