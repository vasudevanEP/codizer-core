@extends('layout-core')

@section('extra-css')
@endsection

@section('title', 'Productos')

@section('title-header', 'Productos')


@section('main-header-info-app')
    @include('partials.perfil-header-info')
@endsection


@section('main-header-options-app')

    @include('partials.perfil-link')

    <a href="#" class="core-menu-list"><div>{{ $empresa->nombre }}</div></a>

    <a href="#" class="core-menu-list menu-list-option menu-lis-img">
        <img src="{{ asset('/media/photo-store/'.$tienda->foto)}}">
        <div>{{$tienda->nombre}}</div>
    </a>

    <a href="#" class="core-menu-list"><div>Productos

                <span>{{count($products)}}</span>

        </div></a>

    <a href="#" class="core-menu-list"><div>Categorias <span>{{ count($categoriasList) }}</span></div></a>


@endsection


@section('article-content')

@section('extra-content')
    <div class="options-tools-list">

        <div class="left-content-list-tool">
            <div id="core-search-group" class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button id="core-search-group-btn" class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>

        <div class="right-content-list-tool">
            <div id="btn-group-to-product" class="btn-group left" role="group" aria-label="...">
                <button type="button" id="btn-new-product" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalNewProduct">Nuevo producto</button>
            </div>
            <div id="btn-group-to-product" class="btn-group right" role="group" aria-label="...">
                <button type="button" id="btn-edit-product" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modalUpdateProduct">Editar</button>
                <button type="button" id="btn-delete-product" class="btn btn-default btn-sm">Eliminar</button>
            </div>

        </div>
    </div>
@endsection

<div class="left-content-list">
    <table class="table table-hover">
        <tbody id="list-products">

        @foreach($products as $product)
            <tr class="data-product-tr" data-product="1">
                <td>
                    <img src="{{ asset('/media/photo-product/'. $product->img) }}">
                </td>
                <td>
                    <div class="list-product-title">{{$product->nombre}}</div>
                    <span class="list-product-tags">{{$product->tipo_oferta.$product->regla_porciento.'%' }}</span><br/>
                    <div class="list-product-pz">{{$product->cantidad_disponible}} pz</div>
                    <div class="list-product-price">{{'$'.$product->precio}}</div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

<div id="continaer-product-shows" class="right-content-list">
    <!-- <div id="msg-vacio">Ningún producto seleccionado</div> -->
    <div class="block-content-info-product">

        <div class="container-show-info-product-a">

            <!-- LOS ID EN SU MAYORIA SON PARA QUE IDENTIFIQUES A LOS ELEMENTOS CON JS Y PUEDAS MODIFICAR LA INFORMACIÓN -->

            <div id="show-info-product-marca">{{$tienda->nombre}}</div>
            <div id="show-info-product-title">Bolso de mano de piel rosado</div>

            <div class="container-show-info-product-img-b">
                <!-- USA UN FOR PARA IMPRIMIR LAS FOTOS DE CADA PRODUCTO -->
                <img id="principal-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-1" class="sub-image-product principal-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-2" class="sub-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-3" class="sub-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
                <img id="show-info-product-img-4" class="sub-image-product" src="{{ asset('/media/photo-product/bolso-rosa-chanel.png') }}">
            </div>

            <div class="container-show-info-product-list-c">
                <div>
                    <div>Precio</div>
                    <div id="show-info-product-price" class="show-info-product">$2100.00</div>
                </div>
                <div>
                    <div>Cantidad</div>
                    <div id="show-info-product-cantidad" class="show-info-product">300 pz</div>
                </div>
                <div>
                    <div>Me gusta</div>
                    <div id="show-info-product-me-gusta" class="show-info-product">603</div>
                </div>
                <div>
                    <div>Categorias</div>
                    <div id="show-info-product-categorias" class="show-info-product">
                        <!-- USA UN FOR PARA IMPRIMIR LAS CATEGORIAS A LAS QUE PERTENECE UN PRODUCTO -->
                        <span class="list-product-tags">Bolso</span>
                        <span class="list-product-tags">Piel</span>
                        <span class="list-product-tags">Cafe</span>
                        <span class="list-product-tags">Cafe</span>
                        <span class="list-product-tags">Chanel</span>
                    </div>
                </div>
            </div>

        </div>

        <div id="description-text-title">Descripción</div>
        <div id="show-info-product-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis, ante non molestie sagittis, felis turpis vulputate dui, et laoreet quam felis ut odio. Quisque ullamcorper consectetur dolor. Phasellus interdum consequat tortor quis egestas. Curabitur mattis urna a iaculis volutpat. Duis facilisis lorem vel viverra ultricies. Morbi semper venenatis neque, eget rhoncus enim. Morbi in malesuada sem.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis, ante non molestie sagittis, felis turpis vulputate dui, et laoreet quam felis ut odio. Quisque ullamcorper consectetur dolor. Phasellus interdum consequat tortor quis egestas. Curabitur mattis urna a iaculis volutpat. Duis facilisis lorem vel viverra ultricies. Morbi semper venenatis neque, eget rhoncus enim. Morbi in malesuada sem.</p>
        </div>

    </div>
</div>
@endsection

@section('modals')

   <!-- Aqui vas tus modals para los formularios -->
@include('partials.loader')
@include('admin.products.patials.modal-product')


@endsection

@section('extra-js')

    <!-- Aqui vas tus js para peticiones Ajax -->
    <script src="{{ asset('/js/codizer-validate.js') }}"></script>
    <script src="{{ asset('/js/core-products.js') }}"></script>

<script src="{{ asset('/js/tinyEditor/tiny.editor.js') }}"></script>
<script src="{{ asset('/js/tinyEditor/tiny.editor.packed.js') }}"></script>



<script>
    var editor = new TINY.editor.edit('editor', {
        id: 'tinyeditor',
        width: 564,
        height: 300,
        cssclass: 'tinyeditor',
        controlclass: 'tinyeditor-control',
        rowclass: 'tinyeditor-header',
        dividerclass: 'tinyeditor-divider',
        controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
            'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
            'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', 'n', 'undo', 'redo', '|',
            'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|', 'print'],
        footer: true,
        fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
        xhtml: true,
        cssfile: 'custom.css',
        bodyid: 'editor',
        footerclass: 'tinyeditor-footer',
        toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
        resize: {cssclass: 'resize'}
    });
</script>

<link type="text/css" rel="stylesheet" href="{{ asset('/css/tinyEditor/style.css') }}">

@endsection