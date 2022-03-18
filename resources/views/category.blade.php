@extends('common')


@section('content')
    <div class="mealCategoryBanner">
        <img src="{{ $category->strCategoryThumb }}" alt="{{ $category->strCategory }}">
        <h3>{{ $category->strCategory }}</h3>
    </div>
    <div class="categoryGrid commonGrid">

        @foreach ($categories as $category)
            <x-category :category="$category" />
        @endforeach

    </div>
@endsection
