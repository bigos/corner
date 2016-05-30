@extends('layouts.app')

@section('content')


  This is my /resources/views/projects/index.blade.php file!

  <p>Hello, <?php echo $contact_messages; ?></p>
  <ul>
  @foreach( $contact_messages as $msg )

    <li>
      {{ $msg->id }}
    </li>
    <li>
      {{ $msg->subject }}
    </li>
    <li>
      {{ $msg->message }}
    </li>
    <li>
      {{ $msg }}
    </li>
    <hr>
  @endforeach
  </ul>
@endsection
