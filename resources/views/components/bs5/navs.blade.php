<ul class="nav {{ $type == 'h' ? 'flex-column' : '' }}">
  @foreach($menu as $m)
  <li class="nav-item">
    <a class="nav-link @isset($m['active']) active @endisset @isset($m['disable']) disabled @endisset" @isset($m['disable']) tabindex="-1" aria-disabled="true" @endisset href="{{ $m['link'] }}">{{ $m['text'] }}</a>
  </li>
  @endforeach
</ul>