<?php

class Logger
{
    private static array $instances = [];
    private static array $logs = [];

    public static function getInstance()
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function log(string $message) {
        self::$logs[] = $message;
    }

    public function printLogs() {
        foreach(self::$logs as $log) {
            echo '<h2> Log: ' . $log . '</h2>';
        }
        echo '<h1>' . '__________' . '</h1>';
    }
}
