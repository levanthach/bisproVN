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
                        <h3 class="kt-portlet__head-title">Thông tin khách hàng</h3>
                        </div>
                    </div>
                    </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <!-- /.col -->
                        <div class="col-md-12">
                            <div class="nav-tabs-custom" style="padding: 30px">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Họ tên') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="name" readonly value="{{ $try_service->name }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Phone') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="phone" readonly value="{{ $try_service->phone }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Email') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="email" readonly value="{{ $try_service->email }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Nghề nghiệp') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="position" readonly value="{{ $try_service->position }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Doanh nghiệp') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="business_name" readonly value="{{ $try_service->business_name }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                      <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Lĩnh vực') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="business_field" readonly value="{{ $try_service->business_field }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Dịch vụ đăng ký') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="product_try" readonly value="{{ $try_service->product_try }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>


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
