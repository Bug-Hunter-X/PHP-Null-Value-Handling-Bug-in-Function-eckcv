function foo(a, b) {
  //Handle null values explicitly
  $a = ($a === null) ? 0 : $a; // Replace null with 0 (or suitable default)
  $b = ($b === null) ? 0 : $b; // Replace null with 0 (or suitable default)

  //Check for other potential issues 
  if (!is_numeric($a) || !is_numeric($b)){
    return "Invalid input";
  }

  return $a + $b; // Example operation
} 