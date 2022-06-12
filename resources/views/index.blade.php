<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<nav style="background-color:#04AA6D;" class="navbar navbar-expand-lg">
  <a  style="color:white;" class="navbar-brand" href="#">SysVote</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a style="color:white;" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color:white;" class="nav-link" href="#">Candidates</a>
      </li>
    </ul>
  </div>
</nav>
<div style="margin-top:100px;" class="row d-flex justify-content-center">
@foreach ($candidates as $candidate)
  <div class="col-sm-2">
    <div class="card">
    <img class="card-img-top" src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title d-flex justify-content-center">{{$candidate->name}}</h5>
        <p class="card-text d-flex justify-content-center">Idade: {{$candidate->age}}</p>
        <p class="card-text d-flex justify-content-center">Votos: {{$candidate->votes}}</p>
        @if($candidate->votes == 20)
        <div class="d-flex justify-content-center">
        <div class="badge bg-success text"><h6 style="height:12px; color:white;">Vencedor</h6></div>
        </div>
        @endif
        <div style="background-color:#04AA6D; border-radius:25px; margin-top:15px;" class="text-center">
            <a style="color:white;" href="{{ route('register_vote', ['id'=>$candidate->id]) }}" class="btn">vote</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
