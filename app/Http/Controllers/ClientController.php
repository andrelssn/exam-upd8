<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $params = [];

        if($request->cpf !== null) {
            $params['cpf'] = $request->cpf;
        };

        if($request->name !== null) {
            $params['name'] = $request->name;
        };

        if($request->birth !== null) {
            $params['birthdate'] = $request->birth;
        };

        if($request->gender !== null) {
            $params['gender'] = $request->gender;
        };

        if($request->state !== null) {
            $params['state'] = $request->state;
        };

        if($request->city !== null) {
            $params['city'] = $request->city;
        };

        $clients = $this->getClientsList($params);
        $cityList = $this->getCity();
        $stateList = $this->getState();

        $currentPage = $clients->currentPage();
        $lastPage = $clients->lastPage();

        return view('consult', [
            'clients'     => $clients,
            'currentPage' => $currentPage,
            'lastPage'    => $lastPage,
            'cityList'    => $cityList,
            'stateList'   => $stateList
        ]);
    }

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

    public function getCity(): Collection
    {
        $list = Clients::query()
            ->select("city")
            ->groupBy("city")
            ->get();

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }

    public function getState(): Collection
    {
        $list = Clients::query()
            ->select("state")
            ->groupBy("state")
            ->get();

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
