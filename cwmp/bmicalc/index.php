<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMI Calculator</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    #calculator {
        background-color: #e5f3f3;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    input[type="number"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        width: calc(100% - 20px);
        padding: 12px;
        border: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    #result {
        margin-top: 20px;
        font-size: 18px;
    }

    p {
        margin-top: 10px;
        color: #333;
    }
</style>
</head>
<body>
<div id="calculator">
    <h2>BMI Calculator</h2>
    <label for="weight">Weight (kg):</label>
    <input type="number" id="weight" placeholder="Enter your weight" required>
    <label for="height">Height (cm):</label>
    <input type="number" id="height" placeholder="Enter your height" required>
    <button onclick="calculateBMI()">Calculate</button>
    <div id="result"></div>
</div>

<script>
    function calculateBMI() {
        var weight = parseFloat(document.getElementById('weight').value);
        var height = parseFloat(document.getElementById('height').value) / 100; // convert height to meters
        var bmi = weight / (height * height);
        var result = document.getElementById('result');

        if (!isNaN(bmi)) {
            result.innerHTML = '<h3>Your BMI is: ' + bmi.toFixed(2) + '</h3>';
            if (bmi < 18.5) {
                result.innerHTML += '<p>You are underweight.  try soya chunk salad </p>';
            } else if (bmi >= 18.5 && bmi < 25) {
                result.innerHTML += '<p>Your weight is normal.</p>';
            } else if (bmi >= 25 && bmi < 30) {
                result.innerHTML += '<p>You are overweight.</p>';
            } else {
                result.innerHTML += '<p>You are obese.</p>';
            }
        } else {
            result.innerHTML = '<p>Please enter valid input.</p>';
        }
    }
</script>
</body>
</html>
