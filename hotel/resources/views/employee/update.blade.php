@extends('master')
@section('title', 'List employees')
@section('body')
    @foreach($employee as $employee)
    <form method="post">
        @csrf
        <input type="hidden" name="id" value="{{$employee->id}}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input name="id" type="text" class="form-control" value="{{$employee->id}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Type_of_group</label>
            <input name="type_of_group" type="text" class="form-control" value="{{ $employee->type_of_group }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full name</label>
            <input name="full_name" type="text" class="form-control" value="{{ $employee->full_name }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <input name="gender" type="text" class="form-control" value="{{ $employee->gender }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone number</label>
            <input name="phone_number" type="text" class="form-control" value="{{ $employee->phone_number }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endforeach
@endsection
