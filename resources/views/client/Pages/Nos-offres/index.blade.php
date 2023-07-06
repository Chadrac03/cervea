@extends('client.layout')

@section('content')
    @include('client.Sections.banner-two')

    <!--Nos offres -->
    @include('client.Sections.offres')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

    <!-- Nos clients   -->
    @include('client.Sections.nos-clients')
@endsection
