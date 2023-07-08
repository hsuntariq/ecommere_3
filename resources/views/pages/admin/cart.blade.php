<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot/>
    <title>Cart</title>
</head>
<body>
   <table class="table">
    <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>image</th>
        <th>Buyer</th>
        <th>email</th>
    </thead>
    <tbody>
        <tr>
            <td>{{$cartData['name']}}</td>
            <td>{{$cartData['price']}}</td>
            <td>{{$cartData['quantity']}}</td>
            <td><img width="50px" src="{{asset('storage/' . $cartData['image'])}}" alt=""></td>
            <td>{{$details['name']}}</td>
            <td>{{$details['email']}}</td>

        </tr>
    </tbody>
   </table>
</body>
</html>