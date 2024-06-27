<?php
namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'restaurant_id' => 'required|exists:restaurants,id'
        ]);

        Client::create($request->all());

        return redirect('/client')->with('success', 'Client created successfully');
    }

    public function show($id)
    {
        $clients = Client::findOrFail($id);
        return view('client.show', compact('clients'));
    }

    public function edit($id)
    {
        $clients = Client::findOrFail($id);
        return view('client.edit', compact('clients'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'restaurant_id' => 'required|exists:restaurants,id'
        ]);

        $clients = Client::findOrFail($id);
        $clients->update($request->all());

        return redirect('/client')->with('success', 'Client updated successfully');
    }

    public function destroy($id)
    {
        $clients = Client::findOrFail($id);
        $clients->delete();

        return redirect('/client')->with('success', 'Client deleted successfully');
    }
}
