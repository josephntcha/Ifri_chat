@extends('layouthead.header')
@section('content')
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    
    <div class="bg-white">
        @foreach ($content as $item)
           <div class="col-10 offset-md-1">
            <span class="bg-success rounded">{{$item->created_at->format('g:i a') }}</span>
             <br>
            {{ $item->content }}
           </div>
            <br>

        @endforeach
       </div>
     <div class="m-grid m-grid--hor m-grid--root m-page">
         <div class="">
          
             <div class="m-grid__item m-grid__item--fluid m-wrapper">
                 <div class="m-content">
                     <div class="m-portlet">
                         <div class="m-portlet__head">
                             <div class="m-portlet__head-caption">
                                 <div class="m-portlet__head-title">
                                     <h3 class="m-portlet__head-text text-center">
                                         Repondre à - <strong>{{ $user->name }}</strong> 
                                     </h3>
                                 </div>
                             </div>
                         </div>
                       
                        
                         <form class="m-form m-form--fit m-form--label-align-right" id="form_info" enctype="multipart/form-data">
                             @csrf
                             <div class="m-portlet__body">
                                 <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                                 <div class="form-group m-form__group row">
                                     <label class="col-form-label col-lg-3 col-sm-12">Entrez votre message</label>
                                     <div class="col-lg-9 col-md-9 col-sm-12">
                                         <textarea name="markdown" class="form-control" data-provide="markdown" rows="10"></textarea>
                                         <input type="hidden" name="" id="user_id" value="{{ $user->id }}">
                                         <span class="m-form__help">Enter some markdown content</span>
                                     </div>
                                 </div>
                                 <input class="form-control btn btn-control col-lg-8 col-md-9 col-sm-12 offset-4" type="file" name="fichier" id="file">
                             </div>
                             <div class="m-portlet__foot m-portlet__foot--fit">
                                 <div class="m-form__actions m-form__actions">
                                     <div class="row">
                                         <div class="col-lg-9 ml-lg-auto">
                                             <button type="button" id="submit_info" class="btn btn-success"><span id="infoSpinner" class="spinner-border spinner-border-sm d-none" role="status"
                                                aria-hidden="true"></span>
                                                Repondre</button>
                                             <button type="reset" class="btn btn-secondary text-dark">Supprimer</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <a href="/message_ifri" class="ms-2" style="font-size: 15px">back</a>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <script src="../../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
 
     <script src="../../../assets/demo/default/custom/crud/forms/validation/form-widgets.js" type="text/javascript"></script>
 
     <!--end::Page Scripts -->
 </body> 
@endsection
@section('script_jquey')
    <script>
        $(document).ready(function() {
            $('#submit_info').on('click', function() {
                $('#infoSpinner').removeClass('d-none');
                var id=$('#user_id').val();
                var formData = new FormData($('#form_info')[0]);
                $.ajax({
                    type: 'POST',
                    url: "/send_message_to_student/"+id,
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
        });
    </script>
@endsection
