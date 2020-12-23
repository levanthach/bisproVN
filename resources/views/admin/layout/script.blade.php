        <!-- end::Scrolltop -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>


        <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1070954,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{ asset('./assets/plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
        <script src="{{ asset('./assets/js/scripts.bundle.js') }}" type="text/javascript"></script>

	    <script src="{{ asset('./assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.3') }}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('./assets/js/pages/crud/forms/editors/ckeditor-classic.js?v=7.0.3') }}"></script>
        <script src="{{ asset('./assets/js/pages/crud/metronic-datatable/base/data-json.js') }}" type="text/javascript"></script>

        <script>CKEDITOR.replace('content');</script>
