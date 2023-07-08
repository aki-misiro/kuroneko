jQuery(function($) {
    // GlobalNav
    var mql = window.matchMedia("screen and (max-width: 993px)"),
        $tglBtn = $('.header-NavToggle'),
        $tglNav = $('.header-Nav_Inner');
    checkBreakPoint(mql);
    mql.addListener(checkBreakPoint);

    function checkBreakPoint(mql) {
        if (mql.matches) {
            $tglNav.attr('aria-hidden', 'true');
            $tglBtn.attr('aria-expanded', 'false');

            $tglBtn.on('click', function() {
                $('body').toggleClass('is-DrawerActive');
                var navStatus = $tglBtn.attr('aria-expanded');

                if (navStatus == 'false') {
                    $tglNav.attr('aria-hidden', 'false');
                    $tglBtn.attr('aria-expanded', 'true');
                } else {
                    $tglNav.attr('aria-hidden', 'true');
                    $tglBtn.attr('aria-expanded', 'false');

                }
            });
        } else {
            $tglNav.removeAttr('aria-hidden');
            $tglBtn.removeAttr('aria-expanded');
            $('body').removeClass('is-DrawerActive');
            $tglBtn.off('click');
        }
    }

});
