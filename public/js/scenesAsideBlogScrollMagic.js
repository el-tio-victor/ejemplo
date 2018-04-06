

if ($(window).width() > 768) {
    var c = new ScrollMagic.Controller()
    var pinAsideScene = new ScrollMagic.Scene({
        triggerElement: 'main',
        triggerHook: 0
    })
        .setPin('.aside-blog-wrapper', { pushFollowers: false })
        .addTo(c)
}