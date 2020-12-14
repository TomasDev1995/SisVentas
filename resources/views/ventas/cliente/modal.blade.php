<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$per->idpersona}}">
    {{Form::open(array('action'=>array('App\Http\Controllers\ClienteController@destroy', $per->idpersona), 'method'=>'delete'))}}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar Cliente</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Confirme si desea eliminar el cliente</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn -btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    {{Form::close()}}
</div>
