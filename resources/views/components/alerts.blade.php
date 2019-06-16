@if ($errors->any())
    <div id="message" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header danger-color white-text">
                    <h4 class="modal-title">Ups! algo ha salido mal</h4>
                </div>
                <div class="modal-body">
                    <p>El formulario posee los siguientes errores:</p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn danger-color white-text" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endif
@if(session()->has('message'))
    <div id="message" class="modal fade right" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-side modal-top-right" role="document">
            <div class="modal-content">
                <div class="modal-header success-color">
                    <h4 class="modal-title white-text">{{ session()->get('message.title') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ session()->get('message.body') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn success-color white-text" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
@endif