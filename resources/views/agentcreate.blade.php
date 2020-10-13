<!-- Stored in resources/views/list.blade.php -->

@extends('layout')

@section('title', 'Listes des contribuables')

@section('sidebar')
    @parent


@endsection

@section('content')
<div class="container-fluid">
<div class="">
  <div class="card shadow mx-auto" style="margin:5px;"> 
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h5 class="m-0 font-weight-bold text-primary">Enregistrer un utilisation</h5>
          <div class="dropdown no-arrow">
          
          </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form method="POST" action="{{ url ('agtvalider')}}">
          @csrf()
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="nomagent">Nom</label>
                <input type="text" class="form-control" name="nomagent" id="nomagent"  required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="prenomsagent">Prénoms</label>
                <input type="text" class="form-control" name="prenomsagent" id="prenomsagent"  required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="sexeagent">Sexe</label>
                <select class="custom-select" name="sexeagent" id="sexeagent" required>
                  <option selected disabled placeholder="">Choisir...</option>
                  <option>Masculin</option>
                  <option>Feminin</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="loginagent">Identifiant</label>
                <input type="text" class="form-control" name="loginagent" id="loginagent"  required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
             
            
            </div>
            <a href="{{ url('agentvalider') }}" class="btn btn-primary" role="button">Création</a>
          </form>
          </div>
        </div>
      </div>
     
     @endsection