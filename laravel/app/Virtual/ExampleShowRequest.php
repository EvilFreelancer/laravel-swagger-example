<?php

/**
 * @OA\Schema(
 *     type="object",
 *     title="Example showing request",
 *     description="Some simple request createa as example",
 * )
 */
class ExampleShowRequest
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="Unique ID",
     *     example="1",
     * )
     *
     * @var string
     */
    public $id;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Name of key for storring",
     *     example="random",
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Value",
     *     description="Value for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $value;
}
