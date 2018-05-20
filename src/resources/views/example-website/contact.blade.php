@extends('apiarist::layouts.example-website.default')
@section('page-title', 'Contact Us')

@section('page-head')
	<!--
		Track This Page -
		You can add the code below to any laravel blade file to automatically
		track that page. Just pass the page ID as a parameter and you're good.

		Optionally, you can also directly call this function in a Controller
		or directly in a routes file. If you're feeling brave, you can make
		your own middleware as well.
	-->
	@php \thepirateorange\Apiarist\Apiarist::trackPage($page_id); @endphp
@endsection

@section('page-content')
	This page has been viewed <span>{{ $views }}</span> times.
@endsection
