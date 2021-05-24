// mengambil elemen yang di butuhkan

var cari = document.getElementById('carikelas');
var tabelkelas = document.getElementById('daftarnama');

cari.addEventListener('click', function () {

  // buat objek ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {

    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log('ok');

    }
  }

  xhr.open('GET', "<?php echo base_url('asset/')?>ajax/guru/gurukelas.php", true);
  xhr.send();
});