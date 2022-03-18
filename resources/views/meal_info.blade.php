@extends('common')
@section('content')
    <div class="mealCategoryBanner  ">
        <img src="{{ $meal['strMealThumb'] }}" alt="{{ $meal['strMeal'] }}" style="max-height: 200px">
        <h3>{{ $meal['strMeal'] }}</h3>
        <a href="/meals-by-category/{{ $category->idCategory }}" class="mealInfoPageCategory">
            {{ $category->strCategory }}
        </a>
    </div>
    <div class="mealInfoContainer">
        <iframe class="youtubeIframe" height="315" src="https://www.youtube.com/embed/{{ $meal['youtubeCode'] }}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <div class="mealInfo">
            <p class="mealInfoInstructions">
                {{ $meal['strInstructions'] }}
            </p>

            <div class="mealIngredients">
                <table>
                    <tr class="tableHead">
                        <td>
                            Measure
                        </td>
                        <td>
                            Ingredient
                        </td>
                    </tr>
                    @php
                        for ($i = 1; $i <= 20; $i++) {
                            if ($meal['strIngredient' . $i] != '') {
                                $measure = $meal['strMeasure' . $i];
                                $ingredient = $meal['strIngredient' . $i];
                                echo "<tr><td class='measure'>$measure</td><td>$ingredient</td></tr>";
                            }
                        }
                    @endphp
                </table>
            </div>
        </div>

    </div>
@endsection
