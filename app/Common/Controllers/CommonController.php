<?php


namespace LarAPI\Common\Controllers;

use LarAPI\Common\Services\CommonService;
use LarAPI\Core\Http\BaseController;

class CommonController extends BaseController
{
    private $service;

    public function __construct(CommonService $commonService)
    {
        $this->service = $commonService;
    }

    public function index()
    {
        $this->service->buildTestWithGetParams();
    }
}
