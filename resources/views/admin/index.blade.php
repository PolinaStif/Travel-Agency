@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin panel</div>

                    <div class="card-body">
                        <a class="btn btn-info" href="{{ route('admin.customers.index') }}">Customers page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
