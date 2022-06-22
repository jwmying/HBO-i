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
                            <li class="breadcrumb-item"><a href="">Leden</a></li>
                            <li class="breadcrumb-item active">Lijst</li>
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
    @if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <table class="table table-striped" id="members_items_table">
                <thead>
                    <tr>
                        <th>Omslag foto</th>
                        <th>Naam</th>
                        <th>Redirect</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $m)
                        <tr>
                            <td><img class="img rounded-circle w-50"
                                    src="{{ asset('storage/members/images/' . $m->image_name) }}"></td>
                            <td>{{ $m->name }}</td>
                            <td>{{ $m->redirect }}</td>
                            <td class="text-center">
                                <form id="delete_member_{{ $m->id }}" method="post"
                                    action="{{ route('admin.members.destroy', $m->id) }}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <div class="btn-group">
                                    <a class="btn btn-warning" href="{{ route('admin.members.edit', $m->slug) }}"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <button
                                        onclick="Swal.fire({ title: 'Weet u zeker dat je dit lid wilt verwijderen?',
                                                                text: 'U kunt dit niet terugdraaien!',
                                                                icon: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                confirmButtonText: 'Ja, ik weet het zeker!'
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    getElementById('delete_member_{{ $m->id }}').submit();
                                                                    Swal.fire(
                                                                        'Verwijderd!',
                                                                        'Het artikel is verwijderd',
                                                                        'success'
                                                                    )
                                                                }
                                                            })"
                                        type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#members_items_table').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/nl-NL.json"
                },
                columnDefs: [{
                    "width": "20%",
                    "targets": 0
                }]

            });
        });
    </script>
@endsection
