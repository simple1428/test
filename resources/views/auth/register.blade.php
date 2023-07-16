@extends('layouts.app-auth')

@section('content')


<div class="p-8">
    <h1 class="text-[#f1cf1c] text-4xl font-bold">Register</h1>

    <form action="register/create" method="post">
        @csrf
        <div class="mt-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama </label>
            <input type="search" id="name" name="name"
                class="block w-full p-1 text-gray-900 border-0   rounded-xl bg-gray-100 sm:text-xs focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('name') }}">
            @error('name')
            <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Handphone
            </label>
            <input type="number" id="nohp" name="telepon"
                class="block w-full p-2 text-gray-900 border-0   rounded-xl bg-gray-100 sm:text-xs focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('telepon') }}">
            @error('telepon')
            <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
            </label>
            <input type="email" id="email" name="email"
                class="block w-full p-2 text-gray-900 border-0   rounded-xl bg-gray-100 sm:text-xs focus:ring-blue-500 focus:border-blue-500"
                value="{{ old('email') }}">
            @error('email')
            <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
            </label>
            <input type="password" id="password" name="password"
                class="block w-full p-2 text-gray-900 border-0   rounded-xl bg-gray-100 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
            @error('password')
            <p class="text-red-600 text-xs">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex justify-center mt-12  ">
            <div class="">
                <center>
                    <button type="submit"
                        class="text-white bg-[#f1cf1c] hover:bg-[#ddbe23]  w-24  font-medium rounded-full text-sm px-6 py-1.5 text-center mr-2 mb-2  ">Register</button>
                    <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-[#f1cf1c] font-bold">Login</a></p>
                </center>
            </div>
        </div>
    </form>

</div>

@endsection