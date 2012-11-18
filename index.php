<?php require 'lib/data.php'; ?>
<?php require 'header.html'; ?>

<!-- <div class="span3 nav">
  <div class="date">
    <input type="button" value="&laquo;">
    <input type="hidden" value="2012-11" id="datepicker">
    <input type="button" value="&raquo;">
  </div>
  <div class="filter">
    <h5>Filter</h5>
    <?php foreach ($categories as $cat): ?>
      <a href="#" class="event-<?php echo $cat['id']; ?>"><span class="icon-ok"></span> <?php echo $cat['name']; ?></a>
    <?php endforeach; ?>
  </div>
</div>
 -->

<?php foreach ($dates as $key => $date): ?>
  <div class="col events">
    <h3><?php echo ($key == 0 ? "Today " . date('n/j', $date) : date('D n/j', $date)); ?></h3>
    <?php foreach ($categories as $cat): ?>
      <div class="cat">
        <h4 class="cat-<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?><a href="#" title="show all">&raquo;</a></h4>
        <?php
          for ($j = 0; $j < mt_rand(1, 10); $j++): // loop through events
            $i = mt_rand(1, count($events)-1); // choose a random event
        ?>
        <div class="item-box event-<?php echo $events[$i]['id']; ?> <?php if ($j >= $num_per_cat): ?>hidden<?php endif; ?>">
          <h5><?php echo $events[$i]['title']; ?> <a href="#" class="sync icon-share" title="Send to calendar"></a></h5>
          <div class="info">
            <dl>
              <dt>Hours</dt>
              <dd><?php echo $events[$i]['hours']; ?></dd>
              <dt>Contact</dt>
              <dd><?php echo $events[$i]['contact']; ?></dd>
              <dt>Website</dt>
              <dd><?php echo $events[$i]['link']; ?></dd>
            </dl>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    <?php endforeach; ?>
    <p class="empty">Sorry, no events found.</p>
  </div>
<?php endforeach; ?>

<?php require 'footer.html'; ?>