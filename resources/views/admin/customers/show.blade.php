@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-sm btn-light border mr-2" style="width: fit-content"
                           href="{{ route('admin.customers.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
                        Customer <b>{{ $customer->name }}</b> <i>#{{ $customer->id }}</i>
                        <div class="d-inline float-md-right">
                            <span>Is processed</span>

                            @if($customer->is_processed)
                                <a class="btn btn-sm btn-link"
                                   href="{{ route('admin.customers.unprocessed', $customer) }}"><i
                                            class="fa fa-check-square"></i></a>
                            @else
                                <a class="btn btn-sm btn-link"
                                   href="{{ route('admin.customers.processed', $customer) }}"><i
                                            class="fa fa-square"></i></a>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control" name="name"
                                       value="{{ $customer->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">Email</label>
                            <div class="col-md-7">
                                <a href="mailto:{{ $customer->email }}">
                                    <input id="email" type="email" class="form-control" style="cursor: pointer"
                                           name="email" value="{{ $customer->email }}" readonly>
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-md-3 col-form-label text-md-right">Subject</label>

                            <div class="col-md-7">
                                <input id="subject" type="subject" class="form-control" name="subject"
                                       value="{{ $customer->subject }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-md-3 col-form-label text-md-right">Message</label>

                            <div class="col-md-7">
                                <textarea id="message" type="message" class="form-control" name="message"
                                          readonly>{{ $customer->message }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="created_at" class="col-md-3 col-form-label text-md-right">Created at</label>

                            <div class="col-md-7">
                                <input id="created_at" type="created_at" class="form-control" name="created_at"
                                       value="{{ $customer->created_at->format('d.m.Y H:i') }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
