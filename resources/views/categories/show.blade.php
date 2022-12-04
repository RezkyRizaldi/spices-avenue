@extends('layouts.main')

@section('title', "{$category->name} - " . config('app.name'))

@section('content')
	<x-blog-post :$archives :$categories :$category :$posts />
@endsection
