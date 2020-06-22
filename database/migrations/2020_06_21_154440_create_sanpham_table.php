<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PrimaryCategory'); /*ID Danh mục đồng hồ thông minh:10100416*/  
            $table->string('name');/*Tên sản phẩm*/
            $table->string('short_description');/*Đặc điểm nổi bật*/
            $table->string('description');/*Mô tả sản phẩm (Lorikeet)*/
            $table->string('video'); /*Đường dẫn video*/
            $table->string('country_origin_hb');/*Nước sản xuất*/
            $table->string('brand');/*Thương hiệu*/
            $table->string('model');/*Dòng sản phẩm*/
            $table->string('color_family');/*Nhóm màu*/
            $table->string('Image');/*hình ảnh sp*/
            $table->string('color_thumbnail');/*Khung sản phẩm*/
            $table->string('smartwatch_storage');/*Bộ nhớ khả dụng*/
            $table->string('wear_acc_strap_material');/*Loại chất liệu dây*/
            $table->string('wear_acc_function');/*Chức năng*/
            $table->string('smartwatch_dial_size');/*Kích thước mặt*/
            $table->string('app_activity_type'); /*Loại hoạt động*/
            $table->string('smartwear_model_compa');/*Dòng sản phẩm tương thích*/
            $table->string('wear_acc_feature');/*Đặc điểm đồng hồ*/
            $table->string('os_compatibility');/*Compatible*/
            $table->string('wear_acc_connectivity');/*Kết nối đồng hồ*/
            $table->string('warranty_type');/*Loại bảo hành*/
            $table->string('smartwear_size');/*Kích thước đồng hồ*/
            $table->string('package_content');/*Bộ sản phẩm đầy đủ*/
            $table->string('SellerSku'); /*SellerSku*/
            $table->string('warranty');/*Thời gian bảo hành*/
            $table->string('name_en');/*Name (English)*/
            $table->string('quantity');/*Số lượng*/
            $table->string('product_warranty'); /*Chính sách bảo hành*/
            $table->integer('price');/*Gía*/
            $table->string('product_warranty_en');/*Chính sách bảo hành EngLish*/
            $table->integer('special_price');/*Gía đặc biệt*/
            $table->integer('delivery_option_express');/*Tùy chọn giao hàng*/
            $table->integer('description_en');/*Mô tả sản phẩm tiếng Anh*/
            $table->dateTime('special_from_date');/*Ngày khuyến mãi*/
            $table->dateTime('special_to_date');/*Ngày kết thúc khuyến mãi*/
            $table->integer('delivery_option_economy');/*Delivery Option Economy*/
            $table->integer('package_weight');/*Package Weight (kg)*/
            $table->integer('package_length');/*Chiều dài(cm)*/
            $table->integer('package_width');/*Chiều rộng(cm)*/
            $table->integer('package_height');/*Chiều cao(cm)*/
            $table->integer('Hazmat');/*Chất liệu nguy hiểm*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
