@extends('layouts.master')

@section('content')
    @include('searchForm')
    <section>
        <div class="searchResult container d-flex flex-wrap gap-4 justify-content-center">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <!-- Loop over $donors and display the search results -->
            @if ($donors->isEmpty())
                <div class="alert alert-danger text-center" role="alert">
                    No donors found.
                </div>
            @else
                @if (isset($donors))
                    @if (!count($donors))
                        <div class="alert alert-danger text-center noDonorsMsg" role="alert">
                            {{ __('donorsPage.noDonorsMsg') }}
                        </div>
                    @else
                        @foreach ($donors as $donor)
                            <div class="container shadow-lg donorCard d-flex flex-column">
                                <div class="donorInfo px-3 py-3 row">
                                    <div class="infos col-9">
                                        <span class="text-danger fs-4"><strong class="text-dark">Nom:</strong>
                                            {{ $donor->name }}</span>
                                        <br>
                                        <span class="text-danger fs-4"><strong class="text-dark">Prenom:</strong>
                                            {{ $donor->prenom }}</span>
                                        <br>
                                        <span class="text-danger fs-4"><strong class="text-dark">Ville:</strong>
                                            {{ $donor->city->name }}</span>
                                    </div>

                                    <div class="bloodGroup col-3 d-flex align-items-center">
                                        <span class="text-danger">{{ $donor->BloodGroup->bloodGroup }}</span>
                                    </div>
                                </div>

                                <div class="donorPhone bg-danger p-3 bg-light row">
                                    <a class="col-4 d-lg-none" href="tel:{{ $donor['phone_number'] }}">
                                        <button class="btn btn-success w-100" type="button">
                                            <svg class="d-lg-inline bg-success rounded-circle phoneIcon"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                            </svg>
                                        </button>
                                    </a>
                                    <strong
                                        class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4"
                                        style="user-select: all;">
                                        <span><i class="fa-solid fa-phone"></i>&ensp;{{ $donor['phone_number'] }}</span>
                                    </strong>
                                </div>
                            </div>
        </div>
        @endforeach
        {{ $donors->withQueryString()->links() }}
        </div>
        @endif

      </section>

@endsection
