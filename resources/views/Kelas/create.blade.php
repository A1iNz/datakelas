{!! Form::open(['id' => 'frm-kelas']) !!}
    @include('Kelas.form')
    <div class="form-group">
    	<button type="button" class="btn btn-primary" onclick="bootbox.hideAll(), store()">Save</button>
    	<button type="button" class="btn btn-secondary" onclick="bootbox.hideAll()">Cancel</button>
    <div>
{!! Form::close() !!}