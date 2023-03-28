<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>Anime</title>
   
</head><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>Anime</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body> 
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=8dc7945d&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg pied-top">
  <div class="container">
   <B> <a class="navbar-brand" href="#">THE ANIME</a></B>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      <form  class="d-flex" method="post" action="index.php">
        <input class="form-control me-2" placeholder="cari disini . . " aria-label="Search" type="text" name="judul"></input> 
        <input class="btn btn-outline-success" type="submit" value="cari" name="cari"></input>
     
    </form>
  </div>
      </nav>
<br>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <center><img src="onepi.jpg" class="d-block w-100" alt="..."><center>
          </div>
          <div class="carousel-item">
            <center><img src="onepis.jpg" class="d-block w-100" alt="..."><center>
          </div>
          <div class="carousel-item">
            <center><img src="demon1.jpg" class="d-block w-100" alt="..."><center>
          </div>
          <div class="carousel-item">
            <center><img src="jujutsu2.jpg" class="d-block w-100" alt="..."><center>
          </div>
          <div class="carousel-item">
            <center><img src="demon3.jpg" class="d-block w-100" alt="..."><center>
          </div>
          <div class="carousel-item">
            <center><img src="naruto1.jpg" class="d-block w-100" alt="..."><center>
          </div>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</header>
<div class="container">
<div class="row mt-3 text-center"> 
  <link rel="stylesheet" href="style.css">
  <div class="col">
<h1 >REKOMENDASI</h1>
<style>
  span {
  border: 1px solid black;
  padding: 5px;
}
body
{
  background-color: rgb(62, 82, 172);
}
</style>
</div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="DEMONSLAYER.jpg" class="card-img-top" height="500px">
      <div class="card-body">
        <h5 class="card-title">kimetsu no yaiba </h5>
    <p>bercerita tentang pengalaman seorang bocah laki-laki bernama Tanjiro Kamado melawan iblis yang menghabisi anggota keluarganya. </p>
    <b><p>Genre:Fiksi petualangan, Fantasi gelap, Seni bela diri</p></b>
    <p>Tahun keluaran:</p>
    <p>2019

</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="one.jpg" class="card-img-top" height="500px">
      <div class="card-body">
        <h5 class="card-title">One Piece</h5>
    <p>Ini film One Piece  mengisahkan petualangan Monkey D.Luffy untuk menjadi KING OF PIRATES (raja bajak laut)
    </p>
    <b><p>Genre: Fiksi petualangan, Fantasi</p></b>
    <p>Tahun keluaran:</p>
    <p>1997-2023</p>
      </div>
    </div>
  </div>
  <div class="col" >
    <div class="card">
      <img src="narutoke.jpg" class="card-img-top" height="500px">
      <div class="card-body">
        <h5 class="card-title">Naruto</h5>
    <p>Naruto bercerita Naruto Uzumaki seorang ninja yang  ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya.</p>
    <b><p>Genre:Aksi; Petualangan; Fantasi
</p></b>
    <p>Tahun keluaran:</p>
    <p>2002–2017
</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="jujutsu.jpg" class="card-img-top" height="500px">
      <div class="card-body">
        <h5 class="card-title">Jujutsu Kaisen</h5>
    <p> Bercerita tentang seorang siswa SMA  Yuji Itadori yang bergabung dengan organisasi rahasia bernama Jujutsu Sorcerers,untuk membunuh kutukan kejam bernama Ryomen Sukuna yang ada di tubuhnya</p>
    <b><p>Genre:Fiksi petualangan, Fantasi gelap, Fiksi supernatural</p></b>
    <p>Tahun keluaran:</p>
    <p> 2020-2023</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="tokyora.jpg" class="card-img-top" height="500px">
      <div class="card-body">
        <h5 class="card-title">Tokyo Ravengers</h5>
    <p>Menceritakan tentang Hanagaki Takemichi yang kembali ke masa lalu untuk mengubah masa depan</p>
    <p>Genre:Action Science fiction thriller</p>
    <p>Tahun keluaran:</p>
    <p>2017-2023</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="hunter.jpg" class="card-img-top" height="500px">
      <div class="card-body">
        <h5 class="card-title">HunterXHunter</h5>
    <p>kisah petuangan Gon yang memiliki impian untuk menjadi hunter andal dengan mengikuti proses seleksi asosiasi hunter.</p>
    
    <b><p>Genre:Petualangan, fantasi, seni bela diri</p></b>
    <p>Tahun keluaran:</p>
    <p>1998</p>
      </div>
    </div>
  </div>
 
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
