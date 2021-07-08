<?php

function loggerTwo() {
    $logger = Logger::getInstance();
    $logger->log('Message 2');
    $logger->printLogs();
}
