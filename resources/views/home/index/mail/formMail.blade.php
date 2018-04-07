<div>
<form id='form' class='form' action="send" method="POST">

    <input type="hidden" name='_token' value="<?= csrf_token(); ?>">
    <div class="form-group m-auto d-flex " >
        <label class='' for="name">Nombre</label>
        <input class='form-control' type="text" name="name" placeholder="Tu nombre">
    </div>
    <div class="form-group m-auto d-flex " >
        <label class='' for="mail">Correo</label>
        <input class='form-control' type="text" name="mail" placeholder="ejemplo@correo.com">
    </div>
    <div class="form-group m-auto d-flex " >
        <label class='' for="msg">Mensaje:</label>
        <textarea class='form-control'  name="msg" placeholder="Mensaje">
        </textarea>
    </div>
    <div class='form-group m-auto d-flex '>
        <span id='btn-msg'  class='transition submit c-o'>Enviar &nbsp; <i class="icon-arrow-right"> </i></span>
    </div>
</form>
</div>

