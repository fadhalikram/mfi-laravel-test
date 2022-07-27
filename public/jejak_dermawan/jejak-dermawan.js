document.addEventListener('DOMContentLoaded', (event) => {
    callbackFunc();
})

function init() {
    reCalc();

    context.addEventListener('scroll', function() {
        window.requestAnimationFrame(scrollUpdate);
    }, false);

    window.addEventListener('resize', function() {
        window.requestAnimationFrame(reCalc);
    }, false);
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

var items = document.querySelectorAll(".timeline .timeline-content");

function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    var res = (
        rect.top >= -1 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    )
    return res;
}

function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
            if (!items[i].classList.contains("in-view")) {
                // console.log("TUR");
                items[i].classList.add("in-view");
            }
        } else if (items[i].classList.contains("in-view")) {
            items[i].classList.remove("in-view");
        }
    }
}

var doc = window.document,
    context = doc.querySelector('.js-loop'),
    clones = context.querySelectorAll('.is-clone'),
    disableScroll = false,
    scrollHeight = 0,
    scrollPos = 0,
    clonesHeight = 0,
    i = 0;

function getScrollPos() {
    return (context.pageYOffset || context.scrollTop) - (context.clientTop || 0);
}

function setScrollPos(pos) {
    context.scrollTop = pos;
}

function getClonesHeight() {
    clonesHeight = 0;

    for (i = 0; i < clones.length; i += 1) {
        clonesHeight = clonesHeight + clones[i].offsetHeight;
    }

    return clonesHeight;
}

function reCalc() {
    scrollPos = getScrollPos();

    scrollHeight = context.scrollHeight;
    clonesHeight = getClonesHeight();

    if (scrollPos <= 0) {
        setScrollPos(1);
    } else if (scrollPos <= 0) {
        // Scroll to the bottom when you reach the top
        setScrollPos(scrollHeight - clonesHeight);
        disableScroll = true;
    }
}

function scrollUpdate() {
    if (!disableScroll) {
        scrollPos = getScrollPos();
        callbackFunc(true);
        if (clonesHeight + scrollPos >= scrollHeight) {
            setScrollPos(1);
            disableScroll = true;
        }
    } else {
        console.log("false");
        window.setTimeout(function() {
            disableScroll = false;
            callbackFunc(false);
        }, 40);
    }
}

if (document.readyState !== 'loading') {
    init()
} else {
    doc.addEventListener('DOMContentLoaded', init, false)
}