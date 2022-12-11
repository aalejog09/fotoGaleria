<div class="row pl-md-5 pt-5">
    <div class="col pl-5 pr-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {{Route::is('reportes') || Route::is('reportesImagenes') || Route::is('reportesFotografos') ? 'active':''}}" href="{{url('admin/reportes')}}">Reportes</a>
            </li>
           <li>
                <a class="nav-link {{Route::is('graficas')  || Route::is('graficasImagenes') || Route::is('graficasFotografos') ? 'active':''}}" href="{{route('graficas')}}">Graficas</a>
           </li>
        </ul>
    </div>
</div>
<div class="row pl-md-5">
    <div class="col pl-5 pt-2">
        @if(Route::is('reportes') || Route::is('reportesImagenes') || Route::is('reportesFotografos'))
            <a href="{{url('admin/reportes/fotografos')}}" class="pl-3 pr-5">Fotografos</a>
            <a href="{{url('admin/reportes/imagenes')}}" class="pr-5">Imagenes</a>
        @elseif(Route::is('graficas') || Route::is('graficasImagenes'))
            <a href="{{url('admin/graficas/imagenes')}}" class="pl-3 pr-5">Imagenes</a>
        @endif
       
    </div>
</div>