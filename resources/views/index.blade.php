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
    <ul class="xs:text-sm xs:space-x-2 xs:px-2 xs:py-2 shadow-md flex flex-row-reverse space-x-8 lg:text-2xl lg:py-4 lg:px-24  font-semibold"> 
      <h1 class="xs:w-16 xs:h-auto xs:left-3  xs:text-xl  xs:top-4 lg:w-16 h-auto font-semibold lg:text-4xl absolute  inset-y-0 lg:left-20  lg:top-4">MindCode's</h1>
      <li class="px-2 py-2 rounded-lg border-b-2 hover:border-cyan-500">
        <a href="#">profile</a>
      </li>
      <li class="px-2 py-2 rounded-lg border-b-2 hover:border-cyan-500 ">
        <a href="#">kategori</a>
      </li>
      <li class="px-2 py-2 border-b-2 hover:border-cyan-500">
        <a href="#">home</a>
      </li>
    </ul>
  </navbar>
  
    <section class=" xs:p-8 xs:pt-6 sm:p-20 lg:p-20"> 
      <div class="lg:grid grid-rows-2 grid-flow-col gap-8 ">
        <div class="relative text-justify row-span-2 w-md md:row-span-4 flex flex-col items-center ">
        
         <h1 class="xs:text-lg xs:w-96 sm:text-[18px] lg:w-1/2 text-center lg:text-[28px]  font-bold text-slate-800 justify-items-center ">menampilkan hello world menggunakan java , blablala yayaya</h1>
            <br> <br>
            <x-span-sosmed></x-span-sosmed>       
         <br>
          <div class=" xs:w-full xs:h-auto sm:h-auto lg:w-full ">
              <img class="xs:w-full xs:aspect-video lg:w-full lg:aspect-video  object-cover object-center rounded-md shadow-md " src="{{asset('images/pexels-photo-356056.jpeg')}}" alt="">
          </div>
          
          <span class="w-full xs:text-[10px] my-4 text-right">Published &emsp14; : &emsp14; 02 Oct 2024</span>
          
          <p class="xs:text-sm font-semibold sm:text-sm lg:text-lg"> 
            Pendahuluan: Produktivitas di tempat kerja adalah kunci untuk mencapai tujuan bisnis. Namun, banyak faktor yang dapat mengganggu fokus dan efisiensi kerja. Dalam artikel ini, kami akan membahas lima cara efektif untuk meningkatkan produktivitas Anda dan tim Anda.

1. Atur Prioritas Tugas Sebelum memulai hari, luangkan waktu untuk menentukan tugas mana yang paling penting. Gunakan metode seperti Eisenhower Matrix untuk membantu Anda memprioritaskan tugas berdasarkan urgensi dan pentingnya. Dengan demikian, Anda bisa fokus pada apa yang benar-benar penting.

2. Ciptakan Lingkungan Kerja yang Nyaman Lingkungan fisik yang nyaman dapat meningkatkan konsentrasi. Pastikan meja kerja Anda terorganisir dan bebas dari gangguan. Pertimbangkan penggunaan tanaman atau pencahayaan yang baik untuk menciptakan suasana yang mendukung produktivitas.

3. Gunakan Teknologi untuk Mengelola Waktu Ada banyak aplikasi dan alat yang dapat membantu Anda mengelola waktu dengan lebih baik. Aplikasi seperti Trello atau Asana memungkinkan Anda untuk melacak proyek dan tenggat waktu, sementara Pomodoro Technique bisa membantu Anda membagi waktu kerja menjadi sesi yang lebih produktif.

4. Istirahat Secara Teratur Mungkin terdengar kontra-intuitif, tetapi istirahat secara teratur dapat meningkatkan produktivitas. Luangkan waktu sejenak untuk bergerak atau melakukan aktivitas lain. Ini dapat membantu menyegarkan pikiran dan mengurangi kelelahan.

5. Kolaborasi yang Efektif Komunikasi yang baik dalam tim sangat penting untuk menjaga produktivitas. Gunakan alat komunikasi seperti Slack atau Microsoft Teams untuk memudahkan kolaborasi. Pertimbangkan juga untuk mengadakan pertemuan singkat secara rutin untuk memastikan semua orang berada di halaman yang sama.

Kesimpulan: Meningkatkan produktivitas di tempat kerja tidak harus sulit. Dengan menerapkan beberapa strategi sederhana ini, Anda dan tim Anda dapat bekerja lebih efisien dan mencapai tujuan yang telah ditetapkan. Ingat, produktivitas bukan hanya tentang bekerja lebih keras, tetapi juga tentang bekerja lebih cerdash
        </div>
       <br>
        <span class="xs:w-full h-auto xs:px-4 xs:py-2 xs:text-sm  shadow-md bg-indigo-300 rounded-md">#Teknologi</span>
      <div class="w-full h-auto bg-blue-200"> 
        
      </div>
      <br> <br> 
      <x-form-comentar></x-form-comentar>
     
      <x-list-article></x-list-article>
    </div> 
    </section>
</body>
</html>