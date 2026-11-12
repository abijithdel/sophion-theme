(function () {

    function init() {
        var icon = document.getElementById('nav-icon');
        var nav  = document.getElementById('mobile-nav');

        if (!icon || !nav) return;

        // Click hamburger icon → open / close nav
        icon.onclick = function (e) {
            e.stopPropagation();

            if (nav.style.display === 'block') {
                nav.style.display = 'none';
                icon.src = icon.getAttribute('data-open-src') || icon.src;
                icon.setAttribute('aria-expanded', 'false');
            } else {
                nav.style.display = 'block';
                icon.src = icon.getAttribute('data-close-src') || icon.src;
                icon.setAttribute('aria-expanded', 'true');
            }
        };

        // Click a nav link → close nav
        nav.onclick = function (e) {
            if (e.target && e.target.nodeName === 'A') {
                nav.style.display = 'none';
                icon.src = icon.getAttribute('data-open-src') || icon.src;
                icon.setAttribute('aria-expanded', 'false');
            }
        };

        // Click outside header → close nav
        document.onclick = function (e) {
            if (nav.style.display === 'block') {
                if (!icon.contains(e.target) && !nav.contains(e.target)) {
                    nav.style.display = 'none';
                    icon.src = icon.getAttribute('data-open-src') || icon.src;
                    icon.setAttribute('aria-expanded', 'false');
                }
            }
        };
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

}());
