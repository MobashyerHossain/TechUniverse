@extends('base.layout.app')

@section('title', $category->name)

@section('content')
  <div class="content">
    {{$category}}
  </div>

@endsection

@section('style')

@stop

@section('script')

@stop
