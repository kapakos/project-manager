<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Client;
use App\Http\Requests\CreateClientRequest;
use Input;
use Redirect;


class ClientsController extends Controller {

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $clients = Client::all();
		return view('clients.index', compact('clients'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clients.create');
	}

	/**
	 * Store a newly created resource in storage.
     *
	 * @param CreateClientRequest $request
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        Client::create($input);

        return Redirect::route('clients.index')->with('message', 'Client created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Client $client
	 * @return Response
	 */
	public function show(Client $client)
	{
		return view('clients.show', compact('client'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Client $client
	 * @return Response
	 */
	public function edit(Client $client)
	{
        return view('clients.edit', compact('client'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Client $client
	 * @return Response
	 */
	public function update(Client $client)
	{
        $input = array_except(Input::all(), '_method');
        $client->update($input);

        return Redirect::route('clients.show', $client->slug)->with('message', 'Client updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Client $client
	 * @return Response
	 */
	public function destroy(Client $client)
	{
		$client->delete();

        return Redirect::route('clients.index')->with('message', 'Client deleted.');
	}

}
