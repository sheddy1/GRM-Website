<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Grieviance Succesful</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p><h3>{{ $details['body']}}</h3></p>
    <h3>Your Tracking number is: {{ $details['track'] }}</h3>

    <h3>Details of Grieviance</h3>
    <h4>Zone : {{ $details['zone'] }}</h4>
    <h4>State : {{ $details['state'] }}</h4>
    <h4>LGA : {{ $details['lga'] }}</h4>
    <h4>Ward : {{ $details['ward'] }}</h4>
    <h4>Community : {{ $details['community'] }}</h4>
    <h4>Are you a beneficiary : {{ $details['ben'] }}</h4>
    <h4>Name : {{ $details['name'] }}</h4>
    <h4>Gender : {{ $details['gender'] }}</h4>
    <h4>Age : {{ $details['age'] }}</h4>
    <h4>Phone : {{ $details['phone'] }}</h4>
    <h4>Email : {{ $details['email'] }}</h4>
    <h4>Grieviance Description : {{ $details['desc'] }}</h4>
    <h4>Grieviance Category : {{ $details['category'] }}</h4>
    <h4>Grieviance Sub Category : {{ $details['subcat'] }}</h4>
    <h4>Grieviance Complaint Mode : {{ $details['cmode'] }}</h4>
    <h4>Has this grieviance been resolved : {{ $details['resolved'] }}</h4>
    <h4>Comment on the Resolved grieviance : {{ $details['rescomment'] }}</h4>

    <h3>PLease feel free to register your grieviances with nassco at any time</h3>
</body>
</html>
