@extends('layouthead.header')
@section('content')

    <body
        class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <div class="m-grid m-grid--hor m-grid--root m-page">

            <div class="container-fluid">
                <div class="row mt-md-4">
                    <div class="m-portlet m-portlet--tab col-md-5" style="border-radius: 15px;margin-left:60px">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Mes informations
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right" id="form_info" enctype="multipart/form-data">
                            @csrf
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group m--margin-top-10">
                                    <div class="alert m-alert m-alert--default" role="alert">
                                        <textarea class="form-control" name="description"  cols="20" rows="5"
                                            placeholder="Biographie professionnelle"></textarea>
                                            <input type="hidden" id="value-id" value="{{ $user->id }}">
                                    </div>
                                </div>
                                <div class="form-group1 m-form__group">
                                    <label for="exampleInputEmail1">Etat de l'étudiant</label>
                                    <div></div>
                                    <select class="custom-select form-control" name="select_poste">
                                        <option value="Employé" selected>Employé</option>
                                        <option value="Stagiaire">Stagiaire</option>
                                        <option value="En formation">En formation</option>
                                        <option value="Sans emploi">Sans emploi</option>
                                        <option value="Entrepreneur">Entrepreneur</option>
                                    </select>
                                </div>
                                <div class="form-group m-form__group">
                                    <div></div>
                                    <div class="custom-file">
                                        <input type="file" name="fichier_cv" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Ajoutez votre CV</label>
                                    </div>

                                </div>
                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit offset-md-1">
                                <div class="m-form__actions">
                                    <button type="button" id="submit_info" class="btn btn-primary"><span id="infoSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                        Enregistrer</button>
                                    <button type="reset" class="btn btn-secondary text-dark">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="m-portlet m-portlet--tab col-md-5 offset-md-1" style="border-radius: 15px;">
                     
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h1 class="m-portlet__head-text">
                                        Informations concernant vos competences
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="m-form m-form--fit m-form--label-align-right" id="form_experience">
                            @csrf
                            <div class="m-portlet__body">

                                <div class="form-group1 m-form__group">
                                    <label for="exampleInputEmail1">Langage</label>
                                    <div></div>
                                    <select class="custom-select form-control" name="langage">
                                        <option value="PHP/Laravel" selected>PHP/Laravel</option>
                                        <option value="JavaScript">JavaScript</option>
                                        <option value="Python">Python</option>
                                        <option value="Java">Java</option>
                                    </select>
                                    <input type="hidden" id="value-experience-id" value="{{ $user->id }}">
                                </div>
                                <div class="form-group1 m-form__group">
                                    <input class="form-control" type="text" name="experience" id=""
                                        placeholder="entrez le nombre d'annéé d'expérience">
                                </div>
                                <div class="form-group1 m-form__group">
                                    <input class="form-control" type="text" name="entreprise" id=""
                                        placeholder="Nom de l'entreprise">
                                </div>
                                <div class="form-group1 m-form__group">
                                    <label for="exampleInputEmail1">Besoin d'un stage ou emploi</label>
                                    <div></div>
                                    <select class="custom-select form-control" name="besoin">
                                        <option value="oui" selected>oui</option>
                                        <option value="non">non</option>
                                    </select>
                                </div>

                            </div>
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="m-form__actions">
                                    <button type="button" id="submit-experience" class="btn btn-primary"><span id="experienceSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                        aria-hidden="true"></span>
                                        Enregistrer</button>
                                    <button type="reset" class="btn btn-secondary text-dark">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <a href="/index" class="bg-success text-white p-2 px-3" style="border-radius:15px">back</a>
            </div>




        </div>
    </body>
@endsection

@section('script_jquey')
    <script>
        $(document).ready(function() {
            $('#submit_info').on('click', function() {
                var id=$('#value-id').val();
                $('#infoSpinner').removeClass('d-none');
                var formData = new FormData($('#form_info')[0]);
                $.ajax({
                    type: 'POST',
                    url: "/information_personnelles/"+ id,
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


            $('#submit-experience').on('click', function() {
                var id=$('#value-experience-id').val();
                $('#experienceSpinner').removeClass('d-none');
                var formData = new FormData($('#form_experience')[0]);
                $.ajax({
                    type: 'POST',
                    url: "/experiences/"+ id,
                    data: formData,
                    processData: false, 
                     contentType: false,
                    success: function(response) {
                        $('#experienceSpinner').addClass('d-none');
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
