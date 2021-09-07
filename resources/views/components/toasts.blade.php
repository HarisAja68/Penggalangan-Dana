@if (session()->has('success'))
<script>
    $(document).Toasts('create', {
        class: 'bg-success',
        title: 'succces',
        body: '{{ session('message') }}'
    });

    setTimeout(() => {
        $('.toasts-top-right').remove();
    }, 3000);
</script>
@elseif (session()->has('error'))
<script>
    $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'error',
        body: '{{ session('message') }}'
    });

    setTimeout(() => {
        $('.toasts-top-right').remove();
    }, 3000);
</script>
@endif


