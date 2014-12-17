@extends('layouts.master')

@section('content')
    <section class="hero">
            <div class="banner wrap hero__wrap">
                <div class="pv">
                    @foreach ($banners as $banner)
                        <h2 class="banner__title ft7 lg-ft9 mb1 md-mb1">{{{ $banner->title }}}</h2>
                        <p class="banner__subtitle ft2 lg-ft4">{{{ $banner->content }}}</p>
                    @endforeach
                </div>

                <div class="tac mb2">
                    <a href="http://github.com/monarkee/bumble" class="hero__btn dib tcw uppercase ls2 fwbold">Download Bumble Beta</a>
                </div>

                <p class="hero__install tac mb3 md-mb6"><code>"monarkee/bumble": "dev-master"</code></p>

                <img src="{{ asset('img/bumble5.png') }}" alt="Screenshot of Bumble"/>
            </div>
        </section>

        <section class="features pv">
            <div class="g-row g-row--lg features__wrap wrap">
                <section class="g-col-1 feature mr5 only-sm-mb3">
                    <h3 class="h4 tcw mb2">{{{ $homepage->feature_1_title }}}</h3>
                    <div class="basic tcw">
                        @markdown($homepage->feature_1_content)
                    </div>
                </section>
                <section class="g-col-1 feature mr5 only-sm-mb3">
                    <h3 class="h4 tcw mb2">{{{ $homepage->feature_2_title }}}</h3>
                    <div class="basic tcw">
                        @markdown($homepage->feature_2_content)
                    </div>
                </section>
                <section class="g-col-1 feature mr5 only-sm-mb3">
                    <h3 class="h4 tcw mb2">{{{ $homepage->feature_3_title }}}</h3>
                    <div class="basic tcw">
                        @markdown($homepage->feature_3_content)
                    </div>
                </section>
                <section class="g-col-1 feature only-sm-mb3">
                    <h3 class="h4 tcw mb2">{{{ $homepage->feature_4_title }}}</h3>
                    <div class="basic tcw">
                        @markdown($homepage->feature_4_content)
                    </div>
                </section>
            </div>
        </section>

        <section class="signup-form pb">
            <div class="wrap pv">
                <h2 class="tac h5 tcw pb3 md-pb6">Get on the Bumble Beta list</h2>

                {{ Form::open([
                    'method' => 'post',
                    'id' => 'signup',
                    'route' => 'home.store',
                    'class' => 'form',
                ]) }}
                    <input type="text" name="email" class="input _email-input" placeholder="Enter your email"/>
                    <button class="btn">Sign Up</button>
                {{ Form::close() }}

                <div id="message" class="message-box">
                    <p id="message-text"></p>
                </div>
            </div>
        </section>
@stop
