<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>personalorg — ทดสอบ PHP</title>
    <style>
        :root {
            color-scheme: light dark;
            --bg: #0f1419;
            --fg: #e7ecf1;
            --accent: #3d9ee6;
            --muted: #8b9aab;
        }
        @media (prefers-color-scheme: light) {
            :root {
                --bg: #f4f6f8;
                --fg: #1a2332;
                --accent: #1565c0;
                --muted: #5c6b7a;
            }
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: system-ui, "Segoe UI", sans-serif;
            background: var(--bg);
            color: var(--fg);
            display: grid;
            place-items: center;
            padding: 1.5rem;
        }
        main {
            max-width: 28rem;
            text-align: center;
        }
        h1 {
            font-size: 1.35rem;
            font-weight: 600;
            margin: 0 0 0.5rem;
        }
        p { margin: 0.35rem 0; color: var(--muted); font-size: 0.95rem; }
        .ok {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.35rem 0.75rem;
            border-radius: 999px;
            background: color-mix(in srgb, var(--accent) 18%, transparent);
            color: var(--accent);
            font-size: 0.85rem;
            font-weight: 500;
        }
        code { font-size: 0.9em; }
    </style>
</head>
<body>
    <main>
        <h1>สวัสดี — PHP ทำงานแล้ว</h1>
        <p>โปรเจกต์ <strong>personalorg</strong></p>
        <p>เวอร์ชัน PHP: <code><?= htmlspecialchars(PHP_VERSION, ENT_QUOTES, 'UTF-8') ?></code></p>
        <p>เวลาเซิร์ฟเวอร์: <code><?= htmlspecialchars(date('Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8') ?></code></p>
        <span class="ok">พร้อมพัฒนาต่อได้</span>
    </main>
</body>
</html>
