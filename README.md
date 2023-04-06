<!DOCTYPE html>
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
		<form name="finput" method="post" action="output.php">
			<table class="table table-dark table-striped" width="50%" >
				<tr>
					<td colspan="2" align="center"><h3>Kalkulator Cetak Undangan</h3><h6 class="text-warning">by Asaka Printing</h6></td> 
				</tr>
				<tr>
					<td width="40%">Jumlah Cetak</td>
					<td width="35%"><input type="tel" name="cetak" class="form-control form-control-sm" required autocomplete="off"></td>
				</tr>
                <tr>
					<td width="45%">Banyaknya Gandeng</td>
					<td width="55%"><input type="tel" name="gandeng" class="form-control form-control-sm" required autocomplete="off"></td>
				</tr>
				<tr>
					<td>Harga Kertas</td>
					<td><input type="tel" value="5000" name="kertas" class="form-control form-control-sm" required autocomplete="off"></td>
				</tr>								
				<tr>
					<td>Ongkos Cetak</td>
					<td><input type="tel" value="140000" name="ongkos" class="form-control form-control-sm" required autocomplete="off"></td>
				</tr>
				<tr>
					<td>Biaya Plat</td>
					<td><input type="tel" value="80000" name="plat" class="form-control form-control-sm" required autocomplete="off"></td>
				</tr>
                <tr>
					<td>Ongkos Capek</td>
					<td><input type="tel" value="50000" name="capek" class="form-control form-control-sm" required autocomplete="off"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="tampil" class="btn btn-success" value="Hitung">
						<input type="reset" name="reset" class="btn btn-warning" value="Reset">
					</td>
				</tr>
			</table>
		</form>
</div>
</body>
</html>
