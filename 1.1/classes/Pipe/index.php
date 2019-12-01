<?PHP
$data = file_get_contents('./pipes.json', true);
$data = json_decode($data, true);
header('Content-Type: application/json');
header('server: nginx');                                                                   
header('content-type: application/json;charset=utf-8');
header('vary: Accept-Encoding');
header('cache-control: no-cache,no-store');
header('pragma: no-cache');
header('content-encoding: gzip'); 
echo gzencode(json_encode($data));