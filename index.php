<?php
    //koneksi Database
    $host = "db4free.net";
    $user = "bocust";
    $pass ="bukasandi";
    $database = "dbmaba";

    $koneksi = mysqli_connect($host, $user, $pass, $database) or die (mysqli_eror($koneksi));

    //jika tombol simpan diklik
    if(isset($_POST['bsimpan']))
    {
        //Pengujian apakah data akan diedit atau disimpan baru
        if($_GET['hal'] == "edit")
        {
            //Data akan diedit
            $edit = mysqli_query($koneksi, "UPDATE maba set
                                                no_pendaftaran = '$_POST[tno_pendaftaran]',
                                                nama = '$_POST[tnama]',                                               
                                                nik = '$_POST[tnik]',
                                                nisn = '$_POST[tnisn]',
                                                ttl = '$_POST[tttl]',
                                                alamat = '$_POST[talamat]',
                                                jeniskelamin = '$_POST[tjeniskelamin]',
                                                tahun_lulus = '$_POST[ttahun_lulus]',
                                                sekolahasal = '$_POST[tsekolahasal]',
                                                agama = '$_POST[tagama]',
                                                negara = '$_POST[tnegara]',
                                                nohp = '$_POST[tnohp]',
                                                email = '$_POST[temail]',
                                                nama_ayah = '$_POST[tnama_ayah]',
                                                pk_ayah = '$_POST[tpk_ayah]',
                                                nama_ibu = '$_POST[tnama_ibu]',
                                                pk_ibu = '$_POST[tpk_ibu]',
                                                penghasilan = '$_POST[tpenghasilan]',
                                                jarak = '$_POST[tjarak]',
                                                transport = '$_POST[ttransport]',
                                                ttsk = '$_POST[tttsk]',
                                                prodi = '$_POST[tprodi]'
                                            WHERE id_pendaftaran = '$_GET[id]'
                                        ");
                                       
            if($edit) //jika edit sukses
            {
                echo "<script>
                        alert('edit data Sukses');
                        document.location='index.php';
                    </script>";
            }
            else
            {
                echo "<script>
                        alert('edit data Gagal!!');
                        document.location='index.php';
                    </script>";
            }
        }else
        {
            //Data akan disimpan baru
            $simpan = mysqli_query($koneksi, "INSERT INTO maba (no_pendaftaran, nama, nik, nisn, ttl, alamat, jeniskelamin, tahun_lulus, sekolahasal, agama, negara, nohp, email, nama_ayah, pk_ayah, nama_ibu, pk_ibu, penghasilan, jarak, transport, ttsk, prodi)
                                              VALUES (  '$_POST[tno_pendaftaran]',
                                                        '$_POST[tnama]',
                                                        '$_POST[tnik]', 
                                                        '$_POST[tnisn]',
                                                        '$_POST[tttl]',
                                                        '$_POST[talamat]',
                                                        '$_POST[tjeniskelamin]',
                                                        '$_POST[ttahun_lulus]',
                                                        '$_POST[tsekolahasal]',
                                                        '$_POST[tagama]',
                                                        '$_POST[tnegara]',
                                                        '$_POST[tnohp]',
                                                        '$_POST[temail]',
                                                        '$_POST[tnama_ayah]',
                                                        '$_POST[tpk_ayah]',
                                                        '$_POST[tnama_ibu]',
                                                        '$_POST[tpk_ibu]',
                                                        '$_POST[tpenghasilan]',
                                                        '$_POST[tjarak]',
                                                        '$_POST[ttransport]',
                                                        '$_POST[tttsk]', 
                                                        '$_POST[tprodi]')
                                        ");
            if($simpan) //jika simpan sukses
            {
                echo "<script>
                        alert('Simpan data Sukses');
                        document.location='index.php';
                    </script>";
            }
            else
            {
                echo "<script>
                        alert('Simpan data Gagal!!');
                        document.location='index.php';
                    </script>";
            }
        }
    }



        //pengujian jika tombol edit atau hapus di klik
        if(isset($_GET['hal']))
        {
            //pengujian jike edit data
            if($_GET["hal"] == "edit")
            {
                //tampil data yang akan diedit
                $tampil = mysqli_query($koneksi, "SELECT * FROM maba WHERE id_pendaftaran = '$_GET[id]' ");
                $data = mysqli_fetch_array($tampil);
                if($data)
                {
                    //jika data ditemukan, maka data ditampung ke dalam variabel
                    $vno_pendaftaran = $data['no_pendaftaran'];
                    $vnama = $data['nama'];
                    $vnik = $data['nik'];
                    $vnisn = $data['nisn'];
                    $vttl = $data['ttl'];
                    $valamat = $data['alamat'];
                    $vjeniskelamin = $data['jeniskelamin'];
                    $vtahun_lulus = $data['tahun_lulus'];
                    $vsekolahasal = $data['sekolahasal'];
                    $vagama = $data['agama'];
                    $vnegara = $data['negara'];
                    $vnohp = $data['nohp'];
                    $vemail = $data['email'];
                    $vnama_ayah = $data['nama_ayah'];
                    $vpk_ayah = $data['pk_ayah'];
                    $vnama_ibu = $data['nama_ibu'];
                    $vpk_ibu = $data['pk_ibu'];
                    $vpenghasilan = $data['penghasilan'];
                    $vjarak = $data['jarak'];
                    $vtransport = $data['transport'];
                    $vttsk = $data['ttsk'];
                    $vprodi = $data['prodi'];
                }
            }
            else if ($_GET ['hal'] == "hapus")
            {
                //Persiapan hapus data
                $hapus = mysqli_query($koneksi, "DELETE FROM maba WHERE id_ pendaftaran = '$_GET[id]' ");
                if($hapus){
                    echo "<script>
                        alert('Hapus data Sukses!!');
                        document.location='index.php';
                    </script>";
                }
            }
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1 class="text-center">UAS CRUD & DATABASE DB4FREE.NET</h1>
    <h2 class="text-center">Yosua Kakase (1905063)</h2>

    <!-- Awal Card Form -->
    <div class="card mt-3">
    <div class="card-header bg-dark text-white">
        Form Input data Calon Mahasiswa
    </div>
    <div class="card-body">
        <form method="post" action="">
        <div class="form-group">
                <label>NO. PENDAFTARAN</label>
                <input type="text" name="tno_pendaftaran" value="<?=@$vno_pendaftaran?>" class="form-control" placeholder="masukan nomor pendaftaran" required>          
            </div>
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Masukan nama sesuai akta" required>          
            </div>
            <div class="form-group">
                <label>NIK</label>
                 <input type="text" name="tnik" value="<?=@$vnik?>" class="form-control" placeholder="Masukan NIK Anda disini!" required>
            </div>
            <div class="form-group">
                <label>NISN</label>
                <input type="text" name="tnisn" value="<?=@$vnisn?>" class="form-control" placeholder="Masukan NISN Anda disini!" required>
            </div>
            <div class="form-group">
                <label>TTL</label>
                <textarea class="form-control" name="tttl" placeholder="Masukan TTL Anda Disini!"><?=@$vttl?></textarea>
            <div class="form-group">
                <label>ALAMAT</label>
                <textarea class="form-control" name="talamat" placeholder="Masukan Alamat Anda Disini!"><?=@$valamat?></textarea>
            </div>
           
            <div class="form-group">
   			    <label>JENIS KELAMIN</label>
   			    <select class="form-control" name="tjeniskelamin"> 
   				    <option value="<?=@$vjeniskelamin?>"><?=@$vjeniskelamin?></option>
   				    <option value="pria">Pria</option>
   				    <option value="wanita">Wanita</option>
   			    </select>
            </div>
            <div class="form-group">
                <label>TAHUN LULUS</label>
                <textarea class="form-control" name="ttahun_lulus" placeholder="Masukan Tahun Lulus!"><?=@$vtahun_lulus?></textarea>
            </div>
            <div class="form-group">
                <label>SEKOLAH ASAL (SMA)</label>
                <textarea class="form-control" name="tsekolahasal" placeholder="Masukan Asal Sekolah Anda Disini!"><?=@$vsekolahasal?></textarea>
            </div>
          
            <div class="form-group">
   			    <label>AGAMA</label>
   			    <select class="form-control" name="tagama"> 
   				    <option value="<?=@$vagama?>"><?=@$vagama?></option>
   				    <option value="islam">Islam</option>
   				    <option value="kristen">Kristen</option>
   				    <option value="katolik">Katolik</option>
                    <option value="konghucu">Konghucu</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
   			    </select>
            </div>
            <div class="form-group">
   			<label>KENEGARAAN</label>
   			<select class="form-control" name="tnegara"> 
   				<option value="<?=@$vnegara?>"><?=@$vnegara?></option>
   				<option value="wni">WNI</option>
   				<option value="wna">WNA</option>
   			</select>
            <div class="form-group">
                <label>NO.HP</label>
                <textarea class="form-control" name="tnohp" placeholder="Masukan No. Hp Anda Disini!"><?=@$vnohp?></textarea>
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <textarea class="form-control" name="temail" placeholder="Masukan Email Anda Disini!"><?=@$vemail?></textarea>
            </div>
            <div class="form-group">
                <label>NAMA AYAH</label>
                <input type="text" name="tnama_ayah" value="<?=@$vnama_ayah?>" class="form-control" placeholder="Masukan Nama Sesuai Akta" required>          
            </div>
            <div class="form-group">
                <label>PEKERJAAN AYAH</label>
                <input type="text" name="tpk_ayah" value="<?=@$vpk_ayah?>" class="form-control" placeholder="Masukan Pekerjaan Ayah" required>          
            </div>
            <div class="form-group">
                <label>NAMA IBU</label>
                <input type="text" name="tnama_ibu" value="<?=@$vnama_ibu?>" class="form-control" placeholder="Masukan Nama Sesuai Akta" required>          
            </div>
            <div class="form-group">
                <label>PEKERJAAN IBU</label>
                <input type="text" name="tpk_ibu" value="<?=@$vpk_ibu?>" class="form-control" placeholder="Masukan Pekerjaan Ibu" required>          
            </div>
            <div class="form-group">
   			    <label>PENGHASILAN KOMULATIF PER BULAN</label>
   			    <select class="form-control" name="tpenghasilan"> 
   				    <option value="<?=@$vpenghasilan?>"><?=@$vpenghasilan?></option>
   				    <option value="Rp. 0,- sd Rp. 500.000,-">Rp. 0,- sd Rp. 500.000,-</option>
   				    <option value="Rp. 500.000,- sd Rp. 1.000.000,-">Rp. 500.000,- sd Rp. 1.000.000,-</option>
   				    <option value="Rp. 1.000.000,- sd Rp. 2.000.000,-">Rp. 1.000.000,- sd Rp. 2.000.000,-</option>
                    <option value="> Rp. 2.000.000,-">> Rp. 2.000.000,-</option>
   			    </select>
            </div>  
            <div class="form-group">
   			    <label>JARAK KE KAMPUS</label>
   			    <select class="form-control" name="tjarak"> 
   				    <option value="<?=@$vjarak?>"><?=@$vjarak?></option>
   				    <option value="1 km">1 km</option>
   				    <option value="2 km">2 km</option>
   				    <option value="2,5 km">2,5 km</option>
                    <option value="> 3,5 km">> 3,5 km</option>
   			    </select>
            </div>  
            <div class="form-group">
   			    <label>TRANSPORTASI KE KAMPUS</label>
   			    <select class="form-control" name="ttransport"> 
   				    <option value="<?=@$vtransport?>"><?=@$vtransport?></option>
   				    <option value="Jalan Kaki">Jalan Kaki</option>
   				    <option value="Kendaraan Umum">Kendaraan Umum</option>
   				    <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
   			    </select>
            </div>  
            <div class="form-group">
   			    <label>TEMPAT TINGGAL SELAMA KULIAH</label>
   			    <select class="form-control" name="tttsk"> 
   				    <option value="<?=@$vttsk?>"><?=@$vttsk?></option>
   				    <option value="Tinggal Bersama Orang Tua">Tinggal Bersama Orang Tua</option>
   				    <option value="Tinggal Bersama Saudara">Tinggal Bersama Saudara</option>
   				    <option value="Kost">Kost</option>
   			    </select>
            </div>  


            <div class="form-group">
   			    <label>PROGRAM STUDI YANG DI PILIH</label>
   			    <select class="form-control" name="tprodi"> 
   				    <option value="<?=@$vprodi?>"><?=@$vprodi?></option>
   				    <option value="Sistem Informasi">Sistem Informasi</option>
   				    <option value="Teknologi Penangkapan Ikan">Teknologi Penangkapan Ikan</option>
                    <option value="Teknik Budidaya Ikan">Teknik Budidaya Ikan</option>
                    <option value="Teknik Pengolahan Hasil Laut">Teknik Pengolahan Hasil Laut</option>
   				    <option value="Keperawatan">Keperawatan</option>
   			    </select>
            </div>  
            </div>

            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
            <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
        </form>
    </div>
    </div>
    <!-- Akhir Card Form -->


    <!-- Awal Card tabel -->
    <div class="card mt-3">
    <div class="card-header bg-success text-white">
        Daftar Calon Mahasiswa Polnustar
    </div>
    <div class="card-body">
        
    <table class="table table-boordered table-striped">
        <tr>
            <th>NO</th>
            <th>NO. PENDAFTARAN</th>
            <th>NAMA</th>
            <th>NIK</th>
            <th>NISN</th>
            <th>TTL</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>TAHUN LULUS</th>
            <th>SEKOLAH ASAL</th>
            <th>AGAMA</th>
            <th>KENEGARAAN</th>
            <th>NO. HP</th>
            <th>EMAIL</th>
            <th>NAMA AYAH</th>
            <th>PEKERJAAN AYAH</th>
            <th>NAMA IBU</th>
            <th>PEKERJAAN IBU</th>
            <th>PENGHASILAN</th>
            <th>JARAK KE KAMPUS</th>
            <th>TRANSPORTASI</th>
            <th>TINGGAL</th>
            <th>PRODI</th>
            <th>Aksi</th>
        </tr>
          <?php
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from maba order by id_pendaftaran desc");
            while($data = mysqli_fetch_array($tampil)) : 

         ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$data['no_pendaftaran']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['nik']?></td>
            <td><?=$data['nisn']?></td>
            <td><?=$data['ttl']?></td>
            <td><?=$data['alamat']?></td>
            <td><?=$data['jeniskelamin']?></td>
            <td><?=$data['tahun_lulus']?></td>
            <td><?=$data['sekolahasal']?></td>
            <td><?=$data['agama']?></td>
            <td><?=$data['negara']?></td>
            <td><?=$data['nohp']?></td>
            <td><?=$data['email']?></td>
            <td><?=$data['nama_ayah']?></td>
            <td><?=$data['pk_ayah']?></td>
            <td><?=$data['nama_ibu']?></td>
            <td><?=$data['pk_ibu']?></td>
            <td><?=$data['penghasilan']?></td>
            <td><?=$data['jarak']?></td>
            <td><?=$data['transport']?></td>
            <td><?=$data['ttsk']?></td>
            <td><?=$data['prodi']?></td>
        <td>
                <a href="index.php?hal=edit&id=<?=$data['id_pendaftaran']?>" class="btn btn-warning"> Edit </a>
                <a href="index.php?hal=hapus&id=<?=$data['id_pendaftaran']?>" 
                onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
            </td>
        </tr>
        <?php endwhile; //penutup perulangan while ?>
    </table>

    </div>
    </div>
    <!-- Akhir Card tabel -->
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>