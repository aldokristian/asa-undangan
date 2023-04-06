<?php 
	$cetak = $_POST['cetak'];
	$gandeng = $_POST['gandeng'];
    $kertas = $_POST['kertas'];
	$ongkos = $_POST['ongkos'];
	$plat = $_POST['plat'];
    $capek = $_POST['capek'];

	// hitung nilai akhir
    $total1 = ($cetak / 2 + 50) / $gandeng;
    $total2 = ($total1 * $kertas) + $ongkos + $plat + $capek;
	$total3 = ($total2 + 400000);
    $perlembar = $total3 / $cetak;
    $keuntungan = $total3 - $total2;

?>

<html lang="en">
<head>
  <title>Kalkulator Undangan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
        body {
  background: linear-gradient(90deg, #141e30 0%, #243b55 100%);
}
    tr, td{
			text-align: center;
		}
		.hrg{
			text-align: Right;
		}
	</style>    
<body>
    <?php include 'nav.php' ?>
    <div class="container">
	<table class="table table-dark table-striped" width="80%" border="1" cellpadding="5" cellspacing="0" align="center">
		<tr>
			<td colspan="2"><h3>Hitungan Harga Cetak / <?php echo $cetak ." Lembar"?></h3></td>
		</tr>
		<tr>
			<td width="50%">Banyak Cetak / Plano </td>
			<td width="50%" class="hrg"><?php echo $total1 ." Plano";?></td>
		</tr>
        <tr>
			<td width="50%">Kertas </td>
			<td width="50%" class="hrg"><?php echo  number_format($total1 * $kertas,0,',','.'); ?></td>
		</tr>
        <tr>
			<td>Ongkos Cetak</td>
			<td class="hrg"><?php echo  number_format($ongkos,0,',','.'); ?></td>
		</tr>
        <tr>
			<td>Harga Plat</td>
			<td class="hrg"><?php echo  number_format($plat,0,',','.'); ?></td>
		</tr>
		<tr class="text-danger">
			<td>Total Biaya Cetak + Ongkos</td>
			<td class="hrg"><?php echo number_format($total2,0,',','.'); ?></td>
		</tr>
		<tr class="text-success">
			<td>Total Harga Jual </td>
			<td class="hrg" ><?php echo  number_format($total3,0,',','.'); ?></td>
		</tr>	
        <tr class="text-info">
			<td>Harga per lembar </td>
			<td class="hrg"><?php echo  number_format($perlembar,0,',','.'); ?></td>
		</tr>
        <tr class="text-success">
			<td colspan="2"><h5>Total Keuntungan <br >Rp. <?php echo number_format($keuntungan,0,',','.'); ?></h5></td>
            
        </tr>
        <tr>
            <td colspan="2" >
                <a href="index.php" class="btn btn-info">Kembali</a>
            </td>
        </tr>
	</table>

</div>
</body>
</html>