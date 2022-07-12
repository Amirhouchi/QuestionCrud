@extends("layouts.master")
@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Liste des choix repenses</h3>

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
      <th scope="col">id_choixrepense</th>
      <th scope="col">numero_choix_repense</th>
      <th scope="col">text_choix_repense</th>
      <th scope="col">id_question_suivant</th>
      <th scope="col">id_question</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($choixrepenses as $choixrepense)
    <tr>
      <th scope="row">{{$choixrepense->id}}</th>
      <td>{{$choixrepense->numero_choix_repense}}</td>
      <td>{{$choixrepense->text_choix_repense}}</td>
      <td>{{$choixrepense->id_question_suivant}}</td>
      <td>{{$choixrepense->id_question}}</td>
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