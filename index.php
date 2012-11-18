<?php require 'lib/data.php'; ?>
<?php require 'header.html'; ?>

<?php foreach ($dates as $key => $date): ?>
  <div class="col events">
    <h3><?php echo ($key == 0 ? "Today " . date('n/j', $date) : date('D n/j', $date)); ?></h3>
    <?php foreach ($categories as $cat): ?>
      <?php 
        $these_events = array();
        foreach ($events as $event) { // loop through events
          if ($event['cat'] == $cat['xml']
          and $event['date'] == date('Y-m-d', $date)) {
            $these_events[] = $event;
          }
        }
      ?>
      <?php if (count($these_events) > 0): ?>
        <div class="cat">
          <h4 class="cat-<?php echo $cat['id']; ?>"><a href="#" title="show all" class="title"><?php echo $cat['name']; ?></a> <?php if (count($these_events) > $num_per_cat): ?><a href="#" class="expander" title="show all">&raquo;</a><?php endif; ?></h4>
          <?php foreach ($these_events as $j => $event): // loop through events ?>
            <div class="item-box event-<?php echo $event['id']; ?> <?php if ($j >= $num_per_cat): ?>hidden<?php endif; ?>">
              <h5>
                <a href="#" class="sync icon-share" title="Send to calendar"></a>
                <a href="#" class="title" title="see more info"><?php echo $event['title']; ?></a>
              </h5>
              <div class="info">
                <dl>
                  <?php if ($event['hours'] != ""): ?>
                    <dt>Time</dt>
                    <dd><?php echo $event['hours']; ?></dd>
                  <?php endif; ?>
                  <?php if ($event['location'] != ""): ?>
                    <dt>Location</dt>
                    <dd><?php echo $event['location']; ?></dd>
                  <?php endif; ?>
                  <?php if ($event['price']): ?>
                    <dt>Price</dt>
                    <dd><?php echo $event['price']; ?></dd>
                  <?php endif; ?>
                  <?php if ($event['contact']): ?>
                    <dt>Contact</dt>
                    <dd><?php echo $event['contact']; ?></dd>
                  <?php endif; ?>
                  <?php if ($event['link']): ?>
                    <dt>Website</dt>
                    <dd><a target="_blank" href="<?php echo $event['link']; ?>"><?php echo substr($event['link'], 0, 20) . '...'; ?></a></dd>
                  <?php endif; ?>
                </dl>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
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