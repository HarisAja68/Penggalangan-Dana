@push('css_vendor')
<link rel="stylesheet" href="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.css">
@endpush

@push('js_vendor')
<script src="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.js"></script>
@endpush

@push('js')
    <script>
        $('.summernote').summernote({
            height: 200
        });
    </script>
@endpush
