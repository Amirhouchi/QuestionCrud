@extends("layouts.master")
@section("contenu")

<script>
//localStorage.setItem("q0",["test1","Amir","5"]);

//localStorage.removeItem("Amir");
//localStorage.clear();
    </script>


<div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">rependre</h3>

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
      <th scope="col">id_secteur</th>
      <th scope="col">nom_secteur</th>
      <th scope="col">image_secteur</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($secteurs as $secteur)
    <tr>
      <th scope="row">{{$secteur->id}}</th>
      <td>{{$secteur->nom_secteur}}</td>
      <td>{{$secteur->image_secteur}}</td>
      <td>
      <a href="" class="btn btn-info">Editer</a>
      <a href="#" class="btn btn-danger" onclick="">Supprimer</a>
      <a href="{{route ('demande.demande',['secteur'=>$secteur])}}" class="btn btn-info">Demander</a>

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

    {{$secteurs[0]->nom_secteur}}
    <br>
    {{$questions[0]->text_question}}
    <br>

    @foreach ($choixrepenses as $choixrepense)

    @if ($choixrepense->id_question == 1)
    {{$choixrepense->text_choix_repense}}
    <p>  </p>
    @endif
    @endforeach

<p>------------------------------------------------------------------------------------------</p>
<script>console.log(localStorage)
console.log(localStorage.getItem("Amir"))
</script>


<h1> tesssst</h1>

    {{$secteurs[0]->nom_secteur}}
    <br>
    {{$questions[1]->text_question}}
    <br>

    @foreach ($choixrepenses as $choixrepense)

    @if ($choixrepense->id_question == 2)
    {{$choixrepense->text_choix_repense}}
    <p>  </p>
    @endif
    @endforeach


@endsection


