@extends('master')
@section('main-content')
@if (count($errors)>0)
      @foreach ($errors->all() as $error)
	<div class="alert alert-danger" role="alert">
	<strong>{{$error}}</strong>
	</div>					
      @endforeach
@endif
<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Form Elements</h2>
									</header>
									<div class="card-body">
										<form action="{{ route('quanly_sanpham.themsp_ok') }}" class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">
											@csrf
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Tên Sản phẩm</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="name">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Mô tả ngắn</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="short_description">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Dòng sản phẩm</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="model">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Ảnh minh họa</label>
												<div class="col-lg-6">
													<input  type="file" class="form-control" id="inputDefault" name="Images">
												</div>
											</div>
						
										
						
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Thương Hiệu</label>
												<div class="col-lg-6">
													<input type="text" value="Remark" id="inputReadOnly" class="form-control" readonly="readonly" name="brand">
												</div>
											</div>

												<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Nhóm màu</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault"  value="Green" readonly="readonly" name="color_family">
												</div>
											</div>
						                    <div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Size
												</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="size">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Số lượng
												</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="quantity">
												</div>
											</div>
						                    <div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Giá
												</label>
												<div class="col-lg-6">
													<input type="text"  class="form-control" id="inputDefault" name="price">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Chiều dài hộp đựng
												</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="package_length">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Chiều cao hộp đựng
												</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="package_height">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Chiều rộng hộp đựng
												</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="package_width">
												</div>
											</div>

												<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Trọng lượng hộp đựng
												</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="package_weight">
												</div>
											</div>
												<div class="form-group row">
												<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">
													Thông tin hộp đựng
												</label>
												<div class="col-lg-6">
													<input type="text" class="form-control" id="inputDefault" name="package_content">
												</div>
											</div>
											<div class="form-group row">
												
												<button type="submit" class="col-lg-2 control-label text-lg-right pt-2" id="addToTable" class="btn btn-primary">Thêm sản phẩm <i class="fas fa-plus"></i></button>
											</div>
						
						
										
						                    
										</form>
									</div>
								</section>
							</div>
						</div>
@endsection