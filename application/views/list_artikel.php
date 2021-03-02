<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css">
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" 
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>

	</head>
	<body>

		<div class="row" style="margin-left:10%;margin-top:5%; width:80%;">
			
			<div class="col-md-6"> <h2>List Artikel</h2></div>
			<div class="col-md-6" style="text-align:right;"> <input type="button" value="+ Tambah" class="btn btn-priamry btn-sm"></div>
			<div class="col-md-12">
				<table id="example" class="display" style="width:100%">
					<thead>
						<tr>
							<th style="text-align:center; width:10%;">No</th>
							<th style="text-align:center;  width:25%;">Author</th>
							<th style="text-align:center;  width:25%;">Artikel</th>
							<th style=" width:10%;"> &nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach ($result as $value) { ?>
						<tr>
							<td style="text-align:center;"><?= $i++;?></td>
							<td style="text-align:center;"><?= $value['author'] ?></td>
							<td style="text-align:center;"><?= $value['text'] ?></td>
							<td style="text-align:center;"> 
								<a href="<?= base_url('/PageArtikel/page_view/'.$value['id']);?>">Detail</a> &nbsp;
								<a href="<?= base_url('/PageArtikel/page_edit/'.$value['id']);?>">Edit</a> &nbsp;
								<a onclick="myFunction()" href="<?= base_url('/PageArtikel/delete/'.$value['id']);?>">Delete</a> &nbsp;
							</td>
						</tr>
						<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
		
	</body>

	<script>
	function myFunction() {
		if(!confirm("Apakah anda yakin ingin hapus?"))
		event.preventDefault();
	}
	</script>

	<script>
    $(document).ready(function(){
      $('#example').DataTable();
    });
  </script>
</html>
