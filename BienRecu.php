<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BienRecu</title>
</head>

<body>
    <h1>Welcome !</h1>
    <p id="placeHolderNom"></p>
    <p id="prenom"></p>
    <p id="PlaceHolderEmail"></p>
    <p id="phone"></p>
    <p id="Subject"></p>
    <p id="Msg"></p>
    <p id="role"></p>
    <script>
        var userrecup = JSON.parse(localStorage.user);
        document.getElementById("placeHolderNom").innerHTML = "Nom =" + userrecup.name
        document.getElementById("prenom").innerHTML = "Prenom =" + userrecup.lastname
        document.getElementById("PlaceHolderEmail").innerHTML = "Email =" + userrecup.email
        document.getElementById("Subject").innerHTML = "Objet =" + userrecup.objet
        document.getElementById("Msg").innerHTML = "Message =" + userrecup.msg
        document.getElementById("role").innerHTML = "role =" + userrecup.role
    </script>
</body>

</html>