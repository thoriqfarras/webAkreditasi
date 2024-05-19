@extends('layouts.main')

@container('container')
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>{{ $title }}</h1>
        </div><!-- End Page Title -->

        <section class="section">
          <div class="row">
            <div class="main-flex  col-lg-12">
              <div class="col-3">
                @include('partials.filter')
              </div>
              <div class="col-9">
                @include('partials.table')
                
                @include('partials.tabelRekap')
                
                @include('partials.tabelRekapJumlah')
              </div>
            </div>
          </div>
        </section>

  </main>