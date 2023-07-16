@extends('layouts.app')

@section('content')
<div class="pb-24">

    <div class="  pt-24 pb-8 px-8 rounded-[30px] shadow-md">
        <h1 class="font-extrabold text-lg">Cari Tukang</h1>
        <form action="">
            <div
                class="flex justify-center items-center px-2 focus:ring-blue-500 rounded-xl    border border-yellow-300 mt-3">
                <select id="countries" name="category"
                    class="pr-4 text-gray-900 border-0 rounded-xl focus:ring-transparent bg-white block w-full p-2.5  ">
                    <option value="all" {{ ($category == 'All') ?'selected' : ''  }}>All</option>
                    @foreach ($categories as $itemcategory)
                    <option {{ ($category == $itemcategory->id) ? 'selected' : '' }} value="{{ $itemcategory->id }}">
                        {{  $itemcategory->name  }}
                    </option>
                    @endforeach
                </select>
                <button class="" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>

    </div>
    <div class="mx-8">
        @foreach ($tukang as $itemtukang)
        <a href="{{ url('tukang/'.$itemtukang->id) }}" class="mt-4 shadow-md rounded-lg flex p-2 gap-1">
            <div class="w-[30%]">
                <img src="{{ asset('assets/'.$itemtukang->image) }}" class="rounded-full w-24 h-24" alt="">
            </div>
            <div class="w-[70%] pl-4">
                <h1 class="font-bold uppercase text-[#f1cf1c]">{{ $itemtukang->name }}</h1>
                <p class="text-xs">Spesialis {{ $itemtukang->category->name }}</p>
                <p class="text-xs">{{ $itemtukang->address }}</p>
                <h1 class="text-right font-bold"><i class="bi bi-tag-fill text-[#f1cf1c]"></i> Rp.
                    {{ number_format($itemtukang->price ,0,',','.') }}</h1>
                <p class="text-right  text-xs font-bold -mt-1 text-slate-400">/dm</p>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection