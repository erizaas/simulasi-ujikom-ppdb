{{-- CSS --}}
@section('css')
<link href="{{asset('assets/dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="{{asset('assets/dashboard/css/sb-admin-2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
@endsection

{{-- JS --}}
@section('js')
<script src="{{ asset('assets/dashboard/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/demo/chart-pie-demo.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

@endsection
