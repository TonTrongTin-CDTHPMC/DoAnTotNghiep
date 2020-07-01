<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Brand;
use Illuminate\Support\Facades\DB;
use App\LazadaRequest\LazopClient;
use App\LazadaRequest\LazopRequest;
use App\Http\Requests\KiemTraTaoSanPhamRequest;



class APISanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                          /*LazopClient truyền vào đường dẫn api lấy của kênh lazada nào:vd /api.lazada.vn.vn là của vn*/
       $stringketnoi= new LazopClient('https://api.lazada.vn/rest','120411','LCW7Yof4L6ewYY1TXAEt6zogbGiJ8VMe');
       $request = new  LazopRequest('/products/get',$httpMethod = 'GET');/*đường dẫn api*/
       $request->addApiParam('filter','all');
       $api= $stringketnoi->execute($request,'50000300429ywkabrulzgklOvRPdgYkyemshvqEXg19108bc5fu8LswcHg12GDyu');
      
       return view('QuanLySanPham')->with('api', json_decode($api, true));
    
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand =DB::table('brand')->get();
        return view('ThemSanPham',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KiemTraTaoSanPhamRequest $request)
    {
        
        $file=$request->Images;
        $filename=$file->getClientOriginalName();
        $file->move('imgSanPham/',$filename);
        $fileUrl='http://localhost/DoAnTotNghiep/public/imgSanPham/'.$filename;
        $SellerSku="SKU".time();
        $c = new LazopClient('https://api.lazada.vn/rest','120411','LCW7Yof4L6ewYY1TXAEt6zogbGiJ8VMe');
        $requestPOST = new LazopRequest('/product/create');
        $requestPOST->addApiParam('payload','<?xml version="1.0" encoding="UTF-8" ?><Request><Product><PrimaryCategory>10100416</PrimaryCategory><Attributes><name>'.$request->name.'</name><short_description>'.$request->short_description.'</short_description><brand>'.$request->brand.'</brand><model>'.$request->model.'</model></Attributes><Skus><Sku><SellerSku>'.$SellerSku.'</SellerSku><color_family>'.$request->color_family.'</color_family><size>'.$request->size.'</size><quantity>'.$request->quantity.'</quantity><price>'.$request->price.'</price><package_length>'.$request->package_length.'</package_length><package_height>'.$request->package_height.'</package_height><package_weight>'.$request->package_weight.'</package_weight><package_width>'.$request->package_width.'</package_width><package_content>'.$request->package_content.'</package_content><Images><Image>'.$fileUrl.'</Image></Images></Sku></Skus></Product></Request>');
   
    $api= $c->execute($requestPOST,'50000301135yGmaZ0F1lHsBSoH6fiP8ptyfnhLIwivxEDxB1a6247e1oQd1AGPto');
    
    $json=json_decode($api,true);
    if($json['code']=="0")
    {
     return "tạo thành công";
    }
    else
    {
      return messages();
    }

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
