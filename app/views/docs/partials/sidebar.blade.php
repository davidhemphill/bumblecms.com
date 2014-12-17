<aside class="main-sidebar">
    <nav class="doc-pages">
        <ul class="doc-links">
            @foreach($pageLinks as $page)
                <li class="doc-links__item">
                    <a class="doc-links__link" href="/docs/{{ $page->slug }}">{{ $page->title }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
