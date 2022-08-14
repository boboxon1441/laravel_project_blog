@extends('layouts.app')
@section('content')
    <h2 class="text-center p-3">Tashkilot haqida ma'lumot</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-4">
                <button class="btn btn-dark"><a href="{{ route('companies.index') }}">Exit</a></button>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>Tashkilot nomi</td>
                    <td>{{ $company->name }}</td>
                </tr>
                <tr>
                    <td>Tashkilot manzili</td>
                    <td>{{ $company->adress }}</td>
                </tr><tr>
                    <td>Tashkilot telefon raqami</td>
                    <td>{{ $company->tel }}</td>
                </tr>
                <tr>
                    <td>Qoshilgan vaqti</td>
                    <td>{{ $company->created_at }}</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
