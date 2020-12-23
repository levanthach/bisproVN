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
                        <h3 class="kt-portlet__head-title">Xem thông tin khách hàng</h3>
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
                                                <input type="text" class="form-control" name="name" readonly value="{{ $contact->name }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Công ty') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="company_name" readonly value="{{ $contact->company }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Điện thoại') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="phone" readonly value="{{ $contact->phone }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Email') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="email" readonly value="{{ $contact->email }}" required>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                    
                                     <div class="form-group row">
                                     <div class="col-md-12">
                                        <label for="inputName" class="col-sm-12 control-label">{{__('Lời nhắn') }}</label>
                    
                                        <div class="col-sm-12">
                                           <textarea class="form-control" name="content" id="content" readonly>{!! $contact->content !!}</textarea>
                                        </div>
                                        </div>
                                    </div>                    
                                    <div class="form-group row">
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