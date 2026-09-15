<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Auto Prima Mobil</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<script>
  tailwind.config = {
    theme: { extend: {
      colors:{ gold:'#C9A227', goldlight:'#F4E4B0', dark:'#1E1B16' },
      fontFamily:{ serif:['"Playfair Display"','serif'], sans:['Poppins','sans-serif'] }
    }}
  }
</script>
</head>
<body class="font-sans text-dark">

<header class="flex justify-between items-center px-10 py-4 border-b-2 border-goldlight sticky top-0 bg-white z-20">
  <div class="flex items-center gap-3">
    <!-- LOGO: ganti src di bawah dengan foto logo kamu, contoh: image/logo.png -->
    <img src="image/logo.png" alt="Logo Auto Prima Mobil"
         class="w-11 h-11 rounded-full object-cover bg-gray-200"
         onerror="this.src='https://placehold.co/44x44?text=Logo'">
    <span class="font-serif font-bold text-lg">Auto Prima Mobil</span>
  </div>
  <nav class="space-x-6 text-sm hidden sm:block">
    <a href="#beranda" class="hover:text-gold border-b-2 border-transparent hover:border-gold pb-1">Beranda</a>
    <a href="#tentang" class="hover:text-gold border-b-2 border-transparent hover:border-gold pb-1">Tentang</a>
    <a href="#simulasi" class="hover:text-gold border-b-2 border-transparent hover:border-gold pb-1">Simulasi</a>
    <a href="#kontak" class="hover:text-gold border-b-2 border-transparent hover:border-gold pb-1">Kontak</a>
  </nav>
</header>

<!-- HERO: diperbesar full layar (min-h-screen) + slot foto latar.
     Ganti url('image/hero.jpg') di bawah dengan foto kamu sendiri. -->
<section id="beranda"
  class="relative min-h-screen flex flex-col items-center justify-center text-center text-white px-5"
  style="background:linear-gradient(120deg, rgba(30,27,22,.75), rgba(201,162,39,.55)), url('image/hero.jpg') center/cover no-repeat;">
  <h1 class="font-serif text-4xl sm:text-5xl mb-4">Wujudkan Mobil Impian Anda</h1>
  <p class="text-goldlight mb-8 text-lg">Kredit mudah, bunga bersahabat, proses cepat</p>
  <a href="#simulasi" class="bg-gold hover:opacity-90 text-white font-semibold px-8 py-3.5 rounded-full">Hitung Simulasi Kredit</a>
</section>

<section id="tentang" class="max-w-4xl mx-auto my-16 px-5 flex flex-wrap items-center gap-8">
  <img src="image/image.png" class="flex-1 min-w-[260px] max-w-sm rounded-xl object-cover" alt="showroom">
  <div class="flex-1 min-w-[260px]">
    <h2 class="font-serif text-2xl mb-3">Tentang Auto Prima Mobil</h2>
    <p class="text-gray-500 leading-relaxed text-sm">Auto Prima Mobil adalah dealer mobil terpercaya yang telah melayani ribuan
    pelanggan dengan berbagai pilihan merek mobil baru dan bekas. Kami hadir untuk membantu
    Anda mendapatkan mobil impian dengan skema kredit yang transparan dan proses yang mudah,
    tanpa biaya tersembunyi.</p>
  </div>
</section>

