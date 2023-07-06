@extends('client.layout')

@section('content')

    @include('client.Sections.banner-one')

    @include('client.Sections.section-one')

    <!-- Nos solutions  -->
    @include('client.Sections.section-solutions')

    <!-- Quel est votre soutien ? -->
    @include('client.Sections.section-two')

    <!-- Qui sommes nous ? -->
    @include('client.Sections.section-about')

    <!--Nos valeurs -->
    @include('client.Sections.sections-valeurs')

    <!-- Projet pleins d'innovation -->
    @include('client.Sections.section-projet')

    <!-- Projet  -->
    @include('client.Sections.technologie-utilise')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

    <!-- Nos clients   -->
    @include('client.Sections.nos-clients')
@endsection
