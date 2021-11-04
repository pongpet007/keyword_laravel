<x-admin.layout>
    {{-- Meta tag --}}
    @push('metatag')
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Brandex Admin Dashboard</title>
    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Breadcrumb --}}
    @push('breadcrumb')
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Css Other --}}
    @push('cssother')

    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Modal --}}
    @push('modals')

    @endpush
    {{-- =========================================================================================================== --}}
    {{-- Script Other --}}
    @push('scriptother')
        <!-- Page level plugins -->
        <script src="{{ asset('assets_admin/vendor/chart.js') }}/Chart.min.js" )}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('assets_admin/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets_admin/js/demo/chart-pie-demo.js') }}"></script>
    @endpush
    {{-- =========================================================================================================== --}}

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <x-card-border-left type="success" title="All Product" amount="500"></x-card-border-left>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <x-card-border-left type="info" title="All Category" amount="30" icon="fas fa-dollar-sign fa-2x text-gray-300"></x-card-border-left>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <x-card-border-left type="danger" title="All Category" amount="30" icon="fas fa-dollar-sign fa-2x text-gray-300"></x-card-border-left>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <x-card-border-left type="warning" title="All Category" amount="30" icon="fas fa-dollar-sign fa-2x text-gray-300"></x-card-border-left>
        </div>
         <!-- Pending Requests Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <x-card-border-left type="primary" title="All Category" amount="30" icon="fas fa-dollar-sign fa-2x text-gray-300"></x-card-border-left>
        </div>

         <!-- Pending Requests Card Example -->
         <div class="col-xl-3 col-md-6 mb-4">
            <x-card-border-left type="secondary" title="All Category" amount="30" icon="fas fa-dollar-sign fa-2x text-gray-300"></x-card-border-left>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <x-card-border-left type="dark" title="All Category" amount="30" icon="fas fa-dollar-sign fa-2x text-gray-300"></x-card-border-left>
        </div>

    </div>


</x-admin.layout>
