<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Helpers\ApiResponse;
use Uasoft\Badaso\Helpers\Firebase\FCMNotification;
use Uasoft\Badaso\Helpers\GetData;
use Uasoft\Badaso\Models\DataType;
use Uasoft\Badaso\Controllers\BadasoBaseController;

class Controller extends BadasoBaseController
{
    public function browse(Request $request)
    {
        try {
            $slug = $this->getSlug($request);
            $data_type = $this->getDataType($slug);

            $only_data_soft_delete = $request->showSoftDelete == 'true';
            $data = $this->getDataList($slug, $request->all(), $only_data_soft_delete);
            
            return ApiResponse::onlyEntity($data);
        } catch (Exception $e) {
            return ApiResponse::failed($e);
        }
    }
}
