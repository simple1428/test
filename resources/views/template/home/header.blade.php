<div class="bg-white h-20 px-8 pt-7 pb-3 fixed top-0 w-full shadow-md flex justify-between items-center">
    @if ($title == 'detail')
    <a href="{{ url('/tukang?category=all') }}"><span><i
                class="bi bi-arrow-left-circle-fill mr-2 text-yellow-300"></i></span><span
            class="font-bold">Tukang</span></a>
    @endif
    <span>
        <img src="{{ asset('assets/image/ukirwarna.png') }}" alt="" class="w-28">

    </span>
</div>