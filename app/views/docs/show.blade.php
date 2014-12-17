@extends('layouts.master')

@section('content')
    <main class="main-area">
        @include ('docs.partials.sidebar')

            @markdown($page->content)
        <section class="main-content pa">
        </section>
    </main>
@stop
