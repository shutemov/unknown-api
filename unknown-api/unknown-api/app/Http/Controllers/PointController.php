<?php

namespace App\Http\Controllers;

use App\Point;
use App\RouteWay;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Point::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RouteWay $routeWay)
    {
        // TODO: add validation
        $title = $request->title;
        $xCoord = +$request->xCoord;
        $yCoord = +$request->yCoord;

        $routeWay->points()->create([
            'title' => $title,
            'xCoord' => $xCoord,
            'yCoord' => $yCoord
        ]);

        return $routeWay->points();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function show(RouteWay $routeWay)
    {
        $routeWay->load('points');
        return $routeWay;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function edit(Point $point)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Point $point)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Point  $point
     * @return \Illuminate\Http\Response
     */
    public function destroy(Point $point)
    {
        $point->delete();
        return response()->json('ok');
    }
}
