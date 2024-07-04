<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
public function index()
{
    $users = Client::with('user')->get();

    $clients = Client::all();
return view('client.index', compact('clients', 'users'));
}

public function create()
{
    $users = User::all();
    $restaurants = Restaurant::all();
return view('client.create', compact( 'restaurants', 'users'));
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
    $restaurants = Restaurant::all();
    $users = User::all();
$clients = Client::findOrFail($id);
return view('client.edit', compact('clients', 'users', 'restaurants'));
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
