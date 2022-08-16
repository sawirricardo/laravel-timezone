<script>
    document.addEventListener('DOMContentLoaded', function() {
        const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        axios.post("{{ route('laravel-timezone') }}", {
            timezone: timezone
        }, {
            headers: {
                'X-Timezone': timezone
            }
        }).catch((error) => null);
    });
</script>
