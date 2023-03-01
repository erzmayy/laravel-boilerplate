@extends('auth.layouts.auth')

@section('body_class', 'login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Set up Google Authenticator </div>

                <div class="panel-body" style="text-align: center;">
                <p>Set Up your two factor authentication by scanning the barcode below. Alternative, you can use the code {{$google2fa}}</p>
                <div>
                    {!! $QR_Image !!}
                </div>
                <p> You must set up your Google Authenticator app before continue, you will be unable to login otherwise</p>
                <div>
                    <a href="/complete-registration"><button class="btn-primary">Complete Registration</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>