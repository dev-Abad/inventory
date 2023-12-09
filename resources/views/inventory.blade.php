@extends('homelayout')

@section('title','Costume List')

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
                                        <th>No.</th>
                                        <th>Quantity</th>
                                        <th>Costumes/ Accesories</th>
                                        <th>Men/ Women</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($costumes as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ $item->costume }}</td>
                                        <td>{{ $item->attire }}</td>
                                        <td>
                                        <a href="{{ route('editlistPage', ['id' => $item->id]) }}" title="Edit List">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>
                                        <form method="POST" action="{{ route('destroylist', ['id' => $item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Record" onclick="return confirm('Confirm delete?')">
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