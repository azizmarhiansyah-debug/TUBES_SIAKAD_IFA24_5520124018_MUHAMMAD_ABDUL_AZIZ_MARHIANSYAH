<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'SIAKAD') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            body {
                background-color: #f8fafc;
                color: #1e293b;
                font-family: 'Instrument Sans', sans-serif;
            }

            /* Nav links */
            .nav-link {
                display: inline-block;
                padding: 6px 20px;
                font-size: 14px;
                border-radius: 4px;
                border: 1px solid #cbd5e1;
                color: #1e293b;
                text-decoration: none;
                transition: all .2s;
            }
            .nav-link:hover {
                background: #1e293b;
                color: white;
                border-color: #1e293b;
            }

            /* Panel kiri */
            .panel-left {
                background: white;
                border: 1px solid #e2e8f0;
                border-radius: 0 0 8px 8px;
                padding: 40px 48px 48px;
                flex: 1;
            }
            @media (min-width: 64rem) {
                .panel-left {
                    border-radius: 8px 0 0 8px;
                    padding: 80px;
                }
            }

            /* Panel kanan */
            .panel-right {
                background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
                border-radius: 8px 8px 0 0;
                overflow: hidden;
                position: relative;
            }
            @media (min-width: 64rem) {
                .panel-right {
                    border-radius: 0 8px 8px 0;
                }
            }

            /* Typography panel kiri */
            .panel-left h1 {
                font-size: 15px;
                font-weight: 500;
                color: #1e293b;
                margin-bottom: 6px;
            }
            .panel-left p {
                font-size: 13px;
                color: #64748b;
                margin-bottom: 16px;
                line-height: 1.6;
            }

            /* List items */
            .step-item {
                display: flex;
                align-items: center;
                gap: 16px;
                padding: 8px 0;
                font-size: 13px;
                color: #1e293b;
            }
            .step-dot-wrap {
                position: relative;
                padding: 4px 0;
                background: white;
            }
            .step-dot {
                width: 14px;
                height: 14px;
                border-radius: 50%;
                background: white;
                border: 1px solid #e2e8f0;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 1px 2px rgba(0,0,0,0.06);
            }
            .step-dot-inner {