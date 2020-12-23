@extends('admin.layout.index')
@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Sửa sản phẩm</h3>
                        </div>
                    </div>
                    </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <!-- /.col -->
                        <div class="col-md-12">
                            <div class="nav-tabs-custom" style="padding: 30px">
                                @if(count($errors) > 0)
                                    @foreach($errors->all() as $err)
                                    <div class="alert alert-danger">
                                        {{$err}} <br>
                                    </div>
                                    @endforeach
                                @endif
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{session('success')}}
                                    </div>
                                @endif
                                <form class="form-horizontal form-profile" method="POST" action="{{ route('admin.product.update-product', $product->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="industry" class="col-sm-12 control-label">{{ __('Tên sản phẩm') }}</label>
                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">

                                    </div>
                                    <div class="form-group row">
                                        <label for="target" class="col-sm-12 control-label">{{__('Miêu tả') }}</label>
                                         <textarea class="form-control" name="description" id="description">{!! $product->description !!}</textarea>

                                    </div>

                                    <div class="form-group row">
                                        <label for="target" class="col-sm-12 control-label">{{__('Nội dung') }}</label>
                                        <div class="col-md-12">
                                            <div class="row">
                                                    <div class="col-sm-12">
                                                    <textarea class="form-control" name="content" id="content">{!! $product->content !!}</textarea>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="target" class="col-sm-12 control-label">{{__('Icon') }}</label>
                                        <img src="../../images/{{ $product->images }}" alt="{{ $product->images }}" width="100px">
                                        <input type="file" class="form-control" name="images">

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-info">Cập nhật</button>
                                            <button type="reset" class="btn btn-info">Đặt lại</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.row -->

                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>

@endsection
