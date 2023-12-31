<?php 
	include 'inc/header.php';
	//include 'inc/slider.php';
?>
<!DOCTYPE html>
<html data-ng-app="mailchimp" lang="pt-br">
   <head>
      <title>MyTask</title>
      <meta charset="utf-8">      
      <meta name="description" content="MyTask Auditoria, Inspeção e Controle de Qualidade através da web, tablet ou smartphone."/>
      <meta name="title" content="Auditoria e Controle de Qualidade | My Task" />
      <meta name="copyright" content="http://www.mytaskweb.com.br" />
      <meta name="author" content="PointSistemas - @dougcarvf">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/check/square/blue.css">
   </head>
   
<div class="main">
	<div class="content">
		<div class="support">
		<div data-ng-controller="MyController"  id="bottom" data-spy="scroll" data-target=".navbar" data-offset="50" >
		<section id="subscribe">
    <div class="container text-center">
        <div class="row">
        <img src="https://s3.amazonaws.com/compareninja-storage%2Fimages/1455132051_Mailchimp-Logo-with-Text-384.png" style="margin-left: 32%">
            <p class="col-md-10 col-md-offset-1 text-center title-para mb30" style="color:#1f1f1f",font-family: Lato, sans-serif;>
                Enter your email address into our subscribe form to keep your self updating with our newsletter. You can get all the latest news updates, new product features launch info, community help forum updates.
            </p>
            <div class="container">
                <div class="row" >
                    <form class="form-material set-submit-input">
                        <div class="form-group set-submit-box">
                            <input type="text" class="form-control" name="subscriber_email" id="subscriber_email" required="" data-ng-model="SubscribeEmail">
                            <span class="form-bar"></span>
                            <label class="float-label" for="subscriber_email">Input type email</label>
                        </div>
                        <button type="button" class="btn btn-primary btn-subscribe common-btn colored-button float-button-light" data-angular-ripple data-ng-click="subscriber_email()">Subscribe <i class="fa fa-paper-plane ml5" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>

        </div>
                  <p class="footer-copyright mb0"></p>

    </div>
</section>

      <script src="assets/js/jquery.2.2.3.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/angularJS/jquery.mCustomScrollbar.min.js" ></script>
      <script src="assets/angularJS/angular.min.js"></script>
      <script src="assets/angularJS/angular-scroll.min.js" ></script>
      <script src="assets/angularJS/angular-ripple.min.js" ></script>
      <script src="assets/angularJS/angular-animate.min.js"></script>
      <script src="assets/angularJS/angular-scroll-animate.min.js"></script>
      <script src="assets/modules/module.js" ></script>
      <script src="assets/controllers/controller.js" ></script>
      <script src="assets/angularJS/angular-backtop.min.js" ></script>
      <script src="assets/angularJS/ui-bootstrap-tpls-2.0.2.min.js" ></script>
      <script src="assets/angularJS/angular-parallax.min.js" ></script>
      <script src="assets/check/icheck.min.js"></script>
      <script>
         $(document).ready(function(){
         $('input').iCheck({
         checkboxClass: 'icheckbox_square-blue',
         radioClass: 'iradio_square-blue',
         increaseArea: '20%' // optional
         });
         });
      </script>
		</div>
		
		
			
	</div>
</div>

<?php 
	include 'inc/footer.php';
?>
