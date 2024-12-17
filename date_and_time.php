<h3>Data and Time</h3>



<div>Date: <?php  echo date('d-m-Y H:i:s'); ?></div>
<div>Time: <?php echo time(); ?></div>
<div>Timestamp: <?php echo mktime(0, 0, 0, 1, 1, 2024); ?></div>
<div>Date: <?php echo date("Y-m-d H:i:s",mktime(1, 1, 1, 1, 1, 2024)); ?></div>
<div>Total Day Month: <?php echo date('t'); ?></div>
<div>Week Number: <?php echo date("W"); ?></div>