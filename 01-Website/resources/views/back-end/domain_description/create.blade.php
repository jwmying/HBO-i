@extends('back-end.layouts.app')
@section('content')
    <form action="{{ route('admin.domain.description.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12">

                 {{-- Error meldingen --}}
                 <x-helpers/>
                 <!-- Validation Errors -->
                 <x-auth-validation-errors class="mb-4" :errors="$errors" />
                 
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ Session::get('failed') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="card shadow">

                    <div class="card-header">
                        <h4 class="card-title">Maak nieuw domeinbeschrijving item</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Titel</label>
                            <input type="text" class="form-control" name="title" placeholder="Vul een titel in" required>
                        </div>
                        <div class="form-group">
                            <label>Omslag foto</label>
                            <input type="file" accept="image/*" class="form-control" name="image" required>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option value="1">Doorverwijzing</option>
                                <option value="2">Download</option>
                                <option value="3">Nieuwe pagina</option>
                            </select>
                        </div>

                        <div class="form-group type-option option-1">
                            <label>Doorverwijzen naar link</label>
                            <input type="text" class="form-control" name="redirect-url" placeholder="Vul een URL in">
                        </div>

                        <div class="form-group type-option option-2" style="display: none">
                            <label>Download bestand</label>
                            <input type="file" class="form-control" name="download-url">
                        </div>

                        <div class="form-group type-option option-3" style="display: none">
                            <label>Pagina inhoud</label>

                            <x-html-editor placeholder="Maak een pagina inhoud" />
                        </div>

                        <div class="form-group">
                            <label>Domeinbeschrijving doelgroep</label>
                            
                            <x-article-target-audience-selection :options="$targetAudienceOptions" />
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <script>
        const typeSelect = document.querySelector('#type');

        typeSelect.addEventListener('change', (event) => {
            const typeOptions = document.getElementsByClassName('type-option');
            const element = document.getElementsByClassName('option-' + event.target.value)[0];

            typeOptions.forEach(option => {
                option.style.display = 'none';
            });

            element.style.display = 'block';
        });
    </script>
@endsection

@section('scripts')
    <x-html-editor-scripts />
@endsection
