@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tamuses') }}">Tamus</a> :
@endsection
@section("contentheader_description", $tamus->$view_col)
@section("section", "Tamuses")
@section("section_url", url(config('laraadmin.adminRoute') . '/tamuses'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tamuses Edit : ".$tamus->$view_col)

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
				{!! Form::model($tamus, ['route' => [config('laraadmin.adminRoute') . '.tamuses.update', $tamus->id ], 'method'=>'PUT', 'id' => 'tamus-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama')
					@la_input($module, 'email')
					@la_input($module, 'pesan')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tamuses') }}">Cancel</a></button>
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
	$("#tamus-edit-form").validate({
		
	});
});
</script>
@endpush
