<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
</head>
<body>
    <h1>Hello word</h1>
    <?php //echo $event1 . '</br> ' . $event2 . ' ' .$event3 . '</br> ' . $event4  ?>
    <?php  //dump($event);  ?>
    <ul>
        {{-- @foreach($event as $event)
            <li>{{$event}}</li>
        @endforeach --}}
        @forelse($event as $event)
        @{{'event'}}
        @empty
        pas d evenement
        @endforelse
    </ul>
</body>
</html>
