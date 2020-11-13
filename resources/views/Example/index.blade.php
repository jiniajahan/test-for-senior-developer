<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content{
            border: 1px solid;
            margin: 20px 0;
            padding: 30px;
            background-color: #e7e3de;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 content" id="sort-content">
                <h2>Array Sort Function Example</h2>
                <button onclick="sortFunction()">Try it</button>
                <p id="sort"></p>
                <p>The sort() method sorts an array alphabetically.</p>
            </div>
            <div class="col-md-12 content" id="foreach-content">
                <h2>Array Foreach Function Example</h2>
                <p id="foreach"></p>
                <p>List all array items, with keys and values:</p>
            </div>
            <div class="col-md-12 content" id="filter-content">
                <h2>Array Filter Function Example</h2>
                <button onclick="filterFunction()">Try it</button>
                <p id="filter"></p>
                <p>Get the salary above 10000</p>
            </div>
            <div class="col-md-12 content" id="map-content">
                <h2>Array Map Function Example</h2>
                <p id="map"></p>
                <p>Multiply every element in the array with 10:</p>
            </div>
            <div class="col-md-12 content" id="reduce-content">
                <h2>Array Reduce Function Example</h2>
                <p>Click the button to get the sum of the rounded numbers in the array.</p>
                <button onclick="myFunction()">Try it</button>
                <p>Sum of numbers in array: <span id="reduce"></span></p>

            </div>
        </div>
    </div>

    <script>
        var fruits = ["Banana", "Orange", "Apple", "Mango"];
        document.getElementById("sort").innerHTML = fruits;
        function sortFunction() {
          fruits.sort();
          document.getElementById("sort").innerHTML = fruits;
        }
    </script>
    <script>
        var fruits = ["apple", "orange", "cherry"];
        fruits.forEach(foreachFunction);
        function foreachFunction(item, index) {
            document.getElementById("foreach").innerHTML += index + ":" + item + "<br>";
        }
    </script>
    <script>
        var salaries = [10000, 12000, 8000, 4000];
        function checkAdult(salary) {
        return salary >= 10000;
        }
        function filterFunction() {
        document.getElementById("filter").innerHTML = salaries.filter(checkAdult);
        }
    </script>
    <script>
        var numbers = [65, 44, 12, 4];
        var newarray = numbers.map(myFunction)
        function myFunction(num) {
        return num * 10;
        }
        document.getElementById("map").innerHTML = newarray;
    </script>
    <script>
        var numbers = [15.5, 2.3, 1.1, 4.7];

        function getSum(total, num) {
          return total + Math.round(num);
        }
        function myFunction(item) {
          document.getElementById("reduce").innerHTML = numbers.reduce(getSum, 0);
        }
        </script>
</body>
</html>
