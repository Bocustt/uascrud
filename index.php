
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
                <label>NAMA</label>
                <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama Sesuai Akta Kelahiran" required>          
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="tnik" value="<?=@$vnik?>" class="form-control" placeholder="Input NIK Anda disini!" required>
            </div>
            <div class="form-group">
                <label>NISN</label>
                <input type="text" name="tnisn" value="<?=@$vnisn?>" class="form-control" placeholder="Input NISN Anda disini!" required>
            </div>
            <div class="form-group">
                <label>TTL</label>
                <textarea class="form-control" name="tttl" placeholder="Input TTL Anda Disini!"><?=@$vttl?></textarea>
            <div class="form-group">
                <label>ALAMAT</label>
                <textarea class="form-control" name="talamat" placeholder="Input Alamat Anda Disini!"><?=@$valamat?></textarea>
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
                <textarea class="form-control" name="tthnlulus" placeholder="Input Tahun Lulus!"><?=@$vthnlulus?></textarea>
            </div>
            <div class="form-group">
                <label>SEKOLAH ASAL (SMA)</label>
                <textarea class="form-control" name="tasalsklh" placeholder="Input Asal Sekolah Anda Disini!"><?=@$vasalsklh?></textarea>
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
                <textarea class="form-control" name="tnohp" placeholder="Input No. Hp Anda Disini!"><?=@$vnohp?></textarea>
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <textarea class="form-control" name="temail" placeholder="Input No. Hp Anda Disini!"><?=@$vemail?></textarea>
            </div>
            <div class="form-group">
                <label>NAMA AYAH</label>
                <input type="text" name="tnama_ayah" value="<?=@$vnama_ayah?>" class="form-control" placeholder="Input Nama Sesuai Akta Kelahiran" required>          
            </div>
            <div class="form-group">
                <label>PEKERJAAN AYAH</label>
                <input type="text" name="tpk_ayah" value="<?=@$vpk_ayah?>" class="form-control" placeholder="Input Nama Sesuai Akta Kelahiran" required>          
            </div>
            <div class="form-group">
                <label>NAMA IBU</label>
                <input type="text" name="tnama_ibu" value="<?=@$vnama_ibu?>" class="form-control" placeholder="Input Nama Sesuai Akta Kelahiran" required>          
            </div>
            <div class="form-group">
                <label>PEKERJAAN IBU</label>
                <input type="text" name="tpk_ibu" value="<?=@$vpk_ibu?>" class="form-control" placeholder="Input Nama Sesuai Akta Kelahiran" required>          
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


</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>