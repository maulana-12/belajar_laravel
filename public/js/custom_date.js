// Mendapatkan elemen input tanggal
var tanggalInput = document.getElementById('born_date');

// Mendapatkan tanggal hari ini
var hariIni = new Date().toISOString().split('T')[0];

// Mengatur tanggal maximum
tanggalInput.max = hariIni;