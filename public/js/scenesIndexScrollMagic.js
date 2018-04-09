var controller = new ScrollMagic.Controller()
        

        $('.sc-trigger').each(function(){
            var sc= new ScrollMagic.Scene({
                triggerElement : this,     
                reverse: false
            })
            .setClassToggle(this.children[0],'view')
            .addTo(controller)

             var sc2= new ScrollMagic.Scene({
                triggerElement : this,
                reverse: false
            })
            .setClassToggle(this.children[1],'view')
            .addTo(controller)

            })
        //Escena de formulario de contacto
    
        
        var scFormContact = new ScrollMagic.Scene({
            triggerElement : '.contact-form',
            triggerHook: .7,
            reverse : false
        })
        .setClassToggle('.contact-form > div', 'show-form')
        .addTo(controller)
           
        
        