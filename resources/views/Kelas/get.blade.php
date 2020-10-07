@foreach($model as $row)
	<tr>
		<th>{!! $row->id !!}</th>
		<th>{!! $row->Nama !!}</th>
		<th>{!! $row->Kelas !!}</th>
		<th>{!! $row->NIS !!}</th>
		<th>
			Edit | <a href="javascript:void(0)" onclick="destroy(<?= $row->id ?>)">Delete</a>						
		</th>
	</tr>
@endforeach