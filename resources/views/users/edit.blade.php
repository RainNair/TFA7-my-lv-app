@extends('layouts.app')
@section('content')<div class="panel"><h1>Edit User Account</h1><form method="POST" enctype="multipart/form-data" action="{{ route('users.update', $user) }}">@csrf @method('PUT') @include('users._form', ['submitLabel' => 'Update user'])</form></div>@endsection
