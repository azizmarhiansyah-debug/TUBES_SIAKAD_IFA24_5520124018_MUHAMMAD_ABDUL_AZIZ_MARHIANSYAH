<x-app-layout>

<div style="padding:30px;background:#f8fafc;min-height:100vh;">

    <div style="margin-bottom:30px;">

        <h1 style="font-size:38px;font-weight:bold;color:#1e293b;margin:0;">
            Selamat Datang
        </h1>

        <p style="color:#64748b;margin-top:8px;">
            Berikut ringkasan informasi akademik saat ini.
        </p>

    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px;margin-bottom:30px;">

        <div style="background:white;padding:25px;border-radius:18px;border:1px solid #e2e8f0;">
            <div style="font-size:16px;color:#475569;">Dosen</div>
            <h1 style="font-size:42px;margin-top:10px;color:#1e293b;">
                {{ $jumlahDosen }}
            </h1>
            <span style="color:#b45309;font-size:14px;font-weight:600;">Total Dosen</span>
        </div>

        <div style="background:white;padding:25px;border-radius:18px;border:1px solid #e2e8f0;">
            <div style="font-size:16px;color:#475569;">Mahasiswa</div>
            <h1 style="font-size:42px;margin-top:10px;color:#1e293b;">
                {{ $jumlahMahasiswa }}
            </h1>
            <span style="color:#b45309;font-size:14px;font-weight:600;">Total Mahasiswa</span>
        </div>

        <div style="background:white;padding:25px;border-radius:18px;border:1px solid #e2e8f0;">
            <div style="font-size:16px;color:#475569;">Mata Kuliah</div>
            <h1 style="font-size:42px;margin-top:10px;color:#1e293b;">
                {{ $jumlahMatakuliah }}
            </h1>
            <span style="color:#b45309;font-size:14px;font-weight:600;">Total Mata Kuliah</span>
        </div>

        <div style="background:white;padding:25px;border-radius:18px;border:1px solid #e2e8f0;">
            <div style="font-size:16px;color:#475569;">Jadwal</div>
            <h1 style="font-size:42px;margin-top:10px;color:#1e293b;">
                {{ $jumlahJadwal }}
            </h1>
            <span style="color:#b45309;font-size:14px;font-weight:600;">Total Jadwal</span>
        </div>

        <div style="background:white;padding:25px;border-radius:18px;border:1px solid #e2e8f0;">
            <div style="font-size:16px;color:#475569;">KRS</div>
            <h1 style="font-size:42px;margin-top:10px;color:#1e293b;">
                {{ $jumlahKrs }}
            </h1>
            <span style="color:#b45309;font-size:14px;font-weight:600;">Total KRS</span>
        </div>

    </div>

    <div style="background:white;padding:30px;border-radius:18px;border:1px solid #e2e8f0;margin-bottom:25px;border-left:5px solid #b45309;">

        <h2 style="font-size:28px;font-weight:bold;color:#1e293b;margin-bottom:15px;">
            Informasi Sistem
        </h2>

        <p style="color:#64748b;line-height:1.9;font-size:16px;">
            Sistem Informasi Akademik (SIAKAD) digunakan untuk mengelola
            data dosen, mahasiswa, mata kuliah, jadwal perkuliahan,
            dan Kartu Rencana Studi (KRS) secara lebih mudah,
            cepat, dan terstruktur.
        </p>

    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">

        <div style="background:white;padding:25px;border-radius:18px;border:1px solid #e2e8f0;border-top:4px solid #1e293b;">
            <h3 style="margin-bottom:15px;color:#1e293b;font-weight:700;">
                📅 Jadwal Hari Ini
            </h3>
            <p style="color:#64748b;">
                Belum ada jadwal perkuliahan hari ini.
            </p>
        </div>

        <div style="background:white;padding:25px;border-radius:18px;border:1px solid #e2e8f0;border-top:4px solid #b45309;">
            <h3 style="margin-bottom:15px;color:#1e293b;font-weight:700;">
                📚 Mata Kuliah
            </h3>
            <p style="color:#64748b;">
                Total mata kuliah tersedia: {{ $jumlahMatakuliah }}
            </p>
        </div>

    </div>

</div>

</x-app-layout>