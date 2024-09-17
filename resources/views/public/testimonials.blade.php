@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
@endsection

@section('page-title', 'Testimonials')

@section('content')

@include('includes.testimonials')

@endsection
