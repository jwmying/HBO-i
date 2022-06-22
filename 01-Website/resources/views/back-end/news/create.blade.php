@extends('back-end.layouts.app')

@section('content')
  {{-- Error meldingen --}}
  <x-helpers/>
  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />
    @livewire('cms-news-articles-form')
@endsection