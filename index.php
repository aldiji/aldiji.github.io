<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 

/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksHai = "  Jangan di buka ya  ";
    
konten = [
  {
    ucapan: "Dibilangin Jangan buka",
  },
  {
    ucapan: "Penasaran Yaa?",
  },
  {
    ucapan: "Yaudah Klik Yaa",
  },
  {
    ucapan: "Klik Lagii",
  },
  {
    ucapan: "Sekali lagii awkoawko",
  },
  {
    ucapan: "Yaudah niih, Jangan Pundung",
  },
  {
    ucapan: "Haii Bociil",
  },
  {
    gambar: "foto.jpg",
    ucapan: "Happy Sweeet Seventeen Yaa",
  },
  {
    gambar: "foto2.jpg",
    ucapan: "Cie Udah ga bocil lagii",
  },
  {
    gambar: "foto3.jpg",
    ucapan: "Tapi boong kamu masih bocil awkoawko",
  },
  {
    gambar: "foto1.jpg",
    ucapan: "Btw Jangan Golput ya dosaa",
  },
  {
    ucapan: "Dah lah aku bingung mau ketik apalagi",
  },
  {
    ucapan: "Intinya Sehat2 selalu dan yang disemogakan tersemogakan",
  },
  {
    gambar: "foto4.jpg",
    ucapan: "Dadah Bociill, Thanks udah bukaa",
  }
];

musik = "musik.mp3";
nomorWhatsapp = "628952511021";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>
