@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>cne</label></br>
        <input type="text" name="cne" id="cne" class="form-control"></br>
        <label>cin</label></br>
        <input type="text" name="cin" id="cin" class="form-control"></br>
        <label>nomprenom</label></br>
        <input type="text" name="nomprenom" id="nomprenom" class="form-control"></br>
        <label>sexe</label></br>
        <input type="text" name="sexe" id="sexe" class="form-control"></br>
        <label>datenaiss</label></br>
        <input type="date" name="datenaiss" id="datenaiss" class="form-control"></br>
        <label>inscription1</label></br>
        <input type="text" name="inscription1" id="inscription1" class="form-control"></br>
        <label>inscription2</label></br>
        <input type="text" name="inscription2" id="inscription2" class="form-control"></br>
        <label>licence</label></br>
        <input type="text" name="licence" id="licence" class="form-control"></br>
        <label>datelicence</label></br>
        <input type="date" name="datelicence" id="datelicence" class="form-control"></br>
        <label>DEUG</label></br>
        <input type="text" name="DEUG" id="deug" class="form-control"></br>
        <label>dateDEUG</label></br>
        <input type="date" name="dateDEUG" id="datedeug" class="form-control"></br>
        <label>anneeinsc</label></br>
        <input type="date" name="anneeinsc" id="anneeinsc" class="form-control"></br>
        <label>situation</label></br>
        <input type="text" name="situation" id="situation" class="form-control"></br>
        <label>lieuNaiss</label></br>
        <input type="text" name="lieuNaiss" id="lieuNaiss" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
