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
        return view('client.home.home',$datas);
    }
    /**
     * Danh sách
     */
    public function loadList(Request $request)
    {
        $input = $request->input();
        $tungay = date('m-d-Y', strtotime($input['tungay']));
        $denngay = date('m-d-Y', strtotime($input['denngay']));
        if($input['pid'] == null){
            $input['pid'] = '';
        }
        if($input['tenbn'] == null){
            $input['tenbn'] = '';
        }
        $param = [
            "pid" => $input['pid'],
            "tenbn" => $input['tenbn'],
            "tungay" => $tungay,
            "denngay" => $denngay,
            "trangthai" => $input['trangthai'],
            "idkhoathuchien" => $input['idkhoathuchien'],
            "matram" => $_SESSION["matram"],
            "idnhanvien" => '-1'
        ];
        // dd($param);
        $response = Http::withBody(json_encode($param),'application/json')->post('118.70.182.89:89/api/result/searchchidinh');
        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        $data = [];
        if($response['status'] == true){
            $data['datas'] = $response['result'];
        }
        return view('client.home.loadlist', $data)->render();
    }
       /**
     * Load màn hình them thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function createForm(Request $request)
    {
        $input = $request->all();
        $id = 'id='.$input['id'];
        $id = 'id=816477';
        $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getchidinhbyid?'.$id.'');
        $response = $response->getBody()->getContents();
        $response = json_decode($response,true);
        $data = [];
        if($response['status']['maketqua'] == 'OK'){
            $data = $response;
        }
        return view('client.home.changeEdit',$data);
    }
       /**
     * Thêm thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function create (Request $request)
    {
        $input = $request->input();
        dd($input);
        $create = $this->blogService->store($input,$_FILES); 
        return array('success' => true, 'message' => 'Cập nhật thành công');
    }
}
