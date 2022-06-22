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

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <table class="table table-striped" id="domain_description_table">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Type</th>
                        <th>Actief</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($domainDescriptions as $d)
                        <tr>
                            <td scope="row">{{ $d->title }}</td>
                            <td>
                                @php
                                    if ($d->type == 1) {
                                        echo 'Doorverwijzing';
                                    } elseif ($d->type == 2) {
                                        echo 'Download';
                                    } else {
                                        echo 'Nieuwe pagina';
                                    }
                                @endphp
                            </td>
                            <td>{{ $d->deleted_at == null ? 'Actief' : 'Non-actief' }}</td>
                            <td class="text-center">
                                <form id="delete_domain_{{ $d->id }}" method="post" action="{{ route('admin.domain.description.destroy', $d->id) }}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <div class="btn-group">
                                    <a class="btn btn-warning" href="{{ route('admin.domain.description.edit', $d->slug) }}"><i class="fas fa-pencil-alt"></i></a>
                                    <button onclick="Swal.fire({ title: 'Weet je zeker dat je deze wilt verwijderen?',
                                                            text: 'U kunt dit niet terugdraaien!',
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Ja, ik weet het zeker!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                getElementById('delete_domain_{{ $d->id }}').submit();
                                                                Swal.fire(
                                                                    'Verwijderd!',
                                                                    'Het artikel is verwijderd',
                                                                    'success'
                                                                )
                                                            }
                                                        })" type="button" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></button>
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
            $('#domain_description_table').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/nl-NL.json"
                }
            });
        });

    </script>
@endsection
