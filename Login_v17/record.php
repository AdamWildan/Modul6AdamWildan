<?php
if (!(isset($_SESSION['nis']))) {
	header("index.php");
}
require_once "./connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect,$sql);
if($result){
  if (mysqli_num_rows($result)) {
    ?>
    <table border 1 cellspacing=1 cellpadding=5>
      <tr>
        <td>#</td>
        <td width=100>NIS</td>
        <td width=150>Nama</td>
        <td>Alamat</td>
        <td width=150>Password</td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <?php
      $i = 1;
      while ($row = mysqli_fetch_row($result)) {
      ?>
      <tr>
        <td>
          <?php echo $i; ?>
        </td>
        <td>
          <?php echo $row[0]; ?>
        </td>
        <td>
          <?php echo $row[1]; ?>
        </td>
        <td>
          <?php echo $row[2]; ?>
        </td>
      </tr>
      <?php
      $i++;
      }
      ?>
    </table>
    <?php
  }
  else {
    echo "Data Tidak Ditemukan";
  }
  mysqli_close($connect);
}
 ?>
