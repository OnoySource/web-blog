<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="text-slate-700  xs:text-sm sm:bg-green-300 md:bg-blue-300 lg:bg-cyan-900">
  <navbar class="xs:w-full lg:w-full h-auto relative mb-2"> 
    <ul class="xs:text-base xs:space-x-2 xs:px-2 xs:py-2 shadow-md flex flex-row-reverse space-x-8 text-2xl lg:py-4 lg:px-24  font-semibold"> 
      <h1 class="xs:w-16 xs:h-auto xs:left-3  xs:text-xl  xs:top-4 lg:w-16 h-auto font-semibold lg:text-4xl absolute  inset-y-0 lg:left-20  lg:top-4">BLOG</h1>
      <li class="px-2 py-2 rounded-lg border-b-2 hover:border-cyan-500">home</li>
      <li class="px-2 py-2 rounded-lg border-b-2 hover:border-cyan-500 ">kategori</li>
      <li class="px-2 py-2 rounded-lg border-b-2 hover:border-cyan-500">blog</li>
    </ul>
  </navbar>
  
    <section class=" xs:p-8 xs:pt-6 sm:p-20 lg:p-20"> 
      <div class="lg:grid grid-rows-2 grid-flow-col gap-8 ">
        <div class="relative text-justify row-span-2 w-md md:row-span-4 flex flex-col items-center ">
        
         <h1 class="xs:text-lg xs:w-96 sm:text-[18px] lg:w-1/2 text-center lg:text-[28px]  font-bold text-slate-800 justify-items-center ">menampilkan hello world menggunakan java , blablala yayaya</h1>
            <br> <br>
         <div class=" xs:text-[10px] xs:top-24 w-full font-semibold absolute  flex justify-between lg:top-28 sm:text-xs">
              <h2 class="text-slate-500">[ Penulis : onoy ]</h2> 
              <p class="text-slate-500">[ Selasa, 01 Okt 2024 23:25 WIB ]</p>
            </div>
     
         <br>
          <div class=" xs:w-full xs:h-auto sm:h-auto lg:w-full ">
              <img class="xs:w-full xs:aspect-video lg:w-full lg:aspect-video  object-cover object-center rounded-md shadow-md " src="{{asset('images/pexels-photo-356056.jpeg')}}" alt="">
          </div>
          <br>
          <p class="xs:text-sm font-semibold sm:text-sm lg:text-lg"> 
Putrajaya - Founder & Chairman CT Corp, Chairul Tanjung (CT), menjadi pembicara kunci atau keynote speaker dalam Forum Serantau Yayasan Pembangunan Ekonomi Islam Malaysia (YAPEIM) di Putrajaya, Malaysia, hari ini. CT disambut hangat oleh Perdana Menteri (PM) Malaysia, Anwar Ibrahim.
CT datang ke Malaysia bersama rombongan yang terdiri dari pimpinan sejumlah organisasi masyarakat (Ormas) Islam di Indonesia. Mereka yang ikut dalam rombongan tersebut antara lain Rais Aam Nahdatul Ulama (NU) KH Miftachul Akhyar, Wakil Ketua MUI serta pimpinan Muhammadiyah Anwar Abbas, Mantan Menko Perekonomian Hatta Rajasa, dan Mantan Menteri Pendidikan dan Kebudayaan M Nuh.

CT juga didampingi Ketua Muhammadiyah Syafiq Abdul Mughni, Imam Besar Masjid Istiqlal Nasaruddin Umar, Pengurus PBNU Mughits Al Irogi, CEO detikNetwork Abdul Aziz serta CEO Trans Retail Indonesia Shafie Shamsuddin.

Baca artikel detiknews, "Silaturahmi CT, Pimpinan NU-Muhammadiyah ke PM Anwar Ibrahim, Sepakati Kerja Sama" selengkapnya https://news.detik.com/berita/d-7566402/silaturahmi-ct-pimpinan-nu-muhammadiyah-ke-pm-anwar-ibrahim-sepakati-kerja-sama.

Download Apps Detikcom Sekarang https://apps.detik.com/detik/
        </p>
        </div>
       <br>
        <span class="xs:w-full h-auto xs:px-4 xs:py-2 xs:text-sm shadow-md bg-indigo-300 rounded-md">#Teknologi</span>
      <div class="w-full h-auto bg-blue-200"> 
        
      </div>
      <x-list-article></x-list-article>
    </div>
    </section>
</body>
</html>