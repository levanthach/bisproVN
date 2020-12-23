@extends('admin.layout.index')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Sản phẩm
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">

                            <a href="{{ route('admin.product.create-product') }}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                                Thêm sản phẩm
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-portlet__body">
                <!--begin: Search Form -->
                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="row align-items-center">
                            <div class="col-md-5 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-input-icon kt-input-icon--left">
                                    <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--end: Search Form -->
            </div>
            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin: Datatable -->
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="json_data" style="">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <table class="kt-datatable__table" style="display: block;">
                        <thead class="kt-datatable__head">
                            <tr class="kt-datatable__row" style="left: 0px;">
                                <th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Tên sản phẩm</span></th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Miêu tả</span></th>
                                <th class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Icon</span></th>
                                <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Hành động</span></th>
                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body" style="">
                            @foreach ($products as $item)
                                <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                    <td class="kt-datatable__cell"><span style="width: 133px;">{{ $item->name }}</span></td>
                                    <td class="kt-datatable__cell"><span style="width: 133px;">{{ $item->description }}</span></td>
                                    <td class="kt-datatable__cell"><span style="width: 133px;"><img src="../images/{{ $item->images}}" width="50px"></span></td>
                                    <td data-autohide-disabled="false" class="kt-datatable__cell">
                                        <span style="overflow: visible; position: relative; width: 110px;">
                                            <a href="{{ route('admin.product.edit-product', $item->id ) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">
                                                <i class="la la-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-clean btn-icon btn-icon-md"  data-toggle="modal" data-target="#modal{{$item->id}}" title="Delete">
                                                <i class="la la-trash"></i>
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cảnh báo</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn có muốn xóa {{ $item->name }}?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                    <a href="{{ route('admin.product.delete-product', $item->id) }}" class="btn btn-danger">Xóa</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection
