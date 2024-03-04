@extends('baak.layouts.main')

@section('content-baak')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            {{-- <div class="bg-light rounded h-100 p-4">
                <h5 class="mb-4">Hasil Penilaian</h5>
                <a href="categories/create" class="btn btn-outline-primary mb-2">Tambah Data</a>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Nilai</th>
                            <th>Pertanyaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>asd</td>
                            <td>231</td>
                            <td>asdas</td>
                        </tr>
                        @foreach ($results as $result)
                            <tr>
                                <td>{{ $loop->index + 1 }}.</td>
                                <td>{{ $result->user->name }}</td>
                                <td>{{ $result->total_points }}</td>
                                <td>
                                    @foreach ($result->questions as $question)
                                        <span>{{ $question->question_text }}, </span>
                                    @endforeach
                                </td>
                                <td>{{ $result->options }}</td>
                        <td>
                                    @foreach ($result->questions as $key => $question)
                                        <span class="badge badge-info">{{ $question->question_text }}</span>
                                    @endforeach
                                </td>


                        </tr>
                         @endforeach
                     </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div> --}}
        </div>
    </div>
@endsection
