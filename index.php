 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>TOKONEKSI - Coming Soon</title>
 	<link rel="icon" type="image/x-icon" href="static/images/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="static/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
 </head>
 <body>
  <div id="desktop">
    <section class="tengah-desktop">
      <div class="judul">
        <a href="http://www.tokoneksi.com">
          <div class="logo-tokoneksi">
            <img src="static/images/TOKONEKSI.svg">
          </div>
        </a>
        <h1>
          KAMI AKAN HADIR
        </h1>
        <h3>
          Olah Minyak Jelantahmu, <br>dan DAPATKAN CUANNYA
        </h3>
      <div id="hasil">
        <h4>
          
        </h4>
      </div>
      <div class="form">
        <form method="post">
          <input type="text" id="no_telpon" placeholder="Masukkan No Telpon">
          <button type="submit" class="button-17">Daftar Sekarang</button>
        </form>
      </div>
      <nav class="hubungi-kami">
        <ul>
          <li><i class="fa fa-envelope"></i><a href="mailto:info@tokoneksi.com">info@tokoneksi.com</a></li>
          <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/tokoneksi/">tokoneksi</a></li>
          <li><i class="fa fa-whatsapp"></i><a href="https://wa.me/6285157778713">0851 5777 8713</a></li>
        </ul>
      </nav>
      </div>
      <div class="gambar">    
        <img src="static/images/Gambar_tengah.png" alt="fitur-tokoneksi">
      </div>
    </section>
  </div>


  <div id="mobile">
   	<header class="header mobile">
      <a href="http://www.tokoneksi.com">
     		<div class="logo-tokoneksi">
     			<img src="static/images/TOKONEKSI.svg">
     		</div>
      </a>
      <a href="https://wa.me/6285157778713">
     		<div class="hubungi-kami">
     			<img src="static/images/wa.png">
     			<p>Hubungi Kami</p>
     		</div>
      </a>
   	</header>

   	<section class="tengah-mobile">
   		<div class="judul">
   			<h1>
   				KAMI AKAN HADIR
   			</h1>
   		</div>
   		<div class="gambar">		
   			<img src="static/images/Gambar_tengah.png" alt="fitur-tokoneksi">
   		</div>
   		<div class="ajakan">
   			<h3>
   				Olah Minyak Jelantahmu, dan DAPATKAN CUANNYA
   			</h3>
   		</div>
      <div id="hasil">
        <h4>
          
        </h4>
      </div>
   		<div class="form">
   			<form method="post">
          <input type="text" id="no_telpon" placeholder="Masukkan">
   				<button type="submit" class="button-17">Daftar Sekarang</button>
   			</form>
   		</div>
      <nav class="kontak-kami">
        <ul>
          <li><i class="fa fa-envelope"></i><a href="mailto:info@tokoneksi.com">info@tokoneksi.com</a></li>
          <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/tokoneksi/">tokoneksi</a></li>
          <li><i class="fa fa-whatsapp"></i><a href="https://wa.me/6285157778713">0851 5777 8713</a></li>
        </ul>
      </nav>
   	</section>
  </div>
    <script>
      let isi = document.getElementById('#no_telpon').value;
      $(".ajakan").click(function() {
        console.log($("#no_telpon").val());
        console.log(isi);
      })
        $(document).ready(function () {
          $("form").submit(function (event) {
            var dataPengguna = {
              no_telp: $("#no_telpon").val(),
            };

            // $.post("simpan.php",
            //   {dataPengguna}).done(function (data){
            //     $("#hasil").html(data['no_telp']);
            //   })
            // $(".hasil").html(dataPengguna['no_telp']);

            $.ajax({
              type: 'POST',
              url: 'simpan.php',
              data: dataPengguna,
              dataType: "text",
              encode: true
            }).done(function (data) {
              $("#hasil h4").html("Pendaftaran sudah kami terima, Akan kami kabari untuk info selanjutnya");

            });

            event.preventDefault();
          });
        });
    </script>
 </body>
 </html>