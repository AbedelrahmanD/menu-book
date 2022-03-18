@foreach ($suggestedMeals as $meal)
    <x-meal :meal="$meal" showDescription="false" />
@endforeach
