@extends('layout')

@section('content')
    <h3 class="heading-tertiary">Members List</h3>
    @foreach($people as $person)

        <p class="person-detail">Name:  {{ $person->name }}</p>
        <p class="person-detail"> Surname:  {{ $person->surname }}<p>
        <p class="person-detail">Address:  {{ $person->address }}<p>
        <p class="person-detail">City: {{ $person->city }}<p>
        <p class="person-detail">Email:  {{ $person->email }}<p>
        <p class="person-detail">Phone:  {{ $person->phone }}<p>
            <div class="delete">
            <a href="{{ route('person.delete', ['id' => $person->id])}} " class="btn-delete">delete</a>
            </div>
            <div class="update">
            <a href="{{ route('person.update', ['id' => $person->id])}} " class="btn-update">update</a>
            </div>
        <hr><hr>

    @endforeach

    <div class="add-member">
        <a href="/form" class="btn-delete">add member</a>
    </div>

@stop
