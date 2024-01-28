@extends('layout.master')


@section('content')
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
   <br><br>
    @if(session('success'))
    <div class="alert alert-success text-center h4">
        {{ session('success') }}
    </div>
   @endif
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <div class="m-grid__item m-grid__item--fluid m-wrapper">

                <div class="m-content">
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Envoyez un message à a promotion ----- <strong>{{ $promotion }}</strong> 
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1" action="{{ route('send_message_to_promotion',$promotion) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Entrez votre message</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <textarea name="markdown" class="form-control" data-provide="markdown" rows="10"></textarea>
                                        <span class="m-form__help">Enter some markdown content</span>
                                    </div>
                                </div>
                                <input class="form-control btn btn-control col-lg-8 col-md-9 col-sm-12 offset-4" type="file" name="fichier" id="file">
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions">
                                    <div class="row">
                                        <div class="col-lg-9 ml-lg-auto">
                                            <button type="submit" class="btn btn-success">Envoyer</button>
                                            <button type="reset" class="btn btn-secondary text-dark">Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

    <script src="../../../assets/demo/default/custom/crud/forms/validation/form-widgets.js" type="text/javascript"></script>

    <!--end::Page Scripts -->
</body>
@endsection
