@extends('workspace.layout.main')

@section('workspace-main-menu')

    @if(Auth::user()->role == "hod")
    <li>
        <a href="#">
            <i class="icon fa fa-file-text"></i>
            <p class="name">Subjects</p>
          </a>
    </li>
    @endif
    <li>
        <a href="#">
            <i class="icon fa fa-file-text"></i>
            <p class="name">Assingments</p>
        </a>
    </li>
@stop
