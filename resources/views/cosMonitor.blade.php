@extends('homelayout')

@section('title','Costume Monitoring')

@section('layout')
<div class="container">
        <div class="card" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Costume Monitoring</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('createmon') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Name</th>
                                        <th>Date Borrowed</th>
                                        <th>Date Returned</th>
                                        <th>Costume/Accessories</th>
                                        <th>Men/Women Attire</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($monCostume as $data)
                                    <tr>
                                        <td>{{ $data->event }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->borrow }}</td>
                                        <td>{{ $data->return }}</td>
                                        <td>{{ $data->costume }}</td>
                                        <td>{{ $data->attire }}</td>
                                        <td>{{ $data->note }}</td>
                                        <td>
                                        <a href="{{ route('editRecord', ['id' => $data->id]) }}" title="Edit Student">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>
                                        <form method="POST" action="{{ route('deleteRecord', ['id' => $data->id]) }}" accept-charset="UTF-8" style="display:inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                            </button>
                                        </form>
                                        </td>
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