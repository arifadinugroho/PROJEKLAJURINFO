@include('mainHeader')
<figure class="relative">
    <div class="border-BlueAccent border-2 h-64">
        <img class="h-full w-full" src="{{ asset('storage\img.jpg') }}" alt=""/>
    </div>
    <figcaption class="absolute bottom-0 left-0 right-0 flex justify-end mx-40">
        <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-2 mb-2 mt-1" value="Upload Header"/>
    </figcaption>
</figure>
<!--nav profil-->
<div class="border-2 border-BlueAccent">
    <div class="mx-40">
<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap mx-auto items-center justify-center h-10">
      <div class="hidden md:block w-auto mr-6" id="navbar-default">
        <ul class="font-medium flex md:p-0 border-gray-100 md:flex-row md:space-x-8 rtl:space-x-reverse gap-x-12 items-center py-2">
          <li>
            <a href="{{ url('profil-utama/login')}}" class="flex text-fontDefault rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-link">Profil Utama</a>
          </li>
          <li>
            <a href="{{ url('daftar-artikel/publish') }}" class="block text-fontDefault rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-link">Daftar Artikel</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    </div>
</div>