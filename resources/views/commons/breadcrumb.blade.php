@isset($breadcrumbs)
<nav class="breadcrumb-nav" aria-label="パンくずリスト">
  <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
    @foreach($breadcrumbs as $crumb)
      <li class="breadcrumb-item {{ $loop->last ? 'breadcrumb-item--current' : '' }}"
          itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        @if(!$loop->last)
          <a class="breadcrumb-link" href="{{ $crumb['url'] }}" itemprop="item">
            <span itemprop="name">{{ $crumb['label'] }}</span>
          </a>
          <span class="breadcrumb-sep" aria-hidden="true">›</span>
        @else
          <span itemprop="name" aria-current="page">{{ $crumb['label'] }}</span>
        @endif
        <meta itemprop="position" content="{{ $loop->index + 1 }}" />
      </li>
    @endforeach
  </ol>
</nav>
@endisset
