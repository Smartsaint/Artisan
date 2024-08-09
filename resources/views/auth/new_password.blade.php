@extends('layouts.auth')

@section('content')
<style>
    .bg-image {
    background-image: url('{{ asset("images/bg_image2.png") }}');
    background-size: cover;
    background-position: center;
}
</style>

<div class="min-h-screen flex items-center justify-center px-4">
    <div class="flex flex-col md:flex-row rounded-lg overflow-hidden max-w-7xl w-full">
        <div class="w-full md:w-1/2 p-4 flex justify-center">
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl font-semibold text-purple-700 mb-7">Create New Password</h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="name">Email Address</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="px-4 w-full py-2 border border-gray-400 rounded-3xl focus:outline-none focus:ring-2 focus:ring-purple-600"
                        >
                    </div>
                    <div class="mb-7">
                        <label class="block text-gray-700 mb-2 font-semibold" for="email">New Password</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="px-4 w-full py-2 border border-gray-400 rounded-3xl focus:outline-none focus:ring-2 focus:ring-purple-600"
                        >
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2" for="password">Confirm Password</label>
                        <div class="relative">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="px-4 w-full py-2 border rounded-3xl border-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-600"
                            >
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600">
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm1 0a4 4 0 10-8 0 4 4 0 008 0z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.153.678-.422 1.312-.782 1.872a4.058 4.058 0 01-1.668 1.36c-.303.132-.62.228-.95.294a10.97 10.97 0 01-2.177.174c-4.477 0-8.268-2.943-9.542-7z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 7c-2.39 0-4.36 1.574-5.036 3.723m10.072 0C16.36 8.574 14.39 7 12 7m0 0c-2.39 0-4.36 1.574-5.036 3.723"
                                    />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="mb-4 mt-9">
                        <button type="submit" class="px-20 py-2 bg-purple-700 text-white font-semibold rounded-3xl w-full">Set Password</button>
                    </div>
                    <div class="text-sm">
                        <p>
                            Remember your password?
                            <a href="#" class="text-purple-700 hover:underline">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="hidden md:block relative w-1/2 bg-cover bg-center bg-no-repeat bg-image">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <!-- Overlay -->
            <div class="relative flex items-end h-full p-8">
                <p class="text-white text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis id non mauris proin. Placerat nec mi sodales blandit. Morbi dignissim laoreet tortor sapien blandit at viverra augue nulla. Mi massa integer non diam sit.</p>
            </div>
        </div>
    </div>
</div>
@endsection
