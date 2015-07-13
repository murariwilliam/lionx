<?php
include("setting.php");; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title><?php echo $progetto_nome ?> - Gestione Mostre</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body class="avoid-fout">
	<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
		<div class="progress-circular progress-circular-alt progress-circular-center">
			<div class="progress-circular-wrapper">
				<div class="progress-circular-inner">
					<div class="progress-circular-left">
						<div class="progress-circular-spinner"></div>
					</div>
					<div class="progress-circular-gap"></div>
					<div class="progress-circular-right">
						<div class="progress-circular-spinner"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<ul class="nav nav-list pull-left">
			<li>
				<a data-toggle="menu" href="#menu">
					<span class="icon icon-lg">menu</span>
				</a>
			</li>
		</ul>
		<a class="header-logo" href="index.html">Gestione Mostre - <?php echo $progetto_nome ?></a>
		<ul class="nav nav-list pull-right">
			<li>
				<a data-toggle="menu" href="#profile">
					<span class="access-hide">Guest</span>
					<span class="avatar avatar-sm"><img alt="" src="images/users/avatar-001.jpg"></span>
				</a>
			</li>
		</ul>
	</header>
	<nav class="menu" id="menu">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-content">
					<a class="menu-logo" href="index.html">Home Page</a>
					<ul class="nav">
						<li>
							<a href="mostre.html">Mostre disponibili</a>
                                                        <a href="mostre.html">Prenota biglietto</a>
						</li>
					</ul>
					<hr>
					<ul class="nav">
						<li>
							<a href="mostre.html">Visualizza prenotazioni</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<nav class="menu menu-right" id="profile">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-img">
						<img alt="Guest" src="images/samples/landscape.jpg">
					</div>
					<div class="menu-top-info">
						<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span>John Smith</a>
					</div>
					<div class="menu-top-info-sub">
						<small>Benvenuto Ospite! :-)</small>
					</div>
				</div>
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="login.html"><span class="icon icon-lg">account_box</span>Login</a>
						</li>
						<li>
                                                        <p data-toggle="toast" title="NONONO! Funzione non ancora supportata! :-("><a href="javascript:void(0)">Crea un account</a></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="content">
		<div class="content-heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-push-3 col-sm- col-sm-push-1">
						<h1 class="heading"><?php echo $progetto_nome ?> - Gestione Mostre</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-inner">
			<div class="container">
				<div class="row">
					<!-- <div class="col-lg-9 col-lg-push-3 col-sm-10 col-sm-push-1"> -->
						
                                            <center><p><a class="btn btn-green waves-button waves-effect" data-toggle="modal" href="#modal-iframe">Aggiungi Prenotazione</a></p></center>
                                            
                                            <div class="table-responsive">
							<table class="table" title="Default Tabl">
								<thead>
									<tr>
										<th>Codice Mostra</th>
										<th>Data Inizio</th>
										<th>Data Fine</th>
                                                                                <th>Prezzo</th>
                                                                                <th>Titolo</th>
                                                                                <th><center>Cancella</center></th>
                                                                                <th><center>Modifica</center></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Id augue sagittis</td>
										<td>Eleifend metus eget</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Ac ultrices tortor</td>
										<td>Nunc pellentesque est</td>
										<td>Et velit condimentum</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Convallis etiam sit</td>
										<td>Amet augue eu</td>
										<td>Turpis tempor consectetur</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Suspendisse potenti proin</td>
										<td>Molestie odio volutpat</td>
										<td>Risus tristique euismod</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Vitae eu felis</td>
										<td>Donec ac interdum</td>
										<td>Purus ac vestibulum</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Enim donec venenatis</td>
										<td>Pellentesque ante non</td>
										<td>Faucibus suspendisse potenti</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Cras egestas ac</td>
										<td>Nibh at ornare</td>
										<td>Aliquam quis sapien</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Et est imperdiet</td>
										<td>Tempus proin viverra</td>
										<td>Semper felis iaculis</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
									<tr>
										<td>Sagittis ex luctus</td>
										<td>A duis mollis</td>
										<td>Nulla non tristique</td>
                                                                                <td>20.00€</td>
										<td>Lacinia eros curabitur</td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-red waves-button waves-effect waves-light">Cancella</a></p></td>
                                                                                <td><p class="margin-no-top"><a class="btn btn-green waves-button waves-effect waves-light">Modifica</a></p></td>
									</tr>
								</tbody>
							</table>
						</div>
                                            
						</div>
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<?php echo $creator ?>
		</div>
	</footer>
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-red fbtn-lg" data-toggle="dropdown"><span class="fbtn-text">Links</span><span class="fbtn-ori icon">open_in_new</span><span class="fbtn-sub icon">close</span></a>
			<div class="fbtn-dropdown">
				<a class="fbtn fbtn-alt" href="mostre.html"><span class="fbtn-text">Visualizza mostre disponibili</span><span class="fa fa-link"></span></a>
                                <a class="fbtn fbtn-alt" href="mostre.html"><span class="fbtn-text">Visualizza mostre disponibili</span><span class="fa fa-link"></span></a>
				<a class="fbtn fbtn-alt" href="mostre.html"><span class="fbtn-text">Visualizza mostre disponibili</span><span class="fa fa-link"></span></a>
			</div>
		</div>
	</div>

        <div aria-hidden="true" class="modal fade" id="modal-iframe" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<iframe class="iframe-seamless" src="inserimento-mostre.html" title="Aggiungi Prenotazione"></iframe>
			</div>
		</div>
	</div>
        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/base.min.js"></script>
</body>
</html>
