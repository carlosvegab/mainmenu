<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @forelse($menu as $m)
                    @if (isset($m['submenu']) && (count($m['submenu'])==0))
                        <li class="nav-item">
                            <a class="nav-link @if($m['active'] == true) active @endif" aria-current="page" href="{{$m['link']}}">{{$m['name']}}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link @if($m['active'] == true) active @endif dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{$m['name']}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @forelse($m['submenu'] as $submenu)
                                    <li><a class="dropdown-item" href="{{$submenu['link']}}">{{$submenu['name']}}</a></li>
                                @empty

                                @endforelse
                            </ul>
                        </li>
                    @endif
                @empty
                @endforelse
            </ul>
        </div>
    </div>
</nav>
