<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Customer Details</title>
    </head>
    <body>
        <!-- <?php
        // $customer = Customer::find($id); // Not used usually into views because logic stuff
        echo $customer->name;

        echo "<ul>";
        foreach ($customer->orders as $order) {
            echo "<li>{$order->name}</li>";
        }
        echo "</ul>";
        ?> -->
        <!-- Better with a Blade Syntax -->
        <h1>{{ $customer->name }}</h1>

        <ul>
            @foreach ($customer->orders as $order)
                <li>{{ $order->name }}</li>
            @endforeach
        </ul>
    </body>
</html>
