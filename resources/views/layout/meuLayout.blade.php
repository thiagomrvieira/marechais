<!DOCTYPE html>
<html>
<head>
	
	<link href="{{ URL::to('css/app.css')}}" rel="stylesheet">
</head>
<body>

@hasSection('minha_secao_produtos')
<div class="card">
	<div class="card-body">
		<h5 class="card-title">Produtos</h5>
		<p class="card-text"> @yield('minha_secao_produtos')</p>
		<a href="#" class="card-link">Informacoes</a>
		<a href="#" class="card-link">Contato</a>
	</div>
@endif


</div>

	

<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>