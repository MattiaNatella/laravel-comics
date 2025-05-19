@extends('layouts.master')

@php
    $comics = config('comics');
@endphp

@section('content')
    <div class="cm-container home-content row row-cols-6 pt-5">

        @foreach ($comics as $comic)
            <x-card>
                <x-slot:immagine>{{ $comic['thumb'] }}</x-slot>
                    <x-slot:titolo>{{ $comic['series'] }}</x-slot>
            </x-card>

        @endforeach
    </div>

    <x-tag>
        <x-slot:button>Load More</x-slot>
    </x-tag>
    <x-tag>
        <x-slot:button>Current Series</x-slot>
            <x-slot:type>current-series</x-slot>
    </x-tag>

@endsection