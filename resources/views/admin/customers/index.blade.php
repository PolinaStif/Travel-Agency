@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-sm btn-light border mr-2" style="width: fit-content"
                           href="{{ route('admin.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
                        Customers
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.customers.index') }}" method="GET" class="mb-2">
                            <span>Is processed</span>
                            <select name="is_processed" class="custom-select d-inline-block w-25" onchange="submit()">
                                <option {{ request('is_processed') == 'disabled' ? 'selected' : '' }} value="disabled">
                                    Disabled
                                </option>
                                <option {{ request('is_processed') == 'yes' ? 'selected' : '' }} value="yes">Yes
                                </option>
                                <option {{ request('is_processed') == 'no' ? 'selected' : '' }} value="no">No</option>
                            </select>
                        </form>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Created at</th>
                                <th style="text-align: -webkit-center" scope="col">Processed</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <th scope="row">{{ $customer->id }}</th>
                                    <td>{{ $customer->name }}</td>
                                    <td><a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a></td>
                                    <td>{{ $customer->subject }}</td>
                                    <td>{{ $customer->created_at->format('d.m.Y H:i') }}</td>
                                    <td style="text-align: -webkit-center">
                                        @if($customer->is_processed)
                                            <a class="btn btn-sm btn-link"
                                               href="{{ route('admin.customers.unprocessed', $customer) }}"><i
                                                        class="fa fa-check-square"></i></a>
                                        @else
                                            <a class="btn btn-sm btn-link"
                                               href="{{ route('admin.customers.processed', $customer) }}"><i
                                                        class="fa fa-square"></i></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-success"
                                           href="{{ route('admin.customers.show', $customer) }}"><i
                                                    class="fa fa-pen"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $customers->appends(Request::except('page'))->render("pagination::bootstrap-4") !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
