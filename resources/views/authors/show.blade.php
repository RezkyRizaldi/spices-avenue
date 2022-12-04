@extends('layouts.main')

@section('title', "{$author->name} - " . config('app.name'))

@section('content')
	<x-blog-post :$author :$categories :$posts />
@endsection
