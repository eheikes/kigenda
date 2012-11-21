<?php
  $num_per_cat = 1;

  $dates = array();
  $now = time();
  for ($i = 0; $i < 5; $i++) {
    $dates[] = $now + ($i * 60*60*24);
  }

  $categories = array(
    array(
      'id' => 1,
      'name' => 'Sporting Events',
      'xml'  => 'Sporting Events',
    ),
    array(
      'id' => 2,
      'name' => 'Community Events',
      'xml'  => 'Community Events',
    ),
    array(
      'id' => 3,
      'name' => 'Special Events',
      'xml'  => 'Special Events',
    ),
    array(
      'id' => 4,
      'name' => 'Fine Arts',
      'xml'  => 'Fine Arts',
    ),
    array(
      'id' => 5,
      'name' => 'Classes &amp; Workshops',
      'xml'  => 'Classes and Workshops',
    ),
    array(
      'id' => 6,
      'name' => 'School-Related',
      'xml'  => 'School-Related',
    ),
  );

  $xml = simplexml_load_file(__DIR__.'/test.xml');
  $events = array();
  $event_counter = 1;
  foreach ($xml->TEST as $item) {
    $timestamp = strtotime((string)$item->Event_DateTime);
    //echo "<pre>"; var_dump($item); echo "</pre>";
    $new_event = array(
      'id' => $event_counter,
      'title' => $item->Event_Title,
      'cat' => $item->Event_Cat,
      'hours' => date('g:ia', $timestamp),
      'date' => date('Y-m-d', $timestamp),
      'location' => $item->Event_Location,
      'distance' => $item->Event_Distance,
      'price' => $item->Event_Price,
      'contact' => $item->Event_Contact,
      'link' => $item->Event_WebSite,
    );
    $event_counter++;
    $events[] = $new_event;
  }
?>