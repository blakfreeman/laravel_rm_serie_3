@extends("template.main")
@section('content')
@include("partials.navigation")
    <h1>
        @if (url()->getRequest()->path() == "laRoute")
          Je suis une route
          @else
          Je suis une fausse route
        @endif
  </h1>
    <h1>
        @if (url()->getRequest()->path() == "laRoutine en Belgiue")
          Je suis une route
          @else
          Je suis une fausse route
        @endif
  </h1>
    <br>
    <br>
    <br>
@include("partials.footer")
@endsection
