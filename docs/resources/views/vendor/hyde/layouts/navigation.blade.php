@php
    $navigation = \Hyde\Framework\Features\Navigation\NavigationMenu::create();

    // DEMO ONLY: not a shipped feature, just lets docs visitors preview the
    // bundled themes in-browser. See docs/_media/js/theme-switcher.js.
    // Grouped by origin, per CLAUDE.md: ports of official Bootswatch v2.3.2
    // themes (Apache-2.0, attributed in NOTICE) vs. themes original to this
    // fork (MIT).
    $demoThemeGroups = [
        'Bootswatch' => [
            'amelia' => 'Amelia', 'cerulean' => 'Cerulean', 'cosmo' => 'Cosmo',
            'cyborg' => 'Cyborg', 'flatly' => 'Flatly', 'journal' => 'Journal',
            'readable' => 'Readable', 'simplex' => 'Simplex', 'slate' => 'Slate',
            'spacelab' => 'Spacelab', 'spruce' => 'Spruce', 'superhero' => 'Superhero',
            'united' => 'United',
        ],
        'Custom' => [
            'aurora' => 'Aurora', 'candy' => 'Candy', 'midnight' => 'Midnight',
            'minimal' => 'Minimal', 'neon' => 'Neon', 'sunset' => 'Sunset',
            'vintage' => 'Vintage',
        ],
    ];
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
                <ul class="nav pull-right" id="theme-switcher">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Demo theme: <span class="theme-switcher-current">Default</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#" data-theme="" data-theme-label="Default">Default</a></li>
                            @foreach($demoThemeGroups as $group => $themes)
                                <li class="divider"></li>
                                <li class="dropdown-header">{{ $group }}</li>
                                @foreach($themes as $slug => $label)
                                    <li><a href="#" data-theme="{{ $slug }}" data-theme-label="{{ $label }}">{{ $label }}</a></li>
                                @endforeach
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
