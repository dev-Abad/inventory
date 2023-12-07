@extends('homelayout')

@section('title','Create List')

@section('layout')
<div class="card" style="margin:20px;">
  <div class="card-header">Add Costume Records</div>
  <div class="card-body">
       
      <form action="{{}}" method="post">
        {!! csrf_field() !!}
        <label>Event</label></br>
        <input type="text" name="event" id="event" class="form-control"></br>
        <label>Name of Borrower</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Date Borrowed</label></br>
        <input type="text" name="borrow" id="borrow" class="form-control"></br>
        <label>Date Return</label></br>
        <input type="text" name="return" id="return" class="form-control"></br>
        <label>Costume/ Accessories</label></br>
        <input type="text" name="costume" id="costume" class="form-control"></br>
        <label>Men/Women Attire</label></br>
        <select class="form-control" name="attire">
          <option value="select"></option>
          <option value="men">Men Attire</option>
          <option value="women">Women Attire</option>
        </select><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection