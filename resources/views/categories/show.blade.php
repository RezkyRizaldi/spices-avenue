@extends('layouts.main')

@section('title', 'Post Details - ' . config('app.name'))

@section('content')
<x-blog-post />
@endsection