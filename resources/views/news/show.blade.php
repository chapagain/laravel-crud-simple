
@extends('layouts.master')

@section('title', $news->title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')	
	<h1>{{ $news->title }}</h1>
	
	Category: {{ $news->category }} | Author: {{ $news->author }} | Published on: {{ $news->created_at }}
	
	<p>{{ $news->full_content }}</p>
	
@endsection
