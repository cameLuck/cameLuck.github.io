<?PHP
$data = file_get_contents('./pipes.json', true);
$data = json_decode($data, true);
header('Content-Type: application/json');
echo json_encode($data);