@extends('layouts.auth')
@section('content')
<style>
    .bg-image {
    background-image: url('{{ asset("images/bg_image2.png") }}');
    background-size: cover;
    background-position: center;
}
</style>
<div class="min-h-screen flex items-center justify-center">
    <div class="flex rounded-lg overflow-hidden max-w-7xl w-full">
        <div class="w-1/2 p-4 flex justify-center">
        <div class="p-10 rounded-lg text-center">
        <h1 class="text-3xl font-semibold mb-9 text-purple-600">Select mode</h1>
        <div class="flex justify-center space-x-4 mb-8">
            <!-- Artisan Option -->
            <div class="flex flex-col items-center">
                <div class="bg-gray-200 p-4 rounded-full mb-4 overflow-hidden">
                    <img src="{{asset('images/illustration.png')}}" alt="Artisan Image" class="rounded-full h-32 w-32 object-contain">
                </div>
                <label class="flex items-center cursor-pointer space-y-3 flex-col">
                    <input type="radio" name="mode" value="artisan" class="form-radio text-purple-600 h-4 w-4 mr-2" checked>
                    <span class="text-2xl font-bold text-purple-600 ">Artisan</span>
                </label>
                <p class="text-sm text-gray-500 mt-2 text-center">Find jobs and earn money as an artisan/professional/freelancer</p>
            </div>

            <!-- Client Option -->
            <div class="flex flex-col items-center">
                <div class="bg-gray-200 p-4 rounded-full mb-4 overflow-hidden">
                    <img src="{{asset('images/illustration.png')}}" alt="Client Image" class="h-32 w-32 rounded-full">
                </div>
                <label class="flex items-center cursor-pointer flex-col space-y-4">
                    <input type="radio" name="mode" value="client" class="form-radio text-purple-600 h-4 w-4 mr-2">
                    <span class="text-2xl font-bold text-purple-600">Client</span>
                </label>
                <p class="text-sm text-gray-500 mt-2 text-center">Hire, manage and pay as a different company.</p>
            </div>
        </div>
        <button class="bg-purple-600 text-white py-2 px-6 w-2/3 rounded-full text-lg">Continue</button>
    </div>
        </div>
        <div class="relative w-1/2 bg-cover bg-center bg-no-repeat bg-image">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <!-- Overlay -->
            <div class="relative flex items-end h-full p-8">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis id non mauris proin. Placerat nec mi sodales blandit. Morbi dignissim laoreet tortor sapien blandit at viverra augue nulla. Mi massa integer non diam sit.</p>
            </div>
        </div>
    </div>
</div>
@endsection
