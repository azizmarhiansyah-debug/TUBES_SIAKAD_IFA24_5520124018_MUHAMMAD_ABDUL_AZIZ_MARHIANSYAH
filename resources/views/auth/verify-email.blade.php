<x-guest-layout>
    <div class="mb-4 text-sm" style="color: #475569; line-height: 1.6;">
        Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi alamat email Anda
        dengan mengklik tautan yang telah kami kirimkan. Jika tidak menerima email, kami
        akan mengirimkan yang baru.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium"
            style="background: #fef3c7; color: #92400e; padding: 12px 16px; border-radius: 10px; border: 1px solid #fcd34d;">
            ✓ Tautan verifikasi baru telah dikirim ke alamat email Anda.
        </div>
    @endif

    <div class="mt-6 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button
                style="background: #1e293b; color: white; padding: 12px 24px; border-radius: 10px; font-size: 15px; font-weight: 600; border: none; cursor: pointer; transition: .3s;"
                onmouseover="this.style.background='#0f172a'"
                onmouseout="this.style.background='#1e293b'">
                Kirim Ulang Email Verifikasi
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                style="font-size: 14px; color: #b45309; text-decoration: underline; background: none; border: none; cursor: pointer; transition: .2s;"
                onmouseover="this.style.color='#92400e'"
                onmouseout="this.style.color='#b45309'">
                Keluar
            </button>
        </form>
    </div>
</x-guest-layout>