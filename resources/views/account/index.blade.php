@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="block text-center mt-5 text-lg mx-auto font-large text-black">Select an Account</h2>
        @foreach ($accounts as $account)
            <div class="max-w-md mx-auto mb-3 bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div class="md:flex">
                    <div class="p-8">
                        <div class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">
                            <a href="{{ $account->url }}">{{ $account->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
