@extends('layout')


@section('content')

<div class="row">
	<div class="col-md-4">	
<h1>{!! $flyer->street !!}</h1>
<h3> {!! $flyer->price !!}</h3>

<div class="description">
	<p>{!! nl2br($flyer->description) !!}</p>
</div>
	</div>

	<div class="col-md-8 gallery">
		@foreach($flyer->photos->chunk(4) as $set)
			<div class="row">
				@foreach ($set as $photo)
				<div class="col-md-3 gallery__image">
				<img src="/{{ $photo->thumbnail_path }}" alt="" title="" />
				</div>
				@endforeach
			</div>	
		@endforeach	
	</div>
</div>

<hr>
<h3>Add photos : </h3>

<!--<form id="addPhotosForm" action="/{{ $flyer->zip }}/{{ $flyer->street }}/photos" method="POST" class="dropzone">-->
<form id="addPhotosForm" action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}" method="POST" class="dropzone" enctype="multipart/form-data">

	{{ csrf_field() }}
</form>

@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>

<script type="text/javascript">
	Dropzone.options.addPhotosForm = {
		paramName: 'photo',
		maxFilesize: 3,
		acceptedFiles: '.jpg, .jpeg, .png, .bmp'
	};
</script>


	
@endsection