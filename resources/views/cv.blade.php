@extends('layout.master')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content">
                <div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__body">
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                            <thead>
                                <tr>
                                    <th>Etudiant</th>
                                    <th>Téléphone</th>
                                    <th>Promotion</th>
                                    <th>Matricule</th>
                                    <th>Email</th>
                                    <th>CV</th>
                                    <th>Action</th>
                                    <th>Type</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->Numero_telephone }}</td>
                                        <td>{{ $item->promotion->annee }}</td>
                                        <td>{{ $item->matricule }}</td>
                                        <td>{{ $item->email }}</td>
                                        @if ($item->cv != '')
                                            <td> <a href="{{ asset('public/assets/clients/documents/' . $item->cv) }}"
                                                    download="{{ $item->fichier }}" style="border-radius: 15px"
                                                    class="">téléchargé</a> </td>
                                        @else
                                            <td>No file </td>
                                        @endif
                                        <td><a href="#"
                                                 data-toggle="modal"
                                                data-target="#filiereModal">Contactez</a>
                                        </td>

                                        <div class="modal fade" id="filiereModal" tabindex="-1" role="dialog"
                                            aria-labelledby="filiereModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="filiereModalLabel">Contactez l'étudiant pour un entretien</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Your form goes here -->
                                                        <form id="filiereForm">
                                                            <!-- Form fields go here -->
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                                            <div class="form-group">
                                                                <label for="filiereName">lien du meet</label>
                                                                <input type="url" class="form-control" id="filiereName"
                                                                    name="lien" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="filiereName">Date et heure</label>
                                                                <input type="datetime-local" class="form-control" id="filiereName"
                                                                    name="time">
                                                            </div>
                                                            <!-- Add other form fields as needed -->
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Fermer</button>
                                                        <button type="button" id="submitFiliere" class="btn btn-primary"><i
                                                                class="fa fa-plus" aria-hidden="true"></i> Ajouter
                                                            <span id="filiereSpinner"
                                                                class="spinner-border spinner-border-sm d-none"
                                                                role="status" aria-hidden="true"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <td>
                                            aucune
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_jquey')
<script>
    $(document).ready(function() {
        $('#submitFiliere').on('click', function() {
                $('#filiereSpinner').removeClass('d-none');
                var formData = $('#filiereForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '/stage_emploi_contact', 
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
    })
</script>     
@endsection
