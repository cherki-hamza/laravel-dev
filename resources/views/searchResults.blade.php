@extends('layouts.master')

@section('content')
    @include('searchForm')


    <section><!-- demand Section -->



      <div class="container">
          <div class="row justify-content-center">
              <div class="col-10 rounded-3 shadow p-5 position-relative bg-white searchBox">
                  <h3 class="text-center mb-4">Trouver des donneurs de sang près de chez vous</h3>

                  <form id="donorsSearchForm" action="{{ route('donorsSearch') }}" method="get"
                      class="d-flex flex-column flex-xl-row gap-3" novalidate>
                      <div class="w-100">
                          <select name="blood_group" id="bloodGroup" class="form-select form-select-lg" required>
                              <option selected hidden style="display:none" value="">--Type de sang--</option>

                              <!-- Loop through bloodGroups -->
                              <!-- Replace the PHP code with the desired HTML output -->
                              <!-- Example: -->
                              <option value="1">Group A</option>
                              <option value="1">Group b</option>
                              <option value="1">Group c</option>
                              <option value="1">Group d</option>

                          </select>

                          <div class="invalid-feedback">
                              Ville
                          </div>
                      </div>



                      <div class="w-100">
                          <select name="VILLE" id="VILLESelect" class="form-select form-select-lg" >
                              <option selected hidden style="display:none" value="">--Choisir une ville--</option>
                              <option value="1">ville 1</option>
                              <option value="1">ville 2</option>
                              <option value="1">ville 3</option>
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

  <div class="searchResult container d-flex flex-wrap gap-4 justify-content-center">


    <div class="container shadow-lg donorCard d-flex flex-column">
<div class="donorInfo px-3 py-3 row">
<div class="infos col-9">
<span class="text-danger fs-4"><strong class="text-dark">Nom:
</strong>Oum El Bouaghi</span>
<br>
<span class="text-danger fs-4"><strong class="text-dark">Ville:
</strong>Ain Babouche</span>

</div>

<div class="bloodGroup col-3 d-flex align-items-center">
<span class="text-danger">B+</span>
</div>
</div>

<div class="donorPhone bg-danger p-3 bg-light row">
<a class="col-4 d-lg-none" href="tel:0799932999"><button class="btn btn-success w-100" type="button">
<svg class="d-lg-inline bg-success rounded-circle phoneIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
</svg>
</button></a>
<strong class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4" style="user-select: all; color: black;">

<span><i class="fa-solid fa-phone"></i>&ensp;0799932999</span></strong>
</div>
</div>
<div class="container shadow-lg donorCard d-flex flex-column">
<div class="donorInfo px-3 py-3 row">
<div class="infos col-9">
<span class="text-danger fs-4"><strong class="text-dark">NOM:
</strong>Sidi Bel Abbes</span>
<br>
<span class="text-danger fs-4"><strong class="text-dark">VILLE:
</strong>Sidi Bel Abbes</span>

</div>

<div class="bloodGroup col-3 d-flex align-items-center">
<span class="text-danger">A+</span>
</div>
</div>

<div class="donorPhone bg-danger p-3 bg-light row">
<a class="col-4 d-lg-none" href="tel:0798257795"><button class="btn btn-success w-100" type="button">
<svg class="d-lg-inline bg-success rounded-circle phoneIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
</svg>
</button></a>
<strong class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4" style="user-select: all;">

<span><i class="fa-solid fa-phone"></i>&ensp;0798257795</span></strong>
</div>
</div>
<div class="container shadow-lg donorCard d-flex flex-column">
<div class="donorInfo px-3 py-3 row">
<div class="infos col-9">
<span class="text-danger fs-4"><strong class="text-dark">NOM:
</strong>Batna</span>
<br>
<span class="text-danger fs-4"><strong class="text-dark">VILLE:
</strong>Tkout</span>

</div>

<div class="bloodGroup col-3 d-flex align-items-center">
<span class="text-danger">A+</span>
</div>
</div>

<div class="donorPhone bg-danger p-3 bg-light row">
<a class="col-4 d-lg-none" href="tel:0555444555"><button class="btn btn-success w-100" type="button">
<svg class="d-lg-inline bg-success rounded-circle phoneIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
</svg>
</button></a>
<strong class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4" style="user-select: all;">

<span>0555444555</span></strong>
</div>
</div>
<div class="container shadow-lg donorCard d-flex flex-column">
<div class="donorInfo px-3 py-3 row">
<div class="infos col-9">
<span class="text-danger fs-4"><strong class="text-dark">NOM:
</strong>Batna</span>
<br>
<span class="text-danger fs-4"><strong class="text-dark">VILLE:
</strong>Batna</span>

</div>

<div class="bloodGroup col-3 d-flex align-items-center">
<span class="text-danger">AB+</span>
</div>
</div>

<div class="donorPhone bg-danger p-3 bg-light row">
<a class="col-4 d-lg-none" href="tel:0553832207"><button class="btn btn-success w-100" type="button">
<svg class="d-lg-inline bg-success rounded-circle phoneIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
</svg>
</button></a>
<strong class="align-items-center justify-content-center d-flex col-8 col-lg-12 text-lg-center text-success fs-4" style="user-select: all;">

<span>0553832207</span></strong>
</div>
</div>
<div class="container shadow-lg donorCard d-flex flex-column">
<div class="donorInfo px-3 py-3 row">
<div class="infos col-9">
<span class="text-danger fs-4"><strong class="text-dark">NOM:
</strong>Ain Temouchent</span>
<br>
<span class="text-danger fs-4"><strong class="text-dark">VILLE:
</strong>Hammam Bou Hadjar</span>

</div>

<div class="bloodGroup col-3 d-flex align-items-center">
<span class="text-danger">O+</span>
</div>
</div>




@endsection
