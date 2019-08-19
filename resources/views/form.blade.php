<div class="form-group">
    <label class="control-label">User</label>
    <input class="form-control" name="User" type="text" value="{{ isset($users->User) ? $users->User:false }} ">
    <br>
    <label class="control-label">Nome</label>
    <input class="form-control" name="Name" type="text" value="{{ isset($users->Name) ? $users->Name:false }} ">
    <br>
    <label class="control-label">Sobrenome</label>
    <input class="form-control" name="Lastname" type="text" value="{{ isset($users->Lastname) ? $users->Lastname:false }} ">
    <br>
    <div class="form-group">
        <label class="control-label">Email</label>
        <input class="form-control" name="Email" type="email" value="{{ isset($users->Email) ? $users->Email:false}} ">
    </div>
    <label class="control-label">Celular</label>
    <input class="form-control" name="Cellphone" type="text" value="{{ isset($users->Cellphone) ? $users->Cellphone:false }} ">
    <div class="form-group">
        <br>
        <label for="exampleSelect1">Selecione sua idade</label>
        @if(isset($users->Age))
        <input class="form-control" name="Age" type="text" value="{{ $users->Age }} anos "> @else
        <select class="form-control" name="Age" id="exampleSelect1">
            @for($idade = 13; $idade
            <=100; $idade++) <option value=" {{$idade}} "> {{$idade}} anos
                </option>
                @endfor @endif
        </select>
    </div>
</div>
<label class="control-label">Cidade</label>
<input class="form-control" name="City" type="text" value="{{ isset($users->City) ? $users->City:false}} ">