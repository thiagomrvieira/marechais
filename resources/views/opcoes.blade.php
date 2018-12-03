@extends('layout.meuLayout')

@section('minha_secao_produtos')
	Você escolheu a opção:
	
	@if (isset($opcao))
		@switch($opcao)
	    @case(1)
	        <span> opcao 1!</span>
	        @break

	    @case(2)
	        <span> opcao 2!</span>
	        @break

	    @default
	        <span>Something went wrong, please try again</span>
@endswitch

	@endif



@endsection 