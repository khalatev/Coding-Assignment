<?php 
	error_reporting(E_ERROR | E_PARSE);
  $price=array();
// Function to return the minimum cost 
function minimumCost($price, $n) 
{ 
  
    $totalCost = 0; 
  
    // Calcualte minimum price 
    // of n-2 most costly person 
    for ($i = $n - 1; $i > 1; $i -= 2) { 
        if ($i == 2) { 
            $totalCost += $price[2] + $price[0]; 
        } 
        else { 
  
            // Both the ways as discussed above 
            $price_first = $price[$i] + $price[0] + 2 * $price[1]; 
            $price_second = $price[$i] + $price[$i - 1] + 2 * $price[0]; 
            $totalCost += min($price_first, $price_second); 
        } 
    } 
  
    // Calculate the minimum price 
    // of the two cheapest person 
    if ($n == 1) { 
        $totalCost += $price[0]; 
    } 
    else { 
        $totalCost += $price[1]; 
    } 
  
    return $totalCost; 
} 

   $price =  array(30, 40, 60, 70); 
    $n = sizeof($price) / sizeof($price[0]); 
  //echo $n;
   echo minimumCost($price, $n); 
	
	
	?>