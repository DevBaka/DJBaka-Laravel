@extends('backend.dashboard')
@section('backend')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Change Password</h6>
            <!-- enctype="multipart/form-data" ist nötig, weil hier eine datei bzw ein bild mitgeschickt werden soll -->
            <form class="forms-sample" method="POST" action="{{ route('backend.update.password') }}">
                <!-- ohne das csrf token wird die form nicht submittet-->
                @csrf
                <div class="row mb-3">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Altes Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" id="exampleInputUsername2" placeholder="Altes Passwort eingeben">
                        @error('old_password')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Neues Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="exampleInputUsername2" placeholder="neudes Passwort eingeben">
                        @error('new_password')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Neues Password wiederholen</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" id="exampleInputUsername2" placeholder="neues Passwort wiederholen">
                        @error('confirm_password')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Change Passwort</button>
            </form>

        </div>
    </div>
</div>
@endsection

