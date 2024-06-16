<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <title>AluminiNet</title>
    
    <!-- Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("new/fontawesome_free_6_5_1_web/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("new/style.css") }}">
</head>

<body>
    <style>
        .copy-container {
            display: flex;
            align-items: center;
        }
        .copy-icon {
            margin-left: 10px;
            cursor: pointer;
            color: #007bff;
        }
    </style>
    <!-- Header -->
    <nav>
        <div class="container">
            <h2 class="logo">
                AluminiNet
            </h2>
            <div class="search-bar">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Search for">
            </div>
           
            <div class="create">
                <div class="profile-picture">
                    <img src="{{ asset("new/images/uac.jpg") }}" alt="User Profile">
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="col-8 text-center offset-md-2">
            <form action="">
                <div class="form-group copy-container">
                    <label for="">Lien de la reunion</label>
                    <input type="text" id="myInput" class="form-control"value="{{ $contact->lien }}" readonly>
                    <i class="fa fa-copy copy-icon" onclick="copyToClipboard()"></i>
                </div>
                <div class="form-group"class="form-control">
                    <label for="">Heure</label>
                    <input type="text" class="form-control" value="{{ $contact->time }}" readonly>
                </div>
            </form>
               <a href="/index" class="bg-success text-white p-2 px-3" style="border-radius:15px">back</a>
         </div>

    </main>
     
    <!-- Javascript links -->
    <script src="{{ asset("new/main.js") }}"></script>
</body>
</html>
<script>
    function copyToClipboard() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Texte copié: " + copyText.value);
    }
</script>