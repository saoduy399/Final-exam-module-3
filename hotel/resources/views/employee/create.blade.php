@extends('master')
@section('title', 'List employees')
@section('body')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post">
        @csrf
{{--        <div class="mb-3">--}}
{{--            <label for="exampleInputEmail1" class="form-label">Employee's ID</label>--}}
{{--            <input name="id" type="number" class="form-control">--}}
{{--        </div>--}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Type_of_group</label>
            <input name="type_of_group" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full name</label>
            <input name="full_name" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <input name="gender" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone number</label>
            <input name="phone_number" type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="error-message">
    </div>
    </div>
@endsection
