<?php

  # This is where you put your reviews.
  # You can plugin whatever data source you want to use.
  # Important is, that you return an array with your reviews.

  return array(
    array(
      'name' => 'salon wichtig',
      'description' => 'Great vegan and vegetarian curry to go. Only open for lunch',
      'address' => 'Karlsgasse 22, 1040 Wien',
      'price' => 1, # The number of dollar signs
      'best_for' => 'Lunch', # "Lunch" or "Dinner". Can be anything.
      'url' => 'http://salonwichtig.com', # An external URL
      'type' => 'Curry', # The category of the venue. Diner, sushi bar, cafe, etc
    ),
    array(
      'name' => 'The Highlander Pub &amp; Garden',
      'description' => 'Austrian food and great beer. It\'s best when you can sit outside, so come in summer.',
      'address' => 'Sobieskiplatz 4, 1090 Wien',
      'price' => 2,
      'best_for' => 'Dinner',
      'url' => 'http://www.the-highlander.at',
      'type' => 'Austrian',
    )
  );

?>
