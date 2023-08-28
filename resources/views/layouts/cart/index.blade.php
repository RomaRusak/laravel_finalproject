<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="/css/common/style.css">
    <link rel="stylesheet" href="/css/cart/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    
    <div class="container">
        @yield('content')
    </div>
    
    <script src="/js/cart/script.js"></script>
</body>
</html>