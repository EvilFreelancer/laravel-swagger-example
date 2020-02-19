<?php

/**
 * @OA\Schema(
 *     description="Some simple request createa as example",
 *     type="object",
 *     title="Example user's model",
 * )
 */
class UserModel
{
    /**
     * @OA\Property(
     *     title="First Name",
     *     description="The first name",
     *     format="string",
     *     example="Сергей"
     * )
     *
     * @var string
     */
    public $first_name;

    /**
     * @OA\Property(
     *     title="Last Name",
     *     description="The last name",
     *     format="string",
     *     example="Сергеев"
     * )
     *
     * @var string
     */
    public $last_name;

    /**
     * @OA\Property(
     *     title="Email",
     *     description="Email of user",
     *     format="email",
     *     example="sergeev2@example.com"
     * )
     *
     * @var string
     */
    public $email;

    /**
     * @OA\Property(
     *     title="Phone",
     *     description="Phone of user",
     *     format="string",
     *     example="+7 (909) 123-45-88"
     * )
     *
     * @var string
     */
    public $phone;
}
