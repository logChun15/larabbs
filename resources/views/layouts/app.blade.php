<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<!-- 获取的是 config/app.php 中的 locale 选项，因为我们在前面章节中做了修改，所以此选
项的值应为 zh-CN 。 -->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token csrf-token 标签是为了方便前端的 JavaScript 脚本获取 CSRF 令牌。-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- route_class() 是我们自定义的辅助方法，我们还需要在 helpers.php 文件中添加此方法： -->
    <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>
    <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区')" />
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')
    <div class="container">

    @include('shared._messages')
    @yield('content')
    </div>

    @include('layouts._footer')
    </div>

    @if (app()->isLocal())
    @include('sudosu::user-selector')
    @endif

    <!-- Scripts -->
 <script src="{{ mix('js/app.js') }}"></script>
 @yield('scripts')
</body>

</html>
