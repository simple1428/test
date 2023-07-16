@if($title != 'detail')
<div class="fixed bottom-0 bg-gradient-to-r from-[#f1cf1c] to-[#fcf00f] h-14 w-full shadow-md border border-t-1">
    <div class="w-full grid grid-cols-4 gap-1 h-full">
        <div class="text-center pt-2 {{ ($title == 'home') ? 'bg-white' : '' }} ">
            <a href="{{ route('home') }}"><i class="bi bi-house-door-fill text-2xl"></i></a>
            <p class="text-[10px] -m-1">Home</p>
        </div>
        <div class="text-center pt-2 {{ ($title == 'search') ? 'bg-white' : '' }}">
            <a href="{{ url('tukang?category=all') }}"><i class="bi bi-search text-2xl"></i></a>
            <p class="text-[10px] -m-1">Search</p>
        </div>
        <div class="text-center pt-2">
            <a href=""><i class="bi bi-bag-plus-fill text-2xl"></i></a>
            <p class="text-[10px] -m-1">Pesanan</p>
        </div>
        <div class="text-center pt-2">
            <a href=""><i class="bi bi-person-circle text-2xl"></i></a>
            <p class="text-[10px] -m-1">Profile</p>
        </div>
    </div>
</div>
@endif