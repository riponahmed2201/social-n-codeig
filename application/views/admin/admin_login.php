
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:00 GMT -->
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin | Login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo  base_url();?>assets/backend/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo  base_url();?>assets/backend/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo  base_url();?>assets/backend/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo  base_url();?>assets/backend/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo  base_url();?>assets/backend/img/favicon.ico">
	<!-- end: Favicon -->

			<style type="text/css">
			body { background: url(<?php echo  base_url();?>assets/backend/img/bg-login.jpg) !important; }
		 </style>

</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
      <br><br><br><br><br><br><br><br>
			<div class="row-fluid">
				<div class="login-box">

          <p style="color:red;">
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
            echo $msg;
            $this->session->unset_userdata('message');
            }?>
          </p>

					<h1 class="text-center">Admin Login</h1>
					<form class="form-horizontal" action="<?php base_url();?>Admin/admin_login_check" method="post">
						<fieldset>

							<div class="input-prepend" title="Email">
								<span class="add-on"><i class="halflings-icon email"></i></span>
								<input class="input-large span10" name="email"  type="email" placeholder="Email" required/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password"  type="password" placeholder="Password" required/>
							</div>
							<div class="clearfix"></div>
							<div class="button-login">
								<button type="submit" class="btn btn-primary ">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>

				</div><!--/span-->
			</div><!--/row-->

	</div><!--/.fluid-container-->

		</div><!--/fluid-row-->
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:01 GMT -->
</html>
