@extends("layouts.master")
@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Liste des Questions</h3>

        <div class="mt-4">
        <div class="d-flex justify-content-end mb-4">
        <a href="" class="btn btn-primary">S'inscrire</a>
        </div>
       
            <div class="alert alert-success">
                <p></p>

            </div>
            
        <table class="table table-bordred table-hover">
  <thead>
    <tr>
      <th scope="col">id_question</th>
      <th scope="col">numero_question</th>
      <th scope="col">nom_question</th>
      <th scope="col">text_question</th>
      <th scope="col">id_secteur</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($questions as $question)
    <tr>
      <th scope="row">{{$question->id}}</th>
      <td>{{$question->numero_question}}</td>
      <td>{{$question->nom_question}}</td>
      <td>{{$question->text_question}}</td>
      <td>{{$question->id_secteur}}</td>
      <td>
      <a href="" class="btn btn-info">Editer</a>


      <a href="#" class="btn btn-danger" onclick="">Supprimer</a>
      <form id=""  action="" method='post'>
        @csrf
        <input type="hidden" name="_method" value="delete">
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
 
</table>


        </div>
    </div>
@endsection