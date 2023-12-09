@extends('homelayout')

@section('title','Edit List of Costumes')

@section('layout')
<div class="card" style="margin:20px;">
  <div class="card-header">Edit List of Costumes</div>
  <div class="card-body">
    <form action="{{ route('editlistPost', ['id' => $item->id]) }}" method="post">
        @csrf
          @method('PATCH')
        <label>Quantity of Costumes</label></br>
        <input type="text" name="qty" id="qty" value="{{$item->name}}" class="form-control"></br>
        <label>Costumes and Accessories</label></br>
        <input type="text" name="costume" id="costume" value="{{$item->costume}}" class="form-control"></br>
        <label>Men/Women Attire</label></br>
        <select class="form-control" name="attire" value="{{$item->attire}}"> <!-- Added name attribute -->
          <option value="select"></option>
          <option value="Men's Attire">Men's Attire</option>
          <option value="Women's Attire">Women's Attire</option>
        </select><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection
