<H3>memory usage</H3>
<?php 
class Memoryusage{
    public function getMemoryUsage(){
        $current_memory = memory_get_Usage();

        $peak_memory = memory_get_peak_usage();

        $memory_limit = ini_get('memory_limit');

        $current_mb = round($current_memory / 1024 / 1024, 2);
        $peak_mb = round($peak_memory / 1024 / 1024 , 2);


        return [
            'current' => $current_mb . 'MB',
            'peak'=> $peak_mb . 'MB',
            'limit' => $memory_limit
        ];
    }   
}

$memoryUsage = new Memoryusage();
$memory_info = $memoryUsage->getMemoryUsage();

echo "Current Memory Usage: " . $memory_info['current'] . "<br>";
echo "Peak Memory Usage: " . $memory_info['peak'] . "<br>";
echo "Memory Limit: "  . $memory_info['limit'] . "<br>";
?>