<section id="simulasi" class="max-w-2xl mx-auto my-16 px-5">
  <div class="border border-gray-200 rounded-2xl shadow-lg overflow-hidden">
    <div class="bg-dark text-white px-6 py-4 flex justify-between items-center">
      <h3 class="font-serif text-xl">Simulasi Kredit Mobil</h3>
      <span class="text-goldlight text-xs tracking-wide">BUNGA 20% / TAHUN</span>
    </div>

    <div class="p-6">
      <label class="block text-sm font-medium">Pilih Merek / Tipe Mobil
        <!-- value tiap option = harga referensi, otomatis mengisi kolom Harga Mobil -->
        <select id="mobil" onchange="isiHarga()" class="w-full mt-1 p-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-gold">
          <option value="235000000">Toyota Avanza</option>
          <option value="180000000">Honda Brio</option>
          <option value="225000000">Daihatsu Xenia</option>
          <option value="260000000">Mitsubishi Xpander</option>
          <option value="240000000">Suzuki Ertiga</option>
        </select>
      </label>

      <label class="block text-sm font-medium mt-4">Harga Mobil (Rp)
        <input type="number" id="harga" placeholder="Contoh: 150000000" class="w-full mt-1 p-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-gold">
        <span class="text-xs text-gray-400">*Otomatis terisi saat pilih merek, tapi tetap bisa diubah manual</span>
      </label>

      <label class="block text-sm font-medium mt-4">DP
        <select id="dp" class="w-full mt-1 p-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-gold">
          <option value="10">10%</option><option value="20">20%</option><option value="30">30%</option>
          <option value="40">40%</option><option value="50">50%</option><option value="60">60%</option>
        </select>
      </label>

      <label class="block text-sm font-medium mt-4">Tenor
        <select id="tenor" class="w-full mt-1 p-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-gold">
          <option value="1">1 Tahun</option><option value="2">2 Tahun</option><option value="3">3 Tahun</option>
          <option value="4">4 Tahun</option><option value="5">5 Tahun</option>
        </select>
      </label>

      <button onclick="hitung()" class="w-full mt-5 bg-gold hover:bg-yellow-700 text-white font-semibold py-3 rounded-lg">Hitung Angsuran</button>
      <div id="hasil" class="hidden mt-5 bg-[#FAF8F2] rounded-xl p-5 text-sm divide-y divide-dashed divide-gray-300"></div>
    </div>
  </div>
</section>

<section id="kontak" class="max-w-2xl mx-auto my-16 px-5 text-center">
  <h2 class="font-serif text-2xl mb-2">Hubungi Kami</h2>
  <p class="text-gray-500 text-sm mb-5">Ada pertanyaan seputar mobil atau simulasi kredit? Langsung chat via WhatsApp.</p>
  <a id="waBtn" href="#" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366] hover:opacity-90 text-white font-semibold px-7 py-3.5 rounded-full">
    💬 Chat via WhatsApp
  </a>
</section>

<footer class="bg-dark text-gray-300 text-center py-5 text-sm">
  &copy; 2026 Auto Prima Mobil. All rights reserved.
</footer>

<script>
const NOMOR_WA = "6281234567890";
document.getElementById('waBtn').href =
  `https://wa.me/${NOMOR_WA}?text=${encodeURIComponent("Halo, saya ingin tanya soal kredit mobil.")}`;

// Isi otomatis harga mobil sesuai merek yang dipilih
function isiHarga(){
  const mobil = document.getElementById('mobil');
  document.getElementById('harga').value = mobil.value;
}
// Jalankan sekali saat halaman dibuka, supaya harga default sudah terisi
window.addEventListener('DOMContentLoaded', isiHarga);

function rupiah(n){ return "Rp " + Math.round(n).toLocaleString("id-ID"); }

function baris(label, value, tebal=false){
  return `<div class="flex justify-between py-2 ${tebal ? 'font-semibold text-dark' : 'text-gray-600'}">
            <span>${label}</span><span>${value}</span>
          </div>`;
}

function hitung(){
  const mobilSelect = document.getElementById('mobil');
  const mobil = mobilSelect.options[mobilSelect.selectedIndex].text;
  const harga = Number(document.getElementById('harga').value);
  const dpPersen = Number(document.getElementById('dp').value);
  const tenorTahun = Number(document.getElementById('tenor').value);

  if(!harga){ alert("Isi harga mobil dulu!"); return; }

  const bulan = tenorTahun * 12;
  const bunga = harga * 0.20;
  const dp = harga * dpPersen / 100;
  const angsuran = ((harga + bunga) - dp) / bulan;

  const hasil = document.getElementById('hasil');
  hasil.classList.remove('hidden');
  hasil.innerHTML =
    baris("Merek Mobil", mobil) +
    baris("Harga Mobil", rupiah(harga)) +
    baris("DP ("+dpPersen+"%)", rupiah(dp)) +
    baris("Tenor", tenorTahun + " Tahun (" + bulan + " Bulan)") +
    baris("Bunga (20%)", rupiah(bunga)) +
    baris("Jumlah Angsuran / Bulan", rupiah(angsuran), true);
}
</script>

