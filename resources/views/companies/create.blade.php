@extends('layouts.app')
@section('content')
    <h2 class="text-center p-3">Tashkilot qo'shish</h2>
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('companies.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tashkilot qo'shish</label>
                    <input type="text" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Tashkilot manzili</label>
                    <input type="text" value="{{old('address')}}" class="form-control" name="address" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Tashkilot raqami</label>
                    <input type="text" value="{{old('phone')}}" class="form-control" name="phone" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection
