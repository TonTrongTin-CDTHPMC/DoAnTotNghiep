@extends('MasterPage')
 @section('main-content')
   
  
 			<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<button onclick='window.location.href="{{ route('quanly_sanpham.form-them-sp') }}" 'id="addToTable" class="btn btn-primary">Thêm sản phẩm <i class="fas fa-plus"></i></button>
										
										</div>
						
										<h2 class="card-title">Danh sách sản phẩm</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-details">
											<thead>
												<tr>
													<th>Tên sản phẩm</th>
													<th>Mô tả ngắn</th>
													<th>Thương hiệu</th>
													<th>Dòng Sản phẩm</th>
													
												</tr>
											</thead>
											<tbody>	
						@foreach($api['data']['products'] as $member)  								
							<tr class="gradeU">

								<td>{{ $member['attributes']['name'] }}</td>
								<td>{{ $member['attributes']['short_description'] }}</td>
								<td>{{ $member['attributes']['brand'] }}</td>
								<td>{{ $member['attributes']['model'] }}</td>
								  
										  
						  </tr>
						@endforeach
											</tbody>
										</table>
									</div>
								</section>
							</div>
			</div>
 
 
						
 @endsection