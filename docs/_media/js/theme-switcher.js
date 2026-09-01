// NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
// IT'S ALL JUST JUNK FOR OUR DOCS!
// ++++++++++++++++++++++++++++++++++++++++++
//
// Demo-only theme switcher. Lets a docs visitor preview the themes bundled
// in scss/themes/ against the current page, entirely client-side. It is not
// part of the built framework and has no effect outside this docs site.

!function ($) {

  $(function () {

    var STORAGE_KEY = 'bsDocsDemoTheme'
      , $switcher = $('#theme-switcher')
      , $links = $switcher.find('a[data-theme]')
      , $current = $switcher.find('.theme-switcher-current')
      , $baseLink = $('#bs-theme-css')
      , $responsiveLink = $('#bs-theme-responsive-css')

    if (!$switcher.length || !$baseLink.length || !$responsiveLink.length) return

    // Remember the hrefs the page loaded with so "Default" can restore them.
    var defaultBaseHref = $baseLink.attr('href')
      , defaultResponsiveHref = $responsiveLink.attr('href')

    function selectTheme(theme) {
      var $link = $links.filter('[data-theme="' + theme + '"]')
      if (!$link.length) return

      if (theme) {
        $baseLink.attr('href', defaultBaseHref.replace('css/bootstrap.min.css', 'themes/' + theme + '.min.css'))
        $responsiveLink.attr('href', defaultResponsiveHref.replace('css/bootstrap-responsive.min.css', 'themes/' + theme + '-responsive.min.css'))
      } else {
        $baseLink.attr('href', defaultBaseHref)
        $responsiveLink.attr('href', defaultResponsiveHref)
      }

      $current.text($link.data('theme-label'))
      $links.parent('li').removeClass('active')
      $link.parent('li').addClass('active')
    }

    var saved = ''
    try {
      saved = window.localStorage && localStorage.getItem(STORAGE_KEY) || ''
    } catch (e) {
      // localStorage can throw in locked-down environments; just fall back to the default theme
    }

    if (saved && $links.filter('[data-theme="' + saved + '"]').length) {
      selectTheme(saved)
    }

    $links.on('click', function (e) {
      e.preventDefault()
      var theme = $(this).data('theme') || ''
      selectTheme(theme)
      try {
        window.localStorage && localStorage.setItem(STORAGE_KEY, theme)
      } catch (e) {
        // ignore, this is only a demo convenience
      }
    })
  })

}(window.jQuery)
