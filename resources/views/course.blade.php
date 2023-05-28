<?php  
	// session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title> Dashboard Admin </title>
    <style type="text/css">
        
            /* css default */
*, html, body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container {
	width: 100%;
	height: auto;
	min-height: 100vh;
	background-color: #eaeaea;
	padding: 10px;
}

.lgout {
	width: 100%;
	background: #3CB371;
	border: 3px solid #FF4500;
	color: white;
	padding: 5px;
	cursor: pointer;
	margin: 12px 0;
}

.prt {
	width: 100%;
	background: #3CB371;
	border: 3px solid #FF4500;
	color: white;
	padding: 5px;
	cursor: pointer;
	margin: 12px 0;	
}

.wrapper {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: center;
	width: 100%;
	height: auto;
	color: white;
	padding: 10px;
}

.card {
	border: 1px solid gray;
	background-color: #ddd;
	color: black;
	padding: 32px;
	margin: 8px;
	width: auto;
	border-radius: 10px;
	box-shadow: 3px -2px 2px 2px rgba(0, 0, 0, 0.5);
}

.text-center {
	text-align: center;
}

.judul {
	background-color: brown;
	padding-top: 10px;
	color: wheat;
}

.identity {
	padding: 10px 220px;
	display: flex;
}

.title-page {
	background-color: brown;
	padding: 10px;
	width: auto;
	margin-left: auto;
	margin-right: auto;
	color: wheat;
}

table {
  width: auto;
  margin-left: auto;
  margin-right: auto;
}


th {
	background-color: black;
	color: white;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  text-align: center;
}

tr:hover {background-color: white;}

.fn-btn {
	margin-left: auto;
}

/* Dibuka ketika di bawah resolusi 476px */
@media screen and (max-width: 500px) {
	.container {
		width: 100%;
	}

	.pf {
		padding-top: 17px;
	}

	.card {
		width: 70%;
		margin-left: auto;
		margin-right: auto;
		overflow-x:auto;
		justify-content: center;
	}

	.judul {
		width: auto;
	}

	.wrapper {
	}

	table {
		border-collapse: collapse;
	  border-spacing: 0;
	  width: 100%;
	  border: 1px solid #ddd;
	}

	.identity {
		padding: 10px 89px 10px 96px;
	}

	.title-page {
		width: auto;
	}
}


    </style>
</head>
<body onload="locate()">
		
	<div class="container">
		<div class="title-page">
			<center> <h2> Admin Page </h2> </center>
		</div>
		<div class="identity">
			<div class="pf">
			    <p> Halo <i> Ilham r </i> </p>
                <br>
                <p> Role : <i> Admin </i> </p>
			</div>
			<div class="fn-btn">
				<button style="text-align: center;" class="prt" onclick="window.print()"> Cetak Laporan </button>
				<form action="" method="post">
					<button type="submit" class="lgout" name="logout" onclick="return confirm('Are you sure ?')" style="margin-top: 16px;"> Log Out </button>
				</form>
			</div>
			
		</div>
		<div class="wrapper">
			<div class="card text-center">
				<div class="judul">
					<center> <strong> Log Absen </strong> </center>
					<br>
				</div>
				<table class="tbl1">
                	<tr class="tr">
                		<th class="th"> No. </th>
                		<th class="th"> Nama </th>
                		<th class="th"> Jabatan </th>
                		<th class="th"> Tanggal </th>
                		<th class="th"> Clock In </th>
                		<th class="th"> Clock Out </th>
                	</tr>
                	<tr class="tr">
                	    <td class = 'td'> 1 </td>
                	    <td class = 'td'> Ilham </td>
                	    <td class = 'td'> Admin </td>
                	    <td class = 'td'> 23-01-2023 </td>
                	    <td class = 'td'> 08.00 </td>
                	    <td class = 'td'> 17.00 </td>
                	</tr>
                </table>
			</div>
			<div class="card text-center">
				<div class="judul">
					<center> <strong> List User Absen </strong> </center>
					<br>
				</div>
				<br>
				<table class="tbl2">
                	<tr class="tr">
                		<th class="th"> No. </th>
                		<th class="th"> Nama </th>
                		<th class="th"> Role </th>
                		<th class="th"> Action </th>
                	</tr>
                	<tr class="tr">
                	    <td class = 'td'> 1 </td>
                	    <td class = 'td'> Ilham </td>
                	    <td class = 'td'> Admin </td>
                	    <td class = 'td'> 
                	        <a href="ubah.php" style="color: green;"> ubah </a> |
                	        <a href="hapus.php" onclick="return confirm('Anda Yakin Ingin Menghapus ?');" style="color: red;"> hapus</a>
                	        http://127.0.0.1:8000/check
                	    </td>
                	</tr>
                </table>
			</div>
		</div>
	</div>
	

<script type="text/javascript" src="js/jquery.min.js"></script>
<script>

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    
	function locate () {

		if(navigator.geolocation) {
		    var optn = {enableHighAccuracy : true, timeout : 30000, maximumage: 0};
		    navigator.geolocation.getCurrentPosition(showPosition, showError, optn);
	 	} else {
		    alert('Geolocation is not Supported by your Browser...');
	  	}


	  	const waiting = () => {
	      	document.location.href='/check'
	  	}

	  	function showPosition(position) {
	    	var lat = position.coords.latitude;
		    var lon = position.coords.longitude;
		    // document.querySelector("#lt").innerHTML = lat
		    // document.querySelector("#lngt").innerHTML = lon
		    const data = `https://google.com/maps/place/${lat}+${lon}`
		    $.ajax({
		      type: 'POST',
		      url: "{{ route('ajaxRequest.post') }}",
		      data: {data: data, latitude: lat, longitude: lon},
			      success: function(){
			      	console.log('ok');
		  			setInterval(waiting, 1000);
		        }
	    	});
	  	}


	    function showError(error) {
			switch(error.code) {
				case error.PERMISSION_DENIED:
					var denied = 'User denied the request for Geolocation';
		      		alert('Please Refresh This Page and Allow Location Permission...');
		      	break;
				case error.POSITION_UNAVAILABLE:
					var unavailable = 'Location information is unavailable';
					break;
				case error.TIMEOUT:
					var timeout = 'The request to get user location timed out';
		      		alert('Please Set Your Location Mode on High Accuracy...');
					break;
				case error.UNKNOWN_ERROR:
					var unknown = 'An unknown error occurred';
					break;
			}

		  	$.ajax({
			    type: 'POST',
			    url: 'error.blade.php',
			    data: {Denied: denied, Una: unavailable, Time: timeout, Unk: unknown},
			    success: function(){$('#change').html('Failed');},
			    mimeType: 'text'
		  	});
	    }

	}

    
</script>
	
</body>
</html>