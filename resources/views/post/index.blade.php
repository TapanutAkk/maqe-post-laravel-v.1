@extends ('layout')

@section ('content')

<ul>
    @for ($i = $page['first']; $i <= $page['final']; $i++)
    <li>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ $posts[$i-1]['image_url'] }}" alt="{{ $posts[$i-1]['title'] }}">
                </div>
                <div class="col-8">
                <h3>{{ $posts[$i-1]['title'] }}</h3>
                <p>{{ $posts[$i-1]['body'] }}</p>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </li>
    @endfor
</ul>

<div class="row">
    <?php $count_page = ceil(count($posts)/8); ?>
    @for ($page = 1; $page <= $count_page; $page++)
        <a href="/page/{{ $page }}">{{ $page }}</a>
    @endfor
</div>

@endsection

