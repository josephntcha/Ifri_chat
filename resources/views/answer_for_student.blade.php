@extends('layouthead.header')
@section('content')
<div class="m-portlet__body">
    <br>
    
    <div class="d-flex">
        <div class="offset-md-4" >
            <img src="{{ asset("new/images/ifri.jpg") }}" style="width: 40px;hight:40px">
        </div>
        <div class="ingo">
            <h3>Institut de Formation et de Recherche en Informatique</h3>
            <small></small>
        </div>
    </div>



    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__body">
                
                <table class="table table-striped- table-bordered" id="m_table_1">
                    <thead>
                        <tr>
                            <th>Message</th>
                            <th>fichier</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($message_for_mes as $item)
                        <tr>
                            <td class="truncate-text">{{ \Illuminate\Support\Str::limit($item->content, 50) }}</td>
                            
                            <td> <a href="{{ asset('public/asset/clients/documents/'.$item->fichier) }}" download="{{$item->fichier }}" style="border-radius: 15px">télécharger</a> </td>
                            <td> 
                                <button class="voir-plus form-control  text-dark" style="border-radius: 15px" data-content="{{ $item->content}}" data-toggle="modal" data-target="#m_modal_4">Détail
                                
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