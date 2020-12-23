<!DOCTYPE html>

<html lang="en">

  <!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>Bispro Portal </title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->
    
    <link rel="shortcut icon" href="{{ asset('./assets/imgs/favicon.png')  }}" />

    @include('admin.layout.style')
    
    @yield('style')
</head>

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="overflow-x: hidden;">

    <!-- begin:: Page -->
  
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
      <div class="kt-header-mobile__logo">
        <a href="index.html">
          <img alt="Logo" src="{{ asset('./assets/imgs/logo_s.png') }}" style="width: 150px">
        </a>
      </div>
      <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
      </div>
    </div>
  
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
    
            <!-- begin:: Aside -->
    
            <!-- Uncomment this to display the close button of the panel
    <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
    -->
            @include('admin.layout.menu')
            <!-- end:: Aside -->

            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
    
                @include('admin.layout.header')
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    <!-- begin:: Content -->
                    {{-- <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                
                
                        <div class="kt-portlet kt-portlet--mobile">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <span class="kt-portlet__head-icon">
                                <i class="kt-font-brand flaticon2-line-chart"></i>
                                </span>
                                <h3 class="kt-portlet__head-title">
                                Quản lý khách hàng
                                
                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                
                                    <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Add new
                                    </a>
                                </div>  
                                </div>    </div>
                            </div>
                    
                            <div class="kt-portlet__body">
                                <!--begin: Search Form -->
                                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                                <div class="row align-items-center">
                                    <div class="col-xl-8 order-2 order-xl-1">
                                    <div class="row align-items-center">        
                                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-input-icon kt-input-icon--left">
                                            <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                            <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                            <span><i class="la la-search"></i></span>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-form__group kt-form__group--inline">
                                            <div class="kt-form__label">
                                            <label>Status:</label>
                                            </div>
                                            <div class="kt-form__control">
                                            <div class="dropdown bootstrap-select form-control"><select class="form-control bootstrap-select" id="kt_form_status" tabindex="-98">
                                                <option value="">All</option>
                                                <option value="1">Pending</option>
                                                <option value="2">Delivered</option>
                                                <option value="3">Canceled</option>
                                                <option value="4">Success</option>
                                                <option value="5">Info</option>
                                                <option value="6">Danger</option>
                                            </select></div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                    <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                    <a href="#" class="btn btn-default kt-hidden">
                                        <i class="la la-cart-plus"></i> Thêm mới
                                    </a>
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                                    </div>
                                </div>
                                </div>
                                <!--end: Search Form -->
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit">
                                <!--begin: Datatable -->
                                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="json_data" style="">
                                    <table class="kt-datatable__table" style="display: block;">
                                        <thead class="kt-datatable__head">
                                            <tr class="kt-datatable__row" style="left: 0px;">
                                            <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check">
                                                <span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">
                                                <input type="checkbox">&nbsp;<span></span></label></span>
                                            </th>
                                            <th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">ID</span></th>
                                            <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Họ Tên</span></th>
                                            <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Email</span></th>
                                            <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Ngày tạo</span></th>
                                            <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Trạng thái</span></th>
                                            <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 133px;">Dịch vụ</span></th>
                                            <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Hành động</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="kt-datatable__body" style="">
                                            <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                                <td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID">
                                                    <span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="1">&nbsp;<span></span></label></span>
                                                </td>
                                                <td data-field="OrderID" class="kt-datatable__cell"><span style="width: 133px;">61715-075</span></td>
                                                <td data-field="Country" class="kt-datatable__cell"><span style="width: 133px;">China CN</span></td>
                                                <td data-field="ShipAddress" class="kt-datatable__cell"><span style="width: 133px;">746 Pine View Junction</span></td>
                                                <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 133px;">2/12/2018</span></td>
                                                <td data-field="Status" class="kt-datatable__cell"><span style="width: 133px;"><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></span></td>
                                                <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 133px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">VPS</span></span></td>
                                                <td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell">
                                                <span style="overflow: visible; position: relative; width: 110px;"> 
                                                    <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">              
                                                        <i class="la la-edit"></i>
                                                        </a>            
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">
                                                        <i class="la la-trash"></i>           
                                                        </a>          
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end: Datatable -->
                            </div>
                        </div>  
                    </div> --}}
                    <!-- end:: Content -->        
                    @yield('content')

                </div>
                

                @include('admin.layout.footer')
                
                </div>
            </div>
        </div>
        <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>


    @include('admin.layout.script')
    @yield('script')
</body>
</html>