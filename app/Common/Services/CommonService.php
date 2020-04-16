<?php

namespace LarAPI\Common\Services;

use LarAPI\Models\Auth\User;
use LarAPI\Repositories\Common\CommonRepository;

class CommonService
{


    /** @var CommonRepository */
    private $commonRepository;


    public function __construct(CommonRepository $commonRepository)
    {
        $this->commonRepository = $commonRepository;
    }

    public function buildTestWithGetParams()
    {
        $params = [
            ['name', 'junior'],
            ['role_id', 1]
        ];
//        $result = $this->commonRepository->getAllBy('name', 'junior');
        $result = $this->commonRepository->getFirstByParams($params);
        $result = $this->commonRepository->getFirstOrFailByParams($params);
        $result = $this->commonRepository->getAllByParams($params);

        dd($result);
    }
}
