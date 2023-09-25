<?php
function generateStory($singular_noun, $verb,$color, $distance_unit)
{
  $story = "\nThe {$singular_noun}s are lovely, $color, and deep.\nBut I have promises to keep,\nAnd {$distance_unit}s to go before I $verb,\nAnd {$distance_unit}s to go before I $verb.\n";
  return $story;
}

echo generateStory("dog", "eat", "purple", "mile");
echo generateStory("car", "cook", "vermilion", "meter");
echo generateStory("empty void", "speak", "beige", "yard");

function generateKrakowLegend($creature, $hero, $weapon, $reward)
{
    $storyTemplate = "\nIn the ancient city of Krakow,\nthere was a fearsome {creature}\nthat terrorized the inhabitants.\nEvery day, it would demand a tribute,\nor it would unleash havoc upon the city.\nThe king was desperate and promised\na great {reward}\nto anyone who could defeat the creature.\nThen came {hero}, armed with a {weapon}.\nWith courage and wit,\n{hero} faced the {creature} and after a fierce battle,\ndefeated it, saving Krakow.\nThe city was forever grateful,\nand {hero} was rewarded\nwith the promised {reward}.\n";

    // Define the search and replace arrays
    $search = array('{creature}', '{hero}', '{weapon}', '{reward}');
    $replace = array($creature, $hero, $weapon, $reward);
    
    // Use str_replace to generate the story
    $story = str_replace($search, $replace, $storyTemplate);
    
    return $story;
}

echo generateKrakowLegend("dragon", "Skuba", "clever trick", "princess's hand in marriage");
echo generateKrakowLegend("giant", "Wojtek", "mighty sword", "half the kingdom");
echo generateKrakowLegend("ghost", "Zosia", "holy amulet", "a chest filled with gold");
