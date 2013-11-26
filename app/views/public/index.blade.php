@extends('templates.public.public')

@section('head')
	@parent
	<title>Cloud I.T.</title>
	<meta name='robots' content='index, follow'>
@stop

@section('header')
	@parent
@stop

@section('content')
	@parent
	@include('public.home')
	@include('public.partners')
	@include('public.company')
	@include('public.contact')
	@include('public.blog')
@stop

@section('footer')
	@parent

@stop