@extends('layouts.web')

@section('content')
    <h1 class="text-2xl bold">Register Page</h1><hr>
    @livewire('multi-step-form', [], key('multi-step-form'))
@endsection