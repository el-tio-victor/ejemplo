/**Script para establecer las escenas de plugin SCROLLMAGIC */
//init scroll magic

var controller = new ScrollMagic.Controller()

//pin scene header
var pinHeaderScene = new ScrollMagic.Scene({
    triggerElement: '.header',
    triggerHook: 0,
    duration: '44%'
})
.setPin('.header', { pushFollowers: false })
.addTo(controller)

//Nuevaescena para fijar header
var sc = new ScrollMagic.Scene({
    triggerElement: 'main',
    triggerHook: 0
})
.setClassToggle('.header', 'fixed')
.addTo(controller)

var sc_gs = new ScrollMagic.Scene({
    triggerElement: 'main',
    triggerHook: 0
})
.setClassToggle('#iso-gs', 'up')
.addTo(controller)