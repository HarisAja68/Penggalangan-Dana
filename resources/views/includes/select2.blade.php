@push('css_vendor')
<link rel="stylesheet" href="{{ asset('template') }}/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="{{ asset('template') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush

@push('js_vendor')
<script src="{{ asset('template') }}/plugins/select2/js/select2.full.min.js"></script>
@endpush

@push('js')
    <script>
        $('.select2').select2({
            theme: 'bootstrap4',
            placeholder: 'pili salah satu',
            closeOnSelect: true,
            allowClear: true,
        });
    </script>
@endpush
