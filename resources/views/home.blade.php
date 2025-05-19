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

@endsection