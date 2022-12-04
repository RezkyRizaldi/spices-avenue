@extends('layouts.main')

@section('title', $archivePosts->first()->date . ' - ' . config('app.name'))

@section('content')
	<x-blog-post :$archives :$archivePosts :$categories :$comments :$posts />
@endsection
