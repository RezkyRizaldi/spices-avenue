@extends('layouts.main')

@section('title', "{$category->name} - " . config('app.name'))

@section('content')
	<x-blog-post :$categories :$category :$posts />
@endsection
