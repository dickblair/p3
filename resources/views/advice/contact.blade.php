@extends('layouts.master')

@section('title')
    Contact US
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/insurance.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>Contact US</h1>

    <p>
        Details about how to contact me to further discuss your policy will go here . . .
    </p>
@endsection