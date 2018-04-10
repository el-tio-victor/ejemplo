<div class='transition-xx delay-xx cp'>
    
    <form id='form' class='form' action="send" method="POST">
        <p class='text-right form-group f-75'>
            <span class=" c-o f2">*</span>
            <span class="" style="vertical-align:1rem">
                todos los campos son obligatorios
            </span> 
        </p>
        <input type="hidden" name='_token' value="<?= csrf_token(); ?>">
        <div class="form-group m-auto d-flex " >
            <label class='' for="name">Nombre</label>
            <span class='c-o f1-25' style="vertical-align:1rem">*</span>
            <input class='form-control onfocus' data-input="name" type="text" name="name" placeholder="Tu nombre">
        </div>
        <div class="form-group m-auto d-flex " >
            <label class='' for="mail">Correo</label>
            <span class='c-o f1-25' style="vertical-align:1rem">*</span>
            <input class='form-control onfocus' data-input="correo" type="text" name="mail" placeholder="ejemplo@correo.com">
        </div>
        <div class="form-group m-auto d-flex " >
            <label class='' for="msg">Mensaje:</label>
            <span class='c-o f1-25' style="vertical-align:1rem">*</span>
            <textarea class='form-control onfocus' data-input="msg"  name="msg" value=" " placeholder="">
            </textarea>
        </div>
        <div class='form-group m-auto  transition-x'>
            <span id='btn-msg'  class='transition submit c-o'>Enviar  <i class="icon-arrow-right"> </i></span>
            <div id='alert-msg' class="p-2 bg-o m-3">
                <i class='icon-point-up f1-5 '></i>
                <span class="">Complete todos los campos con datos validos para enviar mensaje</span>
                
            </div>
        </div>
    </form>
</div>

