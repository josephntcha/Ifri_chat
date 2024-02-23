@extends('layout.master')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop offset-2">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                        <thead>
                            <tr>
                                <th>Etudiant ID</th>
                                <th>Etudiant</th>
                                <th>Promotion</th>
                                <th>Message</th>
                                <th>Matricule</th>
                                <th>Email</th>
                                <th>fichier-joint</th>
                                <th>Action</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($messages_ifri as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->from->name }}</td>
                                <td>{{ $item->from->promotion->annee}}</td>
                                <td class="truncate-text">{{ \Illuminate\Support\Str::limit($item->content, 25) }}</td>
                                {{-- <td>{{ $item->content }}</td> --}}
                                <td>{{ $item->from->matricule }}</td>
                                <td>{{ $item->from->email }}</td>
                               
                                  @if ($item->fichier!="")
                                  <td> <a href="{{ asset('public/assets/clients/documents/'.$item->fichier) }}" download="{{$item->fichier }}" style="border-radius: 15px" class="">téléchargé</a> </td>
                                   @else
                                  <td>No file </td>
                                  @endif
                                 
                           
                            
                               
                                <td> 
                                    <button class="voir-plus form-control bg-success text-white" style="border-radius: 15px" data-content="{{ $item->content}}" data-toggle="modal" data-target="#m_modal_4">Détail
                                    
                                    </button> 
                                    <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Voir les mesages des étudiants</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12 mt-1">
                                                        <div class="msg-return"  style="color: green; text-align: center;"></div>
                                                    </div>
                                                  <div class="content_message h4">

                                                  </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="{{ route('reponse_ifri',$item->from->id) }}">repondre</a></td>
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
<style>
    .truncate-text{
     {
    max-width: 100px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
      }
    }
</style>
@section('script_jquey')
<script>
    $(document).ready(function(){
        // Gérer le clic sur le bouton "Voir plus"
        $('.voir-plus').on('click', function(){
            var content = $(this).data('content');
           // console.log(content);
            if (typeof content !== 'undefined') {
                const li = $(`<li>${content}</li>`);
                $('.content_message').empty();
                $('.content_message').append(content);


            }

            // Afficher la description complète dans une alerte (vous pouvez personnaliser cela)
            
        });
    });
</script>
@endsection


@endsection