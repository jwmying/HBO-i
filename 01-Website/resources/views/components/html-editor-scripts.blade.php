<script>
    ClassicEditor
        .create(document.getElementById('html-editor'), {
            removePlugins: ['ImageUpload'],
        })
        .catch(error => {
            console.error(error);
        });
</script>