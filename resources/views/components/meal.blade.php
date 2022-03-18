<a class='mealContainer' href='/meal/{{ $meal->idMeal }}'>
    <div class="mealImage">
        <img src='{{ $meal->strMealThumb }}' alt={{ $meal->strMeal }}'>
    </div>
    <div class='mealContent'>
        <h3 class='mealName'>{{ $meal->strMeal }}</h3>
        @if ($showDescription == 1)
            <p>{{ $meal->strCategoryDescription }}</p>
        @endif
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24"
        preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4z" />
    </svg>
    @if ($showCategory == 1)
        <h3 class='mealCategory'>{{ $meal->strCategory }}</h3>
    @endif

</a>
