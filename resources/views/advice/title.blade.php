@extends('layouts.master')

@section('title')
    {{ $title }}
@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/insurance.css' rel='stylesheet'>
@endpush

@section('content')
    <h1>{{ $title }}</h1>

    <p>
        Some information about the insurance quote will go here.
    </p>
@endsection

@section('inputs')
    <div class='center'>
        <h2>Insurance Cost Savings Tool</h2>
    </div>
    <p><span class='error'>All fields are required fields</span></p>
    <div class='formContainer'>
        <br/><br/>
        <div>
            <label for='gender' id='gender'> Gender: </label>
            <input type='radio' name='gender' value='male'> Male
            <input type='radio' name='gender' value='female'> Female
        </div>
        <div>
            Gender Validation Hook
        </div><br/><br/>
        <div>
            <label for='maritalStatus'>  Indicate Your Marital Status: </label> <br/>
            <select id='maritalStatus' name='maritalStatus' size=4>
                <option value = 'married'>Married</option>
                <option value = 'single'>Single</option>
                <option value = 'widowed'>Widowed</option>
                <option value = 'divorced'>Divorced</option>
            </select>
        </div>
        <div>
            Marital Status Validation Hook
        </div><br/> <br/>
        <div>
            <label for='age'>Input your age between 5 and 105 and press enter: </label> <br/>
            <input type='number' id='age' name='age' min='5' max='105'/>
        </div>
        <div>
            Age Validation Hook
        </div>
        <input type='submit' name='submit' value='Submit' />

    </div>

@endsection