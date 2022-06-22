@extends('back-end.layouts.app')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">HBO-i</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Domeinbeschrijving</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.domain.description.index') }}">Lijst</a>
                            </li>
                            <li class="breadcrumb-item"><strong>{{ $domainDescription->title }}</strong> aanpassen</li>
                        </ol>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <form action="{{ route('admin.domain.description.update', $domainDescription->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                @if ($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif

                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title">Aanpassen van <strong>{{ $domainDescription->title }}</strong></h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Titel</label>
                            <input type="text" class="form-control" name="title" value="{{ $domainDescription->title }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Omslag foto</label>
                            <input type="file" accept="image/*" class="form-control" name="image">
                            <img src="{{ asset('storage/domain-description/images/' . $domainDescription->image_name ); }}" width="500" />
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option {{ $domainDescription->type == 1 ? 'selected' : '' }} value="1">Doorverwijzing</option>
                                <option {{ $domainDescription->type == 2 ? 'selected' : '' }} value="2">Download</option>
                                <option {{ $domainDescription->type == 3 ? 'selected' : '' }} value="3">Nieuwe pagina</option>
                            </select>
                        </div>

                        <div class="form-group type-option option-1" style="{{ $domainDescription->type != 1 ? 'display: none' : '' }}">
                            <label>Doorverwijzen naar link</label>
                            <input type="text" class="form-control" name="redirect-url" value="{{ $domainDescription->link }}">
                        </div>

                        <div class="form-group type-option option-2" style="{{ $domainDescription->type != 2 ? 'display: none' : '' }}">
                            <label>Download bestand</label>
                            <input type="file" class="form-control" name="download-url">
                        </div>

                        <div class="form-group type-option option-3" style="{{ $domainDescription->type != 3 ? 'display: none' : '' }}">
                            <label>Pagina inhoud</label>
                            <textarea class="form-control" name="editor_content" id="html-editor">{!! $domainDescription->description !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Domeinbeschrijving doelgroep</label>
                            <x-article-target-audience-selection :options="$targetAudienceOptions" :selected="$domainDescription->target_audience" />
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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
