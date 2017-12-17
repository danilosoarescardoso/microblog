<html>
<head>
    
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
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