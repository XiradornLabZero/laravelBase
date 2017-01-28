<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
    </head>
    <body>
        <!-- Questa parte viene ottenuta SENZA il blade ma solo con estensione php -->
        <!-- <h1>Salve questa è una pagina di <?php echo $var1; ?></h1>
        <h1>Salve questa è una pagina di <?php echo $var2; ?></h1>
        <h1>Salve questa è una pagina di <?php echo $var3; ?></h1> -->

        <h1>Salve questa è una pagina di {{ $var1 }}</h1>
        <h1>Salve questa è una pagina di {{ $var2 }}</h1>
        <h1>Salve questa è una pagina di {{ $var3 }}</h1>
        <!-- Si può usare anche il normale php -->
        <h1>Salve questa è una pagina di <?php echo $var2; ?></h1>

        <hr>

        <!-- Normale Php -->
        <!-- <?php if($var1 == 'hamburger'): ?>
            <h2>Well i eat {{ $var1 }}</h2>
        <?php endif; ?> -->

        <!-- Blade -->
        @if($var1 == 'hamburger')
            <h2>Well i eat {{ $var1 }}</h2>
        @endif

        <hr>

        <ul>
            <!-- Senza Blade -->
            <!-- <?php foreach ($orders as $order) : ?>
                <li><?php echo $order->name; ?></li>
            <?php endforeach; ?> -->

            @foreach($orders as $order)
                <li>{{ $order->name }}</li>
            @endforeach
        </ul>

    </body>
</html>
