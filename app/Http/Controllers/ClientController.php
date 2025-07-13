<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Api\Clients\ClientsService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $clientsService;

    public function __construct(ClientsService $clientsService)
    {
        $this->clientsService = $clientsService;
    }

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
            $params['birth'] = $request->birth;
        };

        // if($request->state !== null) {
        //     $params['state'] = $request->state;
        // };

        // if($request->city !== null) {
        //     $params['city'] = $request->city;
        // };

        $clients = $this->clientsService->getClientsList($params);

        $currentPage = $clients->currentPage();
        $lastPage = $clients->lastPage();

        return view('consult', ['clients' => $clients, 'currentPage' => $currentPage, 'lastPage' => $lastPage]);
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
