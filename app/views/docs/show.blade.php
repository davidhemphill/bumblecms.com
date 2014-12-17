@extends('layouts.master')

@section('content')
    <main class="main-area">
        @include ('docs.partials.sidebar')

        <section class="main-content pa">
            @markdown($page)
        </section>
    </main>
@stop
