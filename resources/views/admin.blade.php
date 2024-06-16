@extends('layout.master')
@section('content')
    @if ($message = session('success'))
        @section('alert')
            <script type="text/javascript">
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
                })

                Toast.fire({
                    icon: 'success',
                    title: '{{ $message }}'
                })
            </script>
        @endsection
    @endif
    <div class="container offset-md-2">
        <div class="row justify-content-between">
            <button class="bg-primary btn btn-success btn-sm mt-md-3" style="margin-left: 8px" data-toggle="modal"
                data-target="#filiereModal">
                <i class="fa fa-plus" aria-hidden="true"></i> Ajouter une Filière
            </button>
            {{-- modal d'ajout de filiere --}}
            <!-- Modal -->
            <div class="modal fade" id="filiereModal" tabindex="-1" role="dialog" aria-labelledby="filiereModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="filiereModalLabel">Ajouter une nouvelle filière</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Your form goes here -->
                            <form id="filiereForm">
                                <!-- Form fields go here -->
                                @csrf
                                <div class="form-group">
                                    <label for="filiereName">Nom de la filière</label>
                                    <input type="text" class="form-control" id="filiereName" name="filiere">
                                </div>
                                <!-- Add other form fields as needed -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="button" id="submitFiliere" class="btn btn-primary"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Ajouter
                                <span id="filiereSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fin modal de filiere --}}
            <button class="btn btn-success btn-sm mt-md-3" title="Ajout d'une nouvelle promotion"
                data-toggle="modal"data-target="#promotionModal"> <i class="fa fa-plus" aria-hidden="true"></i> Ajouter une
                promotion</button>
            {{-- modal d'ajout de promotion --}}
            <div class="modal fade" id="promotionModal" tabindex="-1" role="dialog" aria-labelledby="promotionModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="promotionModalLabel">Ajouter une nouvelle promotion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Your form goes here -->
                            <form id="promotionForm">
                                <!-- Form fields go here -->
                                @csrf
                                <div class="form-group">
                                    <label for="promotionName">Année de la promotion</label>
                                    <input type="text" class="form-control" id="promotionName" name="promotion">
                                </div>
                                <!-- Add other form fields as needed -->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-success" id="submitPromotion"><i class="fa fa-plus"
                                    aria-hidden="true"></i> Ajouter
                                <span id="promotionSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fin du modal --}}
            <button class="bg-secondary text-black p-2 mt-md-3 btn" data-toggle="modal"data-target="#eleveModal"><i
                    class="flaticon-add-circular-button" aria-hidden="true"></i> Ajouter un alumnus</button>
            {{-- modal d'ajout d'un nouvel elève --}}
            <div class="modal fade" id="eleveModal" tabindex="-1" role="dialog" aria-labelledby="eleveModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-tpromotionFormitle" id="eleveModalLabel">Ajouter une nouvel alumnus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Your form goes here -->

                            <form id="alumniForm">
                                @csrf
                                <div class="form-group">
                                    <label for="nom">Nom de l'elève</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="matricule">Matricule</label>
                                    <input type="number" class="form-control" id="matricule" name="matricule" required>
                                </div>
                                <div class="form-group">
                                    <label for="promotion">Promotion</label>
                                    <select name="promotion" id="ajoutElevePromotion" class="form-control"
                                        style="width: 100%">
                                        <option value=""></option>
                                        @foreach ($promotions as $promotion)
                                            <option value="{{ $promotion->id }}">{{ $promotion->annee }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="filiere">Filière</label>
                                    <select name="filiere" id="ajoutEleveFiliere" class="form-control"
                                        style="width: 100%">
                                        <option value=""></option>
                                        @foreach ($filieres as $filiere)
                                            <option value="{{ $filiere->id }}">{{ $filiere->filiere }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Add other form fields as needed -->

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary" id="submitAlumni"><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                Ajouter</button>
                            <span id="alumniSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                aria-hidden="true"></span>
                        </div>

                    </div>
                </div>
            </div>
            {{-- fin modal --}}

            <button class="bg-light text-dark btn  mt-md-3" data-toggle="modal" data-target="#listefiliereModal"> Liste
                filière</button>
            {{-- modal pour liste des filieres --}}
            <div class="modal fade" id="listefiliereModal" tabindex="-1" role="dialog"
                aria-labelledby="listefiliereModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="listefiliereModalLabel">liste des filieres à IFRI</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                                <thead>
                                    <tr>
                                        <th>filiere</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($filieres as $filiere)
                                        <tr>
                                            <td>{{ $filiere->filiere }}</td>
                                            {{-- <td><a href=""><i class="flaticon-delete" style="color: red;"></i></a></td> --}}
                                            <td>
                                                <form method="POST" action="" accept-charset="UTF-8"
                                                    style="display:inline">
                                                    @method('DELETE')
                                                    @csrf

                                                    <button type="button" class="btn btn-sm" title="Delete Student"
                                                        onclick="confirmDelete({{ $filiere->id }})">
                                                        <i class="flaticon-delete" style="color: red;"></i>
                                                    </button>

                                                </form>
                                                <script type="text/javascript">
                                                    function deleteStudent(filiereId) {
                                                        $.ajax({
                                                            type: 'DELETE',
                                                            url: '/supprimer-filiere/' + filiereId,
                                                            data: {
                                                                _token: '{{ csrf_token() }}'
                                                            },
                                                            success: function(response) {
                                                                // $('.msg-return').text(response.message);
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
                                                                    title: response
                                                                        .message // Assure-toi que la réponse de ton serveur contient un champ "message"
                                                                });
                                                                $('#listefiliereModal').modal('hide');

                                                            },
                                                            error: function(xhr, status, error) {
                                                                // Traitez les erreurs ici
                                                                console.error(xhr.responseText);
                                                            }
                                                        });
                                                    }

                                                    function confirmDelete(filiereId) {

                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You won't be able to revert this!",
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then((result) => {
                                                            deleteStudent(filiereId);
                                                        });
                                                    }
                                                </script>
                                            </td>
                                            {{-- modifier une filiere --}}
                                            <td><button class="btn btn"
                                                    onclick="setFiliereId('{{ $filiere->id }}'), putFiliere('{{ $filiere->filiere }}')"
                                                    data-toggle="modal" data-target="#modifierModal"><i
                                                        class="flaticon-edit" style="color: green;"></i>
                                                </button>
                                            </td>
                                            {{-- modal pour modifier une filiere --}}
                                            <div class="modal fade" id="modifierModal" tabindex="-1" role="dialog"
                                                aria-labelledby="modifierModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modifierModalLabel">Modifier la
                                                                filière</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Your form goes here -->
                                                            <form id="modifierForm">
                                                                <!-- Form fields go here -->
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="modifierName">Nom de la filière</label>
                                                                    <input type="text" value=""
                                                                        class="form-control" name="filiere"
                                                                        id="put_filiere">
                                                                </div>
                                                                <!-- Add other form fields as needed -->
                                                            </form>
                                                        </div>
                                                        <script>
                                                            var filiereId;
                                                            var put_filiere;

                                                            function putFiliere(filiere) {
                                                                put_filiere = filiere
                                                                $("#put_filiere").val(put_filiere);

                                                            }

                                                            function setFiliereId(id) {

                                                                filiereId = id;
                                                            }

                                                            function modifierFiliere() {
                                                                // Récupérer l'ID de la filière
                                                                // var filiereId = $('#modifierFiliereId').val();
                                                                var id = filiereId;
                                                                $('#modifierSpinner').removeClass('d-none');

                                                                var formData = $('#modifierForm').serialize();


                                                                // Envoyer la requête Ajax
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: '/modifier-filiere/' + id,
                                                                    data: formData,

                                                                    success: function(response) {
                                                                        // Traitement du succès (par exemple, actualiser la page, fermer le modal, etc.)

                                                                        //$('.msg-return').text(response.message);
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
                                                                            title: response
                                                                                .message // Assure-toi que la réponse de ton serveur contient un champ "message"
                                                                        });
                                                                        $('#modifierModal').modal('hide');
                                                                    },
                                                                    error: function(xhr, status, error) {
                                                                        // Traitement des erreurs (affichage d'un message d'erreur, par exemple)
                                                                        console.error(xhr.responseText);
                                                                    },
                                                                    complete: function() {
                                                                        // Masquer le spinner après la requête
                                                                        $('#modifierSpinner').addClass('d-none');
                                                                    }
                                                                });

                                                            }
                                                        </script>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer</button>
                                                            <button type="submit" id="submitmodifier"
                                                                class="btn btn-primary" onclick="modifierFiliere()"><i
                                                                    class="fa fa-plus" aria-hidden="true"></i> Modifier
                                                                <span id="modifierSpinner"
                                                                    class="spinner-border spinner-border-sm d-none"
                                                                    role="status" aria-hidden="true"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- fin modal --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fin du modal de liste de filiere --}}
            <button class="bg-light text-dark btn  mt-md-3" data-toggle="modal" data-target="#listepromotionModal">liste
                Promotion</button>
            {{-- modale de liste listepromotion --}}
            <div class="modal fade" id="listepromotionModal" tabindex="-1" role="dialog"
                aria-labelledby="listepromotionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="listepromotionModalLabel">liste des promotions à IFRI</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                                <thead>
                                    <tr>
                                        <th>Promotion</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($promotions as $promotion)
                                        <tr>
                                            <td>{{ $promotion->annee }}</td>
                                            <td>
                                                <form method="POST" action="" accept-charset="UTF-8"
                                                    style="display:inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button" class="btn btn-sm" title="Delete Student"
                                                        onclick="confirmDeletePromotion({{ $promotion->id }})">
                                                        <i class="flaticon-delete" style="color: red;"></i>
                                                    </button>
                                                </form>
                                                <script type="text/javascript">
                                                    function deletePromotion(promotionId) {
                                                        $.ajax({
                                                            type: 'DELETE',
                                                            url: '/supprimer-promotion/' + promotionId,
                                                            data: {
                                                                _token: '{{ csrf_token() }}'
                                                            },
                                                            success: function(response) {
                                                                // $('.msg-return').text(response.message);
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
                                                                    title: response
                                                                        .message // Assure-toi que la réponse de ton serveur contient un champ "message"
                                                                });
                                                                $('#listepromotionModal').modal('hide');

                                                            },
                                                            error: function(xhr, status, error) {
                                                                // Traitez les erreurs ici
                                                                console.error(xhr.responseText);
                                                            }
                                                        });
                                                    }

                                                    function confirmDeletePromotion(promotionId) {

                                                        Swal.fire({
                                                            title: 'Are you sure?',
                                                            text: "You won't be able to revert this!",
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then((result) => {
                                                            deletePromotion(promotionId);
                                                        });
                                                    }
                                                </script>
                                            </td>
                                            <td><button class="btn btn"
                                                    onclick="setPromotionId('{{ $promotion->id }}'), putPromotion('{{ $promotion->annee }}')"
                                                    data-toggle="modal" data-target="#modifierPromoModal"><i
                                                        class="flaticon-edit" style="color: green;"></i>
                                                </button>
                                                {{-- modal pour modifier une promotion --}}
                                                <div class="modal fade" id="modifierPromoModal" tabindex="-1"
                                                    role="dialog" aria-labelledby="modifierModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modifierModalLabel">Modifier
                                                                    la
                                                                    promotion</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Your form goes here -->
                                                                <form id="modifierPromoForm">
                                                                    <!-- Form fields go here -->
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="modifierName">Nom de la
                                                                            promotion</label>
                                                                        <input type="text" value=""
                                                                            class="form-control" name="promotion"
                                                                            id="updatePromotion">
                                                                    </div>
                                                                    <!-- Add other form fields as needed -->
                                                                </form>
                                                            </div>

                                                            <script>
                                                                var promotion_annee;
                                                                var promotionId;

                                                                function putPromotion(promotion) {
                                                                    promotion_annee = promotion;
                                                                    $("#updatePromotion").val(promotion_annee);
                                                                }

                                                                function setPromotionId(id) {
                                                                    promotionId = id;
                                                                }

                                                                function modifierPromotion() {
                                                                    var id = promotionId;
                                                                    $('#modifierPromoSpinner').removeClass('d-none');

                                                                    var formData = $('#modifierPromoForm').serialize();


                                                                    // Envoyer la requête Ajax
                                                                    $.ajax({
                                                                        type: 'POST',
                                                                        url: '/modifier-promotion/' + id,
                                                                        data: formData,

                                                                        success: function(response) {
                                                                            // Traitement du succès (par exemple, actualiser la page, fermer le modal, etc.)

                                                                            // $('.msg-return').text(response.message);
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
                                                                                title: response
                                                                                    .message // Assure-toi que la réponse de ton serveur contient un champ "message"
                                                                            });
                                                                            $('#modifierPromoModal').modal('hide');
                                                                        },
                                                                        error: function(xhr, status, error) {
                                                                            // Traitement des erreurs (affichage d'un message d'erreur, par exemple)
                                                                            console.error(xhr.responseText);
                                                                        },
                                                                        complete: function() {
                                                                            // Masquer le spinner après la requête
                                                                            $('#modifierPromoSpinner').addClass('d-none');
                                                                        }
                                                                    });

                                                                }
                                                            </script>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fermer</button>
                                                                <button type="submit" id="submitmodifier"
                                                                    class="btn btn-primary"
                                                                    onclick="modifierPromotion()"><i class="fa fa-plus"
                                                                        aria-hidden="true"></i> Modifier
                                                                    <span id="modifierPromoSpinner"
                                                                        class="spinner-border spinner-border-sm d-none"
                                                                        role="status" aria-hidden="true"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- fin modal --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fin --}}
            <a href="/action" class="bg-light text-dark btn  mt-md-3"> Liste alumni</a>
        </div>
    </div>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force"
                            style="border-radius: 15px">
                            <div class="m-portlet__head m-portlet__head--fit-">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            Promotion

                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <select id="selectPromotion" name="promotion" class="px-3">

                                                <option value="toute promotion">toute promotion</option>
                                                @foreach ($promotions as $promotion)
                                                    <option value="{{ $promotion->annee }}">{{ $promotion->annee }}
                                                    </option>
                                                @endforeach

                                            </select>

                                        </li>
                                    </ul>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">

                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <select id="selectFiliere" name="filiere" class="px-4">
                                                <!-- Options seront ajoutées dynamiquement par JavaScript -->
                                                <option value="toute filiere">toute filiere</option>
                                                @foreach ($filieres as $filiere)
                                                    <option value="{{ $filiere->filiere }}">{{ $filiere->filiere }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget27 m-portlet-fit--sides">
                                    <div class="m-widget27__pic">
                                        <img src="asset/app/media/img//bg/bg-4.jpg" alt="">
                                        <h6 class="m-widget27__title m--font-light">
                                            <span>
                                                <span>Effectif
                                                    <span>
                                                        <span id="effectif">
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </h6>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--end:: Widgets/Blog-->
                    </div>
                    <div class="col-xl-4">

                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height   m-portlet--rounded-force"
                            style="border-radius: 15px">
                            <div class="m-portlet__head m-portlet__head--fit">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            Statistiques
                                        </h3>
                                    </div>
                                </div>

                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget28">
                                    <div class="m-widget28__pic m-portlet-fit--sides"></div>
                                    <div class="m-widget28__container">

                                        <!-- begin::Nav pills -->
                                        <ul class="m-widget28__nav-items nav nav-pills nav-fill" role="tablist">
                                            <li class="m-widget28__nav-item nav-item ">
                                                <a class="nav-link active" data-toggle="pill" href="#menu11">
                                                    <h1 id="effectif_emploi"></h1><span>EMPLOYE</span>
                                                </a>
                                            </li>
                                            <li class="m-widget28__nav-item nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#menu21">
                                                    <h1 id="effectif_stage"></h1><span>STAGE</span>
                                                </a>
                                            </li>
                                            <li class="m-widget28__nav-item nav-item">

                                                <a class="nav-link" data-toggle="pill" href="#menu31">
                                                    <h1 id="effectif_sans_emploi"></h1><span>SANS EMPLOIE</span>
                                                </a>

                                            </li>
                                        </ul>

                                        <!-- end::Nav pills -->

                                        <!-- begin::Tab Content -->


                                        <!-- end::Tab Content -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end:: Widgets/Blog-->
                    </div>
                    <div class="col-xl-4">

                        <!--begin:: Packages-->
                        <div class="m-portlet m--bg-warning m-portlet--bordered-semi m-portlet--full-height"
                            style="border-radius: 15px">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            Demande de stage
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="m-portlet__body">
                                <!--begin::Widget 29-->
                                <div class="m-widget29">
                                    <div class="m-widget_content" style="border-radius: 30px">
                                        <div class="m-widget_content-items">
                                            <div class="m-widget_content-item">
                                                <span>Effectif</span>
                                            </div>
                                            <h3 class="m--font-accent">{{ $user_stage->count() }}</h3>
                                        </div>
                                        <a href="/user_cv" style="font-size: 20px"> Voir CV</a>
                                    </div>
                                </div>

                                <!--end::Widget 29-->
                            </div>
                        </div>

                        <!--end:: Packages-->
                    </div>
                </div>
                <div class="row">
                        <div class="col-xl-8">
                            <form action="{{ route('/message_to_promotion') }}" method="POST">
                                @csrf
                                <div class="m-portlet m-portlet--mobile ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                    Envoyer message
                                                </h3>
                                            </div>
        
                                        </div>
        
                                        
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                            m-dropdown-toggle="hover" aria-expanded="true">
                                                            <span>choisir promotion</span>
            
                                                        </div>
                                                    </li>
            
            
                                                    <li class="m-portlet__nav-item">
                                                        <select name="promotion_message" required id="promotionId1" class="px-5">
                                                            <option value=""></option>
                                                            @foreach ($promotions as $promotion)
                                                                <option value="{{ $promotion->id }}">{{ $promotion->annee }}</option>
                                                            @endforeach
                                                        </select>
                                                    </li>
            
                                                </ul>
                                            </div>
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item">
                                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                            m-dropdown-toggle="hover" aria-expanded="true">
                                                            <span>Choisir Filières</span>
                                                        </div>
                                                    </li>
            
                                                    <li class="m-portlet__nav-item">
                                                        <select name="filiere_message" required id="filiereId1" class="px-5">
                                                            <option value=""></option>
                                                            @foreach ($filieres as $filiere)
                                                                <option value="{{ $filiere->id }}">{{ $filiere->filiere }}</option>
                                                            @endforeach
                                                        </select>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        <div class="m-portlet__head-tools">
                                            <ul class="m-portlet__nav">
                                                <li class="m-portlet__nav-item">
                                                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                        m-dropdown-toggle="hover" aria-expanded="true">
                                                        <button type="submit" class="p-2" style="border-radius:15px"
                                                            ><span style="font-size: 17px">rédiger</span></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                    </div>
                                </div>
                           </form>
                        </div>
                 

                    <div class="m-portlet__head-tools bg-white col-md-4">
                        <div
                            class="offset-md-1 m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push mt-4">
                            <a href="/message_ifri" style="font-size: 17px"><span>Messages envoyés par les étudiants</span></a>
                           
                        </div> <br>
                        <span class="offset-md-6" style="font-size: 30px;color:brown">{{ $totalMessage }}</span>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-8">
                        <div class="m-portlet m-portlet--mobile ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Publier dans toutes les promotions
                                        </h3>
                                    </div>

                                </div>
                              
                               

                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <a href="/publication" style="font-size: 20px"><span>publier</span></a>
                                            </div>
                                        </li>
                                    </ul>
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
    <script>
        $(document).ready(function() {

            $("#promotionId").select2({
                placeholder: "promotion",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });

            $("#promotionId1").select2({
                placeholder: "promotion",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });

            $("#selectPromotion").select2({
                placeholder: "Choisir une promotion",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });
            $("#selectFiliere").select2({
                placeholder: "Choisir une filiere",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });
            $("#filiereId").select2({
                placeholder: "Filiere",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });
            $("#filiereId1").select2({
                placeholder: "Filiere",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });

            $("#ajoutElevePromotion").select2({
                placeholder: "Choisir une filiere",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });

            $("#ajoutEleveFiliere").select2({
                placeholder: "Choisir une filiere",
                language: {
                    noResults: function() {
                        return "Aucun résultat trouvé";
                    }
                }
            });

            $("#selectPromotion").on("change", function() {
                const promotion = $("#selectPromotion").val();
                var url = "{{ route('statisque_promotion', ['promotion' => ':promotion']) }}";
                url = url.replace(':promotion', promotion);
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json', 
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        var users = response.users;
                        var users_emploi = response.users_emploi;
                        var users_stage = response.users_stage;
                        var users_sans = response.users_sans;

                        $('#effectif').empty();
                        $('#effectif_emploi').empty();
                        $('#effectif_stage').empty();
                        $('#effectif_sans_emploi').empty();

                        $('#effectif').append('<span>' + users.length + '</span>');
                        $('#effectif_emploi').append('<span>' + users_emploi.length +
                            '</span>');
                        $('#effectif_stage').append('<span>' + users_stage.length + '</span>');
                        $('#effectif_sans_emploi').append('<span>' + users_sans.length +
                            '</span>');

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });

            });


            $('#selectFiliere').on('change', function() {
                var selectedPromotion = $('#selectPromotion').val();
                var selectedFiliere = $('#selectFiliere').val();

                $.ajax({
                    url: "/statisque_promotion_filiere/" + selectedPromotion + "/" +
                        selectedFiliere,
                    method: 'GET',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        var users = response.users;
                        var users_emploi = response.users_emploi;
                        var users_stage = response.users_stage;
                        var users_sans = response.users_sans;

                        $('#effectif').empty();
                        $('#effectif_emploi').empty();
                        $('#effectif_stage').empty();
                        $('#effectif_sans_emploi').empty();

                        $('#effectif').append('<span>' + users.length + '</span>');
                        $('#effectif_emploi').append('<span>' + users_emploi.length +
                            '</span>');
                        $('#effectif_stage').append('<span>' + users_stage.length + '</span>');
                        $('#effectif_sans_emploi').append('<span>' + users_sans.length +
                            '</span>');

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.dataText);
                    }
                });
            });

            //Ajout d'une promotion
            $('#submitPromotion').on('click', function() {
                $('#promotionSpinner').removeClass('d-none');
                var formData = $('#promotionForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: '/ajout-de-promotion', 
                    data: formData,
                    success: function(response) {
                        $('#promotionSpinner').addClass('d-none');
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
                        $('#promotionModal').modal('hide');

                    },
                    error: function(error) {
                        console.error('Error:', error);

                        $('#promotionSpinner').addClass('d-none');
                    }
                });
            });




            $('#submitAlumni').on('click', function() {
                $('#alumniSpinner').removeClass('d-none');
                var formData = $('#alumniForm').serialize();
                console.log('echec');

                $.ajax({
                    type: 'POST',
                    url: '/ajout_alumni',
                    data: formData,
                    success: function(response) {
                        $('#alumniSpinner').addClass('d-none');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 6000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        });

                        Toast.fire({
                            icon: 'success',
                            title: response.message
                        });
                        $('#eleveModal').modal('hide');

                    },
                    error: function(error) {
                        console.error('Error:', error);
                        $('#alumniSpinner').addClass('d-none');
                    }
                });
            });

            $('#submitFiliere').on('click', function() {
                $('#filiereSpinner').removeClass('d-none');
                var formData = $('#filiereForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '/ajout-de-filiere', 
                    data: formData,
                    success: function(response) {
                        $('#filiereSpinner').addClass('d-none');
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 6000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        });

                        Toast.fire({
                            icon: 'success',
                            title: response.message 
                        });
                        $('#filiereModal').modal('hide');

                    },
                    error: function(error) {
                        console.error('Error:', error);

                        $('#filiereSpinner').addClass('d-none');
                    }
                });
            });


        });
    </script>
@endsection
