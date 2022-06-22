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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Leden</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.members.index') }}">Lijst</a></li>
                            <li class="breadcrumb-item active"><strong>{{ $member->name }}</strong> aanpassen</li>
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
            <form action="{{ route('admin.members.update', $member->id) }}" method="POST"
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
                        <h4 class="card-title">Aanpassen van <strong>{{ $member->name }}</strong></h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Naam</label>
                            <input type="text" class="form-control" name="name" placeholder="Vul een naam in"
                                value="{{ $member->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Omslag foto</label>
                            <input type="file" class="form-control" name="image">
                            <img src="{{ asset('storage/members/images/' . $member->image_name) }}" width="200" />
                        </div>
                        <div class="form-group">
                            <label>Redirect</label>
                            <input type="text" class="form-control" name="redirect" placeholder="Vul een redirect in"
                                value="{{ $member->redirect }}" required>
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
