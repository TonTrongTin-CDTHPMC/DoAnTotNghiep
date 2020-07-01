@extends('MasterPage')
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
													<select class="form-control" id="linh_vuc_id" name="brand">
                                                    @foreach($brand as $brand)                                                        <option value="{{$brand->brand_id}}">
                                                            {{$brand->name}}
                                                        </option>

                                                    @endforeach
                                                </select>
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
											
											
									<footer class="card-footer">
										<div class="row justify-content-end">
											<div class="col-sm-9">
												<button class="btn btn-primary" type="submit">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
						
										
						                    
										</form>
									</div>
								</section>
							</div>
						</div>
@endsection