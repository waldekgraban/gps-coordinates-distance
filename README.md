# GPS Coordinates Distance
Get the distance between two GPS coordinates in kilometers or miles.

A very simple example of the available distance between two GPS points in decimal format.
We create two objects of the Point class and calculate the distance between them.  
  
Just enter the coordinates:

    $point_a = new Point(54.406745, 18.666948);
    $point_b = new Point(49.251006, 19.934036);

If you want the result in kilometers, just set true. Otherwise you will receive miles.

    $result = getDistance($point_a, $point_b, $kilometers = true);

That's all - we get the distance in a variable **$result** .

