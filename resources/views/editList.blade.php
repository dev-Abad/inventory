@extends('homelayout')

@section('title','Create List')

@section('layout')
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>
@endsection

<input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
<label>Quantity of Costumes</label></br>
        <input type="text" name="qty" id="qty" class="form-control"></br>
        <label>Costumes and Accessories</label></br>
        <input type="text" name="cosac" id="cosac" class="form-control"></br>
        <label>Men/Women Attire</label></br>
        <select class="form-control">
          <option value="select"></option>
          <option value="men">Men Attire</option>
          <option value="women">Women Attire</option>
        </select><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>