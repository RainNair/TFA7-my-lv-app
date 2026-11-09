@extends('layouts.app')
@section('content')<div class="panel"><h1>Create Customer</h1><form method="POST" action="{{ route('customers.store') }}">@csrf @include('customers._form', ['submitLabel' => 'Save customer'])</form></div>@endsection
