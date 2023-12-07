@extends('homelayout')

@section('title','Costume Monitoring')

@section('layout')
<div class="container">
        <div class="row" style="margin:20px;">
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
                                        <th>#</th>
                                        <th>Event</th>
                                        <th>Name</th>
                                        <th>Date Get</th>
                                        <th>Date Return</th>
                                        <th>Costume/Accessories</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Concert</td>
                                        <td>Argie Abad</td>
                                        <td>09/12/2023</td>
                                        <td>Not yet Return</td>
                                        <td>White/Pink Costume</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Okada</td>
                                        <td>Unique Abastillas</td>
                                        <td>11/6/2023</td>
                                        <td>Not yet Return</td>
                                        <td>Cream/Black Costume</td>
                                        <td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection