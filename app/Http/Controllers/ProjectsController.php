<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Client;
use App\Project;
use Input;
use Redirect;

class ProjectsController extends Controller {

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
     * @param Client $client
	 * @return Response
	 */
	public function index(Client $client)
	{
		return view('projects.index', compact('client'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
     * @param Client $client
	 * @return Response
	 */
	public function create(Client $client)
	{
		return view('projects.create', compact('client'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param Client $client
	 * @return Response
	 */
	public function store(Client $client)
	{
        $input = Input::all();
        $input['client_id'] = $client->id;
        Project::create($input);

        return Redirect::route('clients.show', $client->slug)->with('message', 'Project created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Client  $client
	 * @param  Project  $project
	 * @return Response
	 */
	public function show(Client $client, Project $project)
	{
		return view('projects.show', compact('client', 'project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Client $client
	 * @param  Project  $project
	 * @return Response
	 */
	public function edit(Client $client, Project $project)
	{
		return view('projects.edit', compact('client', 'project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Client $client
	 * @param  Project  $project
	 * @return Response
	 */
	public function update(Client $client, Project $project)
	{
		$input = array_except(Input::all(), '_method');
        $project->update($input);

        return Redirect::route('clients.projects.show', [$client->slug, $project->slug ])->with('message', 'Task updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Client $client
	 * @param  Project  $project
	 * @return Response
	 */
	public function destroy(Client $client, Project $project)
	{
		$project->delete();

        return Redirect::route('clients.show', $project->slug)->with('message', 'Project deleted.');
	}

}
