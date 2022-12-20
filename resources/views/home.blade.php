@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="block text-center mt-5 text-lg mx-auto font-large text-black">You are on {{ $account->name }}</h1>
        <x-product-list />
    </div>
@endsection
