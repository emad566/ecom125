<!DOCTYPE html>
<html lang="{{$local}}" dir="{{ $local=='ar'? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/png" href="{{asset('user/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/jquery.nice-number.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/jquery.calendar.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/add_row_custon.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/mobile_menu.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/jquery.exzoom.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/multiple-image-video.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/ranger_style.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/jquery.classycountdown.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/venobox.min.css')}}">

    <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/assets/css/responsive.css')}}">

    @if($local=='ar')
        <link rel="stylesheet" href="{{asset('user/assets/css/rtl.css')}}">
    @endif
</head>

<body>
