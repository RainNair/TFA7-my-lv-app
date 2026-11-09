<label for="username">Username</label><input id="username" name="username" value="{{ old('username', $user->username ?? '') }}" required>
<label for="full_name">Full name</label><input id="full_name" name="full_name" value="{{ old('full_name', $user->full_name ?? $user->name ?? '') }}" required>
<label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
<label for="password">Password @if(isset($user))<span class="muted">(leave blank to keep current password)</span>@endif</label><input id="password" type="password" name="password" {{ isset($user) ? '' : 'required' }}>
@if(isset($user))<label for="avatar">Profile picture <span class="muted">(JPG, PNG, or WebP, maximum 2 MB)</span></label><input id="avatar" type="file" name="avatar" accept="image/jpeg,image/png,image/webp">@endif
<div class="form-actions"><button type="submit">{{ $submitLabel }}</button><a href="{{ route('users.index') }}">Cancel</a></div>
