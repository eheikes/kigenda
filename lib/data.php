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
    ),
    array(
      'id' => 2,
      'name' => 'Community Events',
    ),
    array(
      'id' => 3,
      'name' => 'Special Events',
    ),
    array(
      'id' => 4,
      'name' => 'Fine Arts',
    ),
    array(
      'id' => 5,
      'name' => 'Classes &amp; Workshops',
    ),
    array(
      'id' => 6,
      'name' => 'School-Related',
    ),
  );

  $events = array(
    array(
      'id' => 1,
      'title' => 'Decision Making Workshop Series',
      'hours' => '11:30 AM  - 1:00 PM',
      'location' => 'DMACC campus',
      'price' => 'Free',
      'contact' => '<a href="mailto:jennifer@zachcoaching.com">Jennifer Zach</a>',
      'link' => 'http://events.r20.constantcontact.com/register/event?llr=giqsn7cab&oeidk=a07e6bev1g512442d48&oseq=a016ggohc86rd'
    ),
    array(
      'id' => 2,
      'title' => 'The University of Iowa Student Startup Fair',
      'hours' => '5:00 PM  - 7:00 PM',
      'location' => 'U of I campus here is a super long text',
      'price' => '$40 - $130',
      'contact' => 'Amy Jo Reimer-Myers',
      'link' => 'http://events.r20.constantcontact.com/register/event?llr=giqsn7cab&oeidk=a07e6bev1g512442d48&oseq=a016ggohc86rd'
    ),
    array(
      'id' => 3,
      'title' => 'Business Planning Workshop',
      'hours' => '11:30 AM  - 1:00 PM',
      'location' => 'DMACC campus',
      'price' => '$20',
      'contact' => '<a href="mailto:jennifer@zachcoaching.com">Jennifer Zach</a>',
      'link' => 'http://events.r20.constantcontact.com/register/event?llr=giqsn7cab&oeidk=a07e6bev1g512442d48&oseq=a016ggohc86rd'
    ),
  );
?>