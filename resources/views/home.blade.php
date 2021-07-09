@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ثبت نام موفق') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                          {{ Auth::user()->name}} {{ Auth::user()->last_Name}}   عزیز خوش آمدید

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
