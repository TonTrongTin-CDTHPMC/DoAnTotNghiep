<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
use App\Categorytree;
use App\LazadaRequest\LazopClient;
use App\LazadaRequest\LazopRequest;
use App\Http\Requests\KiemTraTaoSanPhamRequest;
class APIInsertDBController extends Controller
{
    public function LayThuongHieu()
    {
                          /*LazopClient truyền vào đường dẫn api lấy của kênh lazada nào:vd /api.lazada.vn.vn là của vn*/
       $stringketnoi= new LazopClient('https://api.lazada.vn/rest','120411','LCW7Yof4L6ewYY1TXAEt6zogbGiJ8VMe');
       $request = new  LazopRequest('/brands/get',$httpMethod = 'GET');/*đường dẫn api*/
       $request->addApiParam('offset','1');
       $request->addApiParam('limit','1000');
       $api= $stringketnoi->execute($request,'50000300429ywkabrulzgklOvRPdgYkyemshvqEXg19108bc5fu8LswcHg12GDyu');
       $json=json_decode($api,true);
       
     
       

       foreach ($json['data'] as $data) {
       	$brand=new Brand;
       	$brand->name=$data['name'];
       	$brand->brand_id=$data['brand_id'];
       	$brand->save();
       }
       
       
    }
    public function LayCategoryTree()
    {
                          /*LazopClient truyền vào đường dẫn api lấy của kênh lazada nào:vd /api.lazada.vn.vn là của vn*/
       $stringketnoi= new LazopClient('https://api.lazada.vn/rest','120411','LCW7Yof4L6ewYY1TXAEt6zogbGiJ8VMe');
       $request = new  LazopRequest('/category/tree/get',$httpMethod = 'GET');/*đường dẫn api*/
       $api= $stringketnoi->execute($request,'50000300429ywkabrulzgklOvRPdgYkyemshvqEXg19108bc5fu8LswcHg12GDyu');
       $json=json_decode($api,true);
       

       

     
        foreach ($json['data']{'0'}['children']{'0'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'1'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'2'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'3'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'4'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'5'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'6'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'7'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'9'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'10'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
        foreach ($json['data']{'0'}['children']{'10'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }

        foreach ($json['data']{'0'}['children']{'10'}['children']as $values) {
                echo $values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
         foreach ($json['data']{'0'}['children']as $values) {
                echo "Cấp 1".$values['name']."</br>";
                echo $values['leaf']."</br>";
                echo $values['category_id']."</br>";
        }
       
     /*   foreach ($json['data']as $values) {
             $Categorytree = new Categorytree;
             $Categorytree->name = $values['name'];
             $Categorytree->leaf = $values['leaf'];
             $Categorytree->category_id = $values['category_id'];
             $Categorytree->save();
        }
        */



       


          
    }
}
