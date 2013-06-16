<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>InkMule</title>

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.2.1/lodash.min.js"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
	<? if(file_exists('./assets/js/' . $this->router->class . '/' . $this->router->method . '.js') ){?>
		<script src="<?php echo base_url('assets/js/'. $this->router->class . '/' . $this->router->method . '.js') ?>"></script>
	<?}?>
</head>
<body>

	<div id="wrap">

	      <!-- Fixed navbar -->
	      <div class="navbar navbar-fixed-top">
	        <div class="navbar-inner">
	          <div class="container">
	            <a class="brand" href="#">InkMule</a>
	            <div class="nav-collapse collapse">
	              <ul class="nav pull-right">
	              </ul>
	            </div><!--/.nav-collapse -->
	          </div>
	        </div>
	      </div>

	      <!-- Begin page content -->
	      <div class="container">
		  		<div class="hero-unit">
					
					<?=$yield?>
				
				</div>
			</div>

				<div id="push"></div>
			</div>

			<div id="footer">
				<div class="container">
					<div id="footer_nav" class="span3">
						<h4>site navigation</h4>
						<ul>
							<li class=""><a href="/quote/create">get a quote</a></li>
							<li class=""><a href="/about">what we do</a></li>
							<li class=""><a href="/portfolio/all">examples of past work</a></li>
							<li class=""><a href="/contact">contact us</a></li>
						</ul>
					</div>

					<div id="footer_social" class="span3">
						<h4>say hi</h4>
						<ul>
							<li class=""><a href="https://www.facebook.com/pages/Inkmule/273839796082073">facebook</a></li>
							<li class=""><a href="https://twitter.com/inkmule">twitter</a></li>
							<li class=""><a href="http://instagram.com/inkmule">instagram</a></li>
						</ul>
					</div>

					<div id="footer_legal" class="span3">
						<h4>legal stuff</h4>
						<ul>
							<li class=""><a href="/terms">terms & conditions</a></li>
							<li class=""><a href="/info">general information</a></li>
						</ul>
					</div>

					<div id="footer_mailing_list" class="span2">
						<h4>stay in touch</h4>
						<div id="join_mailing_list">
							<!-- Begin MailChimp Signup Form -->

							<div id="mc_embed_signup">
							<form 		action="http://statusbro.us6.list-manage.com/subscribe/post?u=6362d2672877920edf27cab1f&amp;id=c730f539c9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

								<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
								<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn"></div>
							</form>
							</div>

							<!--End mc_embed_signup-->

						</div>
					</div>

				</div>
			</div>
			