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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Agenda Item</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.domain.description.index') }}">Lijst</a>
                            </li>
                            <li class="breadcrumb-item"><strong>{{ $agendaItem->title }}</strong> aanpassen</li>
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
            <form action="{{ route('admin.agenda.update', $agendaItem->id) }}" method="POST"
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
                        <h4 class="card-title">Aanpassen van <strong>{{ $agendaItem->title }}</strong></h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Titel</label>
                            <input type="text" class="form-control" name="title" placeholder="Vul een titel in"
                                value="{{ $agendaItem->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Omslag foto</label>
                            <input type="file" accept="image/*" class="form-control" name="image">
                            <img src="{{ asset('storage/agenda/images/' . $agendaItem->image_name) }}" width="500" />
                        </div>
                        <div class="form-group">
                            <label>Locatie</label>
                            <input type="text" class="form-control" name="location" placeholder="Vul een locatie in"
                                value="{{ $agendaItem->location }}" required>
                        </div>
                        <div class="form-group">
                            <label>Startdatum en tijd</label>
                            <input type="datetime-local" id="datetime_field_start" class="form-control" name="start_time"
                                placeholder="Vul een startdatum en tijd in"
                                value="{{ $agendaItem->getDateStartAttribute() }}" required>
                        </div>
                        <div class="form-group">
                            <label>Einddatum en tijd</label>
                            <input type="datetime-local" id="datetime_field_end" class="form-control" name="end_time"
                                placeholder="Vul een einddatum en tijd in"
                                value="{{ $agendaItem->getDateEndAttribute() }}" required>
                        </div>
                        <div class="form-group">
                            <label>Organisator</label>
                            <input type="text" class="form-control" name="organisator"
                                placeholder="Vul de naam van de organisator in" value="{{ $agendaItem->organisator }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link"
                                placeholder="Vul een link in die verwijst naar een pagina met meer informatie"
                                value="{{ $agendaItem->link }}" required>
                        </div>
                        <div class="form-group">
                            <label>Agenda item inhoud</label>

                            <textarea class="form-control" name="editor_content" id="html-editor">{!! $agendaItem->description !!}</textarea>
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
        const inputStart = document.getElementById("datetime_field_start");
        const inputEnd = document.getElementById("datetime_field_end");
        inputStart.addEventListener('input', updateValue);

        function updateValue(e) {
            inputEnd.setAttribute("min", e.target.value);
        }
    </script>
@endsection

@section('scripts')
    <x-html-editor-scripts />
@endsection
