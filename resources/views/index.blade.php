<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title> FIF Credit Payment Proof | {{ config('app.name') }} </title>

  </head>
  <body>

  	<br>

  	@yield('jq')
  	<script src="js/jquery-3.6.0.min.js"></script>

  	<div class="container">
    	<h1> <center> <img src="foto/vario.jpg" width="200px" height="200px"> FIF Credit Payment <img src="foto/fif.jpg" width="200px" height="180px"> </center> </h1>

    	<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
		  Add
		</button>

		<!-- Modal -->
		<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel"> Payment </h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <form action="{{ route('simpan.aja') }}" method="POST" enctype="multipart/form-data">
	              @csrf

	              <div class="form-group">
	                <label for="nama"> Bank Account Under the Name </label>
	                <input type="text" name="nama" class="form-control" id="nama" required placeholder="name">
	              </div>

	              <br>

	              <div class="form-group">
	                <label for="nomer_kontrak"> Account Number </label>
	                <input type="text" name="nomer_kontrak" class="form-control" id="nomer_kontrak" required placeholder="name">
	              </div>

	              <br>

	              <div class="form-group">
	                <label for="bayar"> Paid </label>
	                <input type="text" name="bayar" class="form-control" id="bayar" required placeholder="Rp.">
	              </div>

	              <br>

	              <div class="form-group">
	                <label for="via"> Via </label>
	                <input type="text" name="via" class="form-control" id="via" required placeholder="BCA Mobile, BNI Mobile">
	              </div>

	              <br>

	              <div class="form-group">
	                <label> Payment Slip </label>
	                <input type="file" name="foto" class="form-control">
	              </div>

	              <br>

	              <!-- <div class="form-group">
	                <button type="submit" class="btn btn-primary"> Send </button>
	                <a href="/dashboard" class="btn btn-primary"> Back </a>
	              </div> -->

	              <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>

	                <script type="text/javascript">
	    
	                  var rupiah = document.getElementById('bayar');
	                  rupiah.addEventListener('keyup', function(e){
	                    // tambahkan 'Rp.' pada saat form di ketik
	                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
	                    rupiah.value = formatRupiah(this.value, 'Rp. ');
	                  });
	               
	                  /* Fungsi formatRupiah */
	                  function formatRupiah(angka, prefix){
	                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
	                    split       = number_string.split(','),
	                    sisa        = split[0].length % 3,
	                    rupiah        = split[0].substr(0, sisa),
	                    ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
	               
	                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
	                    if(ribuan){
	                      separator = sisa ? '.' : '';
	                      rupiah += separator + ribuan.join('.');
	                    }
	               
	                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	                  }

	                </script>

	            </form>

		      </div>

		      
		    </div>
		  </div>
		</div>


    	<br><br>
    	<div class="row">
    		<div class="container">
    			@if(session('berhasil'))
					<div class="alert alert-warning" role="alert">
					  {{session('berhasil')}}
					</div>
				@endif
    		</div>	
    	</div>
    	<table class="table table-hover" style="text-align: center;">
		  <thead>
			<tr class="bg-warning">
				<th style="text-align: center;"> No. </th>
				<th style="text-align: center;"> Bank Account Under the Name </th>
				<th style="text-align: center;"> Account Number </th>
				<th style="text-align: center;"> Paid </th>
				<th style="text-align: center;"> Via </th>
				<th style="text-align: center;"> Transaction Date </th>
				<th style="text-align: center;"> Payment Slip </th>
				<th style="text-align: center;"> Action </th>
			</tr>
		  </thead>
	  	
		  <tbody id="coba">
		  	<?php $nomor = 1; ?>
		  	@foreach( $data_voli as $fif )
		  	<tr id="cb">
		  		<td> {{ $nomor++ }} </td>
		  		<td> <a href="javascript:void(0);" onclick="window.location = '/detail/{{$fif->id}}'" style="color: black;"> {{ $fif->nama }} </a> </td>
		  		<td> <a href="javascript:void(0);" onclick="window.location = '/detail/{{$fif->id}}'" style="color: black;"> {{ $fif->nomer_kontrak }} </a> </td>
		  		<td> <a href="javascript:void(0);" onclick="window.location = '/detail/{{$fif->id}}'" style="color: black;"> {{ $fif->bayar }} </a> </td>
		  		<td> <a href="javascript:void(0);" onclick="window.location = '/detail/{{$fif->id}}'" style="color: black;"> {{ $fif->via }} </a> </td>
		  		<td> <a href="javascript:void(0);" onclick="window.location = '/detail/{{$fif->id}}'" style="color: black;"> {{ $fif->created_at }} </a> </td>
				<td> <a href="javascript:void(0);" onclick="window.location = '/detail/{{$fif->id}}'" style="color: black;"> <img src="{{ url('foto/'.$fif->foto)}}" width="100px" height="100px"> </a> </td>

				<td> 
					<a href="javascript:void(0);" onclick="window.location = '/edit/{{ $fif->id }}' " class="btn btn-primary"> Edit </a>
					<a href="javascript:void(0);" data-id="{{$fif->id}}" class="btn btn-sm btn-danger hps"> 
						<form action="{{ route('delete', $fif->id) }}" id="delete{{ $fif->id }}" method="post">
							@csrf
							@method('delete')
									
						</form>
						Delete 
					</a>
				</td>
				
		  	</tr>
		  	@endforeach
		  </tbody>

		</table>
	    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

 	<script src="{{asset('/js/sweetalert2.all.min.js')}}"></script>

 	<script>
		$(document).ready(function(){
			$('.hps').click(function(i){
				id = i.target.dataset.id;
				Swal.fire({
					title: 'Are you sure ? ',
					text: "Deleted data cannot be reversed",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						Swal.fire(
							'Deleted!',
							'Your file has been deleted.',
							'success'
						)
						$(`#delete${id}`).submit();
					}
				}) 
			})
		})
	</script>

  </body>
</html>
