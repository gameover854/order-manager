<!DOCTYPE html>
<html>
    <head>
        <title>Có đơn hàng mới</title>
    </head>
    <style type="text/css">
    td,th {
    border: 1px solid black;
    padding: 5px;
    margin:0px;
    }
    </style>
    <body>
        <h1><p>ĐƠN HÀNG MỚI !</p></h1>
        <br>
        <p>Thông tin đơn hàng :</p>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tổng hóa đơn</th>
                    <th>Ghi chú</th>
                    <th>Phương thức thanh toán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->username }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->address. ($order->district ? ' - '.$order->district : ' ').($order->province ? ' - '.$order->province : '') }}</td>
                    <td>{{ number_format($order->total) }} đ</td>
                    <td>{{ $order->order_note }}</td>
                    <td>{{ $order->paymentMethod->key }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <p>Sản phẩm đặt mua :</p>
        <br>
           <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                </tr>
            </thead>
            @foreach($order->orderItems as $orderItem)
            <tbody>
                <tr>
                    <td>{{ $orderItem->product->name }}</td>
                    <td>{{ $orderItem->quantity }}</td>
                    <td>{{ number_format($orderItem->price) }} đ</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </body>
</html>
