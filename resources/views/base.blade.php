<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel / PHP & MySQL FORMULAIRE DE RECRUTEMENT</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                 <a class="navbar-brand" href="#">Worldigitech</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="{{ route('contacts.index')}}">GESTION CANDIDATURE</a>
              </li>
          </ul>
          <div>
              <a href="{{ route('contacts.create')}}" class="btn btn-primary">DEPOSER VOTRE FORMULAIRE</a>
          </div>  
      </div>
  </nav>
  <div class="container">
    <div class="container pt-5">
            <div class="text-center pt-5">
                <h1>BIENVENUE<br>SUR LE<br>FORMULAIRE DE RECRUTEMENT</h1>
            </div>    
        </div>
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>