<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" 
                style="color: #1e293b; font-weight: 600;" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" 
                required autofocus autocomplete="name"
                class="block mt-1 w-full"
                style="border: 1.5px solid #cbd5e1; border-radius: 10px; padding: 12px 16px; font-size: 15px; transition: .3s;"
                onfocus="this.style.borderColor='#b45309'; this.style.boxShadow='0 0 0 3px rgba(180,83,9,.15)'"
                onblur="this.style.borderColor='#cbd5e1'; this.style.boxShadow='none'" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" 
                style="color: #1e293b; font-weight: 600;" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" 
                required autocomplete="username"
                class="block mt-1 w-full"
                style="border: 1.5px solid #cbd5e1; border-radius: 10px; padding: 12px 16px; font-size: 15px; transition: .3s;"
                onfocus="this.style.borderColor='#b45309'; this.style.boxShadow='0 0 0 3px rgba(180,83,9,.15)'"
                onblur="this.style.borderColor='#cbd5e1'; this.style.boxShadow='none'" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" 
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
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" 
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
            <a href="{{ route('login') }}"
                style="font-size: 14px; color: #b45309; text-decoration: underline; transition: .2s;"
                onmouseover="this.style.color='#92400e'"
                onmouseout="this.style.color='#b45309'">
                Sudah punya akun?
            </a>

            <x-primary-button class="ms-4"
                style="background: #1e293b; color: white; padding: 12px 24px; border-radius: 10px; font-size: 15px; font-weight: 600; border: none; cursor: pointer; transition: .3s;"
                onmouseover="this.style.background='#0f172a'"
                onmouseout="this.style.background='#1e293b'">
                Daftar
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>