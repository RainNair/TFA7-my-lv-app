@extends('layouts.app')
@section('content')<div class="panel"><h1>Create User Account</h1><form method="POST" action="{{ route('users.store') }}">@csrf @include('users._form', ['submitLabel' => 'Save user'])</form></div>@endsection
