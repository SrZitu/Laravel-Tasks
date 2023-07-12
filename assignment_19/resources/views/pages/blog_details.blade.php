@extends('app')
@section('title')
Blog Details
@endsection
@section('content')
@include('components.single_blog_detail')
@include('components.comments')

@endsection

