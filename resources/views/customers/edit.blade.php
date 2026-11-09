@extends('layouts.app')
@section('content')<div class="panel"><h1>Edit Customer</h1><form method="POST" action="{{ route('customers.update', $customer) }}">@csrf @method('PUT') @include('customers._form', ['submitLabel' => 'Update customer'])</form></div>@endsection
