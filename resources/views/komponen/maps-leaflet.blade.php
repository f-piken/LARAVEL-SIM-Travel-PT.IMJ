@extends('layouts.master')
@section('title')
    {{ __('Leaflet') }}
@endsection
@section('content')

    <x-page-title title="Leaflet" pagetitle="Maps" />

    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Example</h6>
                <div id="leaflet-map" class="leaflet-map"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Markers, Circles and Polygons</h6>
                <div id="leaflet-map-marker" class="leaflet-map"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Working with Popups</h6>
                <div id="leaflet-map-popup" class="leaflet-map"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Markers with Custom Icons</h6>
                <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Interactive Choropleth Map</h6>
                <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Layer Groups and Layers Control</h6>
                <div id="leaflet-map-group-control" class="leaflet-map"></div>
            </div>
        </div><!--end card-->
    </div>
@endsection
@push('scripts')
    <!-- leaflet plugin -->
    <script src="{{ URL::asset('build/libs/leaflet/leaflet.js') }}"></script>

    <!-- leaflet map.init -->
    <script src="{{ URL::asset('build/js/pages/leaflet-us-states.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/leaflet-map.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
