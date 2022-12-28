<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"       
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
       crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h1>Register Now</h1>
    <form action="{{url('/')}}/form" method="post">
        @csrf
     <div class="container"> 
        <x-form-input label="Enter Your Name: " name="name" type="text"/>
        <x-form-input label="Enter Your Email: " name="email" type="text"/>
        <x-form-input label="Enter Your Password: " name="password" type="password"/>
        <x-form-input label="Confirm Password: " name="password_confirmation" type="password"/>
        <x-form-input label="Enter your DOB: " name="dob" type="date"/>
        <label for="Male">Gender:&nbsp;&nbsp;</label>
          <input type="radio" id="Male" name="gender" value="M">
          <label for="Male">Male&nbsp;&nbsp;</label>
          <input type="radio" id="Female" name="gender" value="F">
          <label for="Female">Female&nbsp;&nbsp;</label>
          <input type="radio" id="Other" name="gender" value="O">
          <label for="Other">Other</label><br>
        <x-form-input label="Enter your Address: " name="address" type="text"/>
        
        <button>Submit</button>
     </div>   
    </form>
</body>
</html>