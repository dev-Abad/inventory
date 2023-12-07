@extends('homelayout')

@section('title','Add Costume')

@section('layout')
<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>List of Costumes</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('createlist') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Quantity</th>
                                        <th>Costumes/ Accesories</th>
                                        <th>Men/ Women</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($costumes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->costume }}</td>
                                        <td>{{ $item->attire }}</td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection