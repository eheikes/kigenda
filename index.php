<?php require 'lib/data.php'; ?>
<?php require 'header.html'; ?>

<?php foreach ($dates as $key => $date): ?>
  <div class="col events">
    <h3><?php echo ($key == 0 ? "Today " . date('n/j', $date) : date('D n/j', $date)); ?></h3>
    <?php foreach ($categories as $cat): ?>
      <div class="cat">
        <?php $num_events = mt_rand(1, 10); ?>
        <h4 class="cat-<?php echo $cat['id']; ?>"><a href="#" title="show all" class="title"><?php echo $cat['name']; ?></a> <?php if ($num_events > 1): ?><a href="#" class="expander" title="show all">&raquo;</a><?php endif; ?></h4>
        <?php
          for ($j = 0; $j < $num_events; $j++): // loop through events
            $i = mt_rand(0, count($events)-1); // choose a random event
        ?>
        <div class="item-box event-<?php echo $events[$i]['id']; ?> <?php if ($j >= $num_per_cat): ?>hidden<?php endif; ?>">
          <h5><a href="#" class="title" title="see more info"><?php echo $events[$i]['title']; ?></a> <a href="#" class="sync icon-share" title="Send to calendar"></a></h5>
          <div class="info">
            <dl>
              <dt>Time</dt>
              <dd><?php echo $events[$i]['hours']; ?></dd>
              <dt>Location</dt>
              <dd><?php echo $events[$i]['location']; ?></dd>
              <dt>Price</dt>
              <dd><?php echo $events[$i]['price']; ?></dd>
              <dt>Contact</dt>
              <dd><?php echo $events[$i]['contact']; ?></dd>
              <dt>Website</dt>
              <dd><a href="<?php echo $events[$i]['link']; ?>"><?php echo substr($events[$i]['link'], 0, 20) . '...'; ?></a></dd>
            </dl>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>

<div id="login" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Log In</h3>
  </div>
  <div class="modal-body">
    <form action="" method="get" class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="inputUsername">Username</label>
        <div class="controls">
          <input type="text" id="inputUsername" placeholder="Username">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
          <input type="password" id="inputPassword" placeholder="Password">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <label class="checkbox">
            <input type="checkbox"> Remember me
          </label>
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary">Log In</a>
  </div>
</div>

<div id="signup" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Sign Up</h3>
  </div>
  <div class="modal-body">
    <p>We&#8217;re still building the KiGENDA website. If you&#8217;d like to be
      notified with updates, please enter your email address.</p>
    <form action="" method="get" class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email</label>
        <div class="controls">
          <input type="text" id="inputEmail" placeholder="Email address">
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary">Sign Up</a>
  </div>
</div>

<?php require 'footer.html'; ?>