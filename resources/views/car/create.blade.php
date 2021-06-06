@extends('layouts.app')
@section('content')
<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl">create car</h1>
        <hr>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST">
            <div class="block">
@csrf
            <input type="text"
            class="block shadow-5xl mb-10 p-2 w-80 italic placehloder-gary-400"
            name="name"
             placeholder="name">
            <input type="text"
            class="block shadow-5xl mb-10 p-2 w-80 italic placehloder-gary-400"
            name="founded"
            placeholder="founded">
            <input type="text"
            class="block shadow-5xl mb-10 p-2 w-80 italic placehloder-gary-400"
            name="description"
            placeholder="description">
<button type="submit"
class="bg-green-500 block shadow-5xl mb-10 p-2 w-80">submit</button>
        </div>
        </form>
    </div>
</div>
@endsection
