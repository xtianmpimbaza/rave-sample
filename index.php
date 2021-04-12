<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rave integration example</title>
    <style>
        h1{
            text-align: center;
        }

        input[type=email],input[type=text]{
            width: 95%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<div class="card">
    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Denim Jeans" style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">UGX 3000</p>
    <form action="">
        <input type="hidden" id="amount" name="amount" value="3000">
        <input type="email" id="email" name="email" placeholder="email" value="autosoftug@gmail.com">
        <input type="text" id="phone" placeholder="phone number" name="phone" value="0785027325">

        <p><button type="submit" id="submit">Buy Now</button></p>
    </form>


</div>
<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script src="js/script.js"></script>
</body>
</html>