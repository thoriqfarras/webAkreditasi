@extends('layouts.main')

@container('container')
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>{{ $title }}</h1>
        </div><!-- End Page Title -->

        <section class="section">
          <div class="row">
            <div class="col-lg-12">

              @include('partials.filter')

              @include('partials.table')

              @include('partials.tabelRekap')

              @include('partials.tabelRekapJumlah')

            </div>
          </div>
        </section>

  </main>
@endcontainer