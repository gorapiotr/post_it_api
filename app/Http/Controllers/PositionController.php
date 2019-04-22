<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePositionsRequest;
use App\Repositories\Position\PositionInterface;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public $position;

    public function __construct(PositionInterface $position)
    {
        $this->position = $position;
    }

    public function update(UpdatePositionsRequest $request)
    {
        $positions = $this->position->find(collect($request->positions)->map(function ($position) {
            return $position['id'];
        }))->sortBy('id');

        $result = null;
        $positions->map( function ($position) use ($request, &$result){
            $result = $position->update(collect($request->positions)->where('id', $position->id)->first());
        });

        return response()->json(['success' => $result]);
    }
}
