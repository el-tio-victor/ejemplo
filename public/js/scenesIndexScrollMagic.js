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

           
        
        