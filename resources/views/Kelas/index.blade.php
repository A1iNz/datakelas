<html>
	<head>
		<title>Data Kelas</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<h1 style="margin-top:10px; text-align:center">Data Siswa</h1>
		<a style="margin-left:5px" class="btn btn-primary" href="#" role="button">Tambah Data</a><br><br>
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
		</script>
	</body>
</html>