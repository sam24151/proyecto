    
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>  
        @foreach($errors->all() as $error)
         <li>{{$error}}</li>
        @endforeach
        </ul>  
    </div>
    @endif
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text"  name="name" class="form-control" value="{{isset($pais->name)?$pais->name:old('name')}}" id="nombre">
    </div>
    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" name="color" class="form-control" value="{{isset($pais->color)?$pais->color:old('color')}}" id="color">
    </div>
        <div class="my-3">
        <input class="btn btn-success" type="submit" value="{{$modo}}">
        <a class="btn btn-primary" href="{{url('pais/')}}">Regresar</a>
    </div>
    @if($modo == 'Editar')
    <div>
    <h3>Historial del registro</h3>
    <h5>Selecciona a que punto desea regresar del historial de cambios de este país.</h5>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Fecha registro</th>
                <th>Seleccionar</th>
            </tr>
        </thead>
        <tbody>
    @foreach($pais['registros'] as $reg)
    
            <tr>
                <td>{{$reg->commit}}</td>
                <td>{{$reg->name}}</td>
                <td>{{$reg->color}}</td>
                <td>{{$reg->created_at}}</td>
                <td><a href="#" class="btn btn-success" id="boton" name="boton" onclick='document.getElementById("nombre").value="{{$reg->name}}";document.getElementById("color").value="{{$reg->color}}"'>Seleccionar</a></td> 
            </tr>

    @endforeach
    </tbody>
    </table>
    </div>
    @endif