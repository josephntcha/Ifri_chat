@extends('layout.master')
@section('content')
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
                    class="fa fa-plus" aria-hidden="true"></i> Ajouter un nouvel elève</button>
            {{-- modal d'ajout d'un nouvel elève --}}
            <div class="modal fade" id="eleveModal" tabindex="-1" role="dialog" aria-labelledby="eleveModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-tpromotionFormitle" id="eleveModalLabel">Ajouter une nouvel nouvel elève</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Your form goes here -->
                            <form>
                                <!-- Form fields go here -->
                                @csrf
                                <div class="form-group">
                                    <label for="eleveName">Nom de l'elève</label>
                                    <input type="text" class="form-control" id="eleveName" name="eleveName">
                                </div>
                                <div class="form-group">
                                    <label for="eleveName">Email</label>
                                    <input type="email" class="form-control" id="eleveName" name="eleveName">
                                </div>
                                <div class="form-group">
                                    <label for="eleveName">Promotion</label>
                                    <select name="promotion" id="" class="form-control">
                                        <option value=""></option>
                                        @foreach ($promotions as $promotion)
                                            <option value="{{ $promotion->id }}">{{ $promotion->annee }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="eleveName">Filière</label>
                                    <select name="filiere" id="" class="form-control">
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
                            <button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
                                Ajouter</button>
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
                                                                $('.msg-return').text(response.message);
                                                                // Swal.fire('Deleted!', 'Your file has been deleted.', 'success');
                                                                // Ajoutez le code pour actualiser la page ou mettre à jour l'interface utilisateur si nécessaire
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
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                deleteStudent(filiereId);
                                                            }
                                                        })
                                                    }

                                             
                                                </script>
                                            </td>
                                            {{-- modifier une filiere --}}
                                            <td><button class="btn btn" onclick="setFiliereId('{{ $filiere->id }}')"
                                                    data-toggle="modal" data-target="#modifierModal"><i
                                                        class="flaticon-edit" style="color: green;"></i></button></td>
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
                                                                        class="form-control" name="filiere">
                                                                </div>
                                                                <!-- Add other form fields as needed -->
                                                            </form>
                                                        </div>
                                                        <script>
                                                            var filiereId;

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

                                                                        $('.msg-return').text(response.message);
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
                                            <td><a href=""><i class="flaticon-delete" style="color: red;"></i></a>
                                            </td>
                                            <td><a href=""><i class="flaticon-edit"></i></a></td>
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
            <a href="/action" class="bg-light text-dark btn  mt-md-3"> Liste elève</a>
            <div class="msg-return btn btn-success btn-sm mt-md-3" style="color: #EEEE; text-align: center;"></div>

        </div>



    </div>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Blog-->
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force">
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
                                            <select id="selectPromotion" name="promotion">
                                                <!-- Remplacez cela par la boucle qui affiche vos promotions -->
                                                <option value="toute promotion">toute promotion</option>
                                                @foreach ($promotions as $promotion)
                                                <option value="{{ $promotion->annee }}</">{{ $promotion->annee }}</</option>
                                                @endforeach
                                                
                                            </select>
                                            {{-- <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
                                            Toute promotion
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">Année</span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/admin" class="m-nav__link">
                                                                    <span class="m-nav__link-text">Toutes les promotions</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$promotion1) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">2015-2016</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$promotion2) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">2016-2017</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$promotion3) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">2017-2018</span>
                                                                </a>
                                                            </li>
                                                          
                                                        </ul> 
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  --}}
                                        </li>
                                    </ul>
                                </div>

                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">

                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                            m-dropdown-toggle="hover">
                                            <select id="selectFiliere" name="filiere">
                                                <!-- Options seront ajoutées dynamiquement par JavaScript -->
                                                <option value="toute filiere">toute filiere</option>
                                                @foreach ($filieres as $filiere)
                                                <option value="{{ $filiere->filiere }}">{{ $filiere->filiere }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
                                           Filières
                                        </a> --}}
                                            {{-- <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                          
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$filiere1) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">GL</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$filiere2) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">SI</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$filiere3) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">IM</span>
                                                                </a>
                                                            </li>
                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget27 m-portlet-fit--sides">
                                    <div class="m-widget27__pic">
                                        <img src="assets/app/media/img//bg/bg-4.jpg" alt="">
                                        <h6 class="m-widget27__title m--font-light">
                                            <span>
                                                <span>EFFECTIF
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
                        <div class="m-portlet m-portlet--head-overlay m-portlet--full-height   m-portlet--rounded-force">
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
                        <div class="m-portlet m--bg-warning m-portlet--bordered-semi m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text m--font-light">
                                            AUCUNE INFORMATION
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="m-portlet__body">
                                <!--begin::Widget 29-->
                                <div class="m-widget29">
                                    <div class="m-widget_content">
                                        <div class="m-widget_content-items">
                                            <div class="m-widget_content-item">
                                                <span>Total</span>
                                            </div>
                                            <h3 class="m--font-accent">60</h3>
                                        </div>
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
                        <div class="m-portlet m-portlet--mobile ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Envoyer un message à une promotion
                                        </h3>
                                    </div>

                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <span>Choisir Filières</span>
                                                <a href="#"
                                                    class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span
                                                        class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
                                                                        <span class="m-nav__section-text">Filières</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        @php
                                                                            $promotion1 = '2015-2017';
                                                                            $promotion2 = '2017-2018';
                                                                            $promotion3 = '2017-2018';
                                                                        @endphp
                                                                        <a href="{{ route('message_to_promotion', $promotion1) }}"
                                                                            class="m-nav__link">
                                                                            <span class="m-nav__link-text">GL</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="{{ route('message_to_promotion', $promotion2) }}"
                                                                            class="m-nav__link">
                                                                            <span class="m-nav__link-text">SI</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="{{ route('message_to_promotion', $promotion3) }}"
                                                                            class="m-nav__link">
                                                                            <span class="m-nav__link-text">IM</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item">
                                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                                m-dropdown-toggle="hover" aria-expanded="true">
                                                <span>choisir promotion</span>
                                                <a href="#"
                                                    class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                                </a>
                                                <div class="m-dropdown__wrapper">
                                                    <span
                                                        class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                        <div class="m-dropdown__body">
                                                            <div class="m-dropdown__content">
                                                                <ul class="m-nav">
                                                                    <li class="m-nav__section m-nav__section--first">
                                                                        <span class="m-nav__section-text">Année</span>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        @php
                                                                            $promotion1 = 2015 - 2016;
                                                                            $promotion2 = 2016 - 2017;
                                                                            $promotion3 = 2017 - 2018;
                                                                        @endphp
                                                                        <a href="{{ route('message_to_promotion', $promotion1) }}"
                                                                            class="m-nav__link">
                                                                            <span class="m-nav__link-text">2015-2016</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="{{ route('message_to_promotion', $promotion2) }}"
                                                                            class="m-nav__link">
                                                                            <span class="m-nav__link-text">2016-2017</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="m-nav__item">
                                                                        <a href="{{ route('message_to_promotion', $promotion3) }}"
                                                                            class="m-nav__link">
                                                                            <span class="m-nav__link-text">2017-2018</span>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">

                                <!--begin: Datatable -->
                                <div class="m_datatable" id="m_datatable_latest_orders"></div>

                                <!--end: Datatable -->
                            </div>
                        </div>
                    </div>
                    <div class="col-4 bg-white">
                        <a href="/message_ifri" class="offset-3 h5 text-muted mt-5 pt-5">Messages reçus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_jquey')
    <script>
        $(document).ready(function() {


            $("#selectPromotion").on("change", function() {
                // const option = $("#promotion :selected");
                const promotion = $("#selectPromotion").val();
                var url = "{{ route('statisque_promotion', ['promotion' => ':promotion']) }}";
                url = url.replace(':promotion', promotion);
                $.ajax({
                    url: url,
                    type: 'GET',
                    //data: { promotion_id: promotion},
                    dataType: 'json', // Spécifiez le type de données attendu
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
                // Show the spinner
                $('#promotionSpinner').removeClass('d-none');

                // Prepare the form data
                var formData = $('#promotionForm').serialize();

                // Make the AJAX request
                $.ajax({
                    type: 'POST',
                    url: '/ajout-de-promotion', // Replace with the actual URL to handle form submission
                    data: formData,
                    success: function(response) {

                        // Hide the spinner on success
                        $('#promotionSpinner').addClass('d-none');
                        $('#msg-return').addClass('bg-success');
                        $('.msg-return').text(response.message);
                        // Optionally, close the modal on success
                        $('#promotionModal').modal('hide');

                    },
                    error: function(error) {
                        // Handle errors if any
                        console.error('Error:', error);

                        // Hide the spinner on error
                        $('#promotionSpinner').addClass('d-none');
                    }
                });
            });
            //fin

            //ajout d'une filière

            $('#submitFiliere').on('click', function() {
                // Show the spinner
                $('#filiereSpinner').removeClass('d-none');

                // Prepare the form data
                var formData = $('#filiereForm').serialize();

                // Make the AJAX request
                $.ajax({
                    type: 'POST',
                    url: '/ajout-de-filiere', // Replace with the actual URL to handle form submission
                    data: formData,
                    success: function(response) {

                        // Hide the spinner on success
                        $('#filiereSpinner').addClass('d-none');
                        $('#msg-return').addClass('bg-success');
                        $('.msg-return').text(response.message);
                        // Optionally, close the modal on success
                        $('#filiereModal').modal('hide');

                    },
                    error: function(error) {
                        // Handle errors if any
                        console.error('Error:', error);

                        // Hide the spinner on error
                        $('#filiereSpinner').addClass('d-none');
                    }
                });
            });


            //fin ajout filiere

            //modifier filiere



            //fin

        });
    </script>
@endsection
