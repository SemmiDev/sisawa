@extends('layouts.app')

@push('head')
    @vite('resources/css/layouts/login.css')
@endpush

@push('body')
    @vite('resources/js/layouts/login.js')
@endpush

@section('title', 'Login')

@push('content')
    <div class='w-full h-screen flex justify-center items-center md:px-5 px-4 pt-8'>
        <form method="POST" action={{ route('login.store') }} class="form">
            @csrf
            <label class="input input-bordered flex items-center gap-2">
                <input type="text" class="grow" id="name" name="name" value="{{ old('name') }}"
                    placeholder={{ __('username') }} />
                <i data-lucide="user"></i>
            </label>

            <label class="input input-bordered flex items-center gap-2">
                <input type="password" class="grow" id="password" name="password" placeholder={{ __('password') }} />
                <i data-lucide="key-square"></i>
            </label>

            <div class="flex items-start justify-center space-x-2 pt-2">
                <button class="btn btn-slate" type="submit">Mlebu</button>
            </div>

            {{-- errors --}}
            @if ($errors->any())
                <div class="bg-red-50 px-4 py-2 mt-2 rounded-xl">
                    <ul class="text-sm text-red-500 pt-2 font-medium">
                        @foreach ($errors->all() as $key => $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@endpush
