<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="" method="post">
    @csrf
    <p>
        <input type="text" name="productDesc" placeholder="Mô tả sản phẩm ">
    </p>
    <p>
        <input type="number" name="listPrice" placeholder="Giá sản phẩm ">
    </p>
    <p>
        <input type="number" name="discountPercent" placeholder="Giá chiết khấu ">
    </p>
    <p>
            <button type="submit">Calculator</button>
    </p>
</form>
</body>
</html>
