<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Edit Page | {{ config('app.name') }} </title>

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

	<br>

	<h1> <center> Edit Page </center> </h1>
	
	<div class="container">
		<div class="modal-body">
	      <div class="row">
	        <div class="col-3">
	          <div class="container">

	          <form action="/update/{{$ambil_data->id}}" method="POST" enctype="multipart/form-data">
		        @csrf
	          	<div class="form-group">
	          		<label for="foto"> Payment Slip </label>
	          		<br><br>
	          		<img src="{{ url('foto/'.$ambil_data->foto)}}">
	          		<br>
			    </div>

			    <br>

				<div class="form-group">
			        <label for="nama"> Bank Account </label>
			        <br>
			        <input type="text" name="nama" class="form-control" id="nama" value="{{ $ambil_data->nama }}">
			    </div>

			    <br>

			    <div class="form-group">
			        <label for="nomer_kontrak"> Account Number </label>
			        <br>
			        <input type="text" name="nomer_kontrak" class="form-control" id="nomer_kontrak" value="{{ $ambil_data->nomer_kontrak }}">
			    </div>

			    <br>

			    <div class="form-group">
			        <label for="bayar"> Paid </label>
			        <br>
			        <input type="text" name="bayar" class="form-control" id="bayar" value="{{ $ambil_data->bayar }}">
			    </div>

			    <br>

			    <div class="form-group">
			        <label for="via"> Via </label>
			        <br>
			        <input type="text" name="via" class="form-control" id="via" value="{{ $ambil_data->via }}">
			    </div>

			    <br>

			    <div class="form-group">
			        <label for="created_at"> Transaction Date </label>
			        <br>
			        <input type="datetime" name="created_at" class="form-control" id="created_at" value="{{ Carbon\Carbon::parse($ambil_data->created_at)->format("d-m-Y H:i:s") }}">
			    </div>

			    <br>

			    <div class="form-group">
			        <button type="submit" class="btn btn-sm btn-warning">Update</button>
			    	<a href="javascript:void(0);" onclick="window.location = '/dashboard' " class="btn btn-sm btn-primary" id="bk"> Back </a>

			    </div>
			  </form>

			  </div>
			</div>
		  </div>
		</div>
	</div>

	<br>

	<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>