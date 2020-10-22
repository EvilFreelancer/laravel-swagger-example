<?php

/**
 * @OA\Schema(
 *     type="object",
 *     title="Example complex model",
 *     description="Example complex object",
 * )
 */
class StoreRequest
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
