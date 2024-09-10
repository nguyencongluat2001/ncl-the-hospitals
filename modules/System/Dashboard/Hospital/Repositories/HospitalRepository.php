<?php

namespace Modules\System\Dashboard\Hospital\Repositories;

use DB;
use Modules\Base\Repository;
use Modules\System\Position\Models\PositionModel;
use Modules\System\Dashboard\Hospital\Models\HospitalModel;

class HospitalRepository extends Repository
{
    public function model(){
        return HospitalModel::class;
    }
}
