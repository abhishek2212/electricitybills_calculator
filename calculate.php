<?php
$result_str = $result = '';
$units;
if (isset($_POST['submit'])) {
  $units = $_POST['units'];

  if (!empty($units)) {
    $result = calculate_bill($units);
    $result_str = $units . ' Unit is- ' . $result;
  }
}
/*
    To calculate electricity  
  */
function calculate_bill($units)
{
  $unit_cost_first = 9;
  $unit_cost_second = 12;
  $unit_cost_third = 15;

  if ($units <= 50) {
    $bill = $units * $unit_cost_first;
  } elseif ($units > 50 && $units <= 100) {
    $temp = 50 * $unit_cost_first;
    $remaining_units = $units - 50;
    $bill = $temp + ($remaining_units * $unit_cost_second);
  } elseif ($units > 100 && $units <= 1000000) {
    $temp = (50 * 12) + (100 * $unit_cost_second);
    $remaining_units = $units - 150;
    $bill = $temp + ($remaining_units * $unit_cost_third);
  }
  return number_format((float) $bill, 2, '. ', '');
}


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
  <h5 class="center">Electricity Bills Calculator</h5>
  <form class="white" style="height: 135px;" action="" method="POST">
    <label style="font-size:16px;">Units</label>
    <input type="number" name="units" placeholder="Please enter no. of Units">
    <br>
    <div class="center">
      <input type="submit" name="submit" value="submit" class="btn blue accent-2 z-depth-0">
    </div>
  </form>
</section>
<div class="container center grey-text">
  <div class="row">
    <table class="highlight centered">
      <thead>
        <tr>
          <th>Total amount of </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php echo $result_str; ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<?php include('templates/footer.php'); ?>

</html>