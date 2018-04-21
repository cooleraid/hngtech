<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Stage 1 | HNG.TECH</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/intern2.css" rel="stylesheet"/>

</head>
<body class="section-white">
    <div class="header-1">
        <div class="page-header header-filter" style="background-image: url('assets/img/bg12.jpg');">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<h1 class="title">HNG 4.0 internship</h1>
	                    <h3><?php $datestring = 'Year: %Y Month: %m Day: %d <br />Time: %h:%i %a';
							$time = time();
							echo mdate($datestring, $time);?>
							<hr >
							<?php $datestring = '%d-%m-%Y | %h:%i %a';
							$time = time();
							echo mdate($datestring, $time)?>
							</h3>
	                    <br />
					</div>
					<div class="col-md-6">
						
	                    <br />
					</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
