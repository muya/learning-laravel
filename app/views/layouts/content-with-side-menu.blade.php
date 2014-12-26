@extends('layouts.default')
@section('overallContent')
<div class="row">
    <div class="col m12">
        <div class="row">
            <div class="section">
                <div class="col m9">
                    @yield('mainContent')
                </div>
                <div class="col m3">
                    <div class="collection">
                        @yield('side-menu-content')
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop