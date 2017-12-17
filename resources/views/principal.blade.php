<html>
<head>
    
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" class href="{{ asset('favicon.ico') }}">

    <title>Microblog</title>

</head>
<body>
  <div class="container">

  <nav class="navbar navbar-default">
    <div class="container-fluid">

    <div class="navbar-header">      
      <a class="navbar-brand" href="/">Microblog em Laravel</a>
    </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{action('MensagemController@lista')}}">Listar Mensagens</a></li>
        <li><a href="{{action('MensagemController@novo')}}">Nova Mensagem</a></li>

      </ul>

    </div>
  </nav>

    @yield('conteudo')

  <footer class="footer">
      <p>© <a href="http://danilosoarescardoso.github.io"> Danilo Soares Cardoso</a>, 2018.</p>
  </footer>

  </div>
</body>
</html>