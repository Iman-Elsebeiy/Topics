@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Topics Listing</li>
@endsection

@section('page-title', 'Topics Listing')

@section('content')

  @include('includes.topic-list')
  @include('includes.trending')

@endsection
