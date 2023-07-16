@extends('layouts.app')

@section('content')
<div class="bg-center pt-36 pb-16 px-8 rounded-[50px] "
    style="background-image: url({{ asset('assets/'.$tukang->category->image) }})">
</div>
<div class="mx-8 -mt-16 bg-white rounded-lg shadow-md  flex p-2 gap-1">
    <div class="w-[30%]">
        <img src="{{ asset('assets/'.$tukang->image) }}" class="rounded-full w-24 h-24" alt="">
    </div>
    <div class="w-[70%] pl-4">
        <h1 class="font-bold uppercase text-[#f1cf1c]">{{ $tukang->name }}</h1>
        <p class="text-xs">Spesialis {{ $tukang->category->name }}</p>
        <p class="text-xs">{{ $tukang->address }}</p>
        <h1 class="text-right font-bold"><i class="bi bi-tag-fill text-[#f1cf1c]"></i> Rp.
            {{ number_format($tukang->price ,0,',','.') }}</h1>
        <p class="text-right  text-xs font-bold -mt-1 text-slate-400">/dm</p>
    </div>
</div>
<div class="mx-8">
    <form action="">
        <div class="mt-5">
            <label for="note" class="block   text-xs font-medium text-gray-900 dark:text-white">Note tambahan
            </label>
            <textarea name="note" id="" cols="7"
                class="block w-full p-2 text-gray-900 border-0   rounded-xl bg-gray-100 sm:text-xs focus:ring-yellow-300 focus:border-yellow-300"></textarea>

            @error('note')
            <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label class="block mb-2 text-xs font-medium text-gray-900 dark:text-white" for="small_size">Lampirkan Foto
                /
                Contoh motif</label>
            <input name="image"
                class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="small_size" type="file">
            @error('image')
            <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="note" class="block   text-xs font-medium text-gray-900 dark:text-white">Estimasi Waktu
            </label>
            <input name="note" type="date"
                class="block w-full p-2 text-gray-900 border-0 mr-2  rounded-xl bg-gray-100 sm:text-xs focus:ring-yellow-300 focus:border-yellow-300" />
            @error('note')
            <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>
    </form>


    <div class="mt-5">
        <label for="note" class="block   text-xs font-medium text-gray-900 dark:text-white">Ukuran <span
                class="text-slate-300">(dalam
                decimeter)</span>
        </label>
        <form action=" ">
            <div class="flex items-center">
                <input name="x" type="number"
                    class="block w-full p-2 text-gray-900 border-0 mr-2  rounded-xl bg-gray-100 sm:text-xs focus:ring-yellow-300 focus:border-yellow-300 text-xs"
                    placeholder="Panjang" />
                <span>x</span>
                <input name="y" type="number"
                    class="block w-full p-2 text-gray-900 border-0 mx-2  rounded-xl bg-gray-100 sm:text-xs focus:ring-yellow-300 focus:border-yellow-300  text-xs"
                    placeholder="Lebar" />
                <button type="submit" class="bg-[#f1cf1c]  text-xs rounded-lg px-3 py-1.5">Check</button>
            </div>
        </form>
        @error('note')
        <p class="text-red-600 text-xs">{{ $message }}</p>
        @enderror
    </div>
</div>
<div class="fixed bottom-0  h-14 w-full shadow-md border border-t-1 rounded-t-[35px] ">
    <div class="flex mt-2 mx-8 justify-between">
        <div class="">
            <p class="text-xs">Jasa fee</p>
            @if ($total)
            <span class="font-bold">
                Rp.
                {{ number_format($tukang->price * $total ,0,',','.') }}</span>
            @endif
        </div>
        <div class="flex gap-1">
            <a class="bg-[#f1cf1c]  px-1 py-1 h-8 rounded-xl " href="{{ url('https://wa.me/6282165074721') }}"><i
                    class="bi bi-whatsapp"></i><span class="text-xs ml-1">Negosiasi</span> </a>
            <button class="bg-[#f1cf1c]  px-1 py-1 h-8 rounded-xl " type="submit"><i
                    class="bi bi-bag-check-fill"></i><span class="text-xs ml-1">Buat Pesanan</span> </button>
        </div>
    </div>
</div>
@endsection