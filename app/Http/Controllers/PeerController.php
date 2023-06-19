<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeerRequest;
use App\Http\Requests\UpdatePeerRequest;
use App\Http\Resources\PeerCollection;
use App\Models\Peer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Benchmark;

class PeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $count = $request->num;
        // Benchmark::dd([ fn () =>
        $peers = Peer::paginate($count);
        // ], 3);
        if ($count > 50) {
            return response()->json([
                "Message" => "Maximum number count exceeded"
            ], Response::HTTP_BAD_REQUEST);
        }
        return response()->json([
            'Data' => new PeerCollection($peers),
            'Total Count' => $count . " friends details were returned"
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peer $peer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peer $peer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeerRequest $request, Peer $peer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peer $peer)
    {
        //
    }

}
