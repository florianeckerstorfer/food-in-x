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
    ),
    array(
      'name' => 'Frank\'s',
      'description' => 'Excellent steaks and burgers for reasonable prices.',
      'address' => 'Laurenzerberg 2, 1010 Wien',
      'price' => 3,
      'best_for' => 'Dinner',
      'url' => 'http://www.franks.at/index.php?lang=en',
      'type' => 'Steak',
    ),
    array(
      'name' => 'Top Kino',
      'description' => 'An independent cinema with a bar and food until 11:30pm',
      'address' => 'Rahlgasse 1, 1060 Wien',
      'price' => 2,
      'best_for' => 'Late Night',
      'url' => 'http://www.topkino.at',
      'type' => 'Mixed',
    ),
    array(
      'name' => 'Restaurant Mader',
      'description' => 'On Mondays the great Schnitzl costs under €6.',
      'address' => 'Rüdigerstraße 12, 1150 Wien',
      'price' => 2,
      'best_for' => 'Dinner',
      'url' => 'http://www.restaurantmader.com',
      'type' => 'Austrian',
    ),
    array(
      'name' => 'Gasthaus Wolf',
      'description' => 'Excellent Austrian kitchen',
      'address' => 'Grosse Neugasse 20, 1040 Wien',
      'price' => 3,
      'best_for' => 'Dinner',
      'url' => 'http://www.gasthauswolf.at',
      'type' => 'Austrian',
    ),
    array(
      'name' => 'Tunnel',
      'description' => 'Try the Arabian breakfast.',
      'address' => 'Grosse Neugasse 20, 1040 Wien',
      'price' => 1,
      'best_for' => 'Breakfast',
      'url' => 'http://www.tunnel-vienna-live.at',
      'type' => 'Mixed',
    ),
    array(
      'name' => 'Kaffefabrik',
      'description' => 'Not technically food, but only one minute away from salon wichtig.',
      'address' => 'Favoritenstrasse 4-6, 1040 Wien',
      'price' => 1,
      'best_for' => 'Coffee',
      'url' => 'http://www.kaffeefabrik.at',
      'type' => 'Coffee',
    )
  );

?>
