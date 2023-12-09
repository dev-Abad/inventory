@extends('homelayout')

@section('title', 'Edit Costume Record')

@section('layout')
    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Costume Records</div>
        <div class="card-body">
            <form action="{{ route('editRecordPost', ['id' => $data->id]) }}" method="post">
            @csrf
            @method('PATCH')
            <label>Event</label></br>
            <input type="text" name="event" id="event" value="{{$data->event}}" class="form-control"></br>
            <label>Name of Borrower</label></br>
            <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control"></br>
            <label>Date Borrowed</label></br>
            <input type="text" name="borrow" id="borrow" value="{{$data->borrow}}" class="form-control"></br>
            <label>Date Return</label></br>
            <input type="text" name="return" id="return" value="{{$data->return}}" class="form-control"></br>
            <label>Costume/ Accessories</label></br>
            <input type="text" name="costume" id="costume" value="{{$data->costume}}"class="form-control"></br>
            <label>Men/Women Attire</label></br>
            <select class="form-control" name="attire" value="{{$data->attire}}">
            <option value="select"></option>
            <option value="Men's Attire">Men's Attire</option>
            <option value="Women's Attire">Women's Attire</option>
            </select><br>
            <label>Note</label></br>
            <input type="text" name="note" id="note" value="{{$data->note}}"class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
    </div>
@endsection