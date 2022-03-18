@extends('common')


@section('content')
    <div class="mealCategoryBanner">
        <img src="{{ $category->strCategoryThumb}}" alt="{{ $category->strCategory }}">
        <h3>{{ $category->strCategory }}</h3>
    </div>
    <div class="productGrid commonGrid">
        @foreach ($meals as $meal)
            <x-meal :meal="$meal" showDescription=false :showCategory="$showCategory" />
        @endforeach
    </div>

    @if (count($meals)==0)
    <div class="notFound">
        <h3>
           "{{ $category->strCategory }}" not found
        </h3>
    </div>
    @endif
    {{ $meals->links() }}
@endsection
