<!DOCTYPE html>
<html lang="en">

<head>
  <!--Name: Oscar Rodriguez
 Filename: rodriguez-group#7-project-code.php
 Blackboard Username: orodriguez6
 Class Section: CTI.110.0005
 Purpose:
 -->
  <meta charset="utf-8" />
  <title>L13 Event Form </title>

</head>

<body>
  <?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $adultTickets = $_POST['adultTickets'];
    $childTickets = $_POST['childTickets'];
    $date = $_POST['date'];
    $totalAttend = $adultTickets + $childTickets;
    define ('TAX', 0.07);
    define ('ADULTcost', 79.50);
    define ('CHILDcost', 50);
    define ('MINfee', 0.50);
    define ('MAXfee', 1.00);
    define ('ATTENDcompare', 5);

    if ($totalAttend <= ATTENDcompare) {
      $fee = $totalAttend * MAXfee;
    }
    else {
      $fee = $totalAttend * MINfee;
    }

    $subTotal = ($adultTickets * ADULTcost) + ($childTickets * CHILDcost);
    $salesTax = ($subTotal * TAX);
    $totalCost = $subTotal + $salesTax + $fee;

    print ("<h1>Summary Ticket Cost for the Yours Truly Concert</h1>");
    print ("<br>");
    print ("<p>Thank you <b>".$name."</b> at <b>".$phone. "</b>. Details of your total cost <b>$" .number_format($totalCost, 2). "</b> are shown below:</p>");
    print ("<br>");
    print ("<ul><li>Adult tickets: ".$adultTickets);
    print ("<li>Child Tickets: ".$childTickets);
    print ("<li>Concert Date: ".$date);
    echo ("<li>Sub-Total: $" .number_format($subTotal, 2)."</li>");
    echo ("<li>Sales Tax: $" .number_format($salesTax, 2)."</li>");
    echo ("<li>Fee: $" .number_format($fee, 2). "</li><ul>");
    print ("<ul><li><h2>Total: $" .number_format($totalCost, 2). "</h2></li></ul>");
    print ("<br>");
    print ("<a href=rodriguez-group7-project-lp.html>Return to Main Page If You Want To Continue</a>");


  ?>
</body>

</html>
