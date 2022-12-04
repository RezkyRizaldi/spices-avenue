@extends('layouts.main')

@section('title', request('search') . ' - ' . config('app.name'))

@section('content')
	<x-blog-post :$archives :$categories :$comments :$posts :$searchPosts />
@endsection
