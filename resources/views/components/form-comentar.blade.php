<div class="xs:w-full ">
    <div class="xs:w-full xs:h-auto  xs:py-2 relative flex justify-end gap-2 items-center opacity-50">
      <span class="absolute left-0 font-semibold justify-center items-center">tulis komentar / opsional</span>
        <a href="">
          <img src="{{asset('images/instagram.png')}}" alt="no image" class="xs:w-8 xs:h-auto rounded-md">
        </a>
        <a href="">
          <img src="{{asset('images/github.png')}}" alt="no image" class="xs:w-8 xs:h-auto rounded-md">
        </a>        
      </div>
    <form action="" method="">
      @csrf
     <textarea name="" class="xs:w-full xs:h-32 xs:p-2 border-[0.5px] border-slate-200 rounded-lg shadow-md outline outline-none"></textarea>
     <button type="submit" class="xs:px-4 xs:py-2 xs:text-base border-[2px] hover:border-cyan-200 rounded-md shadow-md font-semibold">kirim</button>
    </form>
  </div>