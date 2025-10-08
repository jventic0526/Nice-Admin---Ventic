<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Application Form</title>
</head>
<body>

  <h1>Loan Application Form</h1>

  <form action="/submit-loan" method="POST">
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" required><br><br>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="loanAmount">Loan Amount (in USD):</label>
    <input type="number" id="loanAmount" name="loanAmount" required><br><br>

    <label for="loanTerm">Loan Term (in months):</label>
    <input type="number" id="loanTerm" name="loanTerm" required><br><br>

    <label for="income">Monthly Income (in USD):</label>
    <input type="number" id="income" name="income" required><br><br>

    <label for="address">Residential Address:</label><br>
    <textarea id="address" name="address" rows="4" required></textarea><br><br>

    <label for="purpose">Purpose of Loan:</label><br>
    <textarea id="purpose" name="purpose" rows="4" required></textarea><br><br>

    <label for="agree">
      <input type="checkbox" id="agree" name="agree" required> I agree to the terms and conditions.
    </label><br><br>

    <button type="submit">Submit Application</button>
  </form>

</body>
</html>
