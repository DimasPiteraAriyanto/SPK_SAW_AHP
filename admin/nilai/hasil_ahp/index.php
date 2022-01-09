<?php $title = "Entri Data User";
include_once('../../_header.php');

?>

			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                               <h3>Perbandingan Kriteria</h3>
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">
<?php
//Button
function button(){
?>
	<a href="index.php?aksi=read" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Perbandinghan Kriteria dengan Kriteria</a>
	<a href="index.php?aksi=read" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Normalisasi</a>
<?php
}
?>

<?php

// --- Fungsi Baca Data Perbandingan Kriteria dengan Kriteria (Read)
function tampil_data_kriteria($koneksi){
	$sql = "SELECT * FROM tb_nilaikriteria";
	$query = mysqli_query($koneksi, $sql);
	$nomor = 1;
	
		echo "<fieldset>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-responsive-sm table-bordered table-striped table-hover' id='user' border='1' cellpadding='10'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th border='0'> </th>
				<th>Kondisi Lantai</th>
				<th>Kondisi Dinding</th>
				<th>Kondisi Atap</th>
				<th>Sumber Air</th>
				<th>Bahan Bakar Masak</th>
				<th>Fasilitas BAB</th>
				<th>Kendaraan</th>
				<th>Elektronik</th>
				<th>Kendaraan Air</th>
				";	
			echo "</>";
		echo "</thead>";
		echo "<tbody>";
	while($data = mysqli_fetch_array($query)){
		$kriteria1 = "1";
		?>
			<tr>
			<tr><th>Kondisi Lantai</th>
				<td><?= $no1=round($kriteria1=$data['nilai_perbandingan']/$data['nilai_perbandingan'],2) ?></td>
				<td><?= $no2=$data['nilai_perbandingan'] ?></td>
				<td><?= $no3=$data['nilai_perbandingan2']?></td>
				<td><?= $no4=$data['nilai_perbandingan3']?></td>
				<td><?= $no5=$data['nilai_perbandingan4']?></td>
				<td><?= $no6=$data['nilai_perbandingan5']?></td>
				<td><?= $no7=$data['nilai_perbandingan6']?></td>
				<td><?= $no8=$data['nilai_perbandingan7']?></td>
				<td><?= $no9=$data['nilai_perbandingan8']?></td>
				
			</tr>
			<tr><th>Kondisi Dinding</th>
			<td><?= $no11=$kriteria1/$data['nilai_perbandingan'] ?></td>
			<td><?= $no12=$data['nilai_perbandingan']/$data['nilai_perbandingan'] ?></td>
			<td><?= $no13=$data['nilai_perbandingan9']?></td>
			<td><?= $no14=$data['nilai_perbandingan10']?></td>
			<td><?= $no15=$data['nilai_perbandingan11']?></td>
			<td><?= $no16=$data['nilai_perbandingan12']?></td>
			<td><?= $no17=$data['nilai_perbandingan13']?></td>
			<td><?= $no18=$data['nilai_perbandingan14']?></td>
			<td><?= $no19=$data['nilai_perbandingan15']?></td>
			</tr>
			<tr><th>Kondisi Atap</th>
			<td><?= $no21=$kriteria1/$data['nilai_perbandingan2'] ?></td>
			<td><?= $no22=round($kriteria1/$data['nilai_perbandingan9'],2) ?></td>
			<td><?= $no23=$data['nilai_perbandingan16']/$data['nilai_perbandingan16']?></td>
			<td><?= $no24=$data['nilai_perbandingan16']?></td>
			<td><?= $no25=$data['nilai_perbandingan17']?></td>
			<td><?= $no26=$data['nilai_perbandingan18']?></td>
			<td><?= $no27=$data['nilai_perbandingan19']?></td>
			<td><?= $no28=$data['nilai_perbandingan20']?></td>
			<td><?= $no29=$data['nilai_perbandingan21']?></td>
			</tr>
			<tr><th>Sumber Air</th>
			<td><?= $no31=round($kriteria1/$data['nilai_perbandingan3'],2) ?></td>
			<td><?= $no32=round($kriteria1/$data['nilai_perbandingan10'],2) ?></td>
			<td><?= $no33=round($kriteria1/$data['nilai_perbandingan16'],2) ?></td>
			<td><?= $no34=$data['nilai_perbandingan22']/$data['nilai_perbandingan22']?></td>
			<td><?= $no35=$data['nilai_perbandingan22']?></td>
			<td><?= $no36=$data['nilai_perbandingan23']?></td>
			<td><?= $no37=$data['nilai_perbandingan25']?></td>
			<td><?= $no38=$data['nilai_perbandingan26']?></td>
			<td><?= $no39=$data['nilai_perbandingan27']?></td>
			</tr>
			<tr><th>Bahan Bakar Masak</th>
			<td><?= $no41=$kriteria1/$data['nilai_perbandingan4'] ?></td>
			<td><?= $no42=round($kriteria1/$data['nilai_perbandingan11'],2) ?></td>
			<td><?= $no43=round($kriteria1/$data['nilai_perbandingan17'],2) ?></td>
			<td><?= $no44=round($kriteria1/$data['nilai_perbandingan21'],2) ?></td>
			<td><?= $no45=$data['nilai_perbandingan29']/$data['nilai_perbandingan29']?></td>
			<td><?= $no46=$data['nilai_perbandingan29']?></td>
			<td><?= $no47=$data['nilai_perbandingan30']?></td>
			<td><?= $no48=$data['nilai_perbandingan31']?></td>
			<td><?= $no49=$data['nilai_perbandingan32']?></td>
			</tr>
			<tr><th>Fasilitas BAB</th>
			<td><?= $no51=$kriteria1/$data['nilai_perbandingan5'] ?></td>
			<td><?= $no52=round($kriteria1/$data['nilai_perbandingan12'],2) ?></td>
			<td><?= $no53=round($kriteria1/$data['nilai_perbandingan18'],2) ?></td>
			<td><?= $no54=round($kriteria1/$data['nilai_perbandingan22'],2) ?></td>
			<td><?= $no55=round($kriteria1/$data['nilai_perbandingan27'],2) ?></td>
			<td><?= $no56=$data['nilai_perbandingan33']/$data['nilai_perbandingan33']?></td>
			<td><?= $no57=$data['nilai_perbandingan33']?></td>
			<td><?= $no58=$data['nilai_perbandingan35']?></td>
			<td><?= $no59=$data['nilai_perbandingan36']?></td>
			</tr>
			<tr><th>Kendaraan</th>
			<td><?= $no61=round($kriteria1/$data['nilai_perbandingan6'],2) ?></td>
			<td><?= $no62=round($kriteria1/$data['nilai_perbandingan13'],2) ?></td>
			<td><?= $no63=round($kriteria1/$data['nilai_perbandingan19'],2) ?></td>
			<td><?= $no64=round($kriteria1/$data['nilai_perbandingan23'],2) ?></td>
			<td><?= $no65=round($kriteria1/$data['nilai_perbandingan27'],2) ?></td>
			<td><?= $no66=round($kriteria1/$data['nilai_perbandingan31'],2) ?></td>
			<td><?= $no67=$data['nilai_perbandingan37']/$data['nilai_perbandingan37']?></td>
			<td><?= $no68=$data['nilai_perbandingan37']?></td>
			<td><?= $no69=$data['nilai_perbandingan38']?></td>
			</tr>
			<tr><th>Elektronik</th>
			<td><?= $no71=round($kriteria1/$data['nilai_perbandingan7'],2) ?></td>
			<td><?= $no72=round($kriteria1/$data['nilai_perbandingan14'],2) ?></td>
			<td><?= $no73=round($kriteria1/$data['nilai_perbandingan20'],2) ?></td>
			<td><?= $no74=round($kriteria1/$data['nilai_perbandingan25'],2) ?></td>
			<td><?= $no75=round($kriteria1/$data['nilai_perbandingan29'],2) ?></td>
			<td><?= $no76=round($kriteria1/$data['nilai_perbandingan32'],2) ?></td>
			<td><?= $no77=round($kriteria1/$data['nilai_perbandingan35'],2) ?></td>
			<td><?= $no78=$data['nilai_perbandingan39']/$data['nilai_perbandingan39']?></td>
			<td><?= $no79=$data['nilai_perbandingan39']?></td>
			
			</tr>
			<tr><th>Kendaraan Air</th>
			<td><?= $no81=$kriteria1/$data['nilai_perbandingan8'] ?></td>
			<td><?= $no82=round($kriteria1/$data['nilai_perbandingan15'],2) ?></td>
			<td><?= $no83=round($kriteria1/$data['nilai_perbandingan21'],2) ?></td>
			<td><?= $no84=round($kriteria1/$data['nilai_perbandingan26'],2) ?></td>
			<td><?= $no85=round($kriteria1/$data['nilai_perbandingan30'],2) ?></td>
			<td><?= $no86=round($kriteria1/$data['nilai_perbandingan33'],2) ?></td>
			<td><?= $no87=round($kriteria1/$data['nilai_perbandingan36'],2) ?></td>
			<td><?= $no88=round($kriteria1/$data['nilai_perbandingan37'],2) ?></td>
			<td><?= $no89=$data['nilai_perbandingan38']/$data['nilai_perbandingan38']?></td>
			</tr>
			
			<thead class="thead-light"><tr><th>Jumlah</th>
			<?php $a1=array($no1,$no11,$no21,$no31,$no41,$no51,$no61,$no71,$no81);
				  $a2=array($no2,$no12,$no22,$no32,$no42,$no52,$no62,$no72,$no82);
				  $a3=array($no3,$no13,$no23,$no33,$no43,$no53,$no63,$no73,$no83);
				  $a4=array($no4,$no14,$no24,$no34,$no44,$no54,$no64,$no74,$no84);
				  $a5=array($no5,$no15,$no25,$no35,$no45,$no55,$no65,$no75,$no85);
				  $a6=array($no6,$no16,$no26,$no36,$no46,$no56,$no66,$no76,$no86);
				  $a7=array($no7,$no17,$no27,$no37,$no47,$no57,$no67,$no77,$no87);
				  $a8=array($no8,$no18,$no28,$no38,$no48,$no58,$no68,$no78,$no88);
				  $a9=array($no9,$no19,$no29,$no39,$no49,$no59,$no69,$no79,$no89); ?>
			<td><?= array_sum($a3) ?></td>
			<td><?= array_sum($a1) ?></td>
			<td><?= array_sum($a2) ?></td>
			<td><?= array_sum($a4) ?></td>
			<td><?= array_sum($a5) ?></td>
			<td><?= array_sum($a6) ?></td>
			<td><?= array_sum($a7) ?></td>
			<td><?= array_sum($a8) ?></td>
			<td><?= array_sum($a9) ?></td>
			</tr></thead>
				
			</tr>
		<?php
	}
	echo "</tbody>";
	echo "</table>";
	echo "</fieldset>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
}



