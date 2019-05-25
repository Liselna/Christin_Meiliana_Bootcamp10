<?php
$link = mysqli_connect("localhost","root","","aplikasi") or die("Koneksi gagal");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SOAL 6</title>
    <!-- <style>
        div {
          width:400px;
          height: 100px;
        }
        .row {
          border: 2px solid black;
        }
     </style>-->
  </head>
  <body>
 <?php $tes = "select max(id) as maks from users ";
                      $hasil = mysqli_query($link,$tes);
                      $data = mysqli_fetch_array($hasil);
                      $idMax = $data['maks'];

                      $noUrut = (int) substr($idMax, 1, 9);
                      $noUrut++;
                      $newID = sprintf("%02s", $noUrut);
echo "<form method=post action=simpan.php>
Masukkan Nama Programmer <input type=text name=id value=$newID disabled><br><br><table border=4>
<td><input type=text name=name><input type=submit value=Simpan></td>
</table><br>";
$query = mysqli_query($link,"select u.name as nama,s.name as skil from users u left join skills s on u.id=s.user_id where u.id ");
while($var=mysqli_fetch_array($query)){
echo "<table border=2><tr>
<td><center>$var[nama]</td>
<td rowspan=2>Input Skills :<input type=text>
<input type=submit value=Simpan>
</td></tr>
<tr>
<td><center>$var[skil]</td></tr><br></table>";
}
$part = mysqli_query($link,"select u.name as nama,count(s.name) as skil from users u left join skills s on u.id=s.user_id group by u.id ");
while($var=mysqli_fetch_array($part)){
echo "<br><div><table border='1'><tr><td>Nama Programmer</td>
<td><center>Total Skills</td>
</td></tr>
<tr><td>$var[nama]</td><td><center>$var[skil]</td></tr></table></div>";
}
?>

  <!-- <div class="container">
        <div class="row">
          <div class="col-md" ></div>
          <div class="col-md">
            <button type="button" class="btn btn-primary">Tambah</button>
          </div>
        </div>
          <div class="w-100"></div>
          <div class="row">
          <div class="col-md"></div>
        </div>
      </div>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>