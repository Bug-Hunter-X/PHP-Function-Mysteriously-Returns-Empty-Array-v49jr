```php
function processData(array $data): array {
  // ... some code to process the data ...
  return $data;
}

$data = [1, 2, 3, 4, 5];
$processedData = processData($data);

// Unexpected behavior: $processedData is sometimes empty

if (empty($processedData)) {
  // Handle the empty array error
  echo "Error: Processed data is empty.";
}

```