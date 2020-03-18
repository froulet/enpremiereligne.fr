<?php

namespace App\Statistics;

use Doctrine\DBAL\Driver\Connection;

class StatisticsAggregator
{
    private Connection $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function countTotalRequests()
    {
        dump($this->db);exit;
    }
}
