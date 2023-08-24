@php
    $menus = App\Models\Menu::where('menustatus', 1)
        ->orderBy('menuindex')
        ->get();
@endphp
<!-- mainHolder -->
<div class="mainHolder pt-lg-5 pt-3 justify-content-center">
    <!-- pageNav2 -->
    <nav class="navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto text-uppercase d-inline-block">
                @foreach ($menus as $menu)
                    <li class="nav-item">
                        @if ($menu->name === 'home')
                            <a class="d-block" href="/">Home</a>
                        @else
                            <a class="d-block" href="{{ $menu->name }}">{{ $menu->name }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>
