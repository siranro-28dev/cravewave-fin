<!DOCTYPE html>
<html>
  <head>
    <title>Daily Calorie Intake Tracker</title>
  </head>
  <body>
    <h1>Daily Calorie Intake Tracker</h1>
    <form action="" method="post">
      <label for="calories">Daily Calorie Intake:</label>
      <input type="number" id="calories" name="calories" required><br><br>
      <label for="food-habits">Food Habits:</label>
      <textarea id="food-habits" name="food-habits" required></textarea><br><br>
      <label for="activity-level">Daily Activity Level:</label>
      <select id="activity-level" name="activity-level" required>
        <option value="">Select Activity Level</option>
        <option value="Sedentary">Sedentary</option>
        <option value="Moderately Active">Moderately Active</option>
        <option value="Very Active">Very Active</option>
      </select><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>