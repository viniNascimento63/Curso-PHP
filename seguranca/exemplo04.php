<html>

<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <h1>Testando reCaptcha</h1>
    <form action="cadastro.php" method="POST">
        <div class="g-recaptcha" data-sitekey="6LedZ58pAAAAALrMpOrzWG6JcqEA46VcTIRI_i7o"></div>
        <br />
        <input type="email" name="inputEmail">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>