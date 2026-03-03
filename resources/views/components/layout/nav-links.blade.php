<ul class="space-y-2 xl:space-y-0 xl:flex xl:items-center">
  @foreach ($links as $link)
    <li>
      <a href="{{ route($link['href']) }}"
         class="block py-2 text-sm font-medium tracking-wide text-white/80 transition hover:text-white xl:ml-10">
        {{ $link['name'] }}
      </a>
    </li>
  @endforeach
</ul>