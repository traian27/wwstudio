<header class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-9">
                <a href="" class="logo">
                    <img src="public/storage/{{$logo['logo_h']->logo}}" alt="">
                </a>
            </div>
            <div class="col-lg-8 col-3">
                <ul class="header-nav" >
                    @foreach ($menu as $m)
                        @if(!isset($m['sub_menu']))
                            <li><a href="{{$m['menu_url']}}">{{$m['menu']}}</a></li>
                        @else
                            <li class="hasSubMenu">
                                <a href="{{$m['menu_url']}}">{{$m['menu']}}</a>
                                <div class="sub-menu">
                                    <ul>
                                        @foreach ($m['sub_menu'] as $s_m)
                                            <li><a href="{{ $s_m['menu_url'] }}">{{ $s_m['menu'] }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endif


                    @endforeach
                </ul>
                <div class="burger-btn">
                    <span class="icon-menu-square-button"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_menu">
        <div class="icon-cross"></div>
    </div>
</header>
