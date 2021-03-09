@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="John Doe"
                        class="bg-gray-100 border-2 w-full p-3 rounded-lg
                        @error('name') border-red-500 @enderror
                        "
                        value=""
                    >
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input
                        type="text"
                        name="email"
                        id="email"
                        placeholder="jdoe@gmail.com"
                        class="bg-gray-100 border-2 w-full p-3 rounded-lg
                        @error('email') border-red-500 @enderror
                        "
                        value=""
                    >
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="password"
                        class="bg-gray-100 border-2 w-full p-3 rounded-lg
                        @error('password') border-red-500 @enderror
                        "
                        value=""
                    >
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm password_confimation</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Enter password again"
                        class="bg-gray-100 border-2 w-full p-3 rounded-lg
                        @error('password_confirmation') border-red-500 @enderror
                        "
                        value=""
                    >
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
