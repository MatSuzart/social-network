<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Rede Social</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="">Rede Social</a></li>
						<li>
							<form method="GET" action="" class="navbar-form navbar-left navbar-input-group">
								<div class="form-group">
									<input type="text" name="q" class="form-control" placeholder="Buscar...">
								</div>
								<button type="submit" class="btn btn-default">Buscar</button>
							</form>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">

								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="">Editar Perfil</a></li>
								<li><a href="">Sair</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
	        

        @yield('body')


	    </div>
    </body>
</html>
