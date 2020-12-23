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
                        <h3 class="kt-portlet__head-title">Thêm Release Node</h3>
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
                                <form class="form-horizontal form-profile" method="POST" action="{{ route('admin.release-node.save-release-node') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Tên Release Node') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                    
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <div class="row">
                                            <label for="inputName" class="col-sm-12 control-label">{{ __('Loại Node') }}</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="node_id">
                                                    @foreach ($node as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <label for="inputName" class="col-sm-12 control-label">{{__('Nội dung') }}</label>
                                                    <div class="col-sm-12">
                                                    <textarea class="form-control" name="content" id="content"></textarea>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-info">Thêm mới</button>
                                        <button type="reset" class="btn btn-default">Đặt lại</button>
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