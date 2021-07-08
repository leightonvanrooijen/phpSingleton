<?php

function loggerOne() {
    $logger = Logger::getInstance();
    $logger->log('Message 1');
    $logger->printLogs();
}
