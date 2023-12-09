@extends('homelayout')

@section('title','Create List')

@section('layout')
<div class="card" style="margin:20px;">
  <div class="card-header">Add New List of Costumes</div>
  <div class="card-body">
    <form action="{{ route('createlistPost') }}" method="post">
        {!! csrf_field() !!}
        <label>Quantity of Costumes</label></br>
        <input type="text" name="qty" id="qty" class="form-control"></br>
        <label>Costumes and Accessories</label></br>
        <input type="text" name="costume" id="costume" class="form-control"></br>
        <label>Men/Women Attire</label></br>
        <select class="form-control" name="attire"> <!-- Added name attribute -->
          <option value="select"></option>
          <option value="Men's Attire">Men Attire</option>
          <option value="Women's Attire">Women Attire</option>
        </select><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection