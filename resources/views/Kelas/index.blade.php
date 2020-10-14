<html>
	<head>
		<title>Data Kelas</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<h1 style="margin-top:10px; text-align:center">Data Siswa</h1>
		<a style="margin-left:5px" class="btn btn-primary" href="javascript:void(0)" onclick="create()" role="button">Tambah Data</a><br><br>
		<table class="table table-hover" id="table" border="1" width="100%">
			<thead class="table table-bordered thead-dark">
				<tr>
					<th>No. Absen</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>NIS</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.1/bootbox.min.js"></script>
		<script type="text/javascript">
			$(function() {
				get();
			});
			function get() {
				$.ajax({
					url: '<?= route('Kelas.get') ?>',					
					success: function(response) {
						$('#table tbody').html(response);
					}
				})
			}
			function create() {
				$.ajax({
					url: '<?= route('Kelas.create') ?>',					
					success: function(response) {
						bootbox.dialog({
							title: 'Create kelas',
							message: response,
							backdrop: true,

						});
					}
				})				
			}
			function store() {
				$('#frm-kelas .alert').remove();
				$.ajax({
					url: '<?= route('Kelas.store') ?>',
					type: 'post',		
					dataType: 'json',
					data: $('#frm-kelas').serialize(),			
					success: function(response) {
						if (response.success) {
							alert(response.message);
							get();					
						} else {
							alert(response.message);
						}
					},
					error: function(xhr, ajaxOptions, thrownError) {
						var response = JSON.parse(xhr.responseText)							
						$('#frm-kelas').prepend(validationMessage(response));
					}
				})
			}
			function edit(id) {
				$.ajax({
					url: '<?= route('Kelas.edit') ?>/'+id,					
					success: function(response) {
						bootbox.dialog({
							title: 'Edit kelas',
							message: response,
							backdrop: true,
						});
					}
				})				
			}
			function update(id) {
				$('#frm-kelas .alert').remove();
				$.ajax({
					url: '<?= route('Kelas.update') ?>/'+id,
					type: 'post',		
					dataType: 'json',
					data: $('#frm-kelas').serialize(),			
					success: function(response) {
						if (response.success) {
							alert(response.message);
							bootbox.hideAll();
							get();					
						} else {
							alert(response.message);
						}
					},
					error: function(xhr, ajaxOptions, thrownError) {
						var response = JSON.parse(xhr.responseText)							
						$('#frm-kelas').prepend(validationMessage(response));
					}
				})	
			}
			function destroy(id) {
				$.ajax({
					url: '<?= route('Kelas.delete') ?>/'+id,
					dataType: 'json',
					success: function(response) {
						if (response.success) {
							alert(response.message);
							get();							
						} else {
							alert(response.message);
						}
					}
				})
			}
			function validationMessage(errors) {
				var validationHtml = '<div class="alert alert-danger">';
					validationHtml += '<p><b>'+errors.message+'</b></p>';				
					$.each(errors.errors, function(i, error) {
						validationHtml += error[0]+'<br>'
					})							
				validationHtml += '</div>';	
				return validationHtml;
			}
		</script>
	</body>
</html>