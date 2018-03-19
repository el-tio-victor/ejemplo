$(document).ready(function(){
    
    var d_t=[3500,7000,5000,10500]
    /*$('.circle').each(function(i){
        $(this).velocity({
            cx: "+=111", cy: "+=811",r:35
        },{
            loop:true,
            duration:2500,
            delay: d_t[i],
            easing:'easeInSine'
        })
    })*/

    /*$('#iso-up')
        .delay(10)
        .velocity({ 
            //scale:1,
            translateX: "10px",
            translateY: "10px",
        },{
            loop: true,
            duration: 2500,
            
            easing: 'easeInSine'
        })
      

    $('#iso-down')
        .delay(600)
        .velocity({ 
            translateX: "5px",
            translateY: "-15px",
        },{
            loop: true,
            duration: 2500,

            easing: 'easeInSine'
        })*/
        

   /* $('#gomez-site').delay(1300).velocity({
        opacity:'1',
        scale:.8
        
    })*/
    var time_delay = 300;
    $('.letter-logo').each(function(index,element){
        console.log('el texto es ' + index)
        if(index == 0 ){
            $(this).delay( (10) ).velocity({
                opacity:'1',

            },{
                duration:1500 ,
                easing:'easeInSine'
            })
        }
        else{
            $(this).delay( (time_delay += 150) ).velocity({
                opacity:'1',
               // scale:1
            },{
                duration:1000 ,
                easing:'easeInSine'
            })
        }
        
    })
})