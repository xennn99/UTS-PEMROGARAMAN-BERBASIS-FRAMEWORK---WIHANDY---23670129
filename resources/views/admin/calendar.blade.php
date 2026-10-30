@extends('layouts.admin')

@section('title', 'Calendar - Xeloro')

@push('styles')
<!--calendar css-->
     <link href="{{ asset('assets/admin/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Calendar</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">Calendar</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
    
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
    
                                            <h6 class="mb-3">Create Events</h6>
                                            <form method="post" id="add_event_form">
                                                <input type="text" class="form-control new-event-form" placeholder="Create new event..." />
                                            </form>
    
                                            <div id='external-events' class="mt-4">
                                                <h6 class="mb-3">Draggable Events</h6>
                                                <div class='fc-event'>Design Review - Myra</div>
                                                <div class='fc-event'>Project Meeting</div>
                                                <div class='fc-event'>Weekly Review</div>
                                                <div class='fc-event'>Planning</div>
                                                <div class='fc-event'>Kickoff Meeting</div>
                                            </div>
    
                                            <!-- checkbox -->
                                            <div class="custom-control custom-checkbox mt-3">
                                                <input type="checkbox" class="custom-control-input" id="drop-remove" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                            </div>
    
                                        </div>
    
                                        <div id='calendar' class="col-lg-9 col-md-8 mt-3 mt-lg-0"></div>
    
                                    </div>
                                    <!-- end row -->
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
@endsection

@push('scripts')
<!--calendar js-->
    <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>
    <script src='{{ asset('assets/admin/plugins/fullcalendar/js/fullcalendar.min.js') }}'></script>
    <script src="{{ asset('assets/admin/pages/calendar-demo.js') }}"></script>
@endpush
