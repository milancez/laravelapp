@extends('master')
@section('title', 'Contact')

@section('content')

<div class="container col-md-8 col-md-offset-2">
	<div class="well well bs-component">
		<form class="form-horizontal" method="post">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">

			@foreach ($errors->all() as $error)
				<p class="alert alert-danger">{{ $error }}</p>
			@endforeach

			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif

			<fieldset>
				<legend>Edit ticket</legend>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Title</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="title" value="{!! $ticket->title !!}" name="title">
					</div>
				</div>
				<div class="form-group">
					<label for="content" class="col-lg-2 control-label">Content</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" id="content" name="content">{!! $ticket->content !!}</textarea>
					</div>
				</div>
				<div class="form-group">
					<label>
						<input type="checkbox" name="status" {!! $ticket->status ? "" : "checked"!!} > Close this ticket?
					</label>
				</div>
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
@endsection