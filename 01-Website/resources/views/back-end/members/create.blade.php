@extends('back-end.layouts.app')
@section('content')
    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12">

                {{-- Error meldingen --}}
                <x-helpers />
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="card shadow">

                    <div class="card-header">
                        <h4 class="card-title">Maak nieuw lid aan</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Naam</label>
                            <input type="text" class="form-control" name="name" placeholder="Vul een naam in" value="{{old('name')}}" required >
                        </div>
                        <div class="form-group">
                            <label>Omslag foto</label>
                            <input type="file" accept="image/*" class="form-control" name="image" value="{{old('file')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Redirect</label>
                            <input type="text" class="form-control" name="redirect" value="{{old('redirect')}}" placeholder="Vul een redirect in"
                                required>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

