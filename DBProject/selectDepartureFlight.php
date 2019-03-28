<?php include('session.php') ?>
<?php include('retrieveFlights.php') ?>
<html>
<body>
    
<head>
  <link rel="stylesheet" href="main.css">
</head>    

<title>The Internet Airline - Departure</title>
<h1>The Internet Airline</h1> 
<h3>Select Departure Flight</h3>
    
<?php include('navBar.php') ?> 
    
<div class="buttonFormat">
    <section>
        <content>
            <p style="text-align: center">Select a departure flight from the list below:</p>

            <form name="myForm" action="selectReturnFlight.php" method="post" onsubmit="return validate()">
                <?php
                        foreach($results as $row) {
                            echo '<input type="radio" id="r" name="flightID" value="'.htmlspecialchars($row['fid']). '">' . $origCityName . " -------> " . $destCityName . ' --------- Date :'.htmlspecialchars($row['fdate']).'<br>';     
                        }
                ?>
                
                <button type="submit" name="whatever">Submit</button>
            </form>       
        </content>
    </section>
</div>
<footer></footer>
</body>    
</html>

<script type="text/javascript">
function validate()
{
  var retval = false;
  for (var i=0; i < document.myForm.r.length; i++)
  {
    if (document.myForm.r[i].checked)
    {
      retval = true;
    }
  }  

  return retval;
}
</script>