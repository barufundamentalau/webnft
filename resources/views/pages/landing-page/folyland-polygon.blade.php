@extends('layouts.app')

{{-- set title --}}
@section('title', ' Folyland Polygon')

@section('content')
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Foxyland Polygon </h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{ '/' }}">Home</a></li>
                        <li class="active">Foxyland Polygon Collection </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->

    <!-- ==========404 Section start Here========== -->
    <section class="error-section padding-top padding-bottom">
        <div class="container">
            <div class="section-wrapper">
                <p>
                    <iframe
                        src='https://opensea.io/assets/foxyland-polygon?embed=true&ref=0x9b814233894cd227f561b78cc65891aa55c62ad2'
                        width='100%' frameborder='0' allowfullscreen
                        style="min-height: 89vh; margin-top: 0; padding-top: 0;">
                    </iframe>
                </p>
            </div>
        </div>
    </section>
    <!-- ==========404 Section ends Here========== -->
@endsection

{{-- @push('after-style')
@endpush --}}
