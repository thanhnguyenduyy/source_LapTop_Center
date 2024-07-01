@extends('admin.layout.master')

@section('title')
	Cập nhập liên hệ
@endsection

@section('content')  
	<div class="content-wrapper">
	    <section class="content-header">
	        <h1>Liên hệ</h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/slide"><i class="fa fa-image"></i> Liên hệ</a></li>
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
			    <form role="form" method="POST"  action="admin/setting/lien-he/{{ $lienHe->id }}">
			    	<input type="hidden" name="_token" value="{{csrf_token()}}">
			        <div class="box-body">
			            <div class="form-group">
			                <label for="txtName">Tiêu đề</label>
			                <input type="text" class="form-control" id="txtName" name="title_lienhe" placeholder="Nhập tiêu đề" required="" value="{{ $lienHe->title_lienhe }}">
			            </div>

                        <div class="form-group">
			                <label for="txtName">Địa chỉ</label>
			                <input type="text" class="form-control" id="txtName" name="diachi" placeholder="Nhập địa chỉ" required="" value="{{ $lienHe->diachi }}">
			            </div>

                        <div class="form-group">
			                <label for="txtName">Email</label>
			                <input type="text" class="form-control" id="txtName" name="email" placeholder="Nhập email" required="" value="{{ $lienHe->email }}">
			            </div>

                        <div class="form-group">
			                <label for="txtName">Phone</label>
			                <input type="text" class="form-control" id="txtName" name="phone" placeholder="Nhập số điện thoại" required="" value="{{ $lienHe->phone }}">
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