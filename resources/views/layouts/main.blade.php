<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/js/app.js', 'vendor/courier/build')
</head>
<body>
    <header class="header">
        <div class="conteiner">
        <div class="header-logo">
            Smith Reality
        </div>
        <div class="header-menu">
            <a href="#" class="header__menu-link">Home</a>
            <a href="#" class="header__menu-link">Listing</a>
            <a href="#" class="header__menu-link">Property</a>
            <a href="#" class="header__menu-link">Pages</a>
        </div>
        <div class="header-account">
            <div class="header__account-link"><i class="fa-solid fa-heart"></i></div>
            <div class="header__account-link"><i class="fa-solid fa-user"></i></div>
        </div>
    </div>
    </header>
@yield('content')
</body>
</html>