@extends('layouthead.header')
@section('content')
<div class="m-portlet__body">
    <br>
    <!--begin: Datatable -->
    <h2 class="text-center">Messages envoyés par l'administration d'IFRI</h2>
    <table class="table table-striped- table-bordered table-hover table-checkable col-10 offset-1" id="m_table_1">
        <thead>
            <tr>
                <th class="text-center">Message</th>
                <th>fichier-joint</th>
                <th class="text-center">Action</th>
                <th class="text-center">Type</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($message_for_mes as $item)
            <tr>
                <td class="truncate-text">{{ \Illuminate\Support\Str::limit($item->content, 50) }}</td>
                @if ($item->fichier!="")
                <td> <a href="{{ asset('public/assets/clients/documents/'.$item->fichier) }}" download="{{$item->fichier }}" style="border-radius: 15px">{{ $item->fichier }}</a> </td>

                @else
                <td>No file </td>

                @endif
                <td> 
                    <button class="voir-plus form-control bg-light text-dark" style="border-radius: 15px" data-content="{{ $item->content}}" data-toggle="modal" data-target="#m_modal_4">Détail
                    
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
                <td class="text-center"><a href="{{ route('reponse_ifri',$item->from->id) }}" >Préoccupation</a></td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
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