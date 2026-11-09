@extends('layouts.app')
@section('content')
<div class="panel"><div class="toolbar"><div><h1>Customers</h1><p class="muted">Manage customer records.</p></div><a class="button" href="{{ route('customers.create') }}">Add Customer</a></div>
<table><thead><tr><th>Full name</th><th>Email</th><th>Phone</th><th>Action</th></tr></thead><tbody>
@forelse($customers as $customer)<tr><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone ?: '—' }}</td><td><a href="{{ route('customers.edit', $customer) }}">Edit</a></td></tr>@empty<tr><td colspan="4">No customers yet.</td></tr>@endforelse
</tbody></table></div>
@endsection
