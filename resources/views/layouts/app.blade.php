<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD - @yield('title')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        header { background: #2563eb; color: white; padding: 20px 0; margin-bottom: 30px; }
        header h1 { text-align: center; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        .alert-success { background: #d1fae5; color: #065f46; border: 1px solid #6ee7b7; }
        .card { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .btn { display: inline-block; padding: 10px 20px; border-radius: 5px; text-decoration: none; cursor: pointer; border: none; font-size: 14px; }
        .btn-primary { background: #2563eb; color: white; }
        .btn-success { background: #16a34a; color: white; }
        .btn-warning { background: #eab308; color: white; }
        .btn-danger { background: #dc2626; color: white; }
        .btn:hover { opacity: 0.9; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 500; }
        .form-control { width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 5px; font-size: 14px; }
        .form-control:focus { outline: none; border-color: #2563eb; }
        .error { color: #dc2626; font-size: 12px; margin-top: 5px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background: #f9fafb; font-weight: 600; }
        .badge { display: inline-block; padding: 4px 12px; border-radius: 12px; font-size: 12px; font-weight: 500; }
        .badge-pending { background: #fef3c7; color: #92400e; }
        .badge-in_progress { background: #dbeafe; color: #1e40af; }
        .badge-completed { background: #d1fae5; color: #065f46; }
        .actions { display: flex; gap: 8px; }
        .mb-3 { margin-bottom: 20px; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Task Manager</h1>
        </div>
    </header>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
