@extends('layouts.main')

@section('breadcrumb')
    <li class="breadcrumb-item">{{ $topic->category->category_name }}</li>
@endsection

@section('page-title', 'Introduction to ' . $topic->title)

@section('header-image')
    <img src="{{ asset('assets/images/topics/' . $topic->image) }}" class="topics-detail-block-image img-fluid">
@endsection

@section('content')
@include('includes.topic-detail')
@include('includes.newsletter')

@endsection
