@extends('template.main')

@section('header')
    @component('home.partials.header')
    
            <h1>Inicio</h1>
        

    @endcomponent
@endsection

@section('content')
    <section class="container-fluid p-3 sc-trigger  no-templates">
        <h2 class=' sc-anim transition-x'><span class="c-o">Cero</span> Templates</h2>
        <div class="container d-flex flex-column align-items-center
          justify-content-center sc-trigger transition-x delay-xx wrapper">
            <h3 class='f2 text-center sc-anim transition-x  '>La web sin plantillas tan única<br> como tu.</h3>
            <div class="d-flex flex-column sc-trigger align-items-center flex-md-row 
            border-bottom no-templates-images">
                <img class="sc-anim transition-x delay-x "  src="{{asset('images/page/w-f.svg')}}" alt="wireframe-gomez-site">
                <img  class="sc-anim transition-x delay-xx  " src="{{asset('images/page/w-f.svg')}}" alt="wireframe-gomez-site">
            </div>
            <div class="border row-1"></div>
            <p class='md-col-6 m-3'>Porque las cosas bien hechas no se hacen en 10 minutos.</p>
        </div>
    </section>

    <section class="container-fluid  p-3  recent-works sc-trigger">
        <h2 class="sc-anim transition-x">
            <span class="c-o bolder">¿</span>
             Pero que has hecho
            <span class="c-o bolder">?</span>
        </h2>
        <div class="container sc-anim transition-x delay-xx  wrapper">
            <p>Nada del otro mundo pero es mejor que nada y por algo se empiesa. Aqui un poco</p>
            @include('home.index.partials.contentWorks')
        </div>
    </section>

    <section class="container-fluid  p-3 sc-trigger recent-articles">
        <h2 class="sc-anim transition-x ">
            Ultimos Posts en el
            <span class="c-o">
                blog
            </span>
        </h2>
        <div class="container wrapper">
            @include('home.index.partials.contentArticles')
        </div>
    </section>
    <section class="container-fluid wrapper d-flex align-items-center justify-content-center 
         p-3 contact">
        
        <div class=''>
            <h2 class='c-w'> Un poco sobre mi...</h2>
            <div class="container d-md-flex flex-nowrap  border ">
                <div class='col-md-4 d-flex align-items-center justify-content-center  ' >
                    <img src="{{asset('images/page/isotipo-gomez-site.svg')}}" alt="gomez-site logo">
                </div>
                <div class='col-md-4 '>
                    <div>
                        <h3 class=''>
                            Víctor Gómez
                        </h3>
                        <p>
                                Egresado de la carrera de TIC de la Universidad Tecnológica de Puebla
                                Apasionado por el desarollo web y su impacto visual.
                        </p>
                    </div>
                </div>
                <div class='col-md-4 d-flex justify-content-center align-items-center '>
                    <div>
                        <p><i class='icon-envelop c-o'> </i>hola@gomez-site.mx</p>
                        <p><i class='icon-phone c-o'> </i>(222) 698 233</p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
    <div class='contact-form '>
        <p>Si lo prefieres envia un mensaje...</p>
         @include('home.index.mail.formMail')
    </div>

@endsection

@section('js')
    <script src=" {{asset('js/scenesHeaderScrollMagic.js')}} "></script>
    <script src=" {{asset('js/scenesIndexScrollMagic.js')}} ">
    </script>
    <script>
        var keyName=false
        var keyMail=false
        var keyMsg=false
        var el = $('.onfocus')
        
        var interval_time=0
        /*Evento click en botn de formulario contacto*/
        $('#btn-msg').click(function(e){
            e.preventDefault();
            var data= $('.form').serialize()
            var url=$('.form').attr('action')
            $.post(url,data,function(result){
                $('.form input').val('');
                $('.form textarea').val('');
                alert_msg( true,'Mensaje enviado en breve recibiras respuesta ',true);
            }).fail(function(respuesta){
                console.log(respuesta)
                alert_msg( true,'Ocurrió un error intentalo mas tarde o verifica tus datos',false);
            })
        })
        
        $('.onfocus').focus(function(){
            var focus_enter= true
            var el = $(this)
            var lenght=($(this).data('input') == 'name') ? 5 : 10
            var key=($(this).data('input') == 'name') ? 'name' : 'msg'
            var sibling = $(this).siblings('span')
             console.log($(this).data('input'))
            if($(this).data('input') == 'correo'){
                console.log('pinchaste correo')
                clearInterval(interval_time)
                interval_time=setInterval(function(){
                    validateMail(el,sibling)
                },2000)
            }
            else{
                if(focus_enter){
                    clearInterval(interval_time)
                    interval_time=setInterval(function(){
                        v_time(el,sibling,5,key)
                    },2000)
                }
            }
            
        })
    /*Funcion de validacion correo en formulario de contacto*/
        function validateMail(el,sibling){
            emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
                    console.log(el)
                    if (emailRegex.test(el[0].value.trim())) {
                        sibling[0].style.color='green'
                        keyMail = true
                        focus_enter=false
                        if(keyName & keyMail & keyMsg)
                            validated()
                    }
                    else{
                        
                    }
        }

        function v_time( el,sibling,length,key ){
            console.log(interval_time+' time')
            if( ( el[0].value.trim().length > length  ) ){
                sibling[0].style.color='green';
                (key == 'name') ? keyName=true : keyMsg =true
                clearInterval(interval_time)

                if(keyName & keyMail & keyMsg)
                    validated()
            }
        }
        function validated(){
            $('#btn-msg').css('margin-left','1rem')
            $('#alert-msg').css('opacity','0')
        }

        function alert_msg(show , msg ,ok){
            if(show){
                $('#alert-msg').css({
                    'opacity':'1',
                    'background-color':'#498547'
                })
                $('#btn-msg').css('margin-left','-10rem')
            }
            if(ok){
                $('#alert-msg i').toggleClass('icon-point-up').toggleClass('icon-happy')
                setTimeout(function(){
                    $('#alert-msg i').parents('div.show-form').toggleClass('show-form')
                }, 5000);
            }
            else{
                $('#alert-msg i').toggleClass('icon-point-up').toggleClass('icon-sad')
            }
            $('#alert-msg span').html(msg)

                
        }


        
    </script>
@endsection

@section('footer')
    @include('template.partials.footer')
@endsection