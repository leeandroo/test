<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
</head>
<body id="form-container">
    <div class="container">
        <div class="row mt-5 ml-0 mr-3">
            <div class="card z-depth-5 my-5">
				<div class="row align-middle">
                    <div class="col-lg-5">
                        <div class="card-body white-text" id="option-card">
                            @yield('opciones')
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body">
					        @yield('formulario')
				        </div>
                    </div>
                </div>
			</div>
        </div>
    </div>
</body>
</html>