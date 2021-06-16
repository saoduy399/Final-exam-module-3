@extends('master')
@section('title', 'List employees')
@section('body')

    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">type of group</th>
            <th scope="col">Full name</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone number</th>
            <th colspan="2">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employee as $employee)
        <tr>
            <th scope="row">{{ $employee->id }}</th>
            <td>{{ $employee->type_of_group }}</td>
            <td>{{ $employee->full_name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->phone_number }}</td>
            <td><a style="background-color: yellow" class="btn btn primary" href="{{ route('update', $employee->id) }}"><img src="https://img.icons8.com/android/24/000000/settings.png"/></a></td>
            <td><a style="background-color: tomato" class="btn btn primary" href="{{ route('delete_employee', $employee->id) }}" onclick="return confirm('Are you sure?')"><img src="https://img.icons8.com/android/24/000000/delete.png"/></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
