<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thank You</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            overflow: hidden;
        }

        /* floating circles */

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            animation: float 6s infinite ease-in-out;
        }

        .circle1 {
            width: 200px;
            height: 200px;
            top: 10%;
            left: 5%;
        }

        .circle2 {
            width: 150px;
            height: 150px;
            bottom: 10%;
            right: 10%;
            animation-delay: 2s;
        }

        @keyframes float {
            0% {
                transform: translateY(0px)
            }

            50% {
                transform: translateY(-20px)
            }

            100% {
                transform: translateY(0px)
            }
        }

        /* card */

        .thankyou-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 60px 50px;
            border-radius: 20px;
            text-align: center;
            max-width: 520px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
            animation: fadeUp 1s ease;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* icon */

        .success-icon {
            width: 90px;
            height: 90px;
            margin: auto;
            background: #28a745;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin-bottom: 25px;
            animation: pop 0.6s ease;
        }

        @keyframes pop {
            0% {
                transform: scale(0)
            }

            100% {
                transform: scale(1)
            }
        }

        h1 {
            font-size: 40px;
            margin-bottom: 10px;
            color: #222;
        }

        p {
            color: #666;
            font-size: 18px;
            margin-bottom: 35px;
        }

        /* buttons */

        .buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-home {
            background: #4facfe;
            color: #fff;
        }

        .btn-home:hover {
            background: #2f80ed;
        }

        .btn-contact {
            border: 2px solid #4facfe;
            color: #4facfe;
        }

        .btn-contact:hover {
            background: #4facfe;
            color: #fff;
        }
    </style>

</head>

<body>

    <div class="circle circle1"></div>
    <div class="circle circle2"></div>

    <div class="thankyou-card">

        <div class="success-icon">
            <i class="fa-solid fa-check"></i>
        </div>

        <h1>Thank You!</h1>

        <p>
            Your submission has been received successfully.
            Our team will get back to you shortly.
        </p>

        <div class="buttons">
            <a href="index.php" class="btn btn-home">Back to Home</a>
            <!-- <a href="#" class="btn btn-contact">Contact Us</a> -->
        </div>

    </div>

</body>

</html>