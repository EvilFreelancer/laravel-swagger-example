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
     *     title="User model",
     *     description="Some text field",
     *     @OA\Schema(ref="#/components/schemas/UserModel")
     * )
     *
     * @var UserModel
     */
    public $user;

    /**
     * @OA\Property(
     *     title="Profile model",
     *     description="Some text field",
     *     @OA\Schema(ref="#/components/schemas/ProfileModel")
     * )
     *
     * @var ProfileModel
     */
    public $profile;
}
