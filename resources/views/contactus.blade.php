@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
<body>
    <div class>
      <h3>Contact Us</h3>
      <hr>
      <form method="POST" action="">
        <input type="hidden" id="token">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name"  class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email"  class="form-control">
        </div>
        <div class="form-group">
            <label>Message</label><br>
            <textarea name="message" rows="10" cols="50" class="form-control" id="message"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="myButton">Submit</button>
        </div>
       </form>
</body>
</html>


@endsection