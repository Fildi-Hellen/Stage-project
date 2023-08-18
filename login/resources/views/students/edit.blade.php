 @extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ route('student.update',$students->cne) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <label>cne</label><br>
        <input type="text" name="cne" id="cne" class="form-control" value="{{$students->cne}}" > <br>
        <label>cin</label><br>
        <input type="text" name="cin" id="cin" class="form-control"value="{{$students->cin}}" ><br>
        <label>nomprenom</label><br>
        <input type="text" name="nomprenom" id="nomprenom" class="form-control" value="{{$students->NomPrenom}}" ><br>
        <label>sexe</label><br>
        <input type="text" name="sexe" id="sexe" class="form-control"value="{{$students->sexe}}"><br>
        <label>datenaiss</label><br>
        <input type="date" name="datenaiss" id="datenaiss" class="form-control"value="{{$students->datenaiss}}"><br>
        
        
        <label>inscription1</label><br>
        <input type="text" name="inscription1" id="inscription1" class="form-control"value="{{$students->inscription1}}"><br>
        <label>inscription2</label><br>
        <input type="text" name="inscription2" id="inscription2" class="form-control"value="{{$students->inscription2}}"><br>
        <label>licence</label><br>
        <input type="text" name="licence" id="licence" class="form-control"value="{{$students->licence}}"><br>
        <label>datelicence</label><br>
        <input type="date" name="datelicence" id="datelicence" class="form-control"value="{{$students->datelicence}}"><br>
        <label>DEUG</label><br>
        <input type="text" name="DEUG" id="deug" class="form-control"value="{{$students->DEUG}}"><br>
        <label>dateDEUG</label><br>
        <input type="date" name="dateDEUG" id="datedeug" class="form-control"value="{{$students->DateDEUG}}"><br>
        <label>anneeinsc</label><br>
        <input type="date" name="anneeinsc" id="anneeinsc" class="form-control" value="{{$students->Anneeinsc}}"><br>
        <label>situation</label><br>
        <input type="text" name="situation" id="situation" class="form-control"value="{{$students->situation}}"><br>
        <label>lieuNaiss</label><br>
        <input type="text" name="lieuNaiss" id="lieuNaiss" class="form-control"value="{{$students->lieuNaiss}}"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>

@stop