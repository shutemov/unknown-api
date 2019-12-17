<?php

namespace App\Http\Controllers;

use App\RouteWay;
use App\User;
use Illuminate\Http\Request;

class RouteWayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RouteWay::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        // TODO: add validation


        $routeCreateState = $user->routes()->create([
            'title' => $request->title,
            'description' => $request->description,
            'interest' => $request->interest,
            'type' => $request->type,
        ]);

        return response()->json($routeCreateState);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\RouteWay $routeWay
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {

        return $user->load('routes')->routes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\RouteWay $routeWay
     * @return \Illuminate\Http\Response
     */
    public function edit(RouteWay $routeWay)
    {
        //
    }

    public function postGetRouteById(RouteWay $routeWay)
    {
        $route = RouteWay::find(['id'=>$routeWay->id]);
        return $route->load('points');
    }

    public function getRouteById(RouteWay $routeWay)
    {
        $route = RouteWay::find(['id'=>$routeWay->id]);
        return $route->load('points');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\RouteWay $routeWay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RouteWay $routeWay)
    {
        $routeWay->update([
            'title' => $request->title,
            'description' => $request->description,
            'interest' => $request->interest,
            'type' => $request->type,
        ]);
        return response()->json($routeWay);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\RouteWay $routeWay
     * @return \Illuminate\Http\Response
     */
    public function destroy(RouteWay $routeWay)
    {
        $routeWay->delete();
        return response()->json($routeWay);
    }
}
