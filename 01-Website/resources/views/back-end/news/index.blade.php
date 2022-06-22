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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Nieuwsartikelen</a></li>
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
            <table class="table table-striped" id="news_table">
                <thead>
                    <tr>
                        <th>Titel</th>
                        <th>Status</th>
                        <th>Publicatiedatum</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsArticles as $news)
                        <tr>
                            <td scope="row">{{ $news->title }}</td>
                            <td>{{ $news->isDraft() ? 'Concept' : 'Gepubliceerd' }}</td>
                            <td>{{ $news->created_at }}</td>
                            <td class="text-center">
                                <form id="delete_news_{{ $news->id }}" method="POST" action="{{ route('admin.news.destroy', $news->id) }}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <div class="btn-group">
                                    <a class="btn btn-info" href="{{ route('news.show', $news->slug) }}" target="_blank">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('admin.news.edit', $news->slug) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button onclick="
                                        Swal.fire({ title: 'Weet je zeker dat je deze wilt verwijderen?',
                                            text: 'U kunt dit niet terugdraaien!',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ja, ik weet het zeker!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                getElementById('delete_news_{{ $news->id }}').submit();
                                                Swal.fire(
                                                    'Verwijderd!',
                                                    'Het artikel is verwijderd',
                                                    'success'
                                                )
                                            }
                                        })"
                                        type="button" class="btn btn-danger">

                                        <i class="fas fa-trash"></i>
                                    </button>
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
            $('#news_table').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/nl-NL.json"
                }
            });
        });

    </script>
@endsection
