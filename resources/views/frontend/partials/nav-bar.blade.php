<nav id="navbar" class="navbar">
    <ul>
      <li><a href="{{ route('home')}}" class="active">Home</a></li>
      <li><a href="{{ route('aboutus')}}">About</a></li>
      <li><a href="{{ route('services')}}">Work</a></li>
      <li><a href="{{ route('teams')}}">Member</a></li>
      <li><a href="{{ route('news')}}">News</a></li>
      
      <li><a href="{{ route('contact')}}">Contact</a></li>

      <li><a href="{{ route('join.lions')}}"style='background-color:black;color:white;padding:10px; margin-left:10px'>Join Us/Register</a></li>
      <li><a href="{{ route('login')}}"style='background-color:black;color:white;padding:10px; margin-left:10px'>Login</a></li>
    </ul>
  </nav>

  @if(session('success'))
  <div class="alert alert-success text-center" role="alert">
    {{ session('success')}}
  </div>
  @endif

  @if(session('error'))
  <div class="alert alert-danger text-center" role="alert">
    {{ session('error')}}
  </div>
  @endif