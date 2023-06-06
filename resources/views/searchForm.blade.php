@extends('layouts.master')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 rounded-3 shadow p-5 position-relative bg-white searchBox">
                    <h3 class="text-center mb-4">Trouver des donneurs de sang près de chez vous</h3>
                    <form id="donorsSearchForm" method="GET" action="{{ route('donorsSearch') }}"
                        class="d-flex flex-column flex-xl-row gap-3" novalidate>
                        @csrf
                        <div class="w-100">
                            <select name="blood_group_id" id="bloodGroup" class="form-select form-select-lg" required>
                                <option selected hidden style="display:none" value=""> -- Type de sang --</option>
                                @foreach ($bloodGroups as $bloodGroup)
                                    <option value="{{ $bloodGroup['id'] }}">{{ $bloodGroup['BloodGroup'] }} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Ville
                            </div>
                        </div>
                        <div class="w-100">
                            <select name="city_id" id="villeSelect" class="form-select form-select-lg">
                                <option selected hidden style="display:none" value="">--Choisir une ville--</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city['id'] }}">{{ $city['name'] }} </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                ddddddddddddddddddddddd
                            </div>
                        </div>
                        <button class="btn btn-danger px-5 searchDonorsBtn" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
