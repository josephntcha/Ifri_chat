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
                    
                    <form  id="alumniForm">
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
                            <select name="promotion" id="ajoutElevePromotion" class="form-control" style="width: 100%">
                                <option value=""></option>
                                @foreach ($promotions as $promotion)
                                    <option value="{{ $promotion->id }}">{{ $promotion->annee }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="filiere">Filière</label>
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
                    <button type="button" class="btn btn-primary" id="submitAlumni"><i class="fa fa-plus" aria-hidden="true"></i>
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


    </div>



</div>
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper p-0">
            <div class="m-content">
                    <select id="selectPromotion" name="promotion" class="px-4">
                        <!-- Remplacez cela par la boucle qui affiche vos promotions -->
                        <option value="toute promotion">toute promotion</option>
                        @foreach ($promotions as $promotion)
                            <option value="{{ $promotion->id }}">{{ $promotion->annee }}
                            </option>
                        @endforeach

                    </select>

                    <select id="selectFiliere" name="filiere" class="px-4">
                        <!-- Options seront ajoutées dynamiquement par JavaScript -->
                        <option value="toute filiere">toute filiere</option>
                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->filiere }}
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
                                                
                                                <form  id="alumniForm">
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
                                                        <select name="promotion" id="ajoutElevePromotion" class="form-control" style="width: 100%">
                                                            <option value=""></option>
                                                            @foreach ($promotions as $promotion)
                                                                <option value="{{ $promotion->id }}">{{ $promotion->annee }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="filiere">Filière</label>
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
                                                <button type="button" class="btn btn-primary" id="submitAlumni"><i class="fa fa-plus" aria-hidden="true"></i>
                                                    Ajouter</button>
                                                    <span id="alumniSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                                        aria-hidden="true"></span>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                    <br />
                                    <br />
                                    <div class="table-responsive">
                                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Filière</th>
                                                    <th>Matricule</th>
                                                    <th>Email</th>
                                                    <th>Numero de téléphone</th>
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
                        console.log(users);
                        var usersContainer = $('#usersContainer');
                        usersContainer.empty();
                        var effectif = $('#effectif');
                        effectif.empty();
                        effectif.append('<span>' + users.length + '</span>');
                        $.each(users, function(index, user) {
                          
                            var switchButton = '<td><label for="toggle-user-' + index + '" class="flex items-center cursor-pointer relative">' +
                            '<input type="checkbox" id="toggle-user-' + index + '" class="sr-only" checked>' +
                            '<div class="toggle-bg bg-gray-200 border-2 border-gray-200 h-6 w-11 rounded-full"></div>' +
                            '<span class="ml-3 text-gray-900 text-sm font-medium"></span>' +
                            '</label></td>';
                            usersContainer.append('<tr>' +
                                '<td>' + user.name + '</td>' +
                                '<td>' +user.filiere.filiere+ '</td>' +
                                '<td>' + user.matricule + '</td>' +
                                '<td>' + user.email + '</td>' +
                                '<td>' + user.Numero_telephone + '</td>' +
                                switchButton +
                                '</tr>');

                                $(document).on('change', 'input[type="checkbox"]', function() {
                                    var userId = $(this).attr('id').replace('toggle-user-', '');
                                    var isDisabled = !$(this).prop('checked');
                                    localStorage.setItem('user_' + userId, isDisabled);
                                });

                           
                        });
                        
                        $(document).ready(function() {
                                    $('input[type="checkbox"]').each(function() {
                                        var userId = $(this).attr('id').replace('toggle-user-', '');
                                        var isDisabled = localStorage.getItem('user_' + userId);

                                        if (isDisabled === 'true') {
                                            $(this).prop('checked', false);
                                            //logique si un étudiant est désactivé
                                        }
                                    });
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
                            var switchButton = '<td><label for="toggle-user-' + index + '" class="flex items-center cursor-pointer relative">' +
                            '<input type="checkbox" id="toggle-user-' + index + '" class="sr-only" checked>' +
                            '<div class="toggle-bg bg-gray-200 border-2 border-gray-200 h-6 w-11 rounded-full"></div>' +
                            '<span class="ml-3 text-gray-900 text-sm font-medium"></span>' +
                            '</label></td>';
                            usersContainer.append('<tr>' +
                                '<td>' + user.name + '</td>' +
                                '<td>' +user.filiere.filiere+ '</td>' +
                                '<td>' + user.matricule + '</td>' +
                                '<td>' + user.email + '</td>' +
                                '<td>' + user.Numero_telephone + '</td>' +
                                switchButton +
                                '</tr>');

                                $(document).on('change', 'input[type="checkbox"]', function() {
                                    var userId = $(this).attr('id').replace('toggle-user-', '');
                                    var isDisabled = !$(this).prop('checked');
                                    localStorage.setItem('user_' + userId, isDisabled);
                                });

                        });

                        $(document).ready(function() {
                                    $('input[type="checkbox"]').each(function() {
                                        var userId = $(this).attr('id').replace('toggle-user-', '');
                                        var isDisabled = localStorage.getItem('user_' + userId);

                                        if (isDisabled === 'true') {
                                            $(this).prop('checked', false);
                                            //logique si un étudiant est désactivé
                                        }
                                    });
                                });

                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });


            $('#submitAlumni').on('click', function() {
                // Show the spinner
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
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
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
        });       
    </script>
@endsection
