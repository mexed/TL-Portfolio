<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylehome.css"/>
    <script src="scripts/Login.js"></script>
    </head>
    <body>
        <div class="container">
           <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header sticky">
						<nav class="navbar navbar-expand-lg bg-body-tertiary">
							<div class="container-fluid">
								<a class="navbar-brand" href="#">Thomas L</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="index.php">Home</a>
									</li>
									<li class="nav-item">
									<a class="nav-link" href="lebenslauf.php">Lebenslauf</a>
									</li>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Projekte
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="#">Portfolio</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#">Project 1</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="#">Project 2</a></li>
									</ul>
									</li>
								</ul>
								<form class="d-flex" role="search">
									<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-success" type="submit">Search</button>
								</form>
								</div>
							</div>
						</nav>
                    </div>
                    <div class="card-body">
						<div class="row row-cols-1 row-cols-md-2 g-4">
							<div class="col">
								<div class="card">
									<h1>Herzlich Willkommen auf Thomas Loewen.de</h1>
										<p>
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
											sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor 
											sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
											sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor 
										</p>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<h1>Kontakt</h1>
								
									<div class="mb-4">
										<label for="exampleFormControlInput1" class="form-label">Email address</label>
										<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
									</div>
									<div class="mb-3">
										<label for="exampleFormControlTextarea1" class="form-label">Anfrage</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
									<div class="mb-3">
										<div class="d-flex mt-3 login_container">
											<button type="button" name="button" class="btn login_btn" onclick="startProgressbar(2)">Absenden</button>										</div>
									</div>
									<div class="card-footer">
									<div id="PB" class="progress hidden" role="progressbar" aria-label="Animated striped example"  aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">
										<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
									</div>
								</div>
								</div>
							</div>
						</div>
						

                    <div class="card-footer">
						<p style="display: flex; justify-content: center; align-items: center;">Copyright by Thomas Löwen | 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>