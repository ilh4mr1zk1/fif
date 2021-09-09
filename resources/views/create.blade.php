<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tambah Data </title>
  <style>
    body {
      margin: 5%;
      padding: 5%;
    }

    div .container {
      margin-left: 25%;
    }

  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

  <h1> <center> Payment Page </center> </h1>

     <div class="modal-body">
      <div class="row">
        <div class="col-8">
          <div class="container">
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
                <input type="file" name="foto" class="form-control" value=" {{ old('foto') }}">
              </div>

              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"> Send </button>
                <a href="/dashboard" class="btn btn-primary"> Back </a>
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

</body>
</html>

 

