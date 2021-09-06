@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <h3>Nuevo Ingreso</h3>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div>
    <div>
{!!Form::open(array('url'=>'compras/ingreso','method'=>'POST','autocomplete'=>'off'))!!}
{!!Form::token()!!}

    <div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="proveedor">Proveedor</label>
                <select name="idproveedor" id="idproveedor" class="form-control selectpicker" data-live-search="true">
                @foreach($personas as $persona)
                    <option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="tipoComprobante">Tipo comprobante</label>
                <select name="tipo_comprobante" class="form-control">
                    <option value="DNI">Boleta</option>
                    <option value="RUC">Factura</option>
                    <option value="PAS">Ticket</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="serie_comprobante">Serie comprobante</label>
                <input type="text" name="serie_comprobante" value="{{old('serie_comprobante')}}" class="form-control" placeholder="Serie de comprobante..">
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="numero_comprobante">Numero comprobante</label>
                <input type="text" name="num_comprobante" required value="{{old('num_comprobante')}}" class="form-control" placeholder="Numero de comprobante..">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label>Articulo</label>
                <select name="pidarticulo" class="form-control selectpicker" id="pidarticulo" data-live-search="true">
                @foreach($articulos as $articulo)
                    <option value="{{$articulo->idarticulo}}">{{$articulo->articulo}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label>Cantidad</label>
                <input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="Cantidad">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label>Precio compra</label>
                <input type="number" name="pprecio_compra" id="pprecio_compra" class="form-control" placeholder="P. compra">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label>Precio venta</label>
                <input type="number" name="pprecio_venta" id="pprecio_venta" class="form-control" placeholder="P. venta">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
            </div>
        </div>

        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                <thead style="background-color:#a9d0f5">
                    <th>Opciones</th>
                    <th>Articulo</th>
                    <th>Cantidad</th>
                    <th>Precio Compra</th>
                    <th>Precio venta</th>
                    <th>Subtotal</th>
                </thead>
                <tfoot>
                    <th>TOTAL</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><h4 id="total">S/. 0.00</h4></th>
                </tfoot>
                <tbody>

                </tbody>
            </table>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Eliminar</button>
            </div>
        </div>
    </div>



{!!Form::close()!!}
@endsection
