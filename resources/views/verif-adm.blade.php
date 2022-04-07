<html>
    <head>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIK</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Nama Usaha</th>
      <th scope="col">Tahun Berdiri</th>
      <th scope="col">Email</th>
      <th scope="col">Foto KTP</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($data_user as $key=>$row)
    <tr>
      <th scope="row">1</th>
      <td>{{ $row->nama }}</td>
      <td></td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
