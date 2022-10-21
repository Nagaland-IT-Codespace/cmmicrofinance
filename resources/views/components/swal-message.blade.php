<script>
    @if (Session::has('success'))
        new PNotify({
            title: 'Success',
            text: '{{ Session::get('success') }}',
            type: 'success',
            delay: 1500,
            shadow: true
        });
    @endif
</script>
