<?php

namespace IamKeshariNandan\LaravelDynamodb\Database\Connectors;

use Aws\DynamoDb\DynamoDbClient;
use Illuminate\Database\Connectors\ConnectorInterface;

class DynamoDBConnector implements ConnectorInterface
{
    /**
     * Establish a database connection.
     *
     * @param  array  $config
     * @return mixed
     */
    public function connect(array $config)
    {
        return new DynamoDBClient($config);
    }
}
