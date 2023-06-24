<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form {
            margin-top: 10%;
            margin-left: 40%;
        }

        h1 {
            text-align: center;
        }

        #redColor {
            color: red;
        }

        #btn-submit {
            margin-top: 20px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="https://malsup.github.io/jquery.form.js"></script>

    <script>
        // wait for the DOM to be loaded 
        $(document).ready(function() {
            // bind 'myForm' and provide a simple callback function 
            $('#myForm').ajaxSubmit({
                url: 'login.php',
                type: "POST"
            });
        });
    </script>

</head>