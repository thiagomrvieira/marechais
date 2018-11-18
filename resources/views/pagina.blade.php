<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

	@component('components.meucomponente')
		<strong>Erro: </strong> Uma mensagem de erro
		@slot('titulo')
			Erro fatal
		@endslot

		@slot('tipo')
			danger
		@endslot
	@endcomponent

<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>