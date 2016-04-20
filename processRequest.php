<?php require_once("softwares.php"); ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>processRequest</title>
    <link rel="stylesheet" href="mainstyle.css"/>
	</head>

	<body>
    <p> <h1><u>Order Confirmation</u></h1> </p>

		<?php
			$first_name = $_POST['F_name'];
      $last_name = $_POST["L_name"];
      $email_addr = $_POST['email_a'];
      $shipping_chosen = $_POST['shipping_choice'];
      $software_choices = $_POST["software_selections"];
      $text_area = $_POST["order_specs"];

      echo "<strong>Name:</strong>" . trim($first_name) . " " . trim($last_name)
        . " <strong>Email Address:</strong> " . trim($email_addr) . "<br/><br/>";
      echo "<strong>Shipping Method:</strong> $shipping_chosen<br/><br/>";
      echo "<strong>Software Ordered</strong><br/>";

      echo "<table border=\"1\">";
      echo "<tr>";
      echo "<td>Software</td>";
      echo "<td>Cost</td>";
      echo "</tr>";

      foreach ($software_choices as $key => $value) {
        echo "<tr>";
        echo "<td>$value</td>";
        echo "<td>$$softwares[$value]</td>";
        echo "</tr>";
      }

      echo "<tr>";
      echo "<td>Total Cost</td>";
      calc_total_cost($software_choices);
      echo "</tr>";
      echo "</table>";
      echo "<br/>";

      echo "<strong>Order Specifications:</strong><br/>";
      $text_area = trim(nl2br($text_area));
      echo "<i>$text_area<i/><br/>";

		?>
   </body>
</html>

<?php
  function calc_total_cost($software_choices) {
    include("softwares.php");
    $total = 0;
    foreach ($software_choices as $key => $value) {
      $total += intval($softwares[$value]);
    }
    $strtotal = strval($total);
    echo "<td>$$strtotal</td>";
  }
 ?>
