<!DOCTYPE html>
<html>
<head>
    <title>Login SIAKAD</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(180deg, #0f172a, #1e293b);
        }

        .login-box {
            width: 450px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .3);
        }

        .header {
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .content {
            padding: 40px;
        }

        .logo h1 {
            font-size: 72px;
            color: #b45309;
            font-weight: 800;
            letter-spacing: 4px;
            text-align: center;
            margin-bottom: 8px;
        }

        .logo p {
            color: #6b7280;
            font-size: 18px;
            text-align: center;
            margin-bottom: 35px;
        }

        input {
            width: 100%;
            padding: 14px 16px;
            margin-bottom: 18px;
            border: 1.5px solid #cbd5e1;
            border-radius: 10px;
            font-size: 15px;
            transition: .3s;
        }

        input:focus {
            outline: none;
            border-color: #b45309;
            box-shadow: 0 0 0 3px rgba(180, 83, 9, .15);
        }

        button {
            width: 100%;
            background: #1e293b;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #0f172a;
        }

        .error {
            background: #fef3c7;
            color: #92400e;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
            border: 1px solid #fcd34d;
        }
    </style>
</head>

<body>
<div class="login-box">
    <div class="header">LOGIN SIAKAD</div>
    <div class="content">
        <div class="logo">
            <h1>SIAKAD</h1>
            <p>Sistem Informasi Akademik</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
                <div class="error">Email atau Password salah</div>
            @endif
            <input type="email" name="email" placeholder="Masukkan Email" required>
            <input type="password" name="password" placeholder="Masukkan Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
</body>
</html>