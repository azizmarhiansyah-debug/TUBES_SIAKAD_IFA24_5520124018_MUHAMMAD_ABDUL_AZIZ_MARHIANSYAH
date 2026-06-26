<div style="
width:260px;
min-height:100vh;
background:linear-gradient(180deg,#0f172a,#1e293b);
position:fixed;
left:0;
top:0;
box-shadow:4px 0 15px rgba(0,0,0,.2);
display:flex;
flex-direction:column;">

    {{-- Brand --}}
    <div style="
    padding:25px 20px;
    text-align:center;
    border-bottom:1px solid rgba(255,255,255,.08);">

        <h2 style="
        color:#f59e0b;
        font-size:24px;
        font-weight:800;
        margin:0;
        letter-spacing:2px;">
            SIAKAD
        </h2>

        <p style="
        color:#94a3b8;
        margin-top:6px;
        font-size:11px;
        letter-spacing:1px;">
            Sistem Informasi Akademik
        </p>

    </div>

    {{-- Menu --}}
    <div style="padding:15px 8px;flex:1;">

        <a href="{{ route('dashboard') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('dashboard') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('dashboard') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('dashboard') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('dashboard') ? '600' : '400' }};
           transition:.2s;">
            <i class="fas fa-gauge-high" style="width:22px;"></i>
            Dashboard
        </a>

        @if(Auth::user()->role == 'admin')

        <p style="
        font-size:10px;
        color:#475569;
        text-transform:uppercase;
        letter-spacing:1.5px;
        padding:12px 18px 4px;
        margin:0;">
            Akademik
        </p>

        <a href="{{ route('dosen.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('dosen.*') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('dosen.*') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('dosen.*') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('dosen.*') ? '600' : '400' }};">
            <i class="fas fa-chalkboard-teacher" style="width:22px;"></i>
            Dosen
        </a>

        <a href="{{ route('mahasiswa.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('mahasiswa.*') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('mahasiswa.*') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('mahasiswa.*') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('mahasiswa.*') ? '600' : '400' }};">
            <i class="fas fa-user-graduate" style="width:22px;"></i>
            Mahasiswa
        </a>

        <a href="{{ route('matakuliah.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('matakuliah.*') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('matakuliah.*') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('matakuliah.*') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('matakuliah.*') ? '600' : '400' }};">
            <i class="fas fa-book-open" style="width:22px;"></i>
            Mata Kuliah
        </a>

        <a href="{{ route('jadwal.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('jadwal.*') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('jadwal.*') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('jadwal.*') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('jadwal.*') ? '600' : '400' }};">
            <i class="fas fa-calendar-days" style="width:22px;"></i>
            Jadwal
        </a>

        <a href="{{ route('krs.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('krs.*') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('krs.*') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('krs.*') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('krs.*') ? '600' : '400' }};">
            <i class="fas fa-clipboard-list" style="width:22px;"></i>
            KRS
        </a>

        @endif

        @if(Auth::user()->role == 'mahasiswa')

        <p style="
        font-size:10px;
        color:#475569;
        text-transform:uppercase;
        letter-spacing:1.5px;
        padding:12px 18px 4px;
        margin:0;">
            Menu Saya
        </p>

        <a href="{{ route('jadwal.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('jadwal.*') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('jadwal.*') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('jadwal.*') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('jadwal.*') ? '600' : '400' }};">
            <i class="fas fa-calendar-days" style="width:22px;"></i>
            Jadwal
        </a>

        <a href="{{ route('krs.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:4px;
           color:{{ request()->routeIs('krs.*') ? '#f59e0b' : '#cbd5e1' }};
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('krs.*') ? 'rgba(245,158,11,.15)' : 'transparent' }};
           border-left:{{ request()->routeIs('krs.*') ? '3px solid #f59e0b' : '3px solid transparent' }};
           font-size:14px;
           font-weight:{{ request()->routeIs('krs.*') ? '600' : '400' }};">
            <i class="fas fa-clipboard-list" style="width:22px;"></i>
            KRS
        </a>

        @endif

    </div>

    {{-- User info --}}
    <div style="
    padding:12px 15px;
    border-top:1px solid rgba(255,255,255,.08);
    margin-bottom:4px;">
        <div style="
        display:flex;
        align-items:center;
        gap:10px;
        padding:8px 10px;">
            <div style="
            width:32px;
            height:32px;
            border-radius:50%;
            background:rgba(245,158,11,.2);
            border:1px solid #f59e0b;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:13px;
            font-weight:700;
            color:#f59e0b;">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <div>
                <div style="color:white;font-size:13px;font-weight:600;">{{ Auth::user()->name }}</div>
                <div style="color:#64748b;font-size:11px;">{{ Auth::user()->role }}</div>
            </div>
        </div>
    </div>

    {{-- Logout --}}
    <div style="padding:0 15px 20px;">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                style="
                width:100%;
                background:rgba(245,158,11,.1);
                color:#f59e0b;
                border:1px solid rgba(245,158,11,.3);
                padding:9px;
                border-radius:8px;
                cursor:pointer;
                font-size:13px;
                font-weight:600;
                transition:.2s;"
                onmouseover="this.style.background='rgba(245,158,11,.25)'"
                onmouseout="this.style.background='rgba(245,158,11,.1)'">
                <i class="fas fa-right-from-bracket"></i>
                Logout
            </button>
        </form>
    </div>

</div>