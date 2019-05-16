<?php

/**
 * @OA\Schema(
 *     description="Some simple request createa as example",
 *     type="object",
 *     title="Example storring request",
 * )
 */
class ExampleStoreRequest
{
    /**
     * @OA\Property(
     *     title="Name",
     *     description="Some text field",
     *     format="string",
     *     example="test"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Value",
     *     description="Some integer",
     *     format="int64",
     *     example="123"
     * )
     *
     * @var int
     */
    public $value;
}
