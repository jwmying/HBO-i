@extends('back-end.layouts.app')

@section('content')
    @livewire('cms-news-articles-form', ['newsArticle' => $newsArticle, 'editMode' => true])
@endsection