@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div width="1140" height="541.25">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" >
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->

                            <iframe title="dashboard1" width="1140" height="650.25" src="https://app.powerbi.com/reportEmbed?reportId=f8923c9a-f37f-495a-b9ab-14dd1952caa0&autoAuth=true&ctid=8d17494e-0f50-4895-9582-687ea69df940" frameborder="0" allowFullScreen="true"></iframe>
                        <!-- <div class="col-md-12">

                        </div> -->
                </div>


                
            </div>
        </div>
    </div>
</div>
@endsection
