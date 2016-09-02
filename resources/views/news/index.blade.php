
@extends('layouts.master')

@section('title', $title)

@section('sidebar')
    @parent
    // you can add something here
@endsection

@section('content')	
	<h1>News</h1>
	
    @foreach ($news as $data)
		<div style="width:60%; border-bottom:1px solid #aaa">
			<p>
				<a href="{{ route('news.show', $data->slug) }}"><strong>{{ $data->title }}</strong></a>
				<br>				
				 
				<div>
					<span style="float:left"> 
						Category: {{ $data->category }} | Author: {{ $data->author }} | Published on: {{ $data->created_at }} |
						<a href="{{ route('news.edit', $data->id) }}">Edit</a> &nbsp;
					</span>	
					
					<!-- Delete should be a button -->
					{!! Form::open(array(
							'method' => 'DELETE',
							'route' => ['news.destroy', $data->id],
							'onsubmit' => "return confirm('Are you sure you want to delete?')",
						)) 
					!!}
						{!! Form::submit('Delete') !!}
					{!! Form::close() !!}
					<!-- End Delete button -->
				</div>
			</p>
			
			<p>{{ $data->short_description }}</p>
		</div>
	@endforeach
	
	<!-- Showing Pagination Links -->
	<style>
		ul {display:inline-block}
		li {display:inline; padding:5px}
	</style>	
	<div> {{ $news->links() }} </div>
	<!-- End Showing Pagination Links -->
		
@endsection
