@extends('layouts.main')

@section('container')

    @foreach ($data as $item)
    <div class="container text-center">
        <div class="row">
          <div class="col-sm-3">
            <a href="/donasi/{{ $item['slug'] }}">
                {{ $item['waktu']}}
            </a>
          </div>
          <div class="col-sm-9">
            <div class="row">
              <div class="col-8 col-sm-6">
                Level 2: .col-8 .col-sm-6
              </div>
              <div class="col-4 col-sm-6">
                Level 2: .col-4 .col-sm-6
              </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach
@endsection