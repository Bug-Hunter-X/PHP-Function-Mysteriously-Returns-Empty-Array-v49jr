```php
function processData(array $data): array {
  // Create a copy to avoid unintended side effects
  $processedData = $data;
  
  // ... some code to process the data ...
  // Example: Removing even numbers
  $processedData = array_filter($processedData, fn($num) => $num % 2 !== 0);

  return $processedData;
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

// Check if the array is empty
if (empty($processedData)) {
  echo "Error: Processed data is empty.";
} else {
  print_r($processedData);
}

```