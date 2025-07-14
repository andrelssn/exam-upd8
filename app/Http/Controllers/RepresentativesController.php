<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\Representatives;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class RepresentativesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function representativesCity(Request $request)
    {
        $params = [];

        if($request->city !== null) {
            $params['city'] = $request->city;
        };

        $list = $this->getRepresentativeList($params);
        $cityList = $this->getCity();

        $currentPage = $list->currentPage();
        $lastPage = $list->lastPage();

        return view('representativesCity', [
            'list'        => $list,
            'currentPage' => $currentPage,
            'lastPage'    => $lastPage,
            'cityList'    => $cityList,
        ]);
    }

     /**
     * Display a listing of the resource.
     */
    public function representativesClient(Request $request)
    {
        $params = [];

        if($request->city !== null) {
            $params['city'] = $request->city;
        };

        $list = $this->getRepresentativeList($params);
        $clientList = $this->getClient();

        $currentPage = $list->currentPage();
        $lastPage = $list->lastPage();

        return view('representativesClient', [
            'list'     => $list,
            'currentPage' => $currentPage,
            'lastPage'    => $lastPage,
            'clientList'    => $clientList,
        ]);
    }

     /**
     * Display a listing of the resource.
     */
    public function representativesManagement(Request $request)
    {
        $params = [];

        if($request->city !== null) {
            $params['city'] = $request->city;
        };

        $list = $this->getRepresentativeList($params);

        $currentPage = $list->currentPage();
        $lastPage = $list->lastPage();

        return view('representativesManagement', [
            'list'     => $list,
            'currentPage' => $currentPage,
            'lastPage'    => $lastPage,
        ]);
    }

    public function getRepresentativeList($params): LengthAwarePaginator
    {
        $list = Representatives::query()
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

    public function getClient(): Collection
    {
        $list = Clients::query()
            ->select("*")
            ->get();

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function new(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'      => 'required|string|max:255',
                'state'     => 'required|string|max:255',
                'city'      => 'required|string|max:255',
            ]);

            $client = Representatives::create($validated);

            if ($client) {
                return redirect('/representatives/management')->with('success', 'Representante cadastrado com sucesso!');
            } else {
                return redirect('/representatives/management')->with('fail', 'Erro ao cadastrar representante. Tente novamente.');
            }
        } catch (\Exception $e) {
            return redirect('/representatives/management')->with('fail', 'Erro inesperado: ' . $e->getMessage());
        }
    }

    public function editPage(Request $request)
    {
        $user = Representatives::find($request->id);

        return view('editRepresentative', ['user' => $user]);
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
        try {
            $validated = $request->validate([
                'name'      => 'required|string|max:255',
                'state'     => 'required|string|max:255',
                'city'      => 'required|string|max:255',
            ]);

            $person = Representatives::findOrFail($id);

            $updated = $person->update($validated);

            if ($updated) {
                return redirect()->route('editRepresentative', $id)->with('success', 'Representante atualizado com sucesso!');
            } else {
                return redirect()->route('editRepresentative', $id)->with('fail', 'Erro ao atualizar representante. Tente novamente.');
            }
        } catch (\Exception $e) {
            return redirect()->route('editRepresentative', $id)->with('fail', 'Erro inesperado: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $cliente = Representatives::findOrFail($id); // procura ou lança 404
            $cliente->delete();

            return redirect('/representatives/management')->with('success', 'Representante excluído com sucesso!');
        } catch (\Exception $e) {
            return redirect('/representatives/management')->with('fail', 'Erro ao excluir representante: ' . $e->getMessage());
        }
    }
}
