<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Default title')</title>
    <link rel="stylesheet"  href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<header>
    <!--Header content-->
</header>

<main>
    @yield('content')
</main>
<footer>
    <!--Footer content-->
</footer>

<script src="{{asset('/js/bootstrap.js')}}"></script>
<script>
    var toast = document.getElementById('myToast');
    var toastInstance = new bootstrap.Toast(toast);
    toastInstance.show();
</script>

{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function () {--}}
{{--        var closeButton = document.querySelector('.btn-close');--}}
{{--        var toast = document.querySelector('.toast');--}}

{{--        closeButton.addEventListener('click', function () {--}}
{{--            toast.classList.add('d-none');--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
