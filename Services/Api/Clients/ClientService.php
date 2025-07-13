<?php

namespace App\Services\Api\Clients;

use App\Models\Clients;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientService
{
    public function getClientsList($params): LengthAwarePaginator
    {
        $list = Clients::query()
            ->where($params)
            ->paginate(4);

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }
}
