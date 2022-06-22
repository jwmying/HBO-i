@extends('back-end.layouts.app')
@section('content')
    <form action="{{ route('admin.agenda.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12">

                {{-- Error meldingen --}}
                <x-helpers />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="card shadow">

                    <div class="card-header">
                        <h4 class="card-title">Maak nieuw agenda item aan</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Titel</label>
                            <input type="text" class="form-control" name="title" placeholder="Vul een titel in" value="{{old('title')}}" required >
                        </div>
                        <div class="form-group">
                            <label>Omslag foto</label>
                            <input type="file" accept="image/*" class="form-control" name="image" value="{{old('file')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Locatie</label>
                            <input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="Vul een locatie in"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Startdatum en tijd</label>
                            <input type="datetime-local" id="datetime_field_start" value="{{old('start_time')}}" class="form-control" name="start_time"
                                placeholder="Vul een startdatum en tijd in" required>
                        </div>
                        <div class="form-group">
                            <label>Einddatum en tijd</label>
                            <input type="datetime-local" id="datetime_field_end" value="{{old('end_time')}}" class="form-control" name="end_time"
                                placeholder="Vul een einddatum en tijd in" required min="2022-04-11T21:10">
                        </div>
                        <div class="form-group">
                            <label>Organisator</label>
                            <input type="text" class="form-control" value="{{old('organisator')}}" name="organisator"
                                placeholder="Vul de naam van de organisator in" required>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" value="{{old('link')}}" name="link"
                                placeholder="Vul een link in die verwijst naar een pagina met meer informatie" required>
                        </div>
                        <div class="form-group">
                            <label>Agenda item inhoud</label>

                            <x-html-editor placeholder="Maak een agenda item inhoud">{{ old('editor_content') }}</x-html-editor>
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
        const inputStart = document.getElementById("datetime_field_start");
        const inputEnd = document.getElementById("datetime_field_end");
        inputStart.addEventListener('input', updateValue);

        function updateValue(e) {
            inputEnd.setAttribute("min", e.target.value);
        }

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; // Month January starts at 0 instead of 1
        var yyyy = today.getFullYear();

        if (dd < 10)
            dd = '0' + dd;

        if (mm < 10)
            mm = '0' + mm;

        today = yyyy + '-' + mm + '-' + dd;
        today += "T00:00";
        inputStart.setAttribute("min", today);
    </script>
@endsection

@section('scripts')
    <x-html-editor-scripts />
@endsection
