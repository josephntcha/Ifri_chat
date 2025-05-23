@extends('layout.master')
@section('content')
<div class="m-content">

    <!--begin::Portlet-->
    <div class="">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <div class="m-grid__item m-grid__item--fluid m-wrapper">

                <div class="m-content">
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Faire une publication
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <form class="m-form m-form--fit m-form--label-align-right" id="form_info" enctype="multipart/form-data">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                                <div class="form-group m-form__group row">
                                    <label class="col-form-label col-lg-3 col-sm-12">Entrez votre message</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <textarea name="markdown" class="form-control" data-provide="markdown" rows="10"></textarea>
                                        <span class="m-form__help"></span>
                                      
                                    </div>
                                </div>
                                <input class="form-control btn btn-control col-lg-8 col-md-9 col-sm-12 col-10 offset-1 offset-md-4" type="file" name="fichier" id="file">
                            </div>

                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions">
                                    <div class="row col-lg-9 ml-lg-auto">
                                      
                                            <button type="button" id="submit_info" class="col-4 col-md-2 text-white mr-3" style="border-radius:8px;background-color: var(--green);width: 100%!important;font-size: 20px"><span id="infoSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                                aria-hidden="true"></span>
                                                Envoyer
                                            </button>
                                            <button type="reset" class="btn btn-secondary text-dark">Supprimer</button>
                                     
                                    </div>
                                </div>
                            </div>
                            <a href="/admin" class="text-white p-3" style="font-size: 18px;margin-left:15px;background: #FFA446;border-radius:8px">Retour</a>

                        </form>
                     
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end::Portlet-->
</div>

@endsection

@section('script_jquey')
    <script>
        $(document).ready(function() {
            $('#submit_info').on('click', function() {
                $('#infoSpinner').removeClass('d-none');
                var formData = new FormData($('#form_info')[0]);
                $.ajax({
                    type: 'POST',
                    url: "/faire_publication",
                    data: formData,
                    processData: false, 
                     contentType: false,
                    success: function(response) {
                        $('#infoSpinner').addClass('d-none');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 6000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        });

                        Toast.fire({
                            icon: 'success',
                            title: response.message
                        });
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
@endsection