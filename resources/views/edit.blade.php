@extends('layout')

@section('content')
        <p class="form-title">Enter a new person data</p>
        <div class="form-wrapper">
            {{-- @php dd($person); @endphp --}}
            <form class="form" action="{{ route('person.save', ['id' => $person->id ]) }}" method="post">
                {{-- VerifyCsrfToken --}}
                {{ csrf_field() }} 
                <label for="name" class="input-label"> First name:<br>
                <input id="name" value="{{ $person->name }}" class="input" type="text" name="name" placeholder="Name">
                <br>
                <label for="surname" class="input-label"> Last name:<br>
                <input id="surname" value="{{ $person->surname }}" class="input" type="text" name="surname" placeholder="Surname">
                <br>
                <label for="address" class="input-label"> Address:<br>
                <input id="address" value="{{ $person->address }}" class="input" type="text" name="address" placeholder="Address">
                <br>
                <label for="city" class="input-label"> City:<br>
                <input id="city" value="{{ $person->city }}" class="input" type="text" name="city" placeholder="City">
                <br>
                <label for="email" class="input-label"> Email:<br>
                <input id="email" value="{{ $person->email }}" class="input" type="email" name="email" placeholder="Email">
                <br>
                <label for="phone" class="input-label"> Phone:<br>
                <input id="phone" value="{{ $person->phone }}" class="input" type="text" name="phone" placeholder="Phone">
                <br>
                <div class="submit-wrapper">
                    <input type="submit" class="submit" value="Submit">
                </div>
            </form>   

            <div class="back">
                <a href="/people_list" class="btn-back"> &#8592; back</a>
                </div>
        </div>
    </div>
@stop