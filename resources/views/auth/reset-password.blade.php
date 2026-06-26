<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')"
                style="color: #1e293b; font-weight: 600;" />
            <x-text-input id="email" type="email" name="email" 
                :value="old('email', $request->email)"
                required autofocus autocomplete="username"
                class="block mt-1 w-full"
                style="border: 1.5px solid #cbd5e1; border-radius: 10px; padding: 12px 16px; font-size: 15px; transition: .3s;"
                onfocus="this.style.borderColor='#b45309'; this.style.boxShadow='0 0 0 3px rgba(180,83,9,.15)'"
                onblur="this.style.borderColor='#cbd5e1'; this.style.boxShadow='none'" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password Baru')"
                style="color: #1e293b; font-weight: 600;" />
            <x-text-input id="password" type="password" name="password"
                required autocomplete="new-password"
                class="block mt-1 w-full"
                style="border: 1.5px solid #cbd5e1; border-radius: 10px; padding: 12px 16px; font-size: 15px; transition: .3s;"
                onfocus="this.style.borderColor='#b45309'; this.style.boxShadow='0 0 0 3px rgba(180,83,9,.15)'"
                onblur="this.style.borderColor='#cbd5e1'; this.style.boxShadow='none'" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password Baru')"
                style="color: #1e293b; font-weight: 600;" />
            <x-text-input id="password_confirmation" type="password" name="password_confirmation"
                required autocomplete="new-password"
                class="block mt-1 w-full"
                style="border: 1.5px solid #cbd5e1; border-radius: 10px; padding: 12px 16px; font-size: 15px; transition: .3s;"
                onfocus="this.style.borderColor='#b45309'; this.style.boxShadow='0 0 0 3px rgba(180,83,9,.15)'"
                onblur="this.style.borderColor='#cbd5e1'; this.style.boxShadow='none'" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button
                style="background: #1e293b; color: white; padding: 12px 24px; border-radius: 10px; font-size: 15px; font-weight: 600; border: none; cursor: pointer; transition: .3s;"
                onmouseover="this.style.background='#0f172a'"
                onmouseout="this.style.background='#1e293b'">
                Reset Password
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>