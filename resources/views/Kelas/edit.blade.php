{!! Form::model($model, ['id' => 'frm-kelas']) !!}
    @include('kelas.form')
    <div class="form-group">
    	<button type="button" class="btn btn-primary" onclick="update('{!! $model->id !!}')">Update</button>
    	<button type="button" class="btn btn-secondary" onclick="bootbox.hideAll()">Cancel</button>
    <div>
{!! Form::close() !!}