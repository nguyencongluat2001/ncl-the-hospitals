<?php

namespace Modules\Client\Page\Home\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\Client\Page\Home\Services\HomeService;
use Modules\System\Dashboard\Blog\Services\BlogService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Category\Services\CateService;
use Illuminate\Support\Facades\Http;
use DB;
use Modules\System\Dashboard\Hospital\Services\HospitalService;
use Modules\System\Dashboard\Specialty\Services\SpecialtyService;
use Modules\System\Dashboard\UrlSearch\Services\UrlSearchService;
/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class HomeController extends Controller
{

    public function __construct(
        UrlSearchService $UrlSearchService,
        SpecialtyService $specialtyService,
        CateService $cateService,
        CategoryService $categoryService,
        HomeService $homeService,
        BlogService $blogService,
        HospitalService $hospitalService
    ){
        $this->UrlSearchService = $UrlSearchService;
        $this->specialtyService = $specialtyService;
        $this->cateService = $cateService;
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;
        $this->homeService = $homeService;
        $this->hospitalService = $hospitalService;
    }

    /**
     * khởi tạo dữ liệu, Load các file js, css của đối tượng
     *
     * @return view
     */
    public function index(Request $request)
    {
        $dataSearch = '';
        $datas['dataSearch'] = '';
        dd(123);
        return view('client.home.home',$datas);
    }
}
