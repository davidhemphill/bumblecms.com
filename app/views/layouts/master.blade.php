<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>{{{ Config::get('bumble::site-title') }}} - CMS for the PHP Framework Laravel</title>

<link rel="stylesheet" href="{{ asset('css/marketing.css') }}"/>
<link rel="stylesheet" href="{{ asset('packages/prettify/prettify.css') }}"/>
</head>
<body>
    <header class="main-header">
        <div class="wrap main-header__wrap">
            <h1 class="logo">
                <a href="{{ route('home.index') }}" class="logo__link fwbold">{{{ Config::get('bumble::site-title') }}}</a>
            </h1>

            <nav class="main-nav">
                <ul class="main-nav__items">
                    {{--<li class="main-nav__item">--}}
                        {{--<a class="main-nav__link" href="">Home</a>--}}
                    {{--</li>--}}
                    <li class="main-nav__item">
                        <a class="main-nav__link" href="{{ url('docs') }}">Beta Documentation</a>
                    </li>
                    {{--<li class="main-nav__item">--}}
                        {{--<a class="main-nav__link" href="">Blog</a>--}}
                    {{--</li>--}}
                    {{--<li class="main-nav__item">
                        <a class="main-nav__link" href="">Donate</a>
                    </li>--}}
                    {{--<li class="main-nav__item">--}}
                        {{--<a class="main-nav__link" href="">Contact</a>--}}
                    {{--</li>--}}
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="main-footer pv6">
        <div class="wrap">
            <p class="copyright">&copy; {{ date('Y') }} Monarkee. All rights reserved. <br class="xmd xlg">Built with Bumble.</p>
        </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('packages/prettify/prettify.js') }}"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <script type="text/javascript" src="{{ asset('js/bumblemarketing.js') }}"></script>
</body>
</html>
