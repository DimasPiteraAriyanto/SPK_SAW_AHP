<?php $title = "Entri Data User";
include_once('../_header.php');

?>

			<div id="layoutSidenav_content">
                <main>
                    <?php 
                    if (!isset($_SESSION['admin'])) {
                        echo    "<script>
                                alert('Anda Bukan Admin');
                                location='../dashboard';
                            </script>";
                        } 
                     ?>
                    <div class="container-fluid">
                        <ol>
                            <li class="breadcrumb-item">
                               <h3> Entri Data Calon Penerima Bantuan</h3> 
                            </li>
                        </ol>

                        <div class="row">

                        	<div class="col-xl-auto offset-xl-1">


<?php

// --- Fngsi tambah data (Create)
function tambah($koneksi){
	
	if (isset($_POST['btn_simpan'])){
		$nik = $_POST['nik'];
		$nama_alternatif = $_POST['nama_alternatif'];
		$kit1 = $_POST['kit1'];
        $kit2 = $_POST['kit2'];
        $kit3 = $_POST['kit3'];
        $kit4 = $_POST['kit4'];
        $kit5 = $_POST['kit5'];
        $kit6 = $_POST['kit6'];
        $kit7 = $_POST['kit7'];
        $kit8 = $_POST['kit8'];
        $kit9 = $_POST['kit9'];

		
		if(!empty($nik) && !empty($nama_alternatif) && !empty($kit1)){

			$sql ="INSERT INTO tb_alternatif
            (nik,nama_alternatif,kit1,kit2,kit3,kit4,kit5,kit6,kit7,kit8,kit9)
            VALUES('$nik','$nama_alternatif','$kit1','$kit2','$kit3','$kit4','$kit5','$kit6','$kit7','$kit8','$kit9')";

			$simpan = mysqli_query($koneksi, $sql);
			if($simpan && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'create'){
					header('location: index.php');
				}
			}
		} else {
			$pesan = "Tidak dapat menyimpan, data belum lengkap!";
		}
	}

	?> 
		<form action="" method="POST">
			<fieldset>
				<div class="table-responsive">
					<table class="table table-responsive-sm table-hover" border="0">
						<tr>
							<td>NIK </td>
							<td> : <input type="text" name="nik" required /></td>
						</tr>
						<tr>
							<td>Nama Calon Penerima Bantuan</td> 
							<td> : <input type="text" name="nama_alternatif" required /></label></td>
						</tr>
						<tr><td><h4>Kondisi Rumah</h4></td></tr>
                        <tr>
							<td>Kondisi Atap</td> 
							<td> : <select name="kit1">
                            <option disabled selected value="">-Pilih Kondisi Atap-</option>
                                    <option value="3">Rapak</option>
                                    <option value="2">Daun</option>
                                    <option value="1">Seng</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Dinding</td> 
							<td> : <select  name="kit2">
                            <option disabled selected value="">-Pilih Kondisi Dinding-</option>
                                    <option value="3">Bambu</option>
                                    <option value="2">Kayu</option>
                                    <option value="1">Tembok</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Lantai</td> 
							<td> : <select  name="kit3">
                            <option disabled selected value="">-Pilih Kondisi Lantai-</option>
                                    <option value="3">Tanah</option>
                                    <option value="2">Ubin</option>
                                    <option value="1">Keramik</option>    
                            </select></td>
						</tr>
                        
                        <tr><td><h4>Fasilitas</h4></td></tr>
                        <tr>
							<td>Sumber Air</td> 
							<td> : <select  name="kit4">
                            <option disabled selected value="">-Pilih Sumber AIR-</option>
                                    <option value="3">Air Sungai</option>
                                    <option value="2">Sumur</option>
                                    <option value="1">Air PDAM</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Fasilitas BAB</td> 
							<td> : <select  name="kit5">
                            <option disabled selected value="">-Pilih Fasilitas BAB-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">Umum</option>
                                    <option value="1">Sendiri</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Bahan Bakar Memasak</td> 
							<td> : <select  name="kit6">
                            <option disabled selected value="">-Pilih Bahan Bakar Memasak-</option>
                                    <option value="3">Kayu</option>
                                    <option value="2">Kompor Minyak</option>
                                    <option value="1">Kompor Gas</option>    
                            </select></td>
						</tr>

                        <tr><td><h4>Asset</h4></td></tr>
                        <tr>
							<td>Kendaraan</td> 
							<td> : <select  name="kit7">
                            <option disabled selected value="">-Pilih Kendaraan-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">Sepeda Ontel</option>
                                    <option value="1">Motor</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Elektronik</td> 
							<td> : <select  name="kit8">
                            <option disabled selected value="">-Pilih Elektronik-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">TV/HP</option>
                                    <option value="1">Kulkas</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kendaraan Air (Untuk Daerah Dekat Laut/Sungai Besar)</td> 
							<td> : <select  name="kit9">
                            <option disabled selected value="">-Pilih Kendaraan Air-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">Kapal Dayung</option>
                                    <option value="1">Kapal Motor</option>    
                            </select></td>
						</tr>

						<tr>
							<td></td>
							<td><label class="ml-2">
							<input type="submit" name="btn_simpan" value="Simpan"/>
							<input type="reset" name="reset" value="Besihkan"/>
						</label></td>
						</tr>

					</table>
					<br>
					<?php 
