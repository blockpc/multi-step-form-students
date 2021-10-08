@extends('layouts.web')

@section('content')
<h1>Register Page</h1><hr>
@livewire('multi-step-form', [], key('multi-step-form'))
@endsection