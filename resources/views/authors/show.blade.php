@extends('layouts.main')

@section('title', "{$author->name} - " . config('app.name'))

@section('content')
	<x-blog-post :$archives :$author :$categories :$posts />
@endsection
