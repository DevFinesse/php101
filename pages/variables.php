<?php include('../header.php'); ?>
<h2>Header</h2>
<p>Description.</p>
<p><a href="http://php.net/manual/en/function.echo.php" target="_blank">PHP Manual</a></p>

<div class="code-wrapper">
  <div class="code">
    <p class="code-label">variables.php</p>
    <?php highlight_file('../scripts/variables.php'); ?>
  </div>

  <div class="code">
    <p class="code-label">Results:</p>
    <?php include('../scripts/variables.php'); ?>
  </div>
</div>

<div class="code-wrapper">
  <div class="code">
    <p class="code-label">Notes:</p>
    <!-- Your notes go here -->
  </div>

  <div class="video">
    <!-- Video Embed Code -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HiNOeXZGqW0?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<?php include('../footer.php'); ?>
