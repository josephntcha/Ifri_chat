@extends('layout.master')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop offset-2">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content">
                <div class="container">
                   
                    <select id="selectPromotion" name="promotion">
                        <!-- Remplacez cela par la boucle qui affiche vos promotions -->
                        <option value="toute promotion">toute promotion</option>
                        <option value="2015-2016">2015-2016</option>
                        <option value="2016-2017">2016-2017</option>
                        <option value="2017-2018">2017-2018</option>
                    </select>

                    <select id="selectFiliere" name="filiere">

                        <!-- Options seront ajoutées dynamiquement par JavaScript -->

                        <option value="GL">GL</option>
                        <option value="SI">SI</option>
                        <option value="IM">IM</option>
                    </select>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex">
                                    <h2 class="text-center" id="test">Gestion des étudiants</h2>
                                    <h2 class=" offset-1">Effectif: <span class="text-success" id="effectif"></span></h2>
                                </div>
                                <div class="card-body">

                                    <div class="col-md-6 col-sm-12" style="margin-top: -15px">
                                        {{-- <button class="demo py-md-3  py-2 mt-md-2   px-4" >
                                            Demander une démo
                                        </button> --}}
                                        <button class="btn btn-success btn-sm" title="Add New Student" data-toggle="modal"
                                            data-target="#m_modal_4">
                                             <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                        </button>
                                        <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouvel elève</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-lg-12 mt-1">
                                                            <div class="msg-return"
                                                                style="color: green; text-align: center;"></div>
                                                        </div>
                                                        <form class="create-client-form" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                            class="form-control-label">nom & prénom</label>
                                                                        <input type="text" class="form-control"
                                                                            id="recipient-POSTE" name="name" autofocus>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                            class="form-control-label">Email:</label>
                                                                        <input type="text" class="form-control"
                                                                        id="email" name="email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                            class="form-control-label">Password</label>
                                                                        <input type="password" class="form-control"
                                                                        id="password" name="password">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                            class="form-control-label">Confirm password </label>
                                                                            <input type="password" class="form-control" value="" name="password_confirmation" id="password_confirmation">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <button type="button" class="btn p-2 text-white"
                                                                data-dismiss="modal"
                                                                style="border-radius: 5px;background: #161E45;">Close</button>
                                                            <button type="submit" class="btn  p-2 text-white"
                                                                style="border-radius: 5px;background: #2BC48A;"> <i class="fa fa-plus" aria-hidden="true"></i> Ajouter</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br />
                                    <br />
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Promotion</th>
                                                    <th>Matricule</th>
                                                    <th>Email</th>
                                                    <th>Désactivé</th>
                                                </tr>
                                            </thead>
                                            <tbody id="usersContainer">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_jquey')
    <!-- Inclure jQuery -->

    <script>
        $(document).ready(function() {


            $("#selectPromotion").on("change", function() {
                // const option = $("#promotion :selected");
                const promotion = $("#selectPromotion").val();
                var url = "{{ route('get-etu-promotion', ['promotion' => ':promotion']) }}";
                url = url.replace(':promotion', promotion);
                $.ajax({
                    url: url,
                    type: 'GET',
                    //data: { promotion_id: promotion},
                    dataType: 'json', // Spécifiez le type de données attendu
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(users) {
                        //console.log(users);
                        var usersContainer = $('#usersContainer');
                        usersContainer.empty();
                        var effectif = $('#effectif');
                        effectif.empty();
                        effectif.append('<span>' + users.length + '</span>');
                        $.each(users, function(index, user) {
                            usersContainer.append('<tr>' +
                                '<td>' + user.name + '</td>' +
                                '<td>' + user.promotion+ '</td>' +
                                '<td>' + user.matricule + '</td>' +
                                '<td>' + user.email + '</td>' +
                                '</tr>');
                        });

                    },
                    error: function(xhr, status, error) {
                        // Gestion des erreurs
                        console.error(xhr.responseText);
                    }
                });

            });


            $('#selectFiliere').on('change', function() {
                var selectedPromotion = $('#selectPromotion').val();
                var selectedFiliere = $('#selectFiliere').val();

                // Exécutez la requête Ajax avec la promotion et la filière sélectionnées
                $.ajax({
                    url: "/get-etu-promotion-filiere/" + selectedPromotion + "/" + selectedFiliere,
                    method: 'GET',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(users) {

                    
                        var usersContainer = $('#usersContainer');
                        usersContainer.empty();
                        var effectif = $('#effectif');
                        effectif.empty();
                        effectif.append('<span>' + users.length + '</span>');
                        $.each(users, function(index, user) {
                            usersContainer.append('<tr>' +
                                '<td>' + user.name + '</td>' +
                                '<td>' + user.promotion+ '</td>' +
                                '<td>' + user.matricule + '</td>' +
                                '<td>' + user.email + '</td>' +
                                '</tr>');
                        });

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });


            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $('.create-client-form').submit(function( event ) {
                event.preventDefault();
                var formData = new FormData(this);
                var url = "{{ route('ajout_etudiant') }}";
                $.ajax({
                    url: url,
                    type: 'post',
                    data: formData, // Remember that you need to have your csrf token included
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function( _response ){
                    alert("Ajouter avec succès");
                    },
                    error: function( _response ){
                        
                    }
                });
            });
        });       
    </script>
@endsection
