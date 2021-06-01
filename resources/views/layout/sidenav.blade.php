<nav class="side-nav">
  <a href="{{ url('/') }}" class="intro-x flex items-center pl-5 pt-4">
      <img alt="Cara Tailwind HTML Admin Template" class="w-8" src="{{ asset('assets/images/cara-01.png') }}">
      <span class="hidden xl:block text-white text-lg ml-3"> Cara <span class="font-medium">Recruitment</span>
      </span>
  </a>
  <div class="side-nav__devider my-6"></div>

    @foreach(App\Models\Menu::get() as $menuItem)
    @if( ! $menuItem->submenu->isEmpty() )
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ $menuItem->menu_name }}
        </a>
    @else
        <li>
        <a href="{{ $menuItem->url }}">{{ $menuItem->menu_name }}</a>
    @endif

    @if( ! $menuItem->submenu->isEmpty())
        <ul class="dropdown-menu" role="menu">
            @foreach($menuItem->submenu as $subMenuItem)
                <li><a href="{{ $subMenuItem->link }}">{{ $subMenuItem->submenu_name }}</a></li>
            @endforeach
        </ul>
    @endif
    </li>
    @endforeach



  {{-- <ul>
      @foreach ($menu as $_menu)
      <li>
          <a href="{{ route($_menu->route) }}" id={{ $_menu->id }} class="side-menu ">
              <div class="side-menu__icon"> <i data-feather={{ $_menu->icon_name }}></i> </div>
              <div class="side-menu__title"> {{ $_menu->menu_name }} </div>
          </a>
      </li>
      @endforeach

      <li class="side-nav__devider my-6"></li>
  </ul> --}}
</nav>
<script>
  $(document).ready(function () {
      var active = document.getElementById({{ $current_menu }});
      active.classList.add("side-menu--active");
  });
</script>