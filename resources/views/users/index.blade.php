@extends('layouts.app')
@section('content')
<div class="panel"><div class="toolbar"><div><h1>User Accounts</h1><p class="muted">Manage accounts and prepared profile avatars.</p></div><a class="button" href="{{ route('users.create') }}">Add User</a></div>
<table><thead><tr><th>Avatar</th><th>Username</th><th>Full name</th><th>Email</th><th>Action</th></tr></thead><tbody>
@forelse($users as $user)<tr><td>@if($user->avatar)<img class="avatar" src="{{ asset('storage/'.$user->avatar) }}" alt="Avatar of {{ $user->display_name }}">@else<img class="avatar" src="{{ asset('images/avatar-placeholder.svg') }}" alt="Placeholder avatar">@endif</td><td>{{ $user->username ?: '—' }}</td><td>{{ $user->display_name }}</td><td>{{ $user->email }}</td><td><a href="{{ route('users.edit', $user) }}">Edit</a></td></tr>@empty<tr><td colspan="5">No user accounts yet.</td></tr>@endforelse
</tbody></table></div>
@endsection
