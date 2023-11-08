<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/stylehome.css"/>
    <script src="scripts/Login.js"></script>
    <script>

    </script>


    </head>
    <body>
        <div class="container">
           <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header sticky">
						<nav class="navbar navbar-expand-lg bg-body-tertiary">
							<div class="container-fluid">
								<a class="navbar-brand" href="#">Thomas Loewen</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item">
									<a class="nav-link"  href="index.php">Home</a>
									</li>
									<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Lebenslauf</a>
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

						<h1>Thomas Löwen</h1>
						<p>Web Developer</p>
						
						<div class="section">
							<h2>Profil</h2>
							<p>Ein erfahrener Webentwickler mit Fachwissen in HTML, CSS, JavaScript und anderen Webtechnologien. Spezialisiert auf Front-End-Entwicklung und UX-Design.</p>
						</div>
						
						<div class="section">
							<h2>Ausbildung</h2>
							<h3>Bachelor of Science, Informatik </h3>
							<p>FOM University of Applied Sciences, Köln, 2021-2025</p>
							<h3>Fachinformatiker - Anwendungsentwicklung</h3>
							<p>Heinrich-Hertz-Europakolleg - Bonn, 2013-2015</p>
						</div>

						<div class="section">
							<h2>Berufserfahrung</h2>
							<h3>Ausbildung Fachinformatiker - Anwendungsentwicklung</h3>
							<p>Deutsche Vetriebsgesellschaft mbH, 2013-2015</p>
							<p>Berufsausbildung,- Softwareentwicklung mit VBA/ Access</p>
							<h3>Second-Level-Support, Netzwerk und Serveradministrator</h3>
							<p>NetCologne, 2016</p>
							<p>Administrieren und Konfigurieren von Server/ Netzwerksystemen bei Supportanfragen vor Ort </p>
							<h3>IT-Soldat </h3>
							<p>Bundeswehr, 2016-</p>
							<p>IT-Soldat eingesetzt in der Cyberverteidigung. Betreiben von Test und Referenzsystemen, Fortschreiben von Härtungsvorgaben für IT-Systeme in der Bundeswehr</p>
						</div>
						
						<div class="section">
							<h2>Fähigkeiten</h2>
							<ul>
								<li>Python</li>
								<div id="Python"></div>                     
								<script>startProgressbarSkills(75, "Python")</script>
								<li>HTML, CSS, Javascript</li>
								<div id="HTML, CSS, Javascript"></div>                     
								<script>startProgressbarSkills(100, "HTML, CSS, Javascript")</script>
								<li>Responsive Design</li>
								<div id="Responsive Design"></div>                     
								<script>startProgressbarSkills(90, "Responsive Design")</script>
								<li>Node.JS, Bootstrap</li>
								<div id="Node.JS, Bootstrap"></div>                     
								<script>startProgressbarSkills(80, "Node.JS, Bootstrap")</script>
								<li>Java</li>
								<div id="Java"></div>                     
								<script>startProgressbarSkills(50, "Java")</script>
								<li>IT-Grundschutz</li>
								<div id="ITGrundschutz"></div>                     
								<script>startProgressbarSkills(99.99999999999999, "ITGrundschutz")</script> 	
							</ul>
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