<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>



	<script type="text/javascript">
	$(document).ready(function($)
	{

		$(document).on('click', '.btn_print', function(event)
		{
			event.preventDefault();

			//credit : https://ekoopmans.github.io/html2pdf.js

			var element = document.getElementById('container_content');

			//easy
			//html2pdf().from(element).save();

			//custom file name
			//html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


			//more custom settings
			var opt =
			{
			  margin:       1,
			  filename:     'pageContent_'+js.AutoCode()+'.pdf',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
			};

			// New Promise-based usage:
			html2pdf().set(opt).from(element).save();


		});



	});
	</script>

</head>
<body>
<div class="container">
    <div class="main-body">

          <nav aria-label="breadcrumb" class="main-breadcrumb">

            <h2 align="center">student profile</h2>
          </nav>

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $students->NomPrenom }} </h4>
                      <p class="text-secondary mb-1"> {{ $students->cne }}</p>
                      <p class="text-muted font-size-sm"> {{ $students->cin }}</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                     <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>lieu de naissance</h6><span class="text-secondary">{{ $students->lieuNaiss }}</span>
                  </li>

              </div>
            </div>
            <div  class="col-md-8">
              <div class="card mb-3">
                <div   class="card-body">
                <div id="data">


                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">cne : {{ $students->cne }}</h6>
                    </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">cin : {{ $students->cin }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">nomprenom : {{ $students->NomPrenom }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">sexe : {{ $students->sexe }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">datenaiss : {{ $students->datenaiss }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">lieuNaiss : {{ $students->lieuNaiss }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">inscription1 : {{ $students->inscription1 }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">inscription2 : {{ $students->inscription2 }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">licence : {{ $students->licence }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">datelicence : {{ $students->datelicence }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DEUG : {{ $students->DEUG }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">DateDEUG : {{ $students->DateDEUG }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">anneeinsc : {{ $students->Anneeinsc }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">situation : {{ $students->situation }}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    </div>
                  </div>
                  <hr>
                </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="{{ route('student.edit',$students->cne) }}">Edit</a>
                      <button class="btn btn-info "  onclick='print()'>Print</button>
                      <form method="POST" action="{{ route('student.destroy',$students->cne) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(quotConfirm ,delete quot)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>


                    </div>
                  </div>


                </div>
              </div>



            </div>
          </div>

        </div>
    </div>


<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script>
function print()
{
    var mywindow = window.open('', 'PRINT', 'height=1200,width=600');
    mywindow.document.write('<h3><div align="left"><img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fb%2Fb2%2FBootstrap_logo.svg%2F512px-Bootstrap_logo.svg.png&imgrefurl=https%3A%2F%2Fcommons.wikimedia.org%2Fwiki%2FFile%3ABootstrap_logo.svg&tbnid=Z_ZoXLqbMMeE9M&vet=12ahUKEwiinInF2pr2AhXrg_0HHY32BX8QMygAegUIARDYAQ..i&docid=ikXW4R4cOfV6TM&w=512&h=408&q=bootstrap%20logo&ved=2ahUKEwiinInF2pr2AhXrg_0HHY32BX8QMygAegUIARDYAQ" alt="Girl in a jacket"> </div> </h3>')
    mywindow.document.write('<h3><div align="right">helloword:cne </div> </h3>');
    mywindow.document.write('<h3><div align="top-center">helloword:cne </div> </h3>');
    mywindow.document.write('<h3><div align="center">helloword:cne </div> </h3>')
    mywindow.document.write('<h3><div align="right"> <?=$students->cne?> :cne </div> </h3>');
    mywindow.document.write('<div align="right"> <?=$students->cin?> cin :</div>');
    mywindow.document.write('<div align="right"> <?=$students->NomPrenom?>:Nom et Prenom</div>');
    mywindow.document.write('<div align="right">  <?=$students->datenaiss?>:Date de naissance</div>');
    mywindow.document.write('<div align="right"> <?=$students->lieuNaiss?>:lieu de naissance </div>');
    mywindow.document.write('<div align="right"> <?=$students->inscription1?>:inscription soudassia 1</div>');
    mywindow.document.write('<div align="right"><?=$students->inscription2?>:inscription soudassia 2</div>');
    mywindow.document.write('<div align="right"> <?=$students->licence?>"licence </div>');
    mywindow.document.write('<div align="right"> <?= $students->datelicence?>:datelicence </div>');
    mywindow.document.write('<div align="right"> <?=$students->DEUG?>:deug</div>');
    mywindow.document.write('<div align="right"> <?=$students->DateDEUG?>:datedeug</div>');
    mywindow.document.write('<div align="right"> <?=$students->Anneeinsc?>:annee d inscription</div>');
    mywindow.document.write('<div align="right">  <?=$students->situation?>:situation</div>');



    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    //mywindow.close();

    return true;
}
</script>
</body>
</html>