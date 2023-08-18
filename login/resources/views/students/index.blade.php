@extends('students.layout')
@section('content')


<div class="container">
        <div class="row">

            <div >
                <div>
                    <div >Students</div>
                    <div >
                        <a href="{{ route('student.create') }}" class="btn btn-success btn-sm" title="Add New">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a><br><br>
                        
                        
                        <br/>
                        <div class="table-responsive">
                            <table  id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>cne</th>
                                        <th>cin</th>
                                        <th>NomPrenom</th>
                                        <th>sexe</th>
                                        <th>datenaiss</th>
                                        <th>inscription1</th>
                                        <th>inscription2</th>
                                        <th>licence</th>
                                        <th>datelicence</th>
                                        <th>DEUG</th>
                                        <th>DateDEUG</th>
                                        <th>Anneeinsc</th>
                                        <th>situation</th>
                                        <th>lieuNaiss</th>
                                        
                                        <th>--</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->cne }}</td>
                                        <td>{{ $item->cin }}</td>
                                        <td>{{ $item->NomPrenom }}</td>
                                        <td>{{ $item->sexe }}</td>
                                        <td>{{ $item->datenaiss }}</td>
                                        <td>{{ $item->inscription1 }}</td>
                                        <td>{{ $item->inscription2 }}</td>
                                        <td>{{ $item->licence }}</td>
                                        <td>{{ $item->datelicence }}</td>
                                        <td>{{ $item->DEUG }}</td>
                                        <td>{{ $item->DateDEUG }}</td>
                                        <td>{{ $item->Anneeinsc }}</td>
                                        <td>{{ $item->situation }}</td>
                                        <td>{{ $item->lieuNaiss }}</td>
                                        <td>
                                            <a href="{{ route('student.show',$item->cne ) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a><br><br>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection