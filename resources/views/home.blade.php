@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thông báo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bạn đã đăng nhập thành công!') }}
                        <br>
                    {{ __('Vui lòng chọn chức năng bên duới!') }}
                </div>
                <div class="card-body">
                    <a href="/products">Quản lý sản phẩm</a><br>
                    <a href="/products">Quản lý khách hàng</a><br>
                    <a href="/products">Doanh số</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
