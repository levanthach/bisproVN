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
                        <h3 class="kt-portlet__head-title">Thêm bảng giá dịch vụ</h3>
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
                                <form class="form-horizontal form-profile" method="POST" action="{{ route('admin.price-list.save-price-list') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <div class="row">
                                            <label for="industry" class="col-sm-12 control-label">{{ __('Dịch vụ') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="industry" required>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <label for="inputName" class="col-sm-12 control-label">{{ __('Loại bảng giá') }}</label>
                                                <div class="col-sm-12">
                                                    <select name="category_id" class="form-control">
                                                        @foreach ($category as $item)
                                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <label for="inputName" class="col-sm-12 control-label">{{__('Chức năng') }}</label>
                                        <input type="text" class="form-control" name="modules" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <div class="row">
                                                <label for="price" class="col-sm-12 control-label">{{ __('Giá') }}</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="price" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <label for="min" class="col-sm-12 control-label">{{ __('Min') }}</label>
                                                <div class="col-sm-12">
                                                    <input type="number" class="form-control" name="min" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="max" class="col-sm-12 control-label">{{__('Max') }}</label>

                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" name="max" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-info">Thêm mới</button>
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
