<div>
    @if($editMode)
        @include('livewire.cms-news-edit')
    @else
        @include('livewire.cms-news-add')
    @endif
</div>

@section('scripts')
    <script src="{{ asset('back-end/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('back-end/plugins/select2/lang/nl.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.getElementById('html-editor'), {
                removePlugins: ['ImageUpload'],
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('description', editor.getData());
                });
            })
            .catch(error => {
                console.error(error);
            });

        $('.news-filters').select2({
            tags: true,
            language: 'nl',
            tokenSeparators: [','],
            width: '100%',

            createTag: function (tag) {
                let term = tag.term.trim();

                if (term === '') {
                    return null;
                }

                term = term.charAt(0).toUpperCase() + term.slice(1);

                return {
                    id: term,
                    text: term,
                    newTag: true
                }
            }
        });

        $('.news-filters').on('change', function (e) {
            let data = $(this).val();
            @this.set('news_filters', data);
        });
    </script>
@endsection