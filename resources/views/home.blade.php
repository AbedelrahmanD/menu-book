@extends('common')

@section('content')
    <div class="heroContainer">
        <div class="leftCircle"></div>
        <div class="rightCircle"></div>

        <h1 class="heroTitle">
            Menu Book
        </h1>
        <h3 class="heroDescription">
            A collection of Recipes from around the world.
        </h3>


        <div class="heroButtons">
            <a href="/meals" class="cmButton">Meals</a>
            <a href="/categories" class="cmOutlineButton">Categories</a>
        </div>

        <svg class="goDown" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24"
            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z" />
        </svg>
    </div>


    <div class="categorySection">
        <h3 class="categorySectionTitle commonSectionTitle">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path
                    d="m21.484 7.125l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5a1 1 0 0 0-.002-1.749z" />
                <path d="m12 15.856l-8.515-4.73l-.971 1.748l9 5a1 1 0 0 0 .971 0l9-5l-.971-1.748L12 15.856z" />
                <path d="m12 19.856l-8.515-4.73l-.971 1.748l9 5a1 1 0 0 0 .971 0l9-5l-.971-1.748L12 19.856z" />
            </svg>
            Categories
        </h3>
        <div class="categoryGrid commonGrid">

            @foreach ($categories as $category)
                <x-category :category="$category" />
            @endforeach

        </div>
    </div>

    <div class="topMelasSection">
        <h3 class="topMelasSectionTitle  commonSectionTitle">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path d="M3 2h2v20H3zm7 4h7v2h-7zm0 4h7v2h-7z" />
                <path d="M19 2H6v20h13c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 18H8V4h11v16z" />
            </svg>
            Top Meals
        </h3>
        <div class="topMealsGrid commonGrid">
            @foreach ($topMeals as $meal)
                <x-meal :meal="$meal" />
            @endforeach
        </div>
    </div>
    <div class="coloredBack">
        <div class="mealSection ">
            <h3 class="mealSectionTitle  commonSectionTitle">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24"
                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                    <path
                        d="M7 4.5c-.3 0-.5.3-.5.5v2.5h-1V5c0-.3-.2-.5-.5-.5s-.5.3-.5.5v2.5h-1V5c0-.3-.2-.5-.5-.5s-.5.3-.5.5v3.3c0 .9.7 1.6 1.5 1.7v7c0 .6.4 1 1 1s1-.4 1-1v-7c.8-.1 1.5-.8 1.5-1.7V5c0-.2-.2-.5-.5-.5zM9 5v6h1v6c0 .6.4 1 1 1s1-.4 1-1V2c-1.7 0-3 1.3-3 3zm7-1c-1.4 0-2.5 1.5-2.5 3.3c-.1 1.2.5 2.3 1.5 3V17c0 .6.4 1 1 1s1-.4 1-1v-6.7c1-.7 1.6-1.8 1.5-3C18.5 5.5 17.4 4 16 4z" />
                </svg>
                Meals
            </h3>
            <div class="productGrid commonGrid">
                @foreach ($meals as $meal)
                    <x-meal :meal="$meal" showDescription=false />
                @endforeach
            </div>
        </div>
    </div>
@endsection
