@foreach($model as $row)
	<tr>
		<td>{!! $row->id !!}</td>
		<td>{!! $row->nama !!}</td>
		<td>{!! $row->kelas !!}</td>
		<td>{!! $row->nis !!}</td>
		<td>
		<a href="javascript:void(0)" onclick="edit(<?= $row->id ?>)">Edit</a> | <a href="javascript:void(0)" onclick="destroy(<?= $row->id ?>)">Delete</a>						
		</td>
	</tr>
@endforeach