<?php

namespace  Ywnsyage\Clickhouse\Database;

use Ywnsyage\ClickhouseBuilder\Query\Grammar;
use Ywnsyage\ClickHouse\Database\Query\Builder;

class Connection extends \Ywnsyage\ClickhouseBuilder\Integrations\Laravel\Connection
{

    public function query()
    {
        return new Builder($this, new Grammar());
    }
}