@extends('layout.master')
@section('content')
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
                                        @php
                                        $promotion1=2015;
                                        $promotion2=2017;
                                        $promotion3=2018;
                                    @endphp
                                    </h3>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                                        <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill m-btn btn-outline-light m-btn--hover-light">
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
                                                                    <span class="m-nav__link-text">2015</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$promotion2) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">2017</span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('statistique_to_promotion',$promotion3) }}" class="m-nav__link">
                                                                    <span class="m-nav__link-text">2018</span>
                                                                </a>
                                                            </li>
                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-widget27 m-portlet-fit--sides">
                                <div class="m-widget27__pic">
                                    <img src="assets/app/media/img//bg/bg-4.jpg" alt="">
                                    <h3 class="m-widget27__title m--font-light">
                                        @if ((isset($effectif_promotion)) || (isset($effectif_promotion)) || (isset($effectif_promotion)) )
                                        <span><span>EFFECTIF:</span><span>{{$effectif_promotion->count()}}</span></span>
                                        @else
                                        <span><span>EFFECTIF:</span><span>{{$users->count()}}</span></span>
                                        @endif
                                    </h3>
                                    
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
                                            <a class="nav-link active" data-toggle="pill" href="#menu11"><h1>{{ $total_employes->count() }}</h1><span>EMPLOYE</span></a>
                                        </li>
                                        <li class="m-widget28__nav-item nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#menu21"><h1>{{ $total_stage->count() }}</h1><span>STAGE</span></a>
                                        </li>
                                        <li class="m-widget28__nav-item nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#menu31"><h1>{{ $total_sans_emploie->count() }}</h1><span>SANS EMPLOIE</span></a>
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
                                        <h3 class="m--font-accent">680</h3>
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
                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                            <span>choisir promotion</span> 
                                            <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                               <i class="la la-ellipsis-h m--font-brand"></i>
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
                                                                    @php
                                                                        $promotion1=2015;
                                                                        $promotion2=2017;
                                                                        $promotion3=2018;
                                                                    @endphp
                                                                    <a href="{{ route('message_to_promotion',$promotion1) }}" class="m-nav__link">
                                                                        <span class="m-nav__link-text">2015</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('message_to_promotion',$promotion2) }}" class="m-nav__link">
                                                                        <span class="m-nav__link-text">2017</span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('message_to_promotion',$promotion3) }}" class="m-nav__link">
                                                                        <span class="m-nav__link-text">2018</span>
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