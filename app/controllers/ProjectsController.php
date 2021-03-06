<?php

class ProjectsController extends AdminController {

	/**
	 * Send back all comments as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
        $projects = Projects::whereHas('user', function($query)
        {
            $query->where( 'user_id', '=', Auth::user()->id );
        })->get();

        return View::make('projects.index')->with('projects', $projects);
        // return View::make('portfolios/index', compact('laravelprojects'));
	}
	    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('projects.create');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Projects::create(array(
			'author' => Input::get('author'),
			'text' => Input::get('text')
		));

		return Response::json(array('success' => true));
	}

	/**
	 * Return the specified resource using JSON
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$projectimages = ProjectImages::find($id);

        return View::make('projects.show')->with('projectimages', $projectimages);
        // return View::make('portfolios.show', compact('laravelproject'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Projects::destroy($id);

		return Response::json(array('success' => true));
	}

}