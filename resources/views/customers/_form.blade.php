<label for="full_name">Full name</label><input id="full_name" name="full_name" value="{{ old('full_name', $customer->full_name ?? '') }}" required>
<label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email', $customer->email ?? '') }}" required>
<label for="phone">Phone <span class="muted">(optional)</span></label><input id="phone" name="phone" value="{{ old('phone', $customer->phone ?? '') }}">
<div class="form-actions"><button type="submit">{{ $submitLabel }}</button><a href="{{ route('customers.index') }}">Cancel</a></div>