</body>
</html>/


-----------


<section id="kontak" class="max-w-2xl mx-auto my-24 px-5 text-center">
  <span class="text-gold text-xs font-semibold tracking-widest uppercase">Kontak</span>
  <h2 class="font-serif text-3xl font-bold mt-2 mb-3">Hubungi Kami</h2>
  <p class="text-gray-500 text-sm mb-8 max-w-md mx-auto leading-relaxed">
    Ada pertanyaan seputar mobil atau simulasi kredit? Tim kami siap membantu, langsung chat via WhatsApp atau follow sosial media kami.
  </p>

  <a id="waBtn" href="#" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#1ebc59] text-white font-semibold px-8 py-4 rounded-full shadow-md hover:shadow-lg transition-all duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-white">
      <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91C21.95 6.45 17.5 2 12.04 2zm5.8 14.11c-.24.68-1.4 1.3-1.93 1.38-.49.08-1.11.11-1.79-.11-.41-.13-.94-.3-1.62-.59-2.85-1.23-4.71-4.1-4.85-4.29-.14-.19-1.16-1.54-1.16-2.94s.73-2.09.99-2.38c.26-.29.56-.36.75-.36.19 0 .38 0 .54.01.17.01.41-.07.64.49.24.58.81 2 .88 2.14.07.14.12.31.02.5-.09.19-.14.31-.28.48-.14.17-.29.37-.42.5-.14.14-.28.29-.12.57.16.28.71 1.17 1.52 1.9 1.04.93 1.92 1.22 2.2 1.36.28.14.44.12.6-.07.16-.19.68-.79.86-1.06.18-.27.36-.22.6-.13.24.09 1.54.73 1.8.86.26.13.44.19.5.3.07.11.07.63-.17 1.31z"/>
    </svg>
    Chat via WhatsApp
  </a>

  <div class="flex items-center justify-center gap-4 my-8">
    <span class="h-px w-16 bg-gray-200"></span>
    <span class="text-xs text-gray-400 uppercase tracking-widest">Ikuti Kami</span>
    <span class="h-px w-16 bg-gray-200"></span>
  </div>

  <div class="flex justify-center items-center gap-5">
    <a href="https://instagram.com/username_kamu" target="_blank" aria-label="Instagram"
       class="group w-12 h-12 flex items-center justify-center rounded-full border border-gray-200 hover:border-gold hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-gray-500 group-hover:fill-[#E1306C] transition-colors duration-300">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
      </svg>
    </a>
    <a href="https://youtube.com/@username_kamu" target="_blank" aria-label="YouTube"
       class="group w-12 h-12 flex items-center justify-center rounded-full border border-gray-200 hover:border-gold hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-gray-500 group-hover:fill-[#FF0000] transition-colors duration-300">
        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
      </svg>
    </a>
  </div>
</section>


<section id="kontak" class="max-w-2xl mx-auto my-16 px-5 text-center">
  <h2 class="font-serif text-2xl mb-2">Hubungi Kami</h2>
  <p class="text-gray-500 text-sm mb-5">Ada pertanyaan seputar mobil atau simulasi kredit? Langsung chat via WhatsApp.</p>
  <a id="waBtn" href="#" target="_blank" class="inline-flex items-center gap-2 bg-[#25D366] hover:opacity-90 text-white font-semibold px-7 py-3.5 rounded-full">
     Chat via WhatsApp
  </a>
</section>