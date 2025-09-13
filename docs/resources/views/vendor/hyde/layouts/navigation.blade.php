@php
    $navigation = \Hyde\Framework\Features\Navigation\NavigationMenu::create();
@endphp

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="./index.html">Bootstrap</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    @foreach($navigation->items as $item)
                        @if($item instanceof \Hyde\Framework\Features\Navigation\DropdownNavItem)
                            NYI!
                        @endif

                        <li class="">
                            <a href="{{ $item->destination }}">{{ $item->label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
