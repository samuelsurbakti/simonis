@unless ($breadcrumbs->isEmpty())
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-end">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    @if($breadcrumb->url != '')
                        <li class="breadcrumb-item">
                            <a class="breadcrumb__link text-muted text-decoration-none" href="{{ $breadcrumb->url }}"><i class="{{ $breadcrumb->icon }}"></i> {!! $breadcrumb->title !!}</a>
                        </li>
                    @else
                        <li class="breadcrumb-item">
                            <a class="breadcrumb__link text-muted text-decoration-none"><i class="{{ $breadcrumb->icon }}"></i> {!! $breadcrumb->title !!}</a>
                        </li>
                    @endif
                @else
                    <li class="breadcrumb-item active breadcrumb__link"><i class="{{ $breadcrumb->icon }}"></i> {!! $breadcrumb->title !!}</li>
                @endif
            @endforeach
        </ol>
    </nav>
@endunless
