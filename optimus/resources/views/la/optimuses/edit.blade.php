@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/optimuses') }}">Optimus</a> :
@endsection
@section("contentheader_description", $optimus->$view_col)
@section("section", "Optimuses")
@section("section_url", url(config('laraadmin.adminRoute') . '/optimuses'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Optimuses Edit : ".$optimus->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($optimus, ['route' => [config('laraadmin.adminRoute') . '.optimuses.update', $optimus->id ], 'method'=>'PUT', 'id' => 'optimus-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'id')
					@la_input($module, 'email')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/optimuses') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#optimus-edit-form").validate({
		
	});
});
</script>
@endpush
