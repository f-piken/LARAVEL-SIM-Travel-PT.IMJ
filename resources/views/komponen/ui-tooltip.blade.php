@extends('layouts.master')
@section('title')
    {{ __('Tooltip') }}
@endsection
@section('content')
    <!-- page title -->
    <x-page-title title="Tooltip" pagetitle="UI Elements" />

    <div>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Default</h6>
                <button data-tooltip="default" data-tooltip-content="test tooltip" type="button"
                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Default
                    Tooltips</button>
            </div>
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Placements</h6>

                <div class="flex flex-wrap items-center gap-2">
                    <button data-tooltip="default" data-tooltip-content="Default Tooltips" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Default</button>
                    <button data-tooltip="default" data-tooltip-placement="top-start" data-tooltip-arrow="false"
                        data-tooltip-content="Top Start" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Top
                        Start</button>
                    <button data-tooltip="default" data-tooltip-placement="top-end" data-tooltip-arrow="false"
                        data-tooltip-content="Top End" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Top
                        End</button>
                    <button data-tooltip="default" data-tooltip-placement="bottom" data-tooltip-content="Bottom"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Bottom</button>
                    <button data-tooltip="default" data-tooltip-placement="bottom-start" data-tooltip-content="bottom Start"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Bottom
                        Start</button>
                    <button data-tooltip="default" data-tooltip-placement="bottom-end" data-tooltip-content="Right End"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Bottom
                        Right End</button>
                    <button data-tooltip="default" data-tooltip-placement="right" data-tooltip-content="Right"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Right</button>
                    <button data-tooltip="default" data-tooltip-placement="right-start" data-tooltip-content="Right Start"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Right
                        Start</button>
                    <button data-tooltip="default" data-tooltip-placement="right-end" data-tooltip-content="Right End"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Right
                        End</button>
                    <button data-tooltip="default" data-tooltip-placement="left" data-tooltip-content="Left" type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Left</button>
                    <button data-tooltip="default" data-tooltip-placement="left-start" data-tooltip-content="Left Start"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Left
                        Start</button>
                    <button data-tooltip="default" data-tooltip-placement="left-end" data-tooltip-content="Left End"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Left
                        End</button>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Triggers Tooltip</h6>

                <div class="flex flex-wrap items-center gap-2">
                    <button data-tooltip="default" data-tooltip-content="Click Tooltip" data-tooltip-trigger="click"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Click
                        Tooltips</button>
                    <button data-tooltip="default" data-tooltip-content="Focus Tooltips" data-tooltip-trigger="focus"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Focus
                        Tooltips</button>
                </div>
            </div>
        </div><!--end card-->

        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-gray-800 text-15">Follow Cursor</h6>

                <div class="flex flex-wrap items-center gap-2">
                    <button data-tooltip="default" data-tooltip-content="Follow Cursor" data-tooltip-follow-cursor="true"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Follow
                        Cursor</button>
                    <button data-tooltip="default" data-tooltip-content="Horizontal" data-tooltip-follow-cursor="horizontal"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Horizontal</button>
                    <button data-tooltip="default" data-tooltip-content="Vertical" data-tooltip-follow-cursor="vertical"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Vertical</button>
                    <button data-tooltip="default" data-tooltip-content="Initial" data-tooltip-follow-cursor="initial"
                        type="button"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Initial</button>
                </div>
            </div>
        </div><!--end card-->

    </div>
@endsection
@push('scripts')
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
