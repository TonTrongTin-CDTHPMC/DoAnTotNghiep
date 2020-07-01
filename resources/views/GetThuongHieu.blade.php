@extends('MasterPage')
 @section('main-content')
   
  
 			<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<button onclick='window.location.href="{{ route('insertDB.danh-sach-thuong-hieu') }}" 'id="addToTable" class="btn btn-primary">Thêm sản phẩm <i class="fas fa-plus"></i></button>
										
										</div>
						
										<h2 class="card-title">Danh sách sản phẩm</h2>
									</header>
						
								</section>
							</div>
			</div>
 
 
						
 @endsection