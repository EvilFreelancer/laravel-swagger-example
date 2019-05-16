<?php

namespace App\Http\Controllers\API;

use App\Example;
use App\Http\Requests\ExampleStoreRequest;
use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    /**
     * @OA\Get(
     *     path="/examples",
     *     operationId="examplesAll",
     *     tags={"Pages"},
     *     summary="Display a listing of the resource",
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="The page number",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine"
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Example not found"
     *     )
     * )
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Example::query()->paginate(2);
        return response()->json($model);
    }

    /**
     * @OA\Post(
     *     path="/examples",
     *     operationId="exampleCreate",
     *     tags={"Pages"},
     *     summary="Create yet another example record",
     *     security={
     *       {"app_id": {}},
     *     },
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/ExampleStoreRequest")
     *     )
     * )
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExampleStoreRequest $request)
    {
        $item = new Example();
        $item->fill($request->all());
        $item->save();

        return response('', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
