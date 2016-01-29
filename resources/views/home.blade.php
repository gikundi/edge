<html>
    <body>
        
         @foreach($user as $user )
         
         
        <h1> Welcome {{$user->email}}</h1>


       @endforeach

    </body> 
</html>