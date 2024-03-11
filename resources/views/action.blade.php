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
                class="flaticon-add-circular-button" aria-hidden="true"></i> Ajouter un nouvel elève</button>
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
                                <select name="promotion" id="ajoutElevePromotion" class="form-control" style="width: 100%">
                                    <option value=""></option>
                                    @foreach ($promotions as $promotion)
                                        <option value="{{ $promotion->id }}">{{ $promotion->annee }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ajoutEleveFiliere">Filière</label>
                                <select name="filiere" id="ajoutEleveFiliere" class="form-control" style="width: 100%">
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
                                        <td><button class="btn btn" onclick="setFiliereId('{{ $filiere->id }}'), putFiliere('{{ $filiere->filiere }}')"
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
                                                                    class="form-control" name="filiere" id="put_filiere">
                                                            </div>
                                                            <!-- Add other form fields as needed -->
                                                        </form>
                                                    </div>
                                                    <script>
                                                        var filiereId;
                                                        var put_filiere;
                                                        function putFiliere(filiere) {
                                                            put_filiere=filiere
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
                                                            $('.msg-return').text(response.message);

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
                                        <td><button class="btn btn" onclick="setPromotionId('{{$promotion->id}}'), putPromotion('{{ $promotion->annee }}')"
                                            data-toggle="modal" data-target="#modifierPromoModal"><i
                                                class="flaticon-edit" style="color: green;"></i>
                                        </button>
                                          {{-- modal pour modifier une promotion --}}
                                          <div class="modal fade" id="modifierPromoModal" tabindex="-1" role="dialog"
                                          aria-labelledby="modifierModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                      <h5 class="modal-title" id="modifierModalLabel">Modifier la
                                                          promotion</h5>
                                                      <button type="button" class="close" data-dismiss="modal"
                                                          aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <!-- Your form goes here -->
                                                      <form id="modifierPromoForm">
                                                          <!-- Form fields go here -->
                                                          @csrf
                                                          <div class="form-group">
                                                              <label for="modifierName">Nom de la promotion</label>
                                                              <input type="text" value="" class="form-control" name="promotion" id="updatePromotion">
                                                          </div>
                                                          <!-- Add other form fields as needed -->
                                                      </form>
                                                  </div>
                                                 
                                                  <script>
                                                     var promotion_annee;
                                                      var promotionId;

                                                      function putPromotion(promotion) {
                                                          promotion_annee=promotion;
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

                                                                  $('.msg-return').text(response.message);
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
                                                          class="btn btn-primary" onclick="modifierPromotion()"><i
                                                              class="fa fa-plus" aria-hidden="true"></i> Modifier
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
        <a href="/action" class="bg-light text-dark btn  mt-md-3"> Liste elève</a>

        <div class="msg-return btn btn-success  btn-sm mt-md-3" style="color: #EEEE; text-align: center;"></div>

    </div>



</div>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper p-0">
            <div class="m-content">
                    <select id="selectPromotion" name="promotion" class="px-4">
                        <!-- Remplacez cela par la boucle qui affiche vos promotions -->
                        <option value="toute promotion">toute promotion</option>
                        @foreach ($promotions as $promotion)
                            <option value="{{ $promotion->annee }}">{{ $promotion->annee }}
                            </option>
                        @endforeach

                    </select>

                    <select id="selectFiliere" name="filiere" class="px-4">
                        <!-- Options seront ajoutées dynamiquement par JavaScript -->
                        <option value="toute filiere">toute filiere</option>
                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->filiere }}">{{ $filiere->filiere }}
                            </option>
                        @endforeach
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
                                                        {{-- <form class="create-client-form" method="POST"
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
                                                        </form> --}}
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
                                                                <select name="promotion" id="ajoutElevePromotion" class="form-control" style="width: 100%">
                                                                    <option value=""></option>
                                                                    @foreach ($promotions as $promotion)
                                                                        <option value="{{ $promotion->id }}">{{ $promotion->annee }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="ajoutEleveFiliere">Filière</label>
                                                                <select name="filiere" id="ajoutEleveFiliere" class="form-control" style="width: 100%">
                                                                    <option value=""></option>
                                                                    @foreach ($filieres as $filiere)
                                                                        <option value="{{ $filiere->id }}">{{ $filiere->filiere }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <!-- Add other form fields as needed -->
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
@endsection

@section('script_jquey')
    <!-- Inclure jQuery -->

    <script>
        $(document).ready(function() {

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
