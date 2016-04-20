<?php
    require_once("softwares.php");
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Request Form</title>
        <link rel="stylesheet" href="mainstyle.css"/>
	</head>
    <body>
      <form action="processRequest.php" method="post">
        <p>
          <h2><u>Order Request Form</u></h1>
        </p>

        <p>
          <strong>First Name:</strong> <input type="text" name="F_name" />
          <strong>Last Name:</strong> <input type="text" name="L_name" />
        </p>

        <p>
          <strong>Email Address:</strong> <input type="email" name="email_a" />
        </p>

        <p>
          <strong>Choose your software:</strong>
        </p>
        <p>
          <?php
            echo "<select name = \"software_selections[]\" size=\"6\" multiple>";
              foreach($softwares as $soft => $price) {
                echo "<option value=$soft>$soft ($$price)</option>";
              }
            echo "</select>";
          ?>
        </p>

        <p>
          <strong>Choose your shipping:</strong>
          <input type="radio" name="shipping_choice" value="Horseback">Horseback
          <input type="radio" name="shipping_choice" value="Drone Delivery">Drone Delivery
          <input type="radio" name="shipping_choice" value="Rocket Propelled">Rocket Propelled
          <input type="radio" name="shipping_choice" value="Snail Mail"checked>SnailMail
        </p>

        <p>
          <strong>Order Specifications:</strong>
        </p>
        <p>
          <textarea name="order_specs" cols="75" rows="15" wrap="hard" ></textarea>
        </p>

        <!--We need the submit button-->
        <p>
          <input type = "reset" name = "reset" value="Reset Fields"/>
          <input type="submit" value="Submit Request"/>
        </p>
      </form>

    </body>

</html>
