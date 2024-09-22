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
use Modules\Base\PrintDynamic\PrintDynamicFactory;
use PDF;

/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class HomeController extends Controller
{
     //Các kiểu in
     const HTML  = 'html';
     const WORD  = 'word';
     const PDF   = 'pdf';
     const EXCEL = 'excel';
    private $printDynamicFactory;
    public function __construct(
        PrintDynamicFactory $printDynamicFactory,
        UrlSearchService $UrlSearchService,
        SpecialtyService $specialtyService,
        CateService $cateService,
        CategoryService $categoryService,
        HomeService $homeService,
        BlogService $blogService,
        HospitalService $hospitalService
    ){
        $this->baseDis = public_path("export/") . "/";
        $this->printDynamicFactory      = $printDynamicFactory;
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
        if(!isset($_SESSION['idnhanvien'])){
            return view('auth.signin');
        }
        return view('client.home.home');
    }
    /**
     * Danh sách
     */
    public function loadList(Request $request)
    {
        try{
            if(!isset($_SESSION['idnhanvien'])){
                return view('auth.signin');
            }
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
                "idnhanvien" => $_SESSION['idnhanvien'],
            ];
            // dd($param);
            $response = Http::withBody(json_encode($param),'application/json')->post('118.70.182.89:89/api/result/searchchidinh');
            $response = $response->getBody()->getContents();
            $response = json_decode($response,true);
            $data = [];
            if($response['status'] == true){
                $data['success'] = true;
                $data['datas'] = $response['result'];
            }
            return view('client.home.loadlist', $data)->render();
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
        
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
        try{
            $input = $request->all();
            $id = 'id='.$input['id'];
            // $id = 'id=816477';
            $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getchidinhbyid?'.$id.'');
            $response = $response->getBody()->getContents();
            $response = json_decode($response,true);
            $data = [];
            if($response['status']['maketqua'] == 'OK'){
                $data = $response;
            }
            return view('client.home.changeEdit',$data);
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
    }
       /**
     * Thêm thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function luuchidinh (Request $request)
    {
        try{
            $input = $request->input();
            $param = [
                "idchidinhct" => $input['idchidinhct'],
                "tenchidinh" => $input['tenchidinh'],
                "idvungkhaosat" => $input['idvungkhaosat'],
                "denghi" => $input['denghi'],
                "idthietbi" => $input['idthietbi'],
                "yeucaudichvu" => $input['yeucaudichvu'],
                "noi_dung" => $input['noidung'],
                "noidung_html" => $input['noidunghtml'],
                "loidanchuyenkhoa" => $input['loidanchuyenkhoa'],
                "loidanchuyenkhoa" => $input['loidanchuyenkhoa'],
                "idbacsidocketqua" => $input['idbacsidocketqua'],
                "ketluan" => $input['ketluan'],
                "Document_Name" => $input['Document_Name'],
                "idnhanvien" => $_SESSION['idnhanvien'],
            ];
            $response = Http::withBody(json_encode($param),'application/json')->post('118.70.182.89:89/api/result/luuchidinh');
            $response = $response->getBody()->getContents();
            $response = json_decode($response,true);
            $data = [];
            if($response['status']['maketqua'] == 'OK'){
                $data['success'] = true;
                $data['datas'] = $response['result'];
            }
            return array('success' => true, 'message' => 'Cập nhật thành công');
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
    }
      /**
     * Thêm thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function duyetketqua (Request $request)
    {
        try{
            $input = $request->input();
            $param = [
                "idchidinhct" => $input['id'],
                "dakqua" => 3,
                "nguoitraketqua" => $_SESSION['idnhanvien'],
            ];
            $response = Http::withBody(json_encode($param),'application/json')->post('118.70.182.89:89/api/result/duyetketqua');
            $response = $response->getBody()->getContents();
            $response = json_decode($response,true);
            $data = [];
            if($response['status']['maketqua'] == 'OK'){
                $data['success'] = true;
                $data['datas'] = $response['result'];
                return array('success' => true, 'message' => 'Hủy thành công');
            }else{
                $data['success'] = false;
                return $data;
            }
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
    }
      /**
     * Thêm thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function huyduyetketqua (Request $request)
    {
        try{
            $input = $request->input();
            $param = [
                "idchidinhct" => $input['id'],
                "dakqua" => 2,
                "nguoitraketqua" => $_SESSION['idnhanvien'],
            ];
            // dd($param);
            $response = Http::withBody(json_encode($param),'application/json')->post('118.70.182.89:89/api/result/huyduyetketqua');
            $response = $response->getBody()->getContents();
            $response = json_decode($response,true);
            $data = [];
            if($response['status']['maketqua'] == 'OK'){
                $data['success'] = true;
                $data['datas'] = $response['result'];
                return array('success' => true, 'message' => 'Hủy thành công');
            }else{
                $data['success'] = false;
                return $data;
            }
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
    }
     /**
     * Xuất excel
     */
    public function export(Request $request)
    {
        try{
            $input = $request->all();
            $input['type'] = 'html';
            $printType = $input['type'];
            if($printType == 'html'){
                $id = 'id='.$input['id'];
                // $id = 'id=816477';
                $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getchidinhbyid?'.$id.'');
                $response = $response->getBody()->getContents();
                $response = json_decode($response,true);
                $data = [];
                if($response['status']['maketqua'] == 'OK'){
                    $data = $response;
                    $data['result'][0]['ngaychidinh'] = 'Ngày '. date('d',strtotime($data['result'][0]['ngaychidinh'])) . ' Tháng ' . date('m',strtotime($data['result'][0]['ngaychidinh'])). ' Năm ' . date('Y',strtotime($data['result'][0]['ngaychidinh']));
                    return view('client.home.viewHtml',$data);
                }
            }
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
    }
     /**
     * Xuất excel
     */
    public function printViewHtml(Request $request)
    {
        try{
            $input = $request->all();
            $input['type'] = 'html';
            $printType = $input['type'];
            if($printType == 'html'){
                $id = 'id='.$input['id'];
                // $id = 'id=816477';
                $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getchidinhbyid?'.$id.'');
                $response = $response->getBody()->getContents();
                $response = json_decode($response,true);
                $data = [];
                if($response['status']['maketqua'] == 'OK'){
                    $data = $response;
                    $data['result'][0]['ngaychidinh'] = 'Ngày '. date('d',strtotime($data['result'][0]['ngaychidinh'])) . ' Tháng ' . date('m',strtotime($data['result'][0]['ngaychidinh'])). ' Năm ' . date('Y',strtotime($data['result'][0]['ngaychidinh']));
                    $replace = ['<html xmlns="http://www.w3.org/1999/xhtml">', '<?xml version="1.0" ?>','</html>'];
                    $data['result'][0]['noidunghtml'] = str_replace($replace, '', $data['result'][0]['noidunghtml']);
                    return view('client.home.printViewHtml',$data);
                }
                
            }
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
    }
    
    
      /**
     * Load màn hình them thông tin người dùng
     *
     * @param Request $request
     *
     * @return view
     */
    public function getvungkhaosatbyid(Request $request)
    {
        try{
            $input = $request->all();
            $id = 'id='.$input['id'];
            $response = Http::withBody('','application/json')->get('118.70.182.89:89/api/result/getvungkhaosatbyid?'.$id.'');
            $response = $response->getBody()->getContents();
            $response = json_decode($response,true);
            $data = [];
            if($response['status']['maketqua'] == 'OK'){
                $data = $response['result'][0]['NoiDung_html'];
            }
            return $data;
        } catch (\Exception $e) {
            $data['success'] = false;
            return $data;
        }
    }
     /**
     * Xuất excel
     */
    public function print(Request $request)
    {
        $input = $request->all();
        $id = 'id='.$input['id'];
        // dd($input['html']);
        $pdf = PDF::loadHTML($input['html']);
        $random = Library::_get_randon_number();
        $fileName = 'FILE_KET_QUA.pdf';
        $fileName = Library::_replaceBadChar($fileName);
        $fileName = Library::_convertVNtoEN($fileName);
        $sFullFileName =  $input['id'] . "!~!" . $fileName;
        $pdf->save($sFullFileName);
        return array(
            'success' => true,
            'message' => 'Xuất thành công', 
            'urlfile' => url($sFullFileName));
    }
}
