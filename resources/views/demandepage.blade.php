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
      <td>{{$secteur}}</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($questions as $question)
    @if ($question->id_secteur == $secteur->id  && $question->numero_question == 0 )
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

 <table >
        <tr><td> Nom secteur :  {{$secteur->nom_secteur}}</td> </tr>
        <tr> <td>{{$question->numero_question}}  {{$question->nom_question}} </td></tr>
        <tr> <td>{{$question->text_question}}</td></tr>
        <tr> <td> rep 1 </td> <td> rep 2</td> <td> rep 3 </td></tr>
        <tr>
        @foreach ($choixrepenses as $choixrepense)
        @if ($choixrepense->id_question == $question->id )
         <td>{{$choixrepense->id}} </td>
        <td><a href="{{route ('suivant.suivant',['secteur'=>$secteur, 'question'=>$questions[$choixrepense->id_question_suivant], 'chxr'=>$choixrepense,'question_actuel'=>$question])}}" class="btn btn-info">{{$choixrepense->text_choix_repense}}</a></td>
        @endif
        @endforeach
        </tr>
 </table>

    @endif
    @endforeach
  </tbody>
 
</table>


        </div>
    </div>
@endsection