

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Handleer </title>
    <style type="text/css">
        tr th {
            background-color: #ddd;
        }

       .tes:hover {
        background-color: #eaea;
       }
    </style>
</head>
<body>

    <table border="1" style="width: 100%; text-align: center;">
        <tr>
            <th> No </th>
            <th> Latitude </th>
            <th> Longitude </th>
            <th> Log Data </th>
            <th> created </th>
        </tr>
        <?php $no = 1; ?>
        @foreach( $data_location as $data )
            <tr class="tes">
                <td> {{$no++}} </td>
                <td> {{$data['latitude']}} </td>
                <td> {{$data['longitude']}} </td>
                <td> <a href="<?= $data['data_record'] ?>" target="blank"> {{$data['data_record']}} </a> </td>
                <td> {{ Carbon\Carbon::parse($data['created_at'])->format("d-m-Y H:i:s") }} </td>
            </tr>
        @endforeach
        <button id="bk"> Back </button>
    </table>

<script type="text/javascript">
    const back = document.querySelector("#bk")
    back.addEventListener('click', function(e) {
        e.preventDefault()
        document.location.href = "/absen"
    })
</script>

</body>
</html>