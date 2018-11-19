<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

	@if(isset($produtos))
		
		@if(count($produtos) === 0)
			<h1> Nenhum produto </h1>

		@elseif(count($produtos)===1)
			<h1> 1 produto </h1>

		@else
			<h1> Temos vários produtos </h1>

		@endif
		
		
	
	@else
		<h1>Variável produtos não foi inicializada</h1>
	@endif

	

<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>