<?php

/**
 * @OA\Schema(
 *     description="Some simple request createa as example",
 *     type="object",
 *     title="Example user's profile",
 * )
 */
class ProfileModel
{
    /**
     * @OA\Property(
     *     title="Birthday",
     *     description="The day",
     *     format="date",
     *     example="1985-05-11"
     * )
     *
     * @var string
     */
    public $birthday;

    /**
     * @OA\Property(
     *     title="INN of user",
     *     description="INN",
     *     format="number",
     *     example="1234567890"
     * )
     *
     * @var string
     */
    public $inn;

    /**
     * @OA\Property(
     *     title="Document type",
     *     description="Type of provided document",
     *     format="string",
     *     example="Паспорт РФ"
     * )
     *
     * @var string
     */
    public $document_type;

    /**
     * @OA\Property(
     *     title="Document serial",
     *     description="Serial number of provided document",
     *     format="number",
     *     example="1111"
     * )
     *
     * @var int
     */
    public $document_serial;

    /**
     * @OA\Property(
     *     title="Document number",
     *     description="Number of provided document",
     *     format="number",
     *     example="222222"
     * )
     *
     * @var int
     */
    public $document_number;

    /**
     * @OA\Property(
     *     title="Document date",
     *     description="Date of registration of provided document",
     *     format="date",
     *     example="2015-11-12"
     * )
     *
     * @var int
     */
    public $document_date;

    /**
     * @OA\Property(
     *     title="Document department code",
     *     description="Department code of provided document",
     *     format="string",
     *     pattern="^\d{2,5}-\d{2,5}",
     *     example="111-222"
     * )
     *
     * @var string
     */
    public $document_department_code;

    /**
     * @OA\Property(
     *     title="Document department name",
     *     description="Department name of provided document",
     *     format="string",
     *     example="УВД г. Москвы"
     * )
     *
     * @var string
     */
    public $document_department_name;

    /**
     * @OA\Property(
     *     title="Registry address",
     *     description="Registry address of provided document",
     *     format="string",
     *     example="г. Москва, ул. Рябиновая, д. 15, кв. 11"
     * )
     *
     * @var string
     */
    public $registry_address;
}
