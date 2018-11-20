@extends('layout.meuLayout')

@section('minha_secao_produtos')
	@if(isset($palavra))
		<p>Palavra: {{$palavra}}</p>
	@endif

@endsection