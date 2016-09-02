
@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')

	<h1>{{ $title }}</h1>

	{!! Form::open([
		'route' => 'news.store'
	]) !!}

	<table>
		<tr>
			<td>{!! Form::label('title', 'Title', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::text('title', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
		</tr>
		<tr>
			<td>{!! Form::label('slug', 'Slug', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::text('slug', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
		</tr>
		<tr>
			<td>{!! Form::label('category', 'Category', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::select('category', array('Politics' => 'Politics', 'Sports' => 'Sports', 'International' => 'International'), null, ['placeholder' => 'Select Category']) !!}</td>
		</tr>
		<tr>
			<td>{!! Form::label('author', 'Author', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::select('author', array('John' => 'John', 'Tom' => 'Tom', 'Jack' => 'Jack'), null, ['placeholder' => 'Select Author']) !!}</td>
		</tr>
		<tr>
			<td valign="top">{!! Form::label('short_description', 'Short Description', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::textarea('short_description', null, ['class' => 'form-control']) !!}</td>
		</tr>
		<tr>
			<td valign="top">{!! Form::label('full_content', 'Full Content', ['class' => 'control-label']) !!}</td>
			<td>{!! Form::textarea('full_content', null, ['class' => 'form-control']) !!}</td>
		</tr>		
		<tr>
			<td></td>
			<td>{!! Form::submit('Submit', ['class' => 'btn btn-submit']) !!}</td>
		</tr>
	</table>		
	
	{!! Form::close() !!}

@endsection
