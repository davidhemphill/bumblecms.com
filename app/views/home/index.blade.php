@extends('layouts.master')

@section('content')
    <section class="hero">
            <div class="banner wrap hero__wrap">
                <div class="pv">
                    @foreach ($banners as $banner)
                        <h2 class="banner__title">{{{ $banner->title }}}</h2>
                        <p class="banner__subtitle">{{{ $banner->content }}}</p>
                    @endforeach
                </div>

                <img src="{{ asset('img/bumble5.png') }}" alt="Screenshot of Bumble"/>
            </div>
        </section>

        <section class="features pv">
            <div class="g-row g-row--lg features__wrap wrap">
                <section class="g-col-1  feature">
                    <h3 class="h4 white">{{{ $homepage->feature_1_title }}}</h3>
                    <div class="basic white">
                        @markdown($homepage->feature_1_content)
                    </div>
                </section>
                <section class="g-col-1 feature">
                    <h3 class="h4 white">{{{ $homepage->feature_2_title }}}</h3>
                    <div class="basic white">
                        @markdown($homepage->feature_2_content)
                    </div>
                </section>
                <section class="g-col-1 feature">
                    <h3 class="h4 white">{{{ $homepage->feature_3_title }}}</h3>
                    <div class="basic white">
                        @markdown($homepage->feature_3_content)
                    </div>
                </section>
                <section class="g-col-1 feature">
                    <h3 class="h4 white">{{{ $homepage->feature_4_title }}}</h3>
                    <div class="basic white">
                        @markdown($homepage->feature_4_content)
                    </div>
                </section>
            </div>
        </section>

        <section class="signup-form pb">
            <div class="pv">
                <h2 class="tac h5 white">Get on the Bumble Beta list</h2>
            </div>

            {{ Form::open([
                'method' => 'post',
                'id' => 'signup',
                'route' => 'home.store',
                'class' => 'form',
            ]) }}
            <form class="signup">
                <input type="text" name="email" class="input _email-input" placeholder="Enter your email"/>
                <button class="btn">Sign Up</button>
            </form>

            <div id="message" class="message-box">
                <p id="message-text"></p>
            </div>
        </section>
@stop
