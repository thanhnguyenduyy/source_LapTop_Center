@extends('admin.layout.master')

@section('title')
	Cập nhập danh mục tin tức
@endsection

@section('content')  
	<div class="content-wrapper">
	    <section class="content-header">
	        <h1>
	            Danh mục tin tức
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/hang-san-xuat"><i class="fa fa-industry"></i> Danh mục tin tức</a></li>
	            <li class="active">Sửa</li>
	        </ol>
	    </section>

		<section class="content container-fluid">
			<div class="box box-primary">
			    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{Session('success')}}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{Session('error')}}
                    </div>
                @endif

				<form role="form" method="POST" enctype="multipart/form-data" action="admin/danh-muc-tin-tuc/sua/{{ $categoryNews->id }}">
			    	<input type="hidden" name="_token" value="{{csrf_token()}}">
			        <div class="box-body">
			            <div class="form-group">
			                <label for="txtName">Tên danh mục</label>
			                <input type="text" class="form-control" id="txtName" name="name" placeholder="Nhập tên danh mục" required="" value="{{ $categoryNews->name }}">
			            </div>

						<div class="form-group">
			                <label for="txtName">Thứ tự</label>
			                <input type="text" class="form-control" id="txtName" name="sort_order" placeholder="Nhập thứ tự" required="" value="{{ $categoryNews->sort_order }}">
			            </div>

						<div class="form-group">
						    <div class="radio">
						        <label>
						        <input type="radio" name="rdoActive" id="rdoActive1" value="1" 
								@if ($categoryNews->status == 1)
									{{ 'checked' }}
								@endif
						        >
						        Hoạt động
						    	</label>
						    	&nbsp;&nbsp;&nbsp;
						    	<label>
						        <input type="radio" name="rdoActive" id="rdoActive0" value="0" 
								@if ($categoryNews->status == 0)
									{{ 'checked' }}
								@endif
						        >
						        Không hoạt động
						        </label>
						    </div>
						</div>


			        </div>
			        <div class="box-footer">
			            <button type="submit" class="btn btn-primary">Sửa</button>
			        </div>
			    </form>
			</div>
	    </section>
	</div>
@endsection