// echo "<pre>";
// print_r($datadesa);
// echo "</pre>";
					 ?>
				</div>

				<p><?php echo isset($pesan) ? $pesan : "" ?></p>
			</fieldset>
		</form>

	<?php

}
// --- Tutup Fngsi tambah data


// --- Fungsi Baca Data (Read)
function tampil_data($koneksi){
	$sql = "SELECT * FROM tb_alternatif";
	$query = mysqli_query($koneksi, $sql);
	$nomor = 1;
	
		echo "<fieldset>";
		echo "<div class='table-responsive'>";
		echo "<table class='table table-responsive-sm table-bordered table-hover' id='tb_user' border='1' cellpadding='10'>";
		echo "<thead>";
			echo "<tr>";
			echo "<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
                <th>Kondisi Rumah</th>
                <th>Fasilitas</th>
                <th>Asset</th>
				<th>Edit</th>
				<th>Hapus</th>";	
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?= $nomor++; ?>.</td>
				<td><?php echo $data['nik']; ?></td>
				<td><?php echo $data['nama_alternatif']; ?></td>
                <td> Atap <?php if($data['kit1']==1){
                            echo"Rapak";
                        }
                            else if($data['kit1']==2){echo"Daun";
                        }   else 
                        {
                                echo"Seng";}

                 ?>,</br> Dinding <?php if($data['kit2']==1){
                    echo"Tembok";
                }
                    else if($data['kit2']==2){echo"Kayu";
                }   else 
                {
                        echo"Bambu";}

                ?>,</br> Lantai <?php if($data['kit3']==1){
                    echo"Keramik";
                }
                    else if($data['kit3']==2){echo"Ubin";
                }   else 
                {
                        echo"Tanah";}

                ?></td>

                <td>Sumber Air <?php if($data['kit4']==1){
                            echo"PDAM";
                        }
                            else if($data['kit4']==2){echo"Sumur";
                        }   else 
                        {
                                echo"Air Sungai";}

                 ?>,</br> Fasilitas BAB <?php if($data['kit5']==1){
                    echo"Sendiri";
                }
                    else if($data['kit5']==2){echo"Umum";
                }   else 
                {
                        echo"Tidak Punya (di Sungai)";}

                ?>,</br> Bahan Bakar Masak <?php if($data['kit6']==1){
                    echo"Kompor Gas";
                }
                    else if($data['kit6']==2){echo"Kompor Minyak";
                }   else 
                {
                        echo"Kayu";}

                ?></td>
                <td>Kendaraan <?php if($data['kit7']==1){
                            echo"Motor";
                        }
                            else if($data['kit7']==2){echo"Sepeda Ontel";
                        }   else 
                        {
                                echo"Tidak Punya";}

                 ?>,</br> Elektronik <?php if($data['kit8']==1){
                    echo"Kulkas";
                }
                    else if($data['kit8']==2){echo"Hp atau Tv";
                }   else 
                {
                        echo"Tidak Punya";}

                ?>,</br>Kendaraan Air <?php if($data['kit9']==1){
                    echo"Kapal Motor";
                }
                    else if($data['kit9']==2){echo"Kapal Dayung";
                }   else 
                {
                        echo"Tidak Punya";}

                ?></td>
				<td>
					<a href="index.php?aksi=update&id=<?php echo $data['nik']; ?>&nik=<?php echo $data['nik']; ?>&nama_alternatif=<?php echo $data['nama_alternatif']; ?>">Edit</a>
				</td>
				<td>
					<a href="index.php?aksi=delete&id=<?php echo $data['nik']; ?>" onClick="return confirm('Yakin akan menghapus penerima <?= $data['nama_alternatif']; ?>?')">Hapus</a>
				</td>
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

// --- Fungsi Ubah Data (Update)
function ubah($koneksi){

	// ubah data
	if(isset($_POST['btn_ubah'])){
		$nik = $_POST['nik'];
		$nama_alternatif = $_POST['nama_alternatif'];
		$kit1 = $_POST['kit1'];
        $kit2 = $_POST['kit2'];
        $kit3 = $_POST['kit3'];
        $kit4 = $_POST['kit4'];
        $kit5 = $_POST['kit5'];
        $kit6 = $_POST['kit6'];
        $kit7 = $_POST['kit7'];
        $kit8 = $_POST['kit8'];
        $kit9 = $_POST['kit9'];

		
		if(!empty($nama_alternatif) && !empty($nik)){
			$sql_update = "UPDATE tb_alternatif SET nama_alternatif='$nama_alternatif',
	            nik='$nik', kit1='$kit1', kit2='$kit2', kit3='$kit3', kit3='$kit3',
				kit4='$kit4', kit5='$kit5', kit6='$kit6', kit7='$kit7', kit8='$kit8', kit9='$kit9' WHERE nik=$nik";
			$update = mysqli_query($koneksi, $sql_update);
			if($update && isset($_GET['aksi'])){
				if($_GET['aksi'] == 'update'){
					echo "<div class='alert alert-info'>Data Berhasil Diubah</div>";
					echo "<meta http-equiv='refresh' content='1;url=index.php'>";
				}
			}
		} else {
			$pesan = "Data tidak lengkap!";
		}
	}
	
	// tampilkan form ubah
	if(isset($_GET['id'])){

		?>
			<a href="index.php"> &laquo; Home</a> | 
			<a href="index.php?aksi=create"> (+) Tambah Data</a>
			<hr>
			<h3>Ubah Data</h3>
			<form action="" method="POST">
			<fieldset>
				<div class="table-responsive">
					<table class="table table-responsive-sm table-hover" border="0">
						<tr>
							<td>	
								<input type="hidden" name="nip" value="<?php echo $_GET['id'] ?>"/>
							</td>
						</tr>
						<tr>
							<td>NIK </td>
							<td> : <input type="text" name="nik" value="<?php echo $_GET['nik'] ?>" required /></td>
						</tr>
							<td>Nama Calon Penerima </td> 
							<td> : <input type="text" name="nama_alternatif" value="<?php echo $_GET['nama_alternatif'] ?>" required/></td>
						</tr>
						<tr>
						<tr><td><h4>Kondisi Rumah</h4></td></tr>
                        <tr>
							<td>Kondisi Atap</td> 
							<td> : <select name="kit1">
                            <option disabled selected value="">-Pilih Kondisi Atap-</option>
                                    <option value="3">Rapak</option>
                                    <option value="2">Daun</option>
                                    <option value="1">Seng</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Dinding</td> 
							<td> : <select  name="kit2">
                            <option disabled selected value="">-Pilih Kondisi Dinding-</option>
                                    <option value="3">Bambu</option>
                                    <option value="2">Kayu</option>
                                    <option value="1">Tembok</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kondisi Lantai</td> 
							<td> : <select  name="kit3">
                            <option disabled selected value="">-Pilih Kondisi Lantai-</option>
                                    <option value="3">Tanah</option>
                                    <option value="2">Ubin</option>
                                    <option value="1">Keramik</option>    
                            </select></td>
						</tr>
                        
                        <tr><td><h4>Fasilitas</h4></td></tr>
                        <tr>
							<td>Sumber Air</td> 
							<td> : <select  name="kit4">
                            <option disabled selected value="">-Pilih Sumber AIR-</option>
                                    <option value="3">Air Sungai</option>
                                    <option value="2">Sumur</option>
                                    <option value="1">Air PDAM</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Fasilitas BAB</td> 
							<td> : <select  name="kit5">
                            <option disabled selected value="">-Pilih Fasilitas BAB-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">Umum</option>
                                    <option value="1">Sendiri</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Bahan Bakar Memasak</td> 
							<td> : <select  name="kit6">
                            <option disabled selected value="">-Pilih Bahan Bakar Memasak-</option>
                                    <option value="3">Kayu</option>
                                    <option value="2">Kompor Minyak</option>
                                    <option value="1">Kompor Gas</option>    
                            </select></td>
						</tr>

                        <tr><td><h4>Asset</h4></td></tr>
                        <tr>
							<td>Kendaraan</td> 
							<td> : <select  name="kit7">
                            <option disabled selected value="">-Pilih Kendaraan-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">Sepeda Ontel</option>
                                    <option value="1">Motor</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Elektronik</td> 
							<td> : <select  name="kit8">
                            <option disabled selected value="">-Pilih Elektronik-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">TV/HP</option>
                                    <option value="1">Kulkas</option>    
                            </select></td>
						</tr>

                        <tr>
							<td>Kendaraan Air (Untuk Daerah Dekat Laut/Sungai Besar)</td> 
							<td> : <select  name="kit9">
                            <option disabled selected value="">-Pilih Kendaraan Air-</option>
                                    <option value="3">Tidak Punya</option>
                                    <option value="2">Kapal Dayung</option>
                                    <option value="1">Kapal Motor</option>    
                            </select></td>
						</tr>
						</tr>
						<tr>
							<td></td>
							<td>
								<label class="ml-2">
									<input type="submit" name="btn_ubah" value="Simpan Perubahan"/>
								</label>
							</td>
						</tr>

					</table>
					<br>
				</div>

				<p><?php echo isset($pesan) ? $pesan : "" ?></p>
			</fieldset>
		</form>

		<?php
// 		echo "<pre>";
// 		print_r($level);
//		echo "</pre>";
	}
	
}
// --- Tutup Fungsi Update


// --- Fungsi Delete
function hapus($koneksi){

	if(isset($_GET['id']) && isset($_GET['aksi'])){
		$id = $_GET['id'];
		$sql_hapus = "DELETE FROM tb_alternatif WHERE nik=" . $id;
		$hapus = mysqli_query($koneksi, $sql_hapus);
		
		if($hapus){
			if($_GET['aksi'] == 'delete'){
				echo "<meta http-equiv='refresh' content='1;url=index.php'>";
			}
		}
	}
	
}
// --- Tutup Fungsi Hapus


// ===================================================================

// --- Program Utama
if (isset($_GET['aksi'])){
	switch($_GET['aksi']){
		case "create":
			echo '<a href="index.php"> &laquo; Home</a>';
			tambah($koneksi);
			break;
		case "read":
			tampil_data($koneksi);
			break;
		case "update":
			ubah($koneksi);
			tampil_data($koneksi);
			break;
		case "delete":
			hapus($koneksi);
			break;
		default:
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidaka ada!</h3>";
			tambah($koneksi);
			tampil_data($koneksi);
	}
} else {
	tambah($koneksi);
	tampil_data($koneksi);
}

?>
                    		</div>
                    	</div>
                    </div>
				</div>
			</div>
		</main>


<?php include_once('../_footer.php'); ?>
<script type="text/javascript" charset="utf8">
            $(document).ready( function () {
                $('#pegawai').DataTable(
                    {
                        "pageLength": 4,
                        responsive: true,
                        select: true
                    }
                    );
            } );
        </script>

