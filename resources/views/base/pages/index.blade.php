@extends('base.layout.app')

@section('title', 'Home')

@section('content')
  @include('base.inc.banner')
  <div class="content">
      <div style="margin:30px 60px;">
          @include('base.inc.category')
      </div>
  </div>
@endsection
