<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de contact</title>
</head>
<body>
    <h1> CONTACT </h1>
    <p> Do you want to contact us ? </br>
    Please complete the form below. We will answer you as soon as possible!</p>
    
    <form action="thanks.php" method="post">
        
        <div>
            <label for="name">Firstname / Lastname&nbsp; :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">E-mail&nbsp; :</label>
            <input type="email" id="email" name="user_mail">
        </div>
        <div>
            <label for="phone">Phone number : </label>
            <input type="tel" id="phone" name="user_phone">
        </div>
        <div>
            <label for="subject"> Choose a subject : </label>
            <select name="about" id="about">
                <option value="identification">Identification</option>
                <option value="password">Password</option>
                <option value="change">Change mail</option>
                <option value="paiement">Paiement</option>
                <option value="another">Another</option>
        </div>
        <div>
            <label for="msg">Message : </label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Send your message</button>
        </div>
    </form>

</body>
</html>