// --- Tutup Fungsi Baca Data (Read)

// --- Fungsi Baca Data Perbandingan Kriteria dengan Kriteria (Read)
function tampil_data_normalisasi($koneksi){
	

	$sql = "SELECT * FROM tb_nilaikriteria";
	$query = mysqli_query($koneksi, $sql);
	$nomor = 1;
	
		echo "<fieldset>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-responsive-sm table-bordered table-striped table-hover' id='user' border='1' cellpadding='10'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th border='0'> </th>
				<th>Kondisi Lantai</th>
				<th>Kondisi Dinding</th>
				<th>Kondisi Atap</th>
				<th>Sumber Air</th>
				<th>Bahan Bakar Masak</th>
				<th>Fasilitas BAB</th>
				<th>Kendaraan</th>
				<th>Elektronik</th>
				<th>Kendaraan Air</th>
				";	
			echo "</>";
		echo "</thead>";
		echo "<tbody>";
	while($data = mysqli_fetch_array($query)){
		$kriteria1 = "1";
		?>
			<tr>
			<tr><th>Kondisi Lantai</th>
				<td><?= $no1=round($kriteria1=$data['nilai_perbandingan']/$data['nilai_perbandingan'],2) ?></td>
				<td><?= $no2=$data['nilai_perbandingan'] ?></td>
				<td><?= $no3=$data['nilai_perbandingan2']?></td>
				<td><?= $no4=$data['nilai_perbandingan3']?></td>
				<td><?= $no5=$data['nilai_perbandingan4']?></td>
				<td><?= $no6=$data['nilai_perbandingan5']?></td>
				<td><?= $no7=$data['nilai_perbandingan6']?></td>
				<td><?= $no8=$data['nilai_perbandingan7']?></td>
				<td><?= $no9=$data['nilai_perbandingan8']?></td>
				
			</tr>
			<tr><th>Kondisi Dinding</th>
			<td><?= $no11=$kriteria1/$data['nilai_perbandingan'] ?></td>
			<td><?= $no12=$data['nilai_perbandingan']/$data['nilai_perbandingan'] ?></td>
			<td><?= $no13=$data['nilai_perbandingan9']?></td>
			<td><?= $no14=$data['nilai_perbandingan10']?></td>
			<td><?= $no15=$data['nilai_perbandingan11']?></td>
			<td><?= $no16=$data['nilai_perbandingan12']?></td>
			<td><?= $no17=$data['nilai_perbandingan13']?></td>
			<td><?= $no18=$data['nilai_perbandingan14']?></td>
			<td><?= $no19=$data['nilai_perbandingan15']?></td>
			</tr>
			<tr><th>Kondisi Atap</th>
			<td><?= $no21=$kriteria1/$data['nilai_perbandingan2'] ?></td>
			<td><?= $no22=round($kriteria1/$data['nilai_perbandingan9'],2) ?></td>
			<td><?= $no23=$data['nilai_perbandingan16']/$data['nilai_perbandingan16']?></td>
			<td><?= $no24=$data['nilai_perbandingan16']?></td>
			<td><?= $no25=$data['nilai_perbandingan17']?></td>
			<td><?= $no26=$data['nilai_perbandingan18']?></td>
			<td><?= $no27=$data['nilai_perbandingan19']?></td>
			<td><?= $no28=$data['nilai_perbandingan20']?></td>
			<td><?= $no29=$data['nilai_perbandingan21']?></td>
			</tr>
			<tr><th>Sumber Air</th>
			<td><?= $no31=round($kriteria1/$data['nilai_perbandingan3'],2) ?></td>
			<td><?= $no32=round($kriteria1/$data['nilai_perbandingan10'],2) ?></td>
			<td><?= $no33=round($kriteria1/$data['nilai_perbandingan16'],2) ?></td>
			<td><?= $no34=$data['nilai_perbandingan22']/$data['nilai_perbandingan22']?></td>
			<td><?= $no35=$data['nilai_perbandingan22']?></td>
			<td><?= $no36=$data['nilai_perbandingan23']?></td>
			<td><?= $no37=$data['nilai_perbandingan25']?></td>
			<td><?= $no38=$data['nilai_perbandingan26']?></td>
			<td><?= $no39=$data['nilai_perbandingan27']?></td>
			</tr>
			<tr><th>Bahan Bakar Masak</th>
			<td><?= $no41=$kriteria1/$data['nilai_perbandingan4'] ?></td>
			<td><?= $no42=round($kriteria1/$data['nilai_perbandingan11'],2) ?></td>
			<td><?= $no43=round($kriteria1/$data['nilai_perbandingan17'],2) ?></td>
			<td><?= $no44=round($kriteria1/$data['nilai_perbandingan21'],2) ?></td>
			<td><?= $no45=$data['nilai_perbandingan29']/$data['nilai_perbandingan29']?></td>
			<td><?= $no46=$data['nilai_perbandingan29']?></td>
			<td><?= $no47=$data['nilai_perbandingan30']?></td>
			<td><?= $no48=$data['nilai_perbandingan31']?></td>
			<td><?= $no49=$data['nilai_perbandingan32']?></td>
			</tr>
			<tr><th>Fasilitas BAB</th>
			<td><?= $no51=$kriteria1/$data['nilai_perbandingan5'] ?></td>
			<td><?= $no52=round($kriteria1/$data['nilai_perbandingan12'],2) ?></td>
			<td><?= $no53=round($kriteria1/$data['nilai_perbandingan18'],2) ?></td>
			<td><?= $no54=round($kriteria1/$data['nilai_perbandingan22'],2) ?></td>
			<td><?= $no55=round($kriteria1/$data['nilai_perbandingan27'],2) ?></td>
			<td><?= $no56=$data['nilai_perbandingan33']/$data['nilai_perbandingan33']?></td>
			<td><?= $no57=$data['nilai_perbandingan33']?></td>
			<td><?= $no58=$data['nilai_perbandingan35']?></td>
			<td><?= $no59=$data['nilai_perbandingan36']?></td>
			</tr>
			<tr><th>Kendaraan</th>
			<td><?= $no61=round($kriteria1/$data['nilai_perbandingan6'],2) ?></td>
			<td><?= $no62=round($kriteria1/$data['nilai_perbandingan13'],2) ?></td>
			<td><?= $no63=round($kriteria1/$data['nilai_perbandingan19'],2) ?></td>
			<td><?= $no64=round($kriteria1/$data['nilai_perbandingan23'],2) ?></td>
			<td><?= $no65=round($kriteria1/$data['nilai_perbandingan27'],2) ?></td>
			<td><?= $no66=round($kriteria1/$data['nilai_perbandingan31'],2) ?></td>
			<td><?= $no67=$data['nilai_perbandingan37']/$data['nilai_perbandingan37']?></td>
			<td><?= $no68=$data['nilai_perbandingan37']?></td>
			<td><?= $no69=$data['nilai_perbandingan38']?></td>
			</tr>
			<tr><th>Elektronik</th>
			<td><?= $no71=round($kriteria1/$data['nilai_perbandingan7'],2) ?></td>
			<td><?= $no72=round($kriteria1/$data['nilai_perbandingan14'],2) ?></td>
			<td><?= $no73=round($kriteria1/$data['nilai_perbandingan20'],2) ?></td>
			<td><?= $no74=round($kriteria1/$data['nilai_perbandingan25'],2) ?></td>
			<td><?= $no75=round($kriteria1/$data['nilai_perbandingan29'],2) ?></td>
			<td><?= $no76=round($kriteria1/$data['nilai_perbandingan32'],2) ?></td>
			<td><?= $no77=round($kriteria1/$data['nilai_perbandingan35'],2) ?></td>
			<td><?= $no78=$data['nilai_perbandingan39']/$data['nilai_perbandingan39']?></td>
			<td><?= $no79=$data['nilai_perbandingan39']?></td>
			
			</tr>
			<tr><th>Kendaraan Air</th>
			<td><?= $no81=$kriteria1/$data['nilai_perbandingan8'] ?></td>
			<td><?= $no82=round($kriteria1/$data['nilai_perbandingan15'],2) ?></td>
			<td><?= $no83=round($kriteria1/$data['nilai_perbandingan21'],2) ?></td>
			<td><?= $no84=round($kriteria1/$data['nilai_perbandingan26'],2) ?></td>
			<td><?= $no85=round($kriteria1/$data['nilai_perbandingan30'],2) ?></td>
			<td><?= $no86=round($kriteria1/$data['nilai_perbandingan33'],2) ?></td>
			<td><?= $no87=round($kriteria1/$data['nilai_perbandingan36'],2) ?></td>
			<td><?= $no88=round($kriteria1/$data['nilai_perbandingan37'],2) ?></td>
			<td><?= $no89=$data['nilai_perbandingan38']/$data['nilai_perbandingan38']?></td>
			</tr>
			
			<thead class="thead-light"><tr><th>Jumlah</th>
			<?php $a1=array($no1,$no11,$no21,$no31,$no41,$no51,$no61,$no71,$no81);
				  $a2=array($no2,$no12,$no22,$no32,$no42,$no52,$no62,$no72,$no82);
				  $a3=array($no3,$no13,$no23,$no33,$no43,$no53,$no63,$no73,$no83);
				  $a4=array($no4,$no14,$no24,$no34,$no44,$no54,$no64,$no74,$no84);
				  $a5=array($no5,$no15,$no25,$no35,$no45,$no55,$no65,$no75,$no85);
				  $a6=array($no6,$no16,$no26,$no36,$no46,$no56,$no66,$no76,$no86);
				  $a7=array($no7,$no17,$no27,$no37,$no47,$no57,$no67,$no77,$no87);
				  $a8=array($no8,$no18,$no28,$no38,$no48,$no58,$no68,$no78,$no88);
				  $a9=array($no9,$no19,$no29,$no39,$no49,$no59,$no69,$no79,$no89); ?>
			<td><?= array_sum($a1) ?></td>
			<td><?= array_sum($a2) ?></td>
			<td><?= array_sum($a3) ?></td>
			<td><?= array_sum($a4) ?></td>
			<td><?= array_sum($a5) ?></td>
			<td><?= array_sum($a6) ?></td>
			<td><?= array_sum($a7) ?></td>
			<td><?= array_sum($a8) ?></td>
			<td><?= array_sum($a9) ?></td>
			</tr></thead>
				
			</tr>
			
		<?php
	}
	echo "</tbody>";
	echo "</table>";
	echo "</fieldset>";
	echo "</br>";
	echo "</br>";
	echo "</br>";
}



// --- Tutup Fungsi Baca Data (Read)

// ===================================================================

// --- Program Utama
if (isset($_GET['aksi'])){
	switch($_GET['aksi']){
		case "button":
			button();
			break;
		case "read":
			echo '<a href="index.php"> &laquo; Perbandingan</a>';
			tampil_data_kriteria($koneksi);
			break;
		case "read2":
			tampil_data_normalisasi($koneksi);
			break;
		default:
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
			button();
	}
} else {
	button();
}

?>
                    		</div>
                    	</div>
                    </div>
				</div>
			</div>
		</main>


<?php include_once('../../_footer.php'); ?>
<script type="text/javascript" charset="utf8">
            $(document).ready( function () {
                $('#user').DataTable(
                    {
                        "pageLength": 4,
                        responsive: true,
                        select: true
                    }
                    );
            } );
        </script>
