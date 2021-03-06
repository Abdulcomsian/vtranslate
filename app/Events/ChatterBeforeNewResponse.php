<?php

namespace App\Events;

use Illuminate\Http\Request;
use Validator;

class ChatterBeforeNewResponse
{
    /**
     * @var Request
     */
    public $request;

    /**
     * @var Validator
     */
    public $validator;

    /**
     * Constructor.
     *
     * @param Request   $request
     * @param Validator $validator
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
