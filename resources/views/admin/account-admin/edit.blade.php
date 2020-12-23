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
                        <h3 class="kt-portlet__head-title">Sửa tài khoản</h3>
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
                                <form class="form-horizontal form-profile" method="POST" action="{{ route('admin.account.update-account', $user->id) }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <div class="row">
                                            <label for="name" class="col-sm-12 control-label">{{ __('Username') }}</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $user->username }}" required>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-md-6">
                                        <label for="email" class="col-sm-12 control-label">{{__('Email') }} </label>

                                        <div class="col-sm-12">
                                            <input disabled type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}" required>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                        <div class="row">
                                            <label for="password" class="col-sm-12 control-label">{{ __('Password mới') }}</label>
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" name="password" placeholder="password" required>
                                            </div>
                                        </div>

                                        </div>
                                        <div class="col-md-6">
                                        <label for="confirm" class="col-sm-12 control-label">{{__('Xác nhận password mới') }}</label>

                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" name="confirm" placeholder="Xác nhận password mới" required>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <input type="radio" name="role" value="1" @if($user->role == 1) checked @endif > Admin
                                            <input type="radio" name="role" value="0" class="ml-5" @if($user->role == 0) checked @endif> User
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-info">Cập nhật</button>
